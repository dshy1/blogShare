<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
     public function index() {

        // $user = Auth::user();

        // if ($user->roles()->first()->name == 'admin') {
          
        //   $posts = Post::with('autor')->with('categorias')->orderBy('id', 'desc')->paginate(6);  
        // }
        // else {

        //     $posts = Post::where('user_id', Auth::user()->id)->with('categorias')->orderBy('id', 'desc')->paginate(6);
        // }

        return view('site.home');
    }
}
