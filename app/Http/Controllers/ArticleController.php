<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Pro;
use Hash;
use Image;

class ArticleController extends Controller
{
    public function show(Article $article)
    {
        return view('articles.show',compact('article'));
    }

    public function praise(Request $request)
    {
        Article::where('id',$request->id)->increment('like');
        return redirect()->route('article',['article' => $request->id]);
    }

    public function create_show()
    {
        return view('articles.create');
    }

    public function create(Request $request)
    {
        $pro = Pro::find(1);
        $boole = Hash::check($request->pw,$pro->pw);
        if($boole)
        {
            $img = Image::make($request->image);
            $img_name = $img->filename.'.png';
            $img->resize(175,82);
            $img->save(base_path().'/public/images/article/'.$img_name);
            Article::create([
                'name' => $request->name,
                'describe' => $request->describe,
                'content' => $request->content,
                'image' => config('app.url').'/images/article/'.$img_name,
                'class' => $request->class,
            ]);
            return redirect()->route('home');
        }
        else
        {
            return '创建失败！';
        }
    }
}
