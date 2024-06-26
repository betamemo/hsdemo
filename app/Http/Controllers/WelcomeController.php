<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $articles = Article::take(6)->get();

        return view('welcome', ['articles' => $articles]);
    }
}
