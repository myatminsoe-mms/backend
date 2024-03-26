<?php

namespace App\Modules\OrganizerModule\Jobs;

use App\Helpers\FileStorageHelper;
use App\Models\Organizer;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laranex\NextLaravel\Cores\Job;

class UpdateOrganizerJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private array $payload, private readonly int $organizerId)
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
        $updatePayload = $payload->except(['avatar', 'avatar_updated'])->toArray();
        $organizer = Organizer::findOrFail($this->organizerId);
        $avatarUpdated = filter_var($payload->get('avatar_updated'), FILTER_VALIDATE_BOOLEAN);
        if ($avatarUpdated) {
            if ($organizer->getAttributes()['avatar']) {
                // deleting old avatar file
                $old_file = '/public/' . $organizer->getAttributes()['avatar'];
                Storage::exists($old_file) ? Storage::delete($old_file) : null;
            }
            if ($payload->get('avatar') && $payload->get('avatar') instanceof UploadedFile) {

                // Resize the image to add later

                $fileUrl = FileStorageHelper::singleUpload($payload->get('avatar'), auth()->user()->id);
                $urlParts = parse_url($fileUrl);
                $path = isset($urlParts['path']) ? ltrim($urlParts['path'], '/') : '';
                $updatePayload['avatar'] = $path;
            }
        }

        $organizer->update($updatePayload);

        return $organizer;
    }
}
