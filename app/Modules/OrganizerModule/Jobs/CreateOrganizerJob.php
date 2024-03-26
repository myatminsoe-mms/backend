<?php

namespace App\Modules\OrganizerModule\Jobs;

use App\Helpers\FileStorageHelper;
use App\Models\Organizer;
use Illuminate\Http\UploadedFile;
use Laranex\NextLaravel\Cores\Job;

class CreateOrganizerJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private array $payload)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $payload = collect($this->payload);
        $createPayload = $payload->except(['avatar'])->toArray();
        if ($payload->get('avatar') && $payload->get('avatar') instanceof UploadedFile) {
            $file = FileStorageHelper::singleUpload($payload->get('avatar'), auth()->user()->id);
            $urlParts = parse_url($file);
            $path = isset($urlParts['path']) ? ltrim($urlParts['path'], '/') : '';
            $createPayload['avatar'] = $path;
        }
        $organizer = Organizer::create($createPayload);

        return $organizer;
    }
}
