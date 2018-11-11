<?php

namespace App\Http\Controllers;
use App\Blog_post;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostsController extends Controller
{
    //
    public function index()
    {
      $posts =Blog_post::orderBy('updated_at', 'desc')->get();
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
      $post->user_id = \Auth::id();
      $post->save();
      return redirect('/');
    }
    public function delete(Blog_post $post)
    {
    $post->delete();
      return redirect('/');
    }
  //  @param  int  $id
    //@return \Illuminate\Http\Response

    public function edit($id)
    {
      $post=\App\Blog_post::find($id);
      return view('profile.edit',compact('post'));
    }
    //@param  \Illuminate\Http\Request  $request
    //@param  int  $id
    //return \Illuminate\Http\Response
    public function update(Request $request, $id)
    {
      $post =\App\Blog_post::find($id);
      $post->title =$request->input('title');
      $post->link=$request->input('link');
      $post->text =$request->input('text');
      $post->user_id = \Auth::id();
      $post->save();
      return redirect('/');

    }
}
