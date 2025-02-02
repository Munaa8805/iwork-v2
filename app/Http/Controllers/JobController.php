<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class  JobController extends Controller
{
    public function index()
    {
        $jobs = [
            'Job 1',
            'Job 2',
            'Job 3',
            'Job 4',
            'Job 5',
        ];
        $title = 'Job Listings';
        return view('jobs', [
            'jobs' => $jobs,
            'title' => $title
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show($id)
    {
        return view('jobs.show', ['id' => $id]);
    }
    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        return "Job title: $title, Description: $description";
    }
}
