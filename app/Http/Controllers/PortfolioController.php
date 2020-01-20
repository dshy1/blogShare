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

    public function index() {

        $portfolios = Portfolio::orderBy('id', 'desc')->paginate(6); 

        return view('clientes.lista', compact('portfolios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
        return view('clientes.novo');
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

    }// end class

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

        $portfolio = Portfolio::find($id);

        return view('clientes.edit', compact('portfolio')); 
        
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
