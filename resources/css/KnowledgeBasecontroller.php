<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class KnowledgeBaseController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('knowledge-base.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('knowledge-base.show', compact('article'));
    }
}
