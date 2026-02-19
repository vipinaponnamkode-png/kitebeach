@extends('admin.layout')

@section('content')

<div class="page-header">
    <h2>✏️ Edit Blog</h2>
    <p>Update blog details below.</p>
</div>

<div class="form-card">

    @if ($errors->any())
        <div class="alert-box error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.blogs.update', $blog->id) }}" 
          method="POST" 
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">
                <label>Title *</label>
                <input type="text" 
                       name="title" 
                       value="{{ old('title', $blog->title) }}" 
                       required>
            </div>

            <div class="form-group">
                <label>Category</label>
                <input type="text" 
                       name="category" 
                       value="{{ old('category', $blog->category) }}">
            </div>

            <div class="form-group full-width">
                <label>Description *</label>
                <textarea name="description" 
                          rows="5" 
                          required>{{ old('description', $blog->description) }}</textarea>
            </div>

            <div class="form-group full-width">
                <label>Blog Image</label>
                <input type="file" 
                       name="image" 
                       accept="image/*">

                @if($blog->image)
                    <div style="margin-top:15px;">
                        <p>Current Image:</p>
                        <img src="{{ asset('storage/' . $blog->image) }}"
                             width="120"
                             style="border-radius:10px; object-fit:cover;">
                    </div>
                @endif
            </div>

        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                Update Blog
            </button>

            <a href="{{ route('admin.blogs.index') }}" 
               class="btn-secondary">
                Cancel
            </a>
        </div>

    </form>
</div>

@endsection
