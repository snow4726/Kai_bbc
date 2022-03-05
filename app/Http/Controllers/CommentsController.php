<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Post;
use View;
use Illuminate\Support\Facades\Validator;

use App\Models\Kakikomi;

class CommentsController extends Controller
{
    //

    public function store(Request $request)
    {

	$postpost = Post::find($request->post_id);

	if($request->action === 'back') {
		return View::make('single')->with('post', $postpost);

	}
	// validation ‚±‚±‚©‚ç’Ç‰Á
	$rules = [
		'commenter' => 'required',
		'comment'=>'required',
	];
	$this->validate($request, $rules);
	// ‚±‚±‚Ü‚Å’Ç‰Á
	// $comment = new Kakikomi;
	$comment = new Comment;
	$comment->commenter = $request->commenter;
	$comment->comment = $request->comment;
	$comment->post_id = $request->post_id;
	$comment->save();

	return View::make('single')->with('post', $postpost);
    }
}
