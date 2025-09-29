<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
    $jobs = Job::all();
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find((int)$id);
    if (!$job) {
        abort(404);
    }
    return view('job', [
        'job' => $job,
    ]);
});

Route::get('/contact', function () {
    return view ('contact', [
        'contact' => [
            'email' => 'info@example.com',
            'phone' => '123-456-7890',
        ]
    ]);
});


