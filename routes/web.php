<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('pages.contact');
});

Route::post('/send-email', [MailController::class, 'store']);
