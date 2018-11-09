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

    public function update(Request $request, Blog_post $post)
    {
      $postUpdate = Blog_post::where('id'.$post->update)->update([
        'title'->$request->Input('title'),
        'text'->$request->Input('text'),
        'link'->$request->Input('link')
      ]);
      if($postUpdate){
        return redirect()->route('profile.show',['post'->$post->id])with('success','Blog post updated successfully');
      }
      return back()-withInput();
    }
*/
}
