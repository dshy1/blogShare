<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
// use App\Models\Role;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;


class CategoriaController extends Controller
{
    protected $request;
    protected $categoria;

    public function __construct(Request $request, Categoria $categoria){
        $this->request = $request;
        $this->categoria = $categoria;
        $this->middleware('auth');
        // $this->middleware('permission:lista-categoria');
        // $this->middleware('permission:cria-categoria', ['only' => ['create','store']]);
        // $this->middleware('permission:atualiza-categoria', ['only' => ['edit','update']]);
        // $this->middleware('permission:deleta-categoria', ['only' => ['destroy']]);
        
    }

    public function index() {
       
       return view('categorias.lista');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
       
       return view('categorias.novo');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
         try{

            // validate
            $validatedData = $request->validate([
                'nome' => 'required|unique:categorias',
            ]);

            // request
            $categoria = Categoria::create([
                'nome'        => $request->get('nome'),
                'descricao'   => $request->get('descricao')
            ]);

            # status de retorno
            Session::flash('success', $request['nome'] . ' cadastrado com sucesso!');

        }catch (\Exception $exception){

            # status de retorno
            Session::flash('error',' A categoria não pôde ser cadastrada!');
            

            return redirect()->back()->withInput();
        }

        return redirect()->route('categorias.index');


    }

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
