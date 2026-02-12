<?php

namespace App\Http\Controllers\admin\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboards.admin.admin-users.admin-users-main', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'user_type' => 'required|in:1,2,3',
            'phone' => 'nullable|string|max:20',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        session()->flash('success', 'User created successfully.');
        return response()->json(['success' => true, 'message' => 'User created successfully.']);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'user_type' => 'required|in:1,2,3',
            'phone' => 'nullable|string|max:20',
        ]);

        if ($request->filled('password')) {
            $request->validate(['password' => 'string|min:8']);
            $validated['password'] = bcrypt($request->password);
        }

        $user->update($validated);

        session()->flash('success', 'User updated successfully.');
        return response()->json(['success' => true, 'message' => 'User updated successfully.']);
    }

    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success', 'User deleted successfully.');
        return response()->json(['success' => true, 'message' => 'User deleted successfully.']);
    }
}
