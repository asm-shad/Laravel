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

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title' => 'Director', // Fixed the missing quote
                'salary' => '$50,000'
            ],
            [
                'title' => 'Manager', // Fixed the missing quote
                'salary' => '$40,000'
            ],
            [
                'title' => 'Employee', // Fixed the missing quote
                'salary' => '$30,000'
            ]
        ]
    ]);
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});