<?php

namespace App\Modules\OrganizerModule\Jobs;

use App\Models\Organizer;
use Laranex\NextLaravel\Cores\Job;

class ReadOrganizerJob extends Job
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
        return Organizer::findOrFail($this->organizerId);
    }
}
