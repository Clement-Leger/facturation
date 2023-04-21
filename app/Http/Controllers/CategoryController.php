<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategories(){
        $categories = Category::all();

        return view('categories/categories',
        ['categories' => $categories]);
    }

    public function addCategory(){
        return view('categories/add-category');
    }

    public function createCategory(Request $request){
        $category = Category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect('categories');
    }
}
