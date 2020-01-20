<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Portfolio;



class SiteController extends Controller
{

     public function index() {

        $portfolios = Portfolio::orderBy('id','desc')->limit(15)->get();

        // dd($portfolios);

        return view('site.home', compact('categorias', 'portfolios'));

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

    // Mostra o blog com todos os posts
    public function lista() {

    	$posts = Post::with('autor')->with('categorias')->orderBy('id', 'desc')->paginate(4); 

        return view('site.lista', compact('posts'));
        
    }

    // Mostra todos detalhes do post pelo slug
    public function show($slug) {

        $post = Post::where('slug', $slug)->with('autor')->first();

        return view('site.show', compact('post'));
    }
}
