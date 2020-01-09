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
        $posts = Post::where('user_id', Auth::user()->id)->with('categorias')->orderBy('id', 'desc')->limit(3)->get();

        $categorias = Categoria::orderBy('id', 'desc')->limit(4)->get();

        // dd($categorias->isEmpty());

        return view('home', compact('posts', 'categorias', 'users'));
    }
}
