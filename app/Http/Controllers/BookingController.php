<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name'       => 'required|string|max:255',
        'email'      => 'required|email|max:255',
        'phone'      => 'required|string|max:20',
        'package'    => 'required|string|max:255',
        'event_date' => 'required|date',
        'guests'     => 'required|integer|min:1',
    ]);

    $booking = \App\Models\Booking::create($validated);

    // Send confirmation email
    Mail::to($booking->email)->send(new BookingConfirmation($booking));

    return redirect()->back()->with(
        'success',
        'Event booked successfully! Confirmation email sent.'
    );
}
}