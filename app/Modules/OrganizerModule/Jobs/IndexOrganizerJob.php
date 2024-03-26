<?php

namespace App\Modules\OrganizerModule\Jobs;

//use App\Helpers\DateBetween;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Laranex\NextLaravel\Cores\Job;

class IndexOrganizerJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Request $request)
    {
        $page = $request->query('current_page');
        $perPage = $request->query('per_page'); // if there is no params, all will return
        $search = $request->query('search');
        $order = $request->query('order') ?? [['column' => 'created_at', 'order' => 'desc'], ['column' => 'name', 'order' => 'asc']];
        $searchableFields = ['id', 'name', 'email', 'company_legal_name', 'company_phone', 'position'];
        $sortableFields = [
            'id', 'name', 'email', 'description', 'company_legal_name', 'position', 'company_phone', 'created_at', 'updated_at',
        ];

        //filters
        $organizerStatus = $request->get('organizer_status');

        $query = Organizer::when($organizerStatus, fn ($query) => $query->where('organizer_status', $organizerStatus));
        //$query = Organizer::purifySortingQuery($order, $sortableFields)->search($searchableFields, $search)->cleanPaginate($perPage, $page);

        return $query->purifySortingQuery($order, $sortableFields)->search($searchableFields, $search)->cleanPaginate($perPage, $page);
    }
}
