<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function getSuppliers(){
        $suppliers = Supplier::all();
        return view('suppliers/suppliers', [
            'suppliers' => $suppliers,
        ]);
    }

    public function addSupplier(){
        return view('suppliers/add-supplier');
    }

    public function createSupplier(Request $request){
        $supplier = Supplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'country' => $request->country,
            'post_code' => $request->post_code
        ]);

        return redirect('suppliers');
    }
}
