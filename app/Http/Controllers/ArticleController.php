<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;

class ArticleController extends Controller 
{
    public static function middleware(){
        return [
            new Middleware('auth', ['except' => ['index', 'show']])
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles= Article::orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:articles|min:5',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'category' => 'required',
        ]);

        $article = Article::create([
            'title' => $request->title,
            'price' => $request->price,
            'image' => $request->file('image')->store('images', 'public'),
            'category_id' => $request->category,
            'user_id' => Auth::id()
        ]);

        return redirect(route('homepage'))->with('message', 'Articolo inserito correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
