<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function about(){
        return view(view: 'about');
    }

    public function test(){
        return view(view: 'admin.pages.dashboard');
    }

    public function index(){
        return view(view: 'index');
    }

    public function blog(){
        return view(view: 'blog');
    }

    public function blogDetails(){
        return view(view: 'blog_details');
    }
}
