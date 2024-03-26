<?php

namespace App\Modules\CoreModule\Features;

use App\Helpers\JsonResponder;
use App\Modules\CoreModule\Jobs\LogoutJob;
use Illuminate\Http\JsonResponse;
use Laranex\NextLaravel\Cores\Feature;

class LogoutFeature extends Feature
{
    /**
     * Execute the feature.
     *
     * @return int
     */
    public function handle(): JsonResponse
    {
        $this->run(new LogoutJob());

        return JsonResponder::success('Logged out successfully');
    }
}
