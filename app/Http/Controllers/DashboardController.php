<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    //
    public function index(): View
    {

        $user = Auth::user();
        $jobs = Job::where('user_id', $user->id)->with('applicants')->get();
        return view('dashboard.index', compact('user', 'jobs'));
    }
}
