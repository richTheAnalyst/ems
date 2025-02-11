<?php

namespace App\Http\Controllers;

use App\Models\Event_Schedule;
use Illuminate\Http\Request;

class Event_Schedule_Controller extends Controller
{
    public function index()
    {
        return Event_Schedule::paginate(10);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id',
            'session_name' => 'required|string|max:255',
            'start_time' => 'required|date_format:Y-m-d H:i:s',
            'end_time' => 'required|date_format:Y-m-d H:i:s|after:start_time',
            'speaker' => 'required|string|max:255',
            'description' => 'string',
            'status' => 'required|string',
        ]);

        return Event_Schedule::create($validated);
    }

    public function show(Event_Schedule $eventSchedule)
    {
        return $eventSchedule;
    }

    public function update(Request $request, Event_Schedule $event_Schedule)
    {
        $validated = $request->validate([
            'event_id' => 'exists:events,id',
            'session_name' => 'string|max:255',
            'start_time' => 'date_format:Y-m-d H:i:s',
            'end_time' => 'date_format:Y-m-d H:i:s|after:start_time',
            'speaker' => 'string|max:255',
            'description' => 'string',
            'status' => 'string',
        ]);

        $event_Schedule->update($validated);
        return $event_Schedule;
    }

    public function destroy(Event_Schedule $event_Schedule)
    {
        $event_Schedule->delete();
        return response()->noContent();
    }
}