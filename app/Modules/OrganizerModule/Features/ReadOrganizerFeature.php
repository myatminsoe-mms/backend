<?php

namespace App\Modules\OrganizerModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\OrganizerModule\Jobs\ReadOrganizerJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class ReadOrganizerFeature extends Feature
{
    public function __construct(private readonly int $organizerId)
    {
    }

    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(): JsonResponse
    {
        $organizer = $this->run(new ReadOrganizerJob($this->organizerId));

        return JsonResponder::success('Organizer has been successfully retrieved', $organizer);
    }
}
