<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bookingcss/showbookings.css') }}">
</head>
<body>
@include('layouts.partials.header')
    
<table>
<thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>phone</th>
        <th>date</th>
        <th>time</th>
        <th>no of guests</th>
        <th>notes</th>
        <th>status</th>
    </tr>
</thead>
<tbody>
    @foreach ($bookings as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->name }}</td>
            <td>{{ $book->phone }}</td>
            <td>{{ $book->date }}</td>
            <td>{{ $book->time }}</td>
            <td>{{ $book->no_of_guests}}</td>
            <td>{{ $book->notes }}</td>
            <td>{{ $book->status }}</td>
        </tr>
    @endforeach
</tbody>



</table>

@include('layouts.partials.footer')
</body>
</html>