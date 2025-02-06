<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class RegisterController extends Controller
{
    //
    public function register(): View
    {
        return view('auth.register');
    }
}
