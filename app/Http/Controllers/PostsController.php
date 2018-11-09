<?php

namespace App\Http\Controllers;
use App\Blog_post;

use Illuminate\Http\Request;

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

  /*
    public function edit(Request $request, $id)
    {
   $title = $request->input('title');
      $link = $request->input('link');
      $$text =$request->input('text');
      Blog_post::update('update post set title = ? where id = ?,[$title,$id]');
      Blog_post::update('update post set link = ? where id = ?,[$link,$id]');
      Blog_post::update('update post set text = ? where id = ?,[$text,$id]');
      echo "Record updated successfully.<br/>";
      echo '<a href = "/">Click Here</a> to go back.';*/
    }
}
