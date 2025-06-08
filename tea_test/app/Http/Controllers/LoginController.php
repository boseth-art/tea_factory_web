<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // If already logged in, redirect to dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        // 1. Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // 2. Try to log the user in
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) { // Remember me checkbox

            // 3. Regenerate session ID for security
            $request->session()->regenerate();

            // 4. Store user email in session
            session(['user_email' => $request->email]);

            // 5. Set cookie if "Remember Me" was checked
            if ($request->remember) {
                Cookie::queue('remember_email', $request->email, 60*24*30); // 30 days
            }

            // 6. Redirect to dashboard
            return redirect()->intended(route('dashboard'));
        }

        // 7. If login fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        // 1. Log the user out
        Auth::logout();

        // 2. Clear the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // 3. Forget the remember cookie
        Cookie::queue(Cookie::forget('remember_email'));

        // 4. Redirect to login page
        return redirect()->route('login')->with('status', 'You have been logged out!');
    }
}
