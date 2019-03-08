<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Articletype;

class ArticletypeController extends Controller
{
    //
    public function index(Articletype $type)
    {
        $articles = Article::where('class',$type->id)->orderBy('created_at','desc')->get();

        return view('articles.articletype',compact('articles','type'));
    }
}
