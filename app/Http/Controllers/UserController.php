<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use Session;



class UserController extends Controller
{


   public function __construct() {

        $this->middleware('auth');
        
    }


    public function index() {

        $users = User::orderBy('id', 'desc')->paginate(6);

        return view('users.lista', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('users.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {


        // validate
        $validator = $this->validate($request, [
            'name'   => 'required',
            'email'  => 'required|unique:users'

        ]);

        try{

            // \DB::beginTransaction();

            # Cria o um novo usuário
            $user = User::create([
                'name'     => $request->get('name'),
                'email'    => $request->get('email'),
                'password' => bcrypt('123456789'),
                'image'    =>  NULL
            ]);


            # Atribui a politica de autor ao usuário criado
            $role = Role::where('name', 'autor')->get()->first();
            $user->roles()->attach($role);

            // \DB::commit();

            # status de retorno
            Session::flash('success', ' O usuário foi salvo com sucesso!');
            return redirect()->route('users.index');


        }catch (\Exception $exception) {

            // \DB::rollback();

            # status de retorno
            Session::flash('error', ' O usuário não pôde ser cadastrado!');
            return redirect()->back()->withInput();
        }

        return redirect()->route('users.index');


    } // end store

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
        $user  = User::findOrFail($id);

        return view('users.edit', compact('user')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {


        // validate
        $validator = $this->validate($request, [
            'name'             => 'required',
            'password-confirm' => 'same:password'

        ]);

        $user = User::findOrFail($id);

        # caminho da pasta para salvar as imagens do upload
        $pasta_img = 'images' . DIRECTORY_SEPARATOR . 'users';

        $user->name = $request->input('name');
         # Password
        // Se o usuário criar uma nova senha, salva
        if (isset($request->password)) {
            $user->password  = bcrypt($request->input('password'));
        }

        $user->password = $user->password;

        $user->save();
         # Imagem Upload
        // Se o usuário fizer upload de uma imagem nova
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $arquivo_user = $request->file('image');
            $extensao     = $arquivo_user->getClientOriginalExtension();
            $nome_arquivo = 'user_' . rand(11111111, 99999999) . '.' . $extensao;
            $upload       = $arquivo_user->storeAs($pasta_img, $nome_arquivo);
            $user->image  = $nome_arquivo;

        }

        $user->image = $user->image;

        $user->save();
        # status de retorno
        Session::flash('success', ' O usuário foi atualizado com sucesso!');
        return redirect()->route('users.index');        

    }// end update

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        try{

            $user = User::findOrFail($id);
            $user->delete();

            # status de retorno
            Session::flash('success', ' O usuário foi deletado com sucesso!');

            return redirect()->route('users.index');

        }catch (\Exception $exception){

            # status de retorno
            Session::flash('error', 'Falha ao deletar o usuário!');

            return redirect()->route('users.index');

        }
    }
}
