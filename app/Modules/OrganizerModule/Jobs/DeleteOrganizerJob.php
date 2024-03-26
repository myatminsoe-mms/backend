<?php

namespace App\Modules\OrganizerModule\Jobs;

use App\Models\Organizer;
use Illuminate\Support\Facades\Storage;
use Laranex\NextLaravel\Cores\Job;

class DeleteOrganizerJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private readonly int $organizerId)
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
        $organizer = Organizer::findOrFail($this->organizerId);
        //if ($organizer->avatar) {
        //    $file = 'public/avatars/' . $organizer->getAttributes()['avatar'];
        //    Storage::exists($file) ? Storage::delete($file) : null;
        //}
        $organizer->update([
            'organizer_status' => 'INACTIVE',
        ]);

        //return $organizer->delete();
    }
}
