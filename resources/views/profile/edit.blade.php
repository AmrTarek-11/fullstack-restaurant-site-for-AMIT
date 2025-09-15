<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profileedit.css') }}">
</head>

<body>
    {{-- @include('layouts.partials.header') --}}
    <header>
        <h1>Profile</h1>
        <a style="color: red" href="{{ route('profile') }}">return to your profile</a>
    </header>

    <main>
        @if (session('status'))
            <div class="alert success">
                {{ session('status') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert error">
                {{ session('error') }}
            </div>
        @endif

        <div class="container">

            <!-- Update Profile Information -->
            <div class="card">
                @include('profile.partials.update-profile-information-form')
            </div>

            <!-- Update Password -->
            <div class="card">
                @include('profile.partials.update-password-form')
            </div>

            <!-- Delete User -->
            <div class="card">
                @include('profile.partials.delete-user-form')
            </div>

        </div>
    </main>
    @include('layouts.partials.footer')
</body>

</html>
