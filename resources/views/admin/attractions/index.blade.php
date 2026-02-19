@extends('admin.layout')

@section('content')

<div class="page-header">
    <h2>🎡 All Attractions</h2>
    <a href="{{ route('admin.attractions.create') }}" class="btn-primary">
        + Add Attraction
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
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th width="150">Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($attractions as $attraction)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>
                        @if($attraction->image)
                            <img src="{{ asset('storage/' . $attraction->image) }}"
                                 width="60"
                                 height="60"
                                 style="border-radius:10px; object-fit:cover;">
                        @else
                            -
                        @endif
                    </td>

                    <td>
                        <strong>{{ $attraction->name }}</strong>
                    </td>

                    <td>
                        {{ Str::limit($attraction->description, 50) }}
                    </td>

                    <td class="action-buttons">

                        <a href="{{ route('admin.attractions.edit', $attraction->id) }}"
                           class="btn-edit">
                            Edit
                        </a>

                        <form action="{{ route('admin.attractions.destroy', $attraction->id) }}"
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
                    <td colspan="5" class="empty">
                        No attractions found.
                    </td>
                </tr>
            @endforelse
        </tbody>

    </table>

</div>

<div class="pagination">
    {{ $attractions->links() }}
</div>

@endsection
