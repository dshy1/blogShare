<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use DB;



class PostController extends Controller {

    protected $request;
    protected $post;

    public function __construct(Request $request, Post $post) {

        $this->request = $request;
        $this->post = $post;
        $this->middleware('auth');
        // $this->middleware('permission:lista-posts');
        // $this->middleware('permission:cria-posts', ['only' => ['create','store']]);
        // $this->middleware('permission:atualiza-posts', ['only' => ['edit','update']]);
        // $this->middleware('permission:deleta-posts', ['only' => ['destroy']]);

    }

    public function index() {

        $posts = Post::with('autor')->with('categorias')->orderBy('id', 'desc')->paginate(6);

        return view('posts.lista', compact('posts'));
    }


    public function create() {

        $categorias = Categoria::all();

        return view('posts.novo', compact('categorias', 'catgs_post'));
    }


    public function store(Request $request) {

        // dd($request);

        // validate
        $validator = $this->validate($request, [
            'titulo'     => 'required|unique:posts',
            'texto'      => 'required',
            'categorias' => 'required|array|min:1',
            'image'      => 'required'

        ]);

        try{

            // Salvar as imagens na pasta storage
            // cria a pasta images e dentro dela a pasta posts
            $pasta_post = 'images' . DIRECTORY_SEPARATOR . 'posts';

            // Verifica se houve um upload de uma imagem válida
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                // pega a imagem
                $arquivo_post = $request->file('image');
                // pega a extensao da imagem
                $extensao  = $arquivo_post->getClientOriginalExtension();
                // cria um novo nome pra imagem com a extensao
                $nome_arquivo = 'post_' . rand(11111111, 99999999) . '.' . $extensao;
                // salva a imagem
                $upload = $arquivo_post->storeAs($pasta_post, $nome_arquivo);
            }

            // \DB::beginTransaction();

            $post = Post::create([
                'titulo' => $request->get('titulo'),
                'slug'   => Str::slug($request->get('titulo'), '-'),
                'texto'  => $request->get('texto'),
                'image'  =>  $nome_arquivo
            ]);

            # Vincula as categorias
            $post->categorias()->sync($request->get('categorias'));

            // \DB::commit();

            # status de retorno
            Session::flash('success', ' O post foi salvo com sucesso!');
            return redirect()->route('posts.index');


        }catch (\Exception $exception) {

            // \DB::rollback();
            # status de retorno
            Session::flash('error', ' O post não pôde ser cadastrado!');
            return redirect()->back()->withInput();
        }

        return redirect()->route('posts.index');
       
    } // end store

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) {

        $post  = Post::with('categorias')->with('autor')->get()->find($post);

        return view('posts.show', compact('post')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) {
       
        $post  = Post::with('categorias')->get()->find($post);
        $catgs_post  = $post->categorias->pluck('id', 'id')->all();
        $categorias   = Categoria::all();

        return view('posts.edit', compact('post', 'catgs_post', 'categorias')); 
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
            'titulo'     => 'required',
            'texto'      => 'required',
            'categorias' => 'required|array|min:1',
            'image'      => 'required'

        ]);

        try{

            # caminho das pastas de arquivos
            $pasta_post = 'images' . DIRECTORY_SEPARATOR . 'posts';

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $arquivo_post = $request->file('image');
                $extensao  = $arquivo_post->getClientOriginalExtension();
                $nome_arquivo = 'post_' . rand(11111111, 99999999) . '.' . $extensao;
                $upload = $arquivo_post->storeAs($pasta_post, $nome_arquivo);
            }

            // \DB::beginTransaction();
            $post->titulo = $request->input('titulo');
            $post->slug   = Str::slug($post->titulo, '-');
            $post->texto  = $request->input('texto');
            $post->image  = $nome_arquivo;

            $post->save();

            # Vincula as categorias
            $post->categories()->sync($request->input('categorias'));

            // \DB::commit();

            # status de retorno
            Session::flash('success', ' O post foi atualizado com sucesso!');
            return redirect()->route('posts.index');

        }catch (\Exception $exception) {

            // \DB::rollback();
            # status de retorno
            Session::flash('error', ' O post não pôde ser atualizado!');
            return redirect()->back()->withInput();
        }

        return redirect()->route('posts.index');

    } // end update

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        try{

            $post = Post::findOrFail($id);
            $post->delete();

            # status de retorno
            Session::flash('success', ' O post foi deletado com sucesso!');

            return redirect()->route('posts.index');

        }catch (\Exception $exception){

            # status de retorno
            Session::flash('error', 'Falha ao deletar o post!');

            return redirect()->route('posts.index');

        }
    }


} // end class
