<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;

class AdminbookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.booking', compact('bookings'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:pending,accepted,rejected',
        ]);

        $booking->update([
            'status' => $request->status,
        ]);
  $bookings = Booking::all();
        return view('admin.booking' , compact('bookings'))->with('success', 'Booking status updated successfully!');
    }

public function destroy(Booking $booking)
    {
        $booking->delete();
  $bookings = Booking::all();
        return view('admin.booking', compact('bookings'))->with('success', 'Booking deleted successfully!');
    }






}
