<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.welcome');
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