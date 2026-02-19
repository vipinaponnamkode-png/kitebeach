@extends('admin.layout')

@section('content')

<div class="page-header">
    <h2>🎡 Add New Attraction</h2>
    <p>Create and manage your park attractions easily.</p>
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

    <form action="{{ route('admin.attractions.store') }}" 
          method="POST" 
          enctype="multipart/form-data">
        @csrf

        <div class="form-grid">

            <div class="form-group">
                <label>Name *</label>
                <input type="text" 
                       name="name" 
                       value="{{ old('name') }}" 
                       required>
            </div>

            <div class="form-group full-width">
                <label>Description</label>
                <textarea name="description" rows="4">{{ old('description') }}</textarea>
            </div>

            <div class="form-group full-width">
                <label>Attraction Image</label>
                <input type="file" 
                       name="image" 
                       accept="image/*">
                <small>Allowed: JPG, PNG, WEBP (Max 2MB)</small>
            </div>

        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">Save Attraction</button>
            <a href="{{ route('admin.attractions.index') }}" 
               class="btn-secondary">Cancel</a>
        </div>

    </form>
</div>

@endsection
