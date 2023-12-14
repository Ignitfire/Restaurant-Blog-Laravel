<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class AdminCommentController extends Controller
{
    public function index(){
        $comments = Comment::all(); //get all comments
        return view('adminComments',array('comments' => $comments));
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect()->route('adminComments.index')->with('success',"Le commentaire a bien été supprimé");
    }
}
