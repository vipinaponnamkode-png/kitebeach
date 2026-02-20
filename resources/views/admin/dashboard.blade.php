@extends('admin.layout')

@section('content')

<h1 style="margin-bottom:20px;">Admin Dashboard</h1>

<div class="dashboard-grid">

    <a href="{{ route('admin.service.create') }}" class="card-link">
        <div class="card">
            <i class="fa-solid fa-bell-concierge" style="font-size: 50px; color: #ffcc00;"></i>
            <h3>Services</h3>
        </div>
    </a>

    <a href="{{ route('admin.attractions.index') }}" class="card-link">
        <div class="card">
            <i class="fa-solid fa-umbrella-beach" style="font-size: 50px; color: #00c4ff;"></i>
            <h3>Attractions</h3>
        </div>
    </a>

    <a href="{{ route('admin.blogs.index') }}" class="card-link">
        <div class="card">
            <i class="fa-solid fa-newspaper" style="font-size: 50px; color: #ff6b6b;"></i>
            <h3>Blog</h3>
        </div>
    </a>

    <a href="{{ route('admin.contacts.index') }}" class="card-link">
        <div class="card">
            <i class="fa-solid fa-envelope" style="font-size: 50px; color: #28a745;"></i>
            <h3>Contact Messages</h3>
        </div>
    </a>
     <a href="{{ route('admin.contacts.index') }}" class="card-link">
        <div class="card">
            <i class="fa-solid fa-calendar-check" style="font-size: 50px; color: #ffcc00;"></i>
            <h3>Event Booking</h3>
        </div>
    </a>

</div>



@endsection
