<?php

namespace App\Modules\CoreModule\Http\Controllers;

use App\Modules\CoreModule\Features\GetOptionFeature;
use Laranex\NextLaravel\Cores\Controller;

class OptionController extends Controller
{
    public function get($key)
    {
        return $this->serve(new GetOptionFeature($key));
    }
}
