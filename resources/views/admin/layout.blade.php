<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard | KiteBeach</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/admincss.css') }}">
   
</head>
<body>

<div class="sidebar">
    <img src="{{ asset('img/logo.png') }}" style="width:40px;height:40px;">
    <h2>KiteBeach Admin</h2>

    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <!-- <a href="#">Home Page</a> -->
    <a href="#">About Page</a>
    <a href="{{ route('admin.service.index') }}">Services</a>
    <a href="{{ route('admin.attractions.index') }}">Attractions</a>
    <a href="{{ route('admin.blogs.index') }}">Blog</a>
    <a href="{{ route('admin.contacts.index') }}">Contact Messages</a>


    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit" style="margin-top:10px;">Logout</button>
    </form>
</div>

<div class="content">
    @yield('content')
</div>

</body>
</html>
