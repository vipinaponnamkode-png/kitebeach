@extends('admin.layout')

@section('content')

<div class="page-header">
    <h2>✏️ Edit Attraction</h2>
    <p>Update attraction details easily.</p>
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

    <form action="{{ route('admin.attractions.update', $attraction->id) }}" 
          method="POST" 
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">
                <label>Name *</label>
                <input type="text"
                       name="name"
                       value="{{ old('name', $attraction->name) }}"
                       required>
            </div>

            <div class="form-group full-width">
                <label>Description</label>
                <textarea name="description" rows="4">
{{ old('description', $attraction->description) }}
                </textarea>
            </div>

            <div class="form-group full-width">
                <label>Attraction Image</label>

                @if($attraction->image)
                    <div style="margin-bottom:10px;">
                        <img src="{{ asset('storage/' . $attraction->image) }}"
                             width="100"
                             height="100"
                             style="border-radius:10px; object-fit:cover;">
                    </div>
                @endif

                <input type="file"
                       name="image"
                       accept="image/*">

                <small>Leave empty to keep existing image</small>
            </div>

        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">Update Attraction</button>
            <a href="{{ route('admin.attractions.index') }}" 
               class="btn-secondary">Cancel</a>
        </div>

    </form>
</div>

@endsection
