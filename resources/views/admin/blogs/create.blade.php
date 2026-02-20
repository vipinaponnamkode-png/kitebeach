@extends('admin.layout')

@section('content')

<div class="page-header">
    <h2>📝 Add New Blog</h2>
    <p>Create and manage your beach blog articles easily.</p>
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

    <form action="{{ route('admin.blogs.store') }}" 
          method="POST" 
          enctype="multipart/form-data">
        @csrf

        <div class="form-grid">

            <div class="form-group">
                <label>Title *</label>
                <input type="text" 
                       name="title" 
                       value="{{ old('title') }}" 
                       required>
            </div>

            <div class="form-group">
                <label>Category</label>
                <input type="text" 
                       name="category" 
                       value="{{ old('category') }}">
            </div>

            <div class="form-group full-width">
                <label>Description *</label>
               <textarea name="content" 
          class="form-control" 
          rows="5" 
          required>{{ old('content') }}</textarea>
            </div>

            <div class="form-group full-width">
                <label>Blog Image</label>
                <input type="file" 
                       name="image" 
                       accept="image/*">
            </div>

        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                Save Blog
            </button>

            <a href="{{ route('admin.blogs.index') }}" 
               class="btn-secondary">
                Cancel
            </a>
        </div>

    </form>
</div>

@endsection
