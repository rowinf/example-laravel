<?php

use App\Models\Job;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = Job::all();
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('company')->latest()->simplePaginate(20);
    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});

Route::get('/skills', function () {
    return view('skills', [
        'skills' => Skill::all()
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $j = Job::find($id);
    return view('jobs.show', ['job' => $j]);
});

Route::post('/jobs', function() {
    
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'company_id' => 1
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
