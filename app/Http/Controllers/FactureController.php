<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function getFactures(){
        return view('factures.factures');
    }
}
