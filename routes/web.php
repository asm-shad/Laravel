<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


// $jobs = [
//     ['id' => 1, 'title' => 'Director', 'salary' => '$50,000'],
//     ['id' => 2, 'title' => 'Manager', 'salary' => '$40,000'],
//     ['id' => 3, 'title' => 'Employee', 'salary' => '$30,000'],
//     ];

// Home Page Route
Route::get('/', function () {
    $jobs = Job::all();

    // dd($jobs);

    return view('home');
});

// Jobs Page Route
Route::get('/jobs', function () {
    return view('jobs', [
'jobs' => Job::all()
    ]);
});

// Contact Page Route
Route::get('/contact', function () {

    return view('contact');
});
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' =>$job]);
});
