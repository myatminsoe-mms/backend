<?php

namespace App\Modules\EventTicketModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\EventTicketModule\Jobs\DeactivateEventJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class DeactivateEventTicketFeature extends Feature
{
    public function __construct(private readonly int $eventId)
    {
    }

    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(): JsonResponse
    {
        $event = $this->run(new DeactivateEventJob($this->eventId));

        return JsonResponder::success('Event has been successfully deactivated', $event);
    }
}
