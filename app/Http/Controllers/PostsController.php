<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	///return view('sites.home');
    	$posts = Post::all();
    	return view('posts.index',compact(['posts']));
    }

    public function add()
    {
    	///return view('sites.home');
    	//$posts = Post::all();
    	return view('posts.add');

    }

     public function create(Request $request)
    {
    	$post = Post::create([
    		'title' => $request->title,
    		'content' => $request->content,
    		'user_id' => auth()->user()->id,
    		'thumbnail' => $request->thumbnail
    	]);

    	return redirect('/posts')->with('sukses','Data Berhasil Ditambah');

    }


}
