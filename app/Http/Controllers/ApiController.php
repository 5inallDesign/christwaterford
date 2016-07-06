<?php

namespace christwaterford\Http\Controllers;

use Illuminate\Http\Request;

use christwaterford\Http\Requests;
use christwaterford\Http\Controllers\Controller;
use Auth;
use Cache;
use Response;
use StdClass;
use christwaterford\CalendarEvent;

class ApiController extends Controller
{

    public function getIndex()
    {
        //
    }

    public function getEvents($date)
    {
        if(!$date)
            abort(400);

        $tomorrow = strtotime('+1 day', $date);
        $events = CalendarEvent::where('starts_at','>=',date("Y-m-d H:i:s", $date))
            ->where('starts_at','<',date("Y-m-d H:i:s", $tomorrow))
            ->orderBy('starts_at')
            ->orderBy('is_all_day')
            ->get();

        foreach ($events as $event) {
            $event->starts_at_date_formatted = date('n/j/Y',strtotime($event->starts_at));
            $event->starts_at_time_formatted = date('g:ia',strtotime($event->starts_at));
            $event->ends_at_date_formatted = date('n/j/Y',strtotime($event->ends_at));
            $event->ends_at_time_formatted = date('g:ia',strtotime($event->ends_at));
        }

        return json_encode($events);
    }
}