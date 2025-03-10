<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Mail\BookingConfirmation;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "event_id" => "required|exists:events,id",
            "name" => "required|string|max:255",
            "email" => "required|string|email|max:255",
            "phone" => "required|string|max:10",
            "seats" => "required|integer|min:1",
            "gist" => "nullable|string",
        ]);
    
        $booking = Booking::create($validated);

        Log::info('Booking created', ['booking_id' => $booking->id, 'email' => $booking->email]);
    
    try {
        // Send the confirmation email
        $booking->refresh();
        Mail::to($booking->email)->send(new BookingConfirmation($booking));
        Log::info('Email sent successfully');
    } catch (\Exception $e) {
        Log::error('Failed to send email', ['error' => $e->getMessage()]);
    }
    
        return redirect()->back()->with("success", "Booking created successfully. An email confirmation has been sent to your email address");
    }
    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
