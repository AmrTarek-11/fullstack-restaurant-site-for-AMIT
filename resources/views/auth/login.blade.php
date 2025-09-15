
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
    <form method="POST" action="{{ route('login') }}" class="auth-form">
        @csrf

        <h2 class="form-title">Login</h2>

        <!-- Email -->
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required autofocus>

        <!-- Password -->
        <label>Password</label>
        <input type="password" name="password" required>

        <!-- Remember -->
        <div class="remember-row">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
        </div>

        <button type="submit" class="btn">Login</button>

        <p class="form-footer">
            Don’t have an account? <a href="{{ route('register') }}">Register</a>
        </p>
    </form>
</x-guest-layout>

</body>
</html>

