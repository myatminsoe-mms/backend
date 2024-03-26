<?php

namespace App\Modules\EventTicketModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\EventTicketModule\Jobs\ReadEventTicketJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class ReadEventTicketFeature extends Feature
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
        $event = $this->run(new ReadEventTicketJob($this->eventId));

        return JsonResponder::success('Event has been successfully retrieved', $event);
    }
}
