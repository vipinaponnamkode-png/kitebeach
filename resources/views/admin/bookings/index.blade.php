@extends('admin.layout')

@section('content')

<div class="page-header">
    <h2>Event Bookings</h2>
</div>

@if(session('success'))
    <div class="alert-box success">
        {{ session('success') }}
    </div>
@endif

<div class="table-card">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Package</th>
                <th>Event Date</th>
                <th>Guests</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($bookings as $booking)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->package }}</td>
                    <td>{{ \Carbon\Carbon::parse($booking->event_date)->format('d M Y') }}</td>
                    <td>{{ $booking->guests }}</td>
                    <td>
                        <div class="action-buttons">

                            <a href="{{ route('admin.bookings.show', $booking) }}"
                               class="btn-view">
                                View
                            </a>

                            <form action="{{ route('admin.bookings.destroy', $booking) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this booking?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="empty">
                        No bookings found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="pagination">
        {{ $bookings->links() }}
    </div>
</div>

@endsection