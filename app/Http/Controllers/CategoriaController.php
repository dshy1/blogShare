<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;


class CategoriaController extends Controller {

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
       
       $categorias = Categoria::all();

       return view('categorias.lista', compact('categorias'));
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

         
        // validate
        $validatedData = $request->validate([
            'nome' => 'required|unique:categorias',
        ]);


         try{

            // request
            $categoria = Categoria::create([
                // 'nome'     =>ucwords($request->get('nome')),// salvar com letras maiúsculas
                'nome'        =>$request->get('nome'),
                'descricao'   => $request->get('descricao'),
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
    public function edit($id) {
      
         $categoria = Categoria::find($id);
         return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
            
         try{

            $categoria = Categoria::find($id);
            $categoria->fill($request->all());

            $categoria->save();

            # status de retorno
            Session::flash('success', $request['nome'] . ' editado com sucesso!');

            return redirect()->route('categorias.index');

        }catch (\Exception $exception){

            # status de retorno
            Session::flash('error',' A categoria não pôde ser editada!');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        try{
            $categoria = Categoria::findOrFail($id);
            $categoria->delete();

            # status de retorno
            Session::flash('success',' A categoria foi deletada com sucesso!');

            return redirect()->route('categorias.index');

        } catch (\Exception $exception){
            # status de retorno
            Session::flash('error',' A categoria não pôde ser deletada!');
            
            return redirect()->route('categorias.index');
        }

    }
}
