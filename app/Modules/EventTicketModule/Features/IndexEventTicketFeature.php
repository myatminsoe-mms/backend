<?php

namespace App\Modules\EventTicketModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\EventTicketModule\Jobs\IndexEventTicketJob;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Laranex\NextLaravel\Cores\Feature;

class IndexEventTicketFeature extends Feature
{
    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(Request $request): JsonResponse
    {
        $events = $this->run(new IndexEventTicketJob($request));

        return JsonResponder::success('Events have been successfully retrieved', $events['data'], Arr::only($events, ['current_page', 'per_page', 'total']));
    }
}
