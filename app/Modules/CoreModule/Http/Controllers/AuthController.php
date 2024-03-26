<?php

namespace App\Modules\CoreModule\Http\Controllers;

use App\Modules\CoreModule\Features\LoginFeature;
use App\Modules\CoreModule\Features\LogoutAllFeature;
use App\Modules\CoreModule\Features\LogoutFeature;
use Illuminate\Support\Facades\Auth;
use Laranex\NextLaravel\Cores\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return $this->serve(new LoginFeature());
    }

    public function logout()
    {
        return $this->serve(new LogoutFeature());
    }

    public function logoutAll()
    {
        // Logout of all sessions
        return $this->serve(new LogoutAllFeature(Auth::id()));
    }
}
