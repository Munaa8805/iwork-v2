<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Job;

class HomeController extends Controller
{
    // Display a listing of the six resources.
    public function index(): View
    {
        $jobs = Job::latest()->limit(6)->get();
        return view('pages.index',)->with('jobs', $jobs);
    }
}
