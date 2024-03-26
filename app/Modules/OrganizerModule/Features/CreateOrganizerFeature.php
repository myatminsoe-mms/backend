<?php

namespace App\Modules\OrganizerModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\OrganizerModule\Http\Requests\CreateOrganizerRequest;
use App\Modules\OrganizerModule\Jobs\CreateOrganizerJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class CreateOrganizerFeature extends Feature
{
    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(CreateOrganizerRequest $request): JsonResponse
    {

        $organizer = $this->run(CreateOrganizerJob::class, ['payload' => $request->validated()]);

        return JsonResponder::success('Organizer have been successfully created', $organizer);
    }
}
