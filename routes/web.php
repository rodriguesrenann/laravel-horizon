<?php

use App\Jobs\ExampleJob;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', function () {
    ExampleJob::dispatch([
        'Example' => 'Example'
    ]);
    return 'Ok';
});

Route::get('/email', function () {
    Mail::to('renan@teste2.com')->send(new TestMail);
    return 'Ok email enviado';
});
