<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\Post;
use View;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{

    public function index()
    {
	$posts = Post::all();
	return View::make('index')->with('posts', $posts);
    }

    public function show($id)
    {
	$post = Post::find($id);
	return View::make('single')->with('post', $post);
    }

    public function show_toukou($id)
    {

	$post = Post::find($id);
	return View::make('create')->with('post', $post);

    }

    public function store(Request $request)
    {

	$postpost = Post::find($request->post_id);

	if($request->action === 'back') {
		return View::make('create')->with('post', $postpost);
	}
	// validation ‚±‚±‚©‚ç’Ç‰Á
	$rules = [
		'title' => 'required',
		'content'=>'required',
		'cat_id' => 'required',
	];
	$this->validate($request, $rules);

	// ‚±‚±‚Ü‚Å’Ç‰Á

	$post = new Post;
	$post->title = $request->title;
	$post->content = $request->content;
	$post->cat_id = $request->cat_id;
	$post->save();
	return View::make('create')->with('post', $postpost);

    }

    public function showCategory($id)
    {
	$category_posts = Post::where('cat_id', $id)->get();

	return View::make('category')
		->with('category_posts', $category_posts);
    }

}