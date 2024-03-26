<?php

namespace App\Modules\EventTicketModule\Jobs;

use App\Models\EventTicket;
use Event;
use Laranex\NextLaravel\Cores\Job;

class UpsertTicketJob extends Job
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
        $newTickets = $payload->toArray();

        foreach ($newTickets as $ticket) {
            $isTicketDeleted = $ticket['is_deleted'] ?? false;
            $isDeleted = filter_var($isTicketDeleted, FILTER_VALIDATE_BOOLEAN);
            if ($isDeleted) {
                $ticket = EventTicket::findOrFail($ticket['id']);
                $ticket->delete();
            } else {
                if (isset($ticket['is_deleted'])) {
                    unset($ticket['is_deleted']);
                }
                unset($ticket['ticket_status']);
                $event_ticket = EventTicket::where('id', $ticket['id'])
                            ->where('event_id', $ticket['event_id'])
                            ->first();
                if($event_ticket) {
                    unset($ticket['remaining_quantity']);
                    unset($ticket['initial_quantity']);
                    $event_ticket->update($ticket);
                } else {
                    $ticket['remaining_quantity'] = $ticket['initial_quantity'];
                    EventTicket::create($ticket);
                }
            }
        }
    }
}
