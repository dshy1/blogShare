<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class SiteController extends Controller
{

     public function index() {

        return view('site.home');

    }

    public function sobre() {

        return view('site.sobre');
        
    }

    public function servicos() {

        return view('site.servicos');
        
    }

    public function contato() {

        return view('site.contato');
        
    }

    public function lista() {

    	$posts = Post::with('autor')->with('categorias')->orderBy('id', 'desc')->paginate(6); 

        return view('site.lista', compact('posts'));
        
    }
}
