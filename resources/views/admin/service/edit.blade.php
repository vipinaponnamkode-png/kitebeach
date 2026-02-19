@extends('admin.layout')

@section('content')

<div class="page-header">
    <h2>✏️ Edit Service</h2>
    <a href="{{ route('admin.service.index') }}" class="btn-secondary">
        ← Back
    </a>
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

    <form action="{{ route('admin.service.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">
                <label>Title *</label>
                <input type="text"
                       name="title"
                       value="{{ old('title', $service->title) }}"
                       required>
            </div>

            <div class="form-group">
                <label>Subtitle</label>
                <input type="text"
                       name="subtitle"
                       value="{{ old('subtitle', $service->subtitle) }}">
            </div>

            <div class="form-group">
                <label>Guest Limit</label>
                <input type="number"
                       name="guest_limit"
                       value="{{ old('guest_limit', $service->guest_limit) }}">
            </div>

            <div class="form-group">
                <label>Duration</label>
                <input type="text"
                       name="duration"
                       value="{{ old('duration', $service->duration) }}">
            </div>

            <div class="form-group">
                <label>Price (₹)</label>
                <input type="number"
                       step="0.01"
                       name="price"
                       value="{{ old('price', $service->price) }}">
            </div>

            <div class="form-group checkbox-group">
                <input type="checkbox"
                       name="food_negotiable"
                       value="1"
                       {{ old('food_negotiable', $service->food_negotiable) ? 'checked' : '' }}>
                <label>Food Negotiable</label>
            </div>

            <div class="form-group full-width">
                <label>Description</label>
                <textarea name="description" rows="4">
{{ old('description', $service->description) }}
                </textarea>
            </div>

        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">Update Service</button>
            <a href="{{ route('admin.service.index') }}" class="btn-secondary">Cancel</a>
        </div>

    </form>

</div>

@endsection
