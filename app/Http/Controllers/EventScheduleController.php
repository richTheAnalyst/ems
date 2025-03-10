<?php

namespace App\Http\Controllers;

use App\Models\EventSchedule;
use Illuminate\Http\Request;

class EventScheduleController extends Controller
{
    public function index()
    {
        return EventSchedule::paginate(10);
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

        return EventSchedule::create($validated);
    }

    public function show(EventSchedule $eventSchedule)
    {
        return $eventSchedule;
    }

    public function update(Request $request, EventSchedule $eventSchedule)
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

        $eventSchedule->update($validated);
        return $eventSchedule;
    }

    public function destroy(EventSchedule $eventSchedule)
    {
        $eventSchedule->delete();
        return response()->noContent();
    }
}