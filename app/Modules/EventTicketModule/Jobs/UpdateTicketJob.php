<?php

namespace App\Modules\EventTicketModule\Jobs;

use App\Models\EventTicket;
use Laranex\NextLaravel\Cores\Job;

class UpdateTicketJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private array $payload, private readonly int $eventId)
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
        $updatePayload = $payload->toArray();
        $eventTicket = EventTicket::findOrFail($this->eventId);

        $eventTicket->update($updatePayload);

        return $eventTicket;
    }
}
