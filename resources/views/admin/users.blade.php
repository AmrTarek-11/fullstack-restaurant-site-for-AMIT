<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
   <link rel="stylesheet" href="{{ asset('css/admin/styleoftheadminpanel.css') }}">
</head>
</head>
<body>
@include('layouts.partials.header')
    <div class="container">
        <h1>Users</h1>
        <a href="{{ route('admin.adminpanel') }}" class="btn">⬅ Back</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role ?? 'user') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@include('layouts.partials.footer')
</body>
</html>
