<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        // dd($user->name);

         // Mostra os jobs de acordo com o usuário logado
        // $coordenando  = \Auth::user()->coordenando()->orderBy('created_at', 'desc')->get();
        // $avaliando    = \Auth::user()->avaliando()->orderBy('created_at', 'desc')->get();
        // $executando   = \Auth::user()->jobs()->orderBy('created_at', 'desc')->get();
        // $cliente      =  Cliente::where('user_id', \Auth::user()->id)->get()->first();

        // return view('home', compact('executando', 'avaliando', 'coordenando', 'cliente', 'projetos'));

        return view('home');
    }
}
