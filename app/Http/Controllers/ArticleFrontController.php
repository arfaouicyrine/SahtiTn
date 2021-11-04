<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleFrontController extends Controller
{
    public function index() {
        $article = Article::latest()->paginate(1);
        return view ('frontend.article')->with('article' , $article);
    }



}
