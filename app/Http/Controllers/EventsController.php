<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        dd(Event::all()->toArray());
    }

    public function create()
    {
        Event::create([
            "name"  => "Wedding",
            "date"  => "10-10-24",
            "location" => "home"
        ]);
    }
}
