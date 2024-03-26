<?php

namespace App\Modules\EventTicketModule\Jobs;

use App\Models\Event;
use Laranex\NextLaravel\Cores\Job;

class ReadEventTicketJob extends Job
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
        return Event::with('eventTickets')->findOrFail($this->eventId);
    }
}
