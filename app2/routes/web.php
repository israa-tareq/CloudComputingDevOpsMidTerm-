<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    try {
        $visitCount = Redis::get('visit_count') ?? 0;
        $messageCount = Redis::llen('messages') ?? 0;

        return view('dashboard', [
            'visits' => (int) $visitCount,
            'messages' => (int) $messageCount,
            'status' => 'Connected to Redis'
        ]);
    } catch (\Exception $e) {
        return view('dashboard', [
            'visits' => 0,
            'messages' => 0,
            'status' => 'Redis Connection Failed: ' . $e->getMessage()
        ]);
    }
});