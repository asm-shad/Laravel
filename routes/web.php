<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Page Route
Route::get('/', function () {
    return view('home');
});

// Jobs Page Route
Route::get('/jobs', function () {
    return view('jobs', [
'jobs' => [
    ['id' => 1, 'title' => 'Director', 'salary' => '$50,000'],
    ['id' => 2, 'title' => 'Manager', 'salary' => '$40,000'],
    ['id' => 3, 'title' => 'Employee', 'salary' => '$30,000'],
]
    ]);
});

// Contact Page Route
Route::get('/contact', function () {

    return view('contact');
});
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
    ['id' => 1, 'title' => 'Director', 'salary' => '$50,000'],
    ['id' => 2, 'title' => 'Manager', 'salary' => '$40,000'],
    ['id' => 3, 'title' => 'Employee', 'salary' => '$30,000'],
    ];

    //    $job = Illuminate\Support\Arr::first($jobs, fn($job, fn($job) => $job['id']== $id));
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);


    return view('job', ['job' =>$job]);
});
