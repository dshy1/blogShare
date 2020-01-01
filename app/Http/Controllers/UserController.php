<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use Session;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

            $user = User::create([
                'name'     => $request->get('name'),
                'email'    => $request->get('email'),
                'password' => bcrypt('123456789'),
                'image'    =>  NULL
            ]);


            # Vincula a politica de autor ao usuário
            $role = Role::findOrFail(2);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
