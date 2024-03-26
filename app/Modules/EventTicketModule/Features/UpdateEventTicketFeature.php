<?php

namespace App\Modules\EventTicketModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\EventTicketModule\Http\Requests\UpdateEventTicketRequest;
use App\Modules\EventTicketModule\Operations\UpdateEventTicketOperation;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Laranex\NextLaravel\Cores\Feature;

class UpdateEventTicketFeature extends Feature
{
    public function __construct(private readonly int $eventId)
    {
    }

    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(UpdateEventTicketRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try {
            $this->run(new UpdateEventTicketOperation($request->validated(), $this->eventId));
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            return JsonResponder::internalServerError('Error creating case: ' . $e->getMessage());
        }

        return JsonResponder::success('Event has been successfully updated');
    }
}
