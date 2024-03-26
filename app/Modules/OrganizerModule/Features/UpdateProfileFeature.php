<?php

namespace App\Modules\OrganizerModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\OrganizerModule\Http\Requests\UpdateOrganizerRequest;
use App\Modules\OrganizerModule\Jobs\UpdateOrganizerJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class UpdateProfileFeature extends Feature
{
    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(UpdateOrganizerRequest $request): JsonResponse
    {
        $organizer = $this->run(new UpdateOrganizerJob($request->validated(), $request->organizer()->id));

        return JsonResponder::success('Profile information updated successfully', $organizer);
    }
}
