<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller
{
    public function getIndex(){

        // Prikaz i Sortiranje Postova
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout(){
        $first = 'Aleksandar';
        $last  = 'Ljubišić';
        

        $fullname = $first . " " . $last;
        $email    = "nekiemail@email.com";

        $data     = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages.about')->withData($data);  //                           - treci nacin
        // return view('pages.about')->withFullname($fullname)->withEmail($email); - drugi nacin
        // $full  = $first . " " . $last;
        // return view('pages.about')->with("fullname", $full);                    - prvi nacin
    }

    public function getContact(){
        return  view('pages.contact');
    }
}