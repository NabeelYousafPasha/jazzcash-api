<?php

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

Route::get('/test', function () {

    $response = (new \NsTechNs\JazzCMS\JazzCMS())->sendSMS("03215031089","message text");
    // OR with extra parameters
//    $response = (new \NsTechNs\JazzCMS\JazzCMS())->sendSMS("030xxxxxxxx","message text", "identifier", "unique_id", "product_id", "channel", "transaction_id");

    dd($response);
});
