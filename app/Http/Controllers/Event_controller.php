<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;  

class Event_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('events.event'); //Event::with(['user', 'venue'])->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( Request $request )
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'venue_id' => 'required|exists:venues,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'capacity' => 'required|integer|min:1',
            'status' => 'required|string',
            'price' => 'required|numeric|min:0',
            'banner_image' => 'nullable|string',
        ]);

        return Event::create($validated);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return $event->load(['user', 'venue', 'schedules', 'tickets']);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'venue_id' => 'exists:venues,id',
            'title' => 'string|max:255',
            'description' => 'string',
            'start_date' => 'date',
            'end_date' => 'date|after:start_date',
            'capacity' => 'integer|min:1',
            'status' => 'string',
            'price' => 'numeric|min:0',
            'banner_image' => 'nullable|string',
        ]);

        $event->update($validated);
        return $event;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return response()->noContent();
    }
}
