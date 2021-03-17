<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function index()
    {
        $users = User::role('author')->get(['name', 'email']);

        return view('admin.author', compact('users'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email'
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user->hasRole('author')) {
            $user->assignRole('author');
        }

        return redirect()->back();
    }

    public function remove($email)
    {
        $user = User::where('email', $email)->first();
        $user->removeRole('author');

        return redirect()->back();
    }
}
