<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book a Table</title>
    <link rel="stylesheet" href="{{ asset('css/bookingcss/styleofthebookingfirst.css') }}">
</head>

<body>
@include('layouts.partials.header')
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- FORM START -->
    <div class="containerofform">




        
    <form action="{{ route('booking.store') }}" method="POST" class="booking-form">
        @csrf

        <div class="form-row">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="x-xxx-xxx-xxxx" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <select id="time" name="time" required>
                    @for ($hour = 13; $hour <= 24; $hour++)
                        @php
                            $displayHour = $hour > 12 ? $hour - 12 : $hour;
                            $ampm = $hour >= 12 && $hour < 24 ? 'PM' : 'AM';
                            $timeValue = sprintf('%02d:00:00', $hour % 24);
                        @endphp
                        <option value="{{ $timeValue }}">{{ $displayHour }}:00 {{ $ampm }}</option>
                    @endfor
                    <option value="01:00:00">1:00 AM</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group full-width">
                <label for="no_of_guests">Total Guests</label>
                <select id="no_of_guests" name="no_of_guests" required>
                    <option value="1">1 Person</option>
                    <option value="2">2 Persons</option>
                    <option value="3">3 Persons</option>
                    <option value="4">4 Persons</option>
                    <option value="5">5 Persons</option>
                    <option value="6">6 Persons</option>        
                    <option value="7">7 Persons</option>
                    <option value="8">8 Persons</option>
                    <option value="9">9 Persons</option>
                    <option value="10">10 Persons</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group full-width">
                <label for="notes">Special Requests (Optional)</label>
                <textarea id="notes" name="notes" placeholder="Any special requests?"></textarea>
            </div>
        </div>

        <!-- ✅ Submit button -->
        <div class="form-row">
            <div class="form-group full-width" style="text-align: center;">
                <button  type="submit" class="btn-submit">Book A Table</button>
            </div>
        </div>
    </form>
    <!-- FORM END -->
    </div>
@include('layouts.partials.footer')
</body>
</html>
