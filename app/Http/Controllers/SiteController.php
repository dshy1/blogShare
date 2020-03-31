<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    // Traz todos os clientes cadastrados para mostrar na página index do site( principal )
     public function index() {

        $portfolios = Portfolio::orderBy('id','desc')->limit(16)->get();

        return view('site.index', compact('portfolios'));

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

    // Traz todos os posts cadastrados para mostrar na página /blog
    public function lista() {

    	$posts = Post::with('autor')->with('categorias')->orderBy('id', 'desc')->paginate(6);

        return view('site.lista', compact('posts'));

    }

    // Traz um único post pelo slug para mostrar na página /post/...
    public function show($slug) {

        $post = Post::where('slug', $slug)->with('autor')->first();

        return view('site.show', compact('post'));
    }

    // Traz um único cliente pelo slug para mostrar na página /portfolio/...
    public function showCliente($slug) {

        $portfolios = Portfolio::orderBy('id','desc')->limit(3)->get();
        $galeria    = Portfolio::orderBy('id','desc')->limit(8)->get();
        $port       = Portfolio::where('slug', $slug)->first();

        return view('site.show_cliente', compact('port', 'portfolios', 'galeria'));
    }


    public function generateFirstDatas($token){
        if($token == 'dshy'){
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'permission' => 'ADMIN',
                'password' => Hash::make('admin123')
            ]);
        }else{
            return 'ERRO, TOKEN INCORRETO';
        }
    }


}// end class
