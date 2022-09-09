<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function about(){
        return view('Pages.about');
    }
    public function contact(){
        return view('Pages.contact');
    }
}
