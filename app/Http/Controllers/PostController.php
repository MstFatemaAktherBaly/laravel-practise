<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
 function home(){
    return view('addPost');
 }

 function allposts(){
   
   $posts = Post::latest()->paginate(2);
  
    return view( 'allPosts', compact('posts') );
 }
 

function storePost(Request $request){
  
$request->validate([
   'title' => 'required|max:10',
   'detail' => 'required',
   'author' =>  'required',
], [
   'title.required'=> "Enter Your Title",
   'detail.required'=>"Enter Your Detail",
]

);

//*store Data
$post  = new Post();
$post ->title = $request->title;
$post->detail = $request->detail;
$post->author= $request->author;
$post->save();

return back()->with("success","Your post has been submitted");

}

function deletePost($id){
   
   $post = Post::findOrFail( $id );
   $post->delete();
 return back();

}

function postEdit($id){
   $posts = Post::find($id);
   // dd( $posts );

   return view( 'editPost', compact( 'posts') );
}

}

