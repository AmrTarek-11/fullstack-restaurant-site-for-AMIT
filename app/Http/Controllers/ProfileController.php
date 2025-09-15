<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Show the profile edit form.
     */

    public function index(){
        return view('profile.index', [
            'user' => Auth::user(),
        ]);
    }
    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user(),
        ]);
    }

    /**
     * Update the profile information.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = $request->user();
        $user->update($request->only('name', 'email'));

        return redirect()->route('profile.edit')->with('status', 'Profile updated!');
    }

    /**
     * Delete the user account.
     */
    public function destroy(Request $request)
    {
        $user = $request->user();

        Auth::logout();
        $request->delete();

        return redirect('/')->with('status', 'Account deleted.');
    }
}
