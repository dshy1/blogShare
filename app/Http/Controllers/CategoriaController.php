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
     
        $this->middleware('auth');
        // $this->middleware('permission:lista-categoria');
        // $this->middleware('permission:cria-categoria', ['only' => ['create','store']]);
        // $this->middleware('permission:atualiza-categoria', ['only' => ['edit','update']]);
        // $this->middleware('permission:deleta-categoria', ['only' => ['destroy']]);
        
    }

    // Traz todos as categorias cadastradas para mostrar no dashboard, na página /categorias
    public function index() {
       
       $categorias = Categoria::all();

       return view('categorias.lista', compact('categorias'));
    }

   
    public function create() {
       
       return view('categorias.novo');

    }

  
    public function store(Request $request) {
  
        // validate
        $validator = $this->validate($request, [
            'nome' => 'required|unique:categorias'

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

   
    public function show($id)
    {
        //
    }

   
    public function edit($id) {
      
         $categoria = Categoria::find($id);
         return view('categorias.edit', compact('categoria'));
    }

    
    public function update(Request $request, $id) {

        // validate
        $validator = $this->validate($request, [
            'nome' => 'required|unique:categorias'

        ]);

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

        return redirect()->route('categorias.index');
    }

   
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
    
}// end class
