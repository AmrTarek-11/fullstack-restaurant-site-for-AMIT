<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    private $capacity = 50; // Example capacity

    public function index()
    {
        $user = Auth::user(); // Returns the logged-in user model
        $bookings = Booking::where('user_id', $user->id)->get();
        return view('booking.showbooking', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'no_of_guests' => 'required|integer|min:1',
            'notes' => 'nullable|string',
        ]);
      
        // Check table capacity
        $totalGuests = Booking::where('date', $request->date)
                              ->where('time', $request->time24)
                              ->sum('no_of_guests');

        if (($totalGuests + $request->no_of_guests) > $this->capacity) {
            return back()->withErrors([
                'capacity' => 'Booking exceeds capacity for the selected date and time.'
            ])->withInput();
        }

        // Create booking
        Booking::create([
            'user_id' => Auth::check() ? Auth::id() : null, // ✅ safe even if user not logged in
            'name' => $request->name,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'no_of_guests' => $request->no_of_guests,
            'notes' => $request->notes,
            'status' => 'pending',
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Booking request submitted successfully!');
    }
}
