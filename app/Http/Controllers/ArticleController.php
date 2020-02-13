<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }
 
    public function show(Article $article)
    {
        // return Article::find($article);
        return $article;
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        // $article = Article::findOrFail($article);
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Request $request, Article $article)
    {
        // $article = Article::findOrFail($article);
        $article->delete();

        return response()->json(null, 204);
    }
}
