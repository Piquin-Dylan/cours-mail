<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/send-newsletter', function () {
    $newsletterToSend = \App\Models\Newsletter::latest()->first();


    Mail::to('dylan.piquin@student.hepl.be')
        ->queue(new \App\Mail\Newsletter($newsletterToSend));

    return 'La newsletter est en cours d’envoi';
})->name('send-newsletter');
