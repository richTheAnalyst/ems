<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class Ticket_Controller extends Controller
{
    public function index()
    {
        return Ticket::with('event')->paginate(10);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1', 
            'valid_until' => 'required|date',
            'status' => 'required|string',
        ]);

        return Ticket::create($validated);
    }

    public function show(Ticket $ticket)
    {
        return $ticket->load('event');
    }

    public function update(Request $request, Ticket $ticket)
    {
        $validated = $request->validate([
            'event_id' => 'exists:events,id',
            'type' => 'string|max:255',
            'price' => 'numeric|min:0',
            'quantity' => 'integer|min:1',
            'valid_until' => 'date',
            'status' => 'string',
        ]);

        $ticket->update($validated);
        return $ticket;
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return response()->noContent();
    }
}