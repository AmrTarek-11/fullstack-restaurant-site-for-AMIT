

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
    <x-app-layout>
    <div class="dashboard-container">
        <h1 class="dashboard-title">Dashboard</h1>
        <p class="dashboard-subtitle">
            Welcome back, {{ Auth::user()->name }} 👋
        </p>

        <div class="dashboard-cards">
            <div class="card">
                <h3>Total Users</h3>
                <p>120</p>
            </div>
            <div class="card">
                <h3>Total Bookings</h3>
                <p>45</p>
            </div>
            <div class="card">
                <h3>Status</h3>
                <p>Active</p>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>
