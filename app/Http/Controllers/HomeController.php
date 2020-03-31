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


    public function index() {

        $user  = Auth::user();
        $users = User::orderBy('id', 'desc')->limit(4)->get();
        $categorias = Categoria::orderBy('id', 'desc')->limit(4)->get();
        $listaPosts = null;
        $lastPost = null;
        // Se o usuario for admin, trazer todos os posts
         if ($user->permission == 'ADMIN') {

            $posts = Post::with('autor')->with('categorias')->orderBy('id', 'desc')->limit(3)->get();
            $listaPosts = Post::all();
            $lastPost = Post::latest()->first();

        }
        // Senão trazer somente os posts de quem está logado
        else {

            $posts = Post::where('user_id', Auth::user()->id)->with('categorias')->orderBy('id', 'desc')->limit(3)->get();
        }

        return view('home', compact('posts', 'categorias', 'users', 'listaPosts', 'lastPost'));
    }
}
