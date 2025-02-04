<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Job;

class HomeController extends Controller
{
    //
    public function index(): View
    {
        $jobs = Job::latest()->limit(5)->get();
        return view('pages.index',)->with('jobs', $jobs);
    }
}