<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $users = User::role('author')->get(['name', 'email']);

        return view('admin.home', compact('users'));
    }

    public function addAuthor(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email'
        ]);

        $user = User::where('email', $validated)->first();
        $user->assignRole('author');

        return redirect()->back();
    }

    public function removeAuthor($email)
    {
        $user = User::where('email', $email)->first();
        $user->removeRole('author');

        return redirect()->back();
    }
}
