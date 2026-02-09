<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home'); // loads home.blade.php
    }

    public function about()
    {
        return view('user.about'); // loads about.blade.php
    }
    public function service() { return view('user.service'); }

    public function blog() { return view('user.blog'); }

    public function feature() { return view('user.feature'); }

    public function gallery() { return view('user.gallery'); }

    public function attraction() { return view('user.attraction'); }

    public function package() { return view('user.package'); }

    public function team() { return view('user.team'); }

    public function testimonial() { return view('user.testimonial'); }

    public function error404() { return view('user.404'); }

    public function contact() { return view('user.contact'); }


}
