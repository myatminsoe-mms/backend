<?php

namespace App\Modules\OrganizerModule\Http\Controllers;

use App\Modules\OrganizerModule\Features\CreateOrganizerFeature;
use App\Modules\OrganizerModule\Features\DeleteOrganizerFeature;
use App\Modules\OrganizerModule\Features\IndexOrganizerFeature;
use App\Modules\OrganizerModule\Features\ReadOrganizerFeature;
use App\Modules\OrganizerModule\Features\UpdateOrganizerFeature;
use App\Modules\OrganizerModule\Features\UpdateProfileFeature;
use Laranex\NextLaravel\Cores\Controller;

class OrganizerController extends Controller
{
    public function updateProfile()
    {
        return $this->serve(new UpdateProfileFeature());
    }

    public function index()
    {
        return $this->serve(new IndexOrganizerFeature());
    }

    public function create()
    {
        return $this->serve(new CreateOrganizerFeature());
    }

    public function read($id)
    {
        return $this->serve(new ReadOrganizerFeature($id));
    }

    public function update($id)
    {
        return $this->serve(new UpdateOrganizerFeature($id));
    }

    public function delete($id)
    {
        return $this->serve(new DeleteOrganizerFeature($id));
    }
}
