<?php

namespace App\Modules\EventTicketModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\EventTicketModule\Http\Requests\CreateEventTicketRequest;
use App\Modules\EventTicketModule\Jobs\CreateEventJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class CreateEventTicketFeature extends Feature
{
    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(CreateEventTicketRequest $request): JsonResponse
    {

        $event = $this->run(CreateEventJob::class, ['payload' => $request->validated()]);

        return JsonResponder::success('Event have been successfully created', $event);
    }
}
