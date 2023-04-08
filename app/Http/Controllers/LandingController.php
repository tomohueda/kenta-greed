<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function show(){
        $startTime = "April 12, 2023 12:00:00 UTC+0900";
        return view (
            //'top',
            'landing',
            [
                'startTime' => $startTime,
            ]
        );
    }
}