<?php

namespace App\Modules\EventTicketModule\Jobs;

use App\Models\Event;
use Laranex\NextLaravel\Cores\Job;

class DeactivateEventJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private readonly int $eventId)
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
        $event = Event::findOrFail($this->eventId);

        $event->update([
            'event_status' => 'INACTIVE',
        ]);
    }
}
