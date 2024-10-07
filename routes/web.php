<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);
});


Route::get('/jobs/{id}', function ($id) {
    $jobs = Job::all();
    $j = Arr::first($jobs, fn ($job) =>  $job['id'] == $id);
    return view('job', ['job' => $j]);
});

Route::get('/contact', function () {
    return view('contact');
});
