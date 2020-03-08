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
        
    }

    // Traz todos as categorias cadastradas na página admin/categorias
    public function index() {
       
       $categorias = Categoria::orderBy('id', 'desc')->get()->paginate(6);

       // dd($categorias);

       return view('admin.categorias.index', compact('categorias'));
    }

   
    public function create() {
       
       return view('admin.categorias.create');

    }

  
    public function store(Request $request) {
  
        // validate
        $validator = $this->validate($request, [
            'nome' => 'required|unique:categorias'

        ]);

        try{

            $categoria = Categoria::create([
                'nome'        =>$request->get('nome'),
                'descricao'   => $request->get('descricao'),
            ]);

            # status de retorno
            Session::flash('success', ucfirst($request['nome']) . ' cadastrado com sucesso!');

        }catch (\Exception $exception){

            # status de retorno
            Session::flash('error',' A categoria não pôde ser cadastrada!'); 

            return redirect()->back()->withInput();
        }

        return redirect()->route('categoria.index');

    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id) {
      
         $categoria = Categoria::find($id);
         return view('categoria.edit', compact('categoria'));
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

            return redirect()->route('categoria.index');

        }catch (\Exception $exception){

            # status de retorno
            Session::flash('error',' A categoria não pôde ser editada!');

            return redirect()->back()->withInput();
        }

        return redirect()->route('categoria.index');
    }

   
    public function destroy($id) {
        
        try{
            $categoria = Categoria::findOrFail($id);
            $categoria->delete();

            # status de retorno
            Session::flash('success',' A categoria foi deletada com sucesso!');

            return redirect()->route('categoria.index');

        } catch (\Exception $exception){
            # status de retorno
            Session::flash('error',' A categoria não pôde ser deletada!');
            
            return redirect()->route('categoria.index');
        }

    }
    
}// end class
