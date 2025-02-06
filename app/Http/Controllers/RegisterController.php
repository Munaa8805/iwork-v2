<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    //
    public function register(): View
    {

        return view('auth.register');
    }
    public function store(Request $request, User $user): RedirectResponse
    {


        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:4|confirmed',

        ]);
        //// Hash the password
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        return redirect()->route('login')->with('success', 'You registered successfully');
    }
}
