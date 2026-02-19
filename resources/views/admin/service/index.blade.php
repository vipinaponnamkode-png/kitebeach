@extends('admin.layout')

@section('content')

<div class="page-header">
    <h2>🌊 All Services</h2>
    <a href="{{ route('admin.service.create') }}" class="btn-primary">
        + Add Service
    </a>
</div>

@if(session('success'))
    <div class="alert-box success">
        {{ session('success') }}
    </div>
@endif

<div class="table-card">

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Guest</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Food</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($services as $service)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><strong>{{ $service->title }}</strong></td>
                    <td>{{ $service->guest_limit ?? '-' }}</td>
                    <td>{{ $service->duration ?? '-' }}</td>
                    <td>₹ {{ number_format($service->price, 2) }}</td>
                    <td>
                        @if($service->food_negotiable)
                            <span class="badge yes">Yes</span>
                        @else
                            <span class="badge no">No</span>
                        @endif
                    </td>
                    <td class="action-buttons">

    <a href="{{ route('admin.service.edit', $service->id) }}"
       style="display:inline;">
        @csrf
        @method('EDIT')
        <button class="btn-edit">Edit</button>
    </a>

    <form action="{{ route('admin.service.destroy', $service->id) }}"
          method="POST"
          onsubmit="return confirm('Are you sure?')"
          style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn-danger">Delete</button>
    </form>

</td>

                </tr>
            @empty
                <tr>
                    <td colspan="7" class="empty">No services found.</td>
                </tr>
            @endforelse
        </tbody>

    </table>

</div>

<div class="pagination">
    {{ $services->links() }}
</div>

@endsection
