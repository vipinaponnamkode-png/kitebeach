<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => ['required', 'string', 'max:255'],
            'email'      => ['required', 'email'],
            'phone'      => ['required', 'string'],
            'package'    => ['required', 'string'],
            'event_date' => ['required', 'date'],
            'guests'     => ['required', 'integer', 'min:1'],
        ]);

        Booking::create($validated);

        return back()->with('success', 'Booking submitted successfully!');
    }
}