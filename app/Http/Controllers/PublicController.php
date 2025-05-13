<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;

class PublicController extends Controller
{
   

public function homepage() {
    $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
    $categories = Category::all();
    return view('welcome', compact('articles', 'categories'));
}

}
