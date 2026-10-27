<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/departments', function () {
    return view('departments');
})->name('departments');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/contacts', function () {
    $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'subject' => 'required',
        'message' => 'required'
    ]);

    \Illuminate\Support\Facades\Mail::to('e.e.mtambala@gmail.com')
        ->send(new \App\Mail\SchoolSiteMail($data));

    return redirect('/contacts')
        ->with('flash', 'Message sent successfully, we will get back to you shortly');
})->name('contacts');

Route::get('/news-updates', function () {
    return view('news');
})->name('news');


Route::get('/enroll', function () {
    return view('enroll');
})->name('enroll');

Route::post('/enroll', function () {
    $data = request()->validate([
        'firstname' => 'required',
        'middlename' => 'nullable',
        'surname' => 'required',
        'type' => 'required',
        'kin_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required'
    ]);

    \Illuminate\Support\Facades\Mail::to('e.e.mtambala@gmail.com')
        ->send(new \App\Mail\SchoolSiteEnroll($data));

    return redirect('/enroll')
        ->with('flash', 'Enrollment request sent successfully, we will get back to you shortly');
})->name('enroll');
