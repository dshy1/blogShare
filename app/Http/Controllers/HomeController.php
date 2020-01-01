<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Post;
use App\Models\Categoria;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $user = Auth::user();
        $users = User::orderBy('id', 'desc')->limit(4)->get();
        // $posts = Post::with('autor')->with('categorias')->orderBy('id', 'desc')->limit(3)->get();
        $posts = Post::where('user_id', Auth::user()->id)->with('categorias')->orderBy('id', 'desc')->limit(3)->get();

        // dd($posts->contains(0));
        // dd($posts->isEmpty());

        $categorias = Categoria::orderBy('id', 'desc')->limit(4)->get();


        // dd($posts[0]->categorias[0]);

         // Mostra os jobs de acordo com o usuário logado
        // $coordenando  = \Auth::user()->coordenando()->orderBy('created_at', 'desc')->get();
        // $avaliando    = \Auth::user()->avaliando()->orderBy('created_at', 'desc')->get();
        // $executando   = \Auth::user()->jobs()->orderBy('created_at', 'desc')->get();
        // $cliente      =  Cliente::where('user_id', \Auth::user()->id)->get()->first();

        // return view('home', compact('executando', 'avaliando', 'coordenando', 'cliente', 'projetos'));

        return view('home', compact('posts', 'categorias', 'users'));
    }
}
