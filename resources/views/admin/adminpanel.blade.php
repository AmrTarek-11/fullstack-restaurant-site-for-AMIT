<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/admin/styleoftheadminpanel.css') }}">
</head>
<body>
@include('layouts.partials.header')
    <div class="container">
        <h1>Admin Panel</h1>
        <!-- Correct routes -->
        <a href="{{ route('admin.users') }}" class="btn">view all Users</a>
        <a href="{{ route('admin.booking') }}" class="btn">Manage Bookings</a>
        <a href="{{ route('admin.menuitem.index') }}" class="btn">Manage Menu Items</a>
    </div>
@include('layouts.partials.footer')
</body>
</html>
