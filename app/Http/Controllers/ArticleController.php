<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function createArticle() {
        echo 'burger';
        return view('articles.createArticle');
    }
}
