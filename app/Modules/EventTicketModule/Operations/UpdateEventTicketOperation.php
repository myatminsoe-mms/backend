<?php

namespace App\Modules\EventTicketModule\Operations;

use App\Modules\EventTicketModule\Jobs\UpdateEventJob;
use App\Modules\EventTicketModule\Jobs\UpsertTicketJob;
use Laranex\NextLaravel\Cores\Operation;

class UpdateEventTicketOperation extends Operation
{
    /**
     * Create a new operation instance.
     *
     * @return void
     */
    public function __construct(private array $payload, private readonly int $eventId)
    {
        //
    }

    /**
     * Execute the operation.
     *
     * @return void
     */
    public function handle()
    {
        $payload = collect($this->payload);
        $eventUpdatePayload = $payload->except(['event_tickets'])->toArray();

        $eventTickets = optional($payload)['event_tickets'];
        $event = $this->run(new UpdateEventJob($eventUpdatePayload, $this->eventId)); // first logout all user sessions
        if ($eventTickets) {
            $ticketUpdatePayload = $payload['event_tickets'];
            $this->run(new UpsertTicketJob($ticketUpdatePayload, $this->eventId));
        }

        return $event;
    }
}
