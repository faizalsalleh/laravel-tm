<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->with('login_error', 'wrong_email')->onlyInput('email');
        }

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            $token = \PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth::fromUser(Auth::user());
            cookie()->queue('jwt_token', $token, 30);

            return $this->authenticated($request, Auth::user());
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->with('login_error', 'incorrect_password')->onlyInput('email');
    }

    protected function authenticated(Request $request, $user)
    {
        // 1: Admin, 2: HR, 3: Employee
        // Using intval to ensure type safety if database returns string
        switch (intval($user->user_type)) {
            case 1:
                return redirect()->route('admin.dashboard');
            case 2:
                return redirect()->route('hr.dashboard');
            case 3:
                return redirect()->route('employees.dashboard');
            default:
                Auth::logout();
                return redirect()->route('login')->withErrors(['email' => 'Unauthorized user type.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
