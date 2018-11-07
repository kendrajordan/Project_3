<?php

namespace App\Http\Controllers;
use App\Blog_post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
      $posts =Blog_post::all();
      $id =\App\User::find()
      return view('welcome',compact('posts'));
    }
    public function create()
    {
      return view('profile.create');
    }
    public function store()
    {
      $post = new Blog_post();
      $post->title = request('title');
      $post->link = request('link');
      $post->text = request('text');
      $post->save();
      return redirect('/');
    }

}
