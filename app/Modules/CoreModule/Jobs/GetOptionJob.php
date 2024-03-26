<?php

namespace App\Modules\CoreModule\Jobs;

use App\Helpers\StringUtility;
use App\Models\Ability;
use App\Models\Category;
use App\Models\Organizer;
use App\Models\Role;
use App\Models\Tag;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Laranex\NextLaravel\Cores\Job;

class GetOptionJob extends Job
{
    /**
     * Create a new job instance.
     */
    public function __construct(private readonly string $key)
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Request $request)
    {
        $page = $request->input('current_page');
        $perPage = $request->input('per_page');
        $data = [];
        switch ($this->key) {
            case 'ability':
                $data['data'] = Ability::select('id', 'action', 'subject')
                    ->get()
                    ->groupBy('subject')
                    ->map(function ($item) {
                        return $item->map(function ($t) {
                            return [
                                'id' => $t->id,
                                'action' => $t->action,
                                'subject' => $t->subject,
                                'action_name' => StringUtility::snakeCaseToTitleCase($t->action),
                                'subject_name' => StringUtility::camelCaseToTitleCase($t->subject),
                            ];
                        });
                    })
                    ->toArray();
                break;
            case 'user':
                if ($perPage == 'all') {
                    $data['data'] = User::select('id', 'full_name')->get()->toArray();
                } else {
                    $data = User::select(['id', 'full_name'])->cleanPaginate($perPage, $page);
                }
                break;
            case 'role':
                if ($perPage == 'all') {
                    $data['data'] = Role::select('id', 'name')->get()->toArray();
                } else {
                    $data = Role::select(['id', 'name'])->cleanPaginate($perPage, $page);
                }
                break;
            case 'category':
                if ($perPage == 'all') {
                    $data['data'] = Category::select('id', 'name')->get()->toArray();
                } else {
                    $data = Category::select(['id', 'name'])->cleanPaginate($perPage, $page);
                }
                break;
            case 'tag':
                if ($perPage == 'all') {
                    $data['data'] = Tag::select('id', 'name')->get()->toArray();
                } else {
                    $data = Tag::select(['id', 'name'])->cleanPaginate($perPage, $page);
                }
                break;
            case 'type':
                if ($perPage == 'all') {
                    $data['data'] = Type::select('id', 'name')->get()->toArray();
                } else {
                    $data = Type::select(['id', 'name'])->cleanPaginate($perPage, $page);
                }
                break;
            case 'organizer':
                if ($perPage == 'all') {
                    $data['data'] = Organizer::select('id', 'name')->get()->toArray();
                } else {
                    $data = Organizer::select(['id', 'name'])->where('organizer_status', 'ACTIVE')->cleanPaginate($perPage, $page);
                }
                break;
        }

        return $data;

    }
}
