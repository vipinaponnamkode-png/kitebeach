<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->paginate(10);

        return view('admin.bookings.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        return view('admin.bookings.show', compact('booking'));
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()
            ->route('admin.bookings.index')
            ->with('success', 'Booking deleted successfully.');
    }

            public function reply(Request $request, Booking $booking)
{
    $request->validate([
        'message' => 'required|string',
    ]);

    Mail::raw($request->message, function ($mail) use ($booking) {
        $mail->to($booking->email)
             ->subject('Regarding Your Event Booking');
    });

    return redirect()
        ->route('admin.bookings.show', $booking)
        ->with('success', 'Reply sent successfully!');
}


    }
