<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonController extends Controller
{
    public function getBons(){
        return view('bons.bons');
    }
}