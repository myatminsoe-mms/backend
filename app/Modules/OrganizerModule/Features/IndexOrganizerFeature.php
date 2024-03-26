<?php

namespace App\Modules\OrganizerModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\OrganizerModule\Jobs\IndexOrganizerJob;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Laranex\NextLaravel\Cores\Feature;

class IndexOrganizerFeature extends Feature
{
    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(Request $request): JsonResponse
    {
        $organizer = $this->run(new IndexOrganizerJob($request));

        return JsonResponder::success('Organizers have been successfully retrieved', $organizer['data'], Arr::only($organizer, ['current_page', 'per_page', 'total']));
    }
}
