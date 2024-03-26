<?php

namespace App\Modules\EventTicketModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\EventTicketModule\Jobs\DeleteTicketJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class DeleteTicketFeature extends Feature
{
    public function __construct(private readonly int $eventTicketId)
    {
    }

    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(): JsonResponse
    {
        $eventTicket = $this->run(new DeleteTicketJob($this->eventTicketId));

        return JsonResponder::success('Ticket has been successfully deleted', $eventTicket);
    }
}
