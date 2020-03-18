<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::paginate(10);
        return view('post.index',compact('articles'));
    }

    public function show($id){
        $recentArticles = Article::paginate(5);
        $article = Article::findOrFail($id);
        return view('post.show',compact('article'),compact('recentArticles'));
    }

    public function search(Request $request){
        $query = $request->input('search');
        $articles = Article::where('title','LIKE', '%'.$query.'%')
            ->orWhere('content','LIKE', '%'.$query.'%')
            ->paginate(4);

        return view('post.index',compact('articles'));
    }
}
