<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Mail\ContactReplyMail;
use Illuminate\Http\Request; // ✅ ADD THIS
use Illuminate\Support\Facades\Mail; // ✅ ADD THIS

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        if (!$contact->is_read) {
            $contact->update(['is_read' => true]);
        }

        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Contact message deleted successfully.');
    }

    public function reply(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'reply_message' => ['required', 'string'],
        ]);

        Mail::to($contact->email)
            ->send(new ContactReplyMail($contact, $validated['reply_message']));

        $contact->update(['is_read' => true]);

        return redirect()
            ->route('admin.contacts.show', $contact->id)
            ->with('success', 'Reply sent successfully!');
    }
}