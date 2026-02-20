<?php
   

namespace App\Http\Controllers;

use App\Models\Contact; // ✅ IMPORTANT
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserContactController extends Controller
{
    /**
     * Show contact page
     */
    public function index()
    {
        return view('user.contact');
    }

    /**
     * Store contact message
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'phone'   => ['nullable', 'string', 'max:20'],
            'event'   => ['nullable', 'string', 'max:255'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Contact::create([
            ...$validated,
            'is_read' => false, // default unread
        ]);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
   
        //
    


