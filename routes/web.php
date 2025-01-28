<?php

use App\Models\Job;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = Job::all();
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);
});

Route::get('/skills', function () {
    return view('skills', [
        'skills' => Skill::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $j = Job::find($id);
    return view('job', ['job' => $j]);
});

Route::get('/contact', function () {
    return view('contact');
});
