<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function show(){
        $startTime = "2024-04-19 06:00:00";
        return view (
            //'top',
            'landing',
            [
                'startTime' => $startTime,
                'youtube'   => 'https://www.youtube.com/embed/b_I3YsoK2FU?si=kgcJRGte8Lw1hBSL',
            ]
        );
    }
}
