<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LTCController extends Controller
{
    public function getLiveTeachingClass(){
        return view('LiveTeachingClass');
    }
}
