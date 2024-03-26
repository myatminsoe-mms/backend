<?php

namespace App\Modules\CoreModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\CoreModule\Jobs\GetOptionJob;
use Arr;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class GetOptionFeature extends Feature
{
    public function __construct(private readonly string $key)
    {
    }

    /**
     * Execute the feature.
     */
    public function handle(): JsonResponse
    {
        $options = $this->run(new GetOptionJob($this->key));

        return JsonResponder::success('Option data have been successfully retrieved', $options['data'], Arr::only($options, ['current_page', 'per_page', 'total']));
    }
}
