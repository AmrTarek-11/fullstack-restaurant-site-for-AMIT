<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
@include('layouts.partials.header')
    <div class="profile-container">
        <h1>My Profile</h1>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <div class="profile-card">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role:</strong> {{ $user->role }}</p>

            <a href="{{ route('booking.index') }}" class="btn">my bookings</a>
            <div class="actions">
                <a href="{{ route('profile.edit') }}" class="btn">Edit Profile</a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn logout">Logout</button>
                </form>
            </div>
        </div>
    </div>
@include('layouts.partials.footer')
</body>
</html>
