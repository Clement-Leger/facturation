<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticles(){
        $articles = Article::all();
        
        return view('articles/index', 
        ['articles' => $articles]);
    }
    
    public function addArticle(){
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('articles/add-article',[
            'categories' => $categories,
            'suppliers' => $suppliers
        ]);
    }

    public function createArticle(Request $request){
        $article = Article::create([
            'article_name' => $request->article_name,
            'price_excl' => $request->price_excl,
            'price_incl' => $request->price_incl,
            'tax_rate' => $request->tax_rate,
            'stock' => $request->stock,
            'supplier' => $request->supplier,
        ]);

        $article->categories()->attach($request->category_name);

        return redirect('/');
    }
}
