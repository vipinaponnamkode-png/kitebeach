@extends('admin.layout')

@section('content')

<h1 style="margin-bottom:20px;">Contact Messages</h1>

@if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Status</th>
            <th>Received At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($contacts as $contact)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject ?? '—' }}</td>
                <td>
                    @if($contact->is_read)
                        <span style="color:green;">Read</span>
                    @else
                        <span style="color:red;">Unread</span>
                    @endif
                </td>
                <td>{{ $contact->created_at->format('d M Y, h:i A') }}</td>
                <td>
                    <a href="{{ route('admin.contacts.show', $contact->id) }}" 
                       class="btn-view">View</a>

                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}" 
                          method="POST" 
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                onclick="return confirm('Are you sure?')"
                                class="btn-delete">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">No contact messages found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div style="margin-top:20px;">
    {{ $contacts->links() }}
</div>

@endsection