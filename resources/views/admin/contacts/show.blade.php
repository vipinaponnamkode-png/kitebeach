@extends('admin.layout')

@section('content')

<h1>Contact Message Details</h1>

<div class="card">
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone ?? '—' }}</p>
    <p><strong>Event:</strong> {{ $contact->event ?? '—' }}</p>
    <p><strong>Subject:</strong> {{ $contact->subject ?? '—' }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contact->message }}</p>
    <p><strong>Received At:</strong> 
        {{ $contact->created_at->format('d M Y, h:i A') }}
    </p>
</div>

<a href="{{ route('admin.contacts.index') }}" class="btn-back">
    Back to Messages
</a>
@if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif

<hr>

<h3>Send Reply</h3>

<form action="{{ route('admin.contacts.reply', $contact->id) }}" method="POST">
    @csrf

    <div style="margin-bottom:15px;">
        <textarea name="reply_message" 
                  rows="6" 
                  style="width:100%;" 
                  placeholder="Write your reply here..."
                  required></textarea>
    </div>

    <button type="submit" class="btn-view">
        Send Reply
    </button>
</form>

@endsection