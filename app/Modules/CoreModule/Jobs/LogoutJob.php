<?php

namespace App\Modules\CoreModule\Jobs;

use Illuminate\Support\Facades\Auth;
use Laranex\NextLaravel\Cores\Job;

class LogoutJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Auth::user()->currentAccessToken()->delete();
    }
}
