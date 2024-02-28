<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
 function home(){
    return view('addPost');
 }

 function allposts(){
    return view( 'allPosts' );
 }

function storePost(Request $request){
  
$request->validate([
   'title' => 'required|max:5',
   'detail' => 'required',
   'author' =>  'required',
], [
   'title.required'=> "Enter Your Title",
   'detail.required'=>"Enter Your Detail",
]

);


}

}

