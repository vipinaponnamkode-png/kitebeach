@extends('admin.layout')

@section('content')

<div class="page-header">
    <h2>📝 All Blogs</h2>
    <a href="{{ route('admin.blogs.create') }}" class="btn-primary">
        + Add Blog
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
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th width="170">Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($blogs as $blog)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>
                        @if($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}"
                                 width="60"
                                 height="60"
                                 style="border-radius:10px; object-fit:cover;">
                        @else
                            -
                        @endif
                    </td>

                    <td>
                        <strong>{{ $blog->title }}</strong>
                        <br>
                        <small>
                            {{ \Illuminate\Support\Str::limit($blog->description, 50) }}
                        </small>
                    </td>

                    <td>
                        <span class="badge">
                            {{ $blog->category ?? '-' }}
                        </span>
                    </td>

                    <td>
                        {{ $blog->created_at->format('d M Y') }}
                    </td>

                    <td class="action-buttons">

                        <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                           class="btn-edit">
                            Edit
                        </a>

                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}"
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
                    <td colspan="6" class="empty">
                        No blogs found.
                    </td>
                </tr>
            @endforelse
        </tbody>

    </table>

</div>

<div class="pagination">
    {{ $blogs->links() }}
</div>

@endsection
