<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function show(){
        $startTime = "April 7, 2023 22:15:00 UTC+0900";
        return view (
            //'top',
            'landing',
            [
                'startTime' => $startTime,
            ]
        );
    }
}
