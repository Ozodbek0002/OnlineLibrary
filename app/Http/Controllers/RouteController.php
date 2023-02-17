<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{

    public function main(){
        return view('User.main');
    }

    public function products(){
        return view('User.products');
    }

    public function about(){
        return view('User.about');
    }

    public function contact(){
        return view('User.contact');
    }
}
