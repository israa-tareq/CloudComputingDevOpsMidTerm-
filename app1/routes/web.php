<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;


Route::get('/', function () {
    try {
       
        Redis::incr('visit_count');
    } catch (\Exception $e) {
        
    }

    return view('welcome');
});


Route::post('/messages', function (Request $request) {
    $message = $request->input('message');
    
    if (!empty($message)) {
        try {
            
            Redis::rpush('messages', $message);
        } catch (\Exception $e) {
           
        }
    }

    return redirect('/')->with('success', 'Message sent successfully!');
});