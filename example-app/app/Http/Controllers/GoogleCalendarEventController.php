<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;

class GoogleCalendarEventController extends Controller
{
    public function index() : View {
        return view('GoogleCalendar.index');
    }
}
