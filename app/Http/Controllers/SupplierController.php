<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function getSuppliers(){
        return view('suppliers/suppliers');
    }
}
