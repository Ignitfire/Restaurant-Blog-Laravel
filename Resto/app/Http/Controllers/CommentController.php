<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\CommentFilterRequest;
use App\Models\Comment;


class CommentController extends Controller
{

    public function index(){
        $comments = Comment::all(); //get all comments
        $title = "Commentaires";
        return view('layouts/comments',array('title'=>$title, 'comments' => $comments));
    }

    public function store($request) {
        $comment = new Comment();
        $comment->author_id = request('author_id');
        $comment->restaurant_id = request('restaurant_id');
        $comment->rating = request('rating');
        if(request('message') == null) $comment->message = "";
        else $comment->message = request('message');
        $comment->save();
        return redirect()->back();
    }
}
