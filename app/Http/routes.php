<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api','api@index');
Route::get('/mail',function (){
    $data = [];
    Mail::send('emails.welcome', $data, function ($message) {
        $message->from('kareemsender@gmail.com', 'Laravel');

        $message->to('kska213@gmail.com')->cc('bar@example.com');
    });
});
