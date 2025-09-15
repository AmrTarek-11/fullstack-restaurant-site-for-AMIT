

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

</head>
<body>
    <x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="auth-form">
        @csrf

        <h2 class="form-title">Register</h2>

        <!-- Name -->
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required autofocus>

        <!-- Email -->
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <!-- Password -->
        <label>Password</label>
        <input type="password" name="password" required>

        <!-- Confirm Password -->
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit" class="btn">Register</button>

        <p class="form-footer">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </p>
    </form>
</x-guest-layout>

</body>
</html>

