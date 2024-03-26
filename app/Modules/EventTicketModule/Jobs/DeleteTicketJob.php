<?php

namespace App\Modules\EventTicketModule\Jobs;

use App\Models\EventTicket;
use Laranex\NextLaravel\Cores\Job;

class DeleteTicketJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private readonly int $eventTicketId)
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
        $eventTicket = EventTicket::findOrFail($this->eventTicketId);
        $eventTicket->delete();
    }
}
