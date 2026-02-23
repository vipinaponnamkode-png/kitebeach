@extends('admin.layout')

@section('content')

<div class="page-header">
    <h2>Booking Details</h2>
</div>

<div class="form-card">

    <div class="form-grid">

        <div class="form-group">
            <label>Name</label>
            <input type="text" value="{{ $booking->name }}" readonly>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" value="{{ $booking->email }}" readonly>
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" value="{{ $booking->phone }}" readonly>
        </div>

        <div class="form-group">
            <label>Package</label>
            <input type="text" value="{{ $booking->package }}" readonly>
        </div>

        <div class="form-group">
            <label>Event Date</label>
            <input type="text"
                   value="{{ \Carbon\Carbon::parse($booking->event_date)->format('d M Y') }}"
                   readonly>
        </div>

        <div class="form-group">
            <label>Guests</label>
            <input type="text" value="{{ $booking->guests }}" readonly>
        </div>

    </div>

    <div class="form-actions">
        <a href="{{ route('admin.bookings.index') }}"
           class="btn-secondary">
            Back
        </a>
    </div>

</div>
<hr>

<h3>Send Reply</h3>

<form action="{{ route('admin.bookings.reply', $booking->id) }}" method="POST">
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