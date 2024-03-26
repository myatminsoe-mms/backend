<?php

namespace App\Modules\EventTicketModule\Http\Controllers;

use App\Modules\EventTicketModule\Features\CreateEventTicketFeature;
use App\Modules\EventTicketModule\Features\DeactivateEventTicketFeature;
use App\Modules\EventTicketModule\Features\IndexEventTicketFeature;
use App\Modules\EventTicketModule\Features\ReadEventTicketFeature;
use App\Modules\EventTicketModule\Features\UpdateEventTicketFeature;
use Laranex\NextLaravel\Cores\Controller;

class EventController extends Controller
{
    public function index()
    {
        return $this->serve(new IndexEventTicketFeature());
    }

    public function create()
    {
        return $this->serve(new CreateEventTicketFeature());
    }

    public function read($id)
    {
        return $this->serve(new ReadEventTicketFeature($id));
    }

    public function update($id)
    {
        return $this->serve(new UpdateEventTicketFeature($id));
    }

    public function deactivate($id)
    {
        return $this->serve(new DeactivateEventTicketFeature($id));
    }
}
