<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {

       return view ('admin.home');
    }

    public function home(){
        return view ('home.index');
    }


    public function about(){
        return view ('home.about');
    }


    public function contact(){
        return view ('home.contact');
    }

    public function page(){
       return view('admin.index');
    }
}

