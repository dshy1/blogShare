<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

class PortfolioController extends Controller
{

    protected $request;
    protected $portfolio;

    public function __construct(Request $request, Portfolio $portfolio) {

        $this->middleware('auth');

    }

    // Traz todos os clientes cadastrados para mostrar no dashboard, na página /clientes
    public function index() {
        
        $portfolios = Portfolio::orderBy('id', 'desc')->paginate(6); 

        return view('clientes.lista', compact('portfolios'));

    }

  
    public function create() {
        
        return view('clientes.novo');
    }

   
    public function store(Request $request) {

        // validate
        $validator = $this->validate($request, [
            'titulo'     => 'required|unique:portfolios|max:255',
            'texto'      => 'required',
            'image'      => 'mimes:jpeg,jpg,png,gif|required|max:10000'// max 10000kb

        ]);

        try{

            # Salvar as imagens na pasta storage/app/public/imagens/clientes
            // cria a pasta images e dentro dela a pasta clientes
            $pasta_clientes = 'images' . DIRECTORY_SEPARATOR . 'clientes';

            // Verifica se houve um upload de uma imagem válida
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                // pega a imagem
                $arquivo_post = $request->file('image');
                // pega a extensao da imagem
                $extensao = $arquivo_post->getClientOriginalExtension();
                // cria um novo nome pra imagem com a extensao
                $nome_arquivo = 'cliente_' . rand(11111111, 99999999) . '.' . $extensao;
                // salva a imagem
                $upload = $arquivo_post->storeAs($pasta_clientes, $nome_arquivo);
            }


            $cliente = Portfolio::create([
                'titulo' => $request->get('titulo'),
                'slug'   => Str::slug($request->get('titulo'), '-'),
                'texto'  => $request->get('texto'),
                'url'    => $request->get('url'),
                'image'  => $nome_arquivo
            ]);

            # Pega o usuario logado
            // $user = Auth::user();

            # Salva o post para esse usuario
            $cliente->save();

            # status de retorno
            Session::flash('success', 'O cliente foi salvo com sucesso!');
            return redirect()->route('clientes.index');


        }catch (\Exception $exception) {

            # status de retorno
            Session::flash('error', 'O cliente não pôde ser cadastrado!');
            return redirect()->back()->withInput();
            
        }

        return redirect()->route('clientes.index');

    }// end store

   
    public function show($id)
    {
        //
    }
   
    public function edit($id) {

        $portfolio = Portfolio::find($id);

        return view('clientes.edit', compact('portfolio')); 
        
    }
 
    public function update(Request $request, $id) {

        
        // validate
         $validator = $this->validate($request, [
            'titulo' => 'required|max:255',
            'texto'  => 'required',

        ]);


        $cliente = Portfolio::findOrFail($id);

        # Salvar as imagens na pasta storage/app/public/imagens/clientes
        $pasta_clientes  = 'images' . DIRECTORY_SEPARATOR . 'clientes';

        $cliente->titulo = $request->input('titulo');
        $cliente->slug   = Str::slug($cliente->titulo, '-');
        $cliente->texto  = $request->input('texto');
        $cliente->url    = $request->input('url');

        $cliente->save();

        # Imagem Upload
        // Se o usuário fizer upload de uma imagem nova, salva
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $arquivo_post   = $request->file('image');
            $extensao       = $arquivo_post->getClientOriginalExtension();
            $nome_arquivo   = 'cliente_' . rand(11111111, 99999999) . '.' . $extensao;
            $upload         = $arquivo_post->storeAs($pasta_clientes, $nome_arquivo);
            $cliente->image = $nome_arquivo;

        }
        // Senão mantem a imagem atual
        $cliente->image = $cliente->image;

        $cliente->save();

        # status de retorno
        Session::flash('success', ' O cliente foi atualizado com sucesso!');
        return redirect()->route('clientes.index');


    }// end update


    public function destroy($id) {
        
          try{

            $cliente = Portfolio::findOrFail($id);
            $cliente->delete();

            # status de retorno
            Session::flash('success', ' O cliente foi deletado com sucesso!');

            return redirect()->route('clientes.index');

        }catch (\Exception $exception){

            # status de retorno
            Session::flash('error', 'Falha ao deletar o cliente!');

            return redirect()->route('clientes.index');

        }
    }


}// end class
