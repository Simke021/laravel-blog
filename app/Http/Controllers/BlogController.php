<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class BlogController extends Controller
{
	public function getIndex(){

		// Uzimam sve postove iz baze i prikazujem 10 po strani
		$posts = Post::paginate(5);
    	return view('blog.index')->withPosts($posts);	
    }

    public function getSingle($slug){
		
		// Uzimam iz baze slug                   
		$post = Post::where('slug', '=', $slug)->first();

		// return view i dodajem u post objekat
		return view('blog.single')->withPost($post);
    }


}
