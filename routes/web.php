<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);
});


Route::get('/jobs/{id}', function ($id) {
    $j = Job::find($id);
    return view('job', ['job' => $j]);
});

Route::get('/contact', function () {
    return view('contact');
});
