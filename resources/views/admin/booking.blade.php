<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
    <link rel="stylesheet" href="{{ asset('css/admin/styleoftheadminpanel.css') }}">
</head>
<body>
@include('layouts.partials.header')
    <div class="container">
        <h1>Manage Bookings</h1>

        <table>
            <thead>
                <tr>
                    <th>User</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>{{ $booking->time }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <!-- Confirm Booking -->
                        <form action="{{ route('admin.booking.update', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="accepted">
                            <button type="submit">Accept</button>
                        </form>

                        <!-- Reject Booking -->
                        <form action="{{ route('admin.booking.update', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="rejected">
                            <button type="submit">Reject</button>
                        </form>

                        <!-- Delete Booking -->
                        <form action="{{ route('admin.booking.destroy', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="back-link">
            <a href="{{ route('admin.adminpanel') }}">← Back to Admin Panel</a>
        </div>
    </div>
@include('layouts.partials.footer')
</body>
</html>
