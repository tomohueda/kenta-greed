<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function show(){
        $startTime = "2024-04-20 12:00:00";
        return view (
            //'top',
            'landing',
            [
                'startTime' => $startTime,
                'youtube'   => 'https://youtu.be/b_I3YsoK2FU',
            ]
        );
    }
}
