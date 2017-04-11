<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Article $article)
    {

        $this->validate(request(), ['body' => 'required|min:2']);

        Comment::create([

            'article_id' => $article->id,
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);


        return back();
    }
}
