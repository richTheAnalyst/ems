<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return Registration::with(['user', 'event', 'ticket'])->paginate(10);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'event_id' => 'required|exists:events,id',
            'ticket_id' => 'required|exists:tickets,id',
            'status' => 'required|string',
            'payment_status' => 'required|string',
        ]);

        return Registration::create($validated);
    }

    public function show(Registration $registration)
    {
        return $registration->load(['user', 'event', 'ticket']);
    }

    public function update(Request $request, Registration $registration)
    {
        $validated = $request->validate([
            'user_id' => 'exists:users,id',
            'event_id' => 'exists:events,id',
            'ticket_id' => 'exists:tickets,id',
            'status' => 'string',
            'payment_status' => 'string',
        ]);

        $registration->update($validated);
        return $registration;
    }

    public function destroy(Registration $registration)
    {
        $registration->delete();
        return response()->noContent();
    }
}