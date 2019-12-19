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
        // $this->middleware('permission:lista-categoria');
        // $this->middleware('permission:cria-categoria', ['only' => ['create','store']]);
        // $this->middleware('permission:atualiza-categoria', ['only' => ['edit','update']]);
        // $this->middleware('permission:deleta-categoria', ['only' => ['destroy']]);

    }

    public function index() {

        $posts = Post::with('autor')->with('categorias')->orderBy('id', 'desc')->paginate(6);

        // dd($posts);
        return view('posts.lista', compact('posts'));
    }


    public function create() {

        $categorias = Categoria::all();

        return view('posts.novo', compact('categorias'));
    }


    public function store(Request $request) {

        // validate
        $validator = $this->validate($request, [
            'titulo'     => 'required|unique:posts',
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

            $post = Post::create([
                'titulo' => $request->get('titulo'),
                'slug'   => Str::slug($request->get('titulo'), '-'),
                'texto'  => $request->get('texto'),
                'image' =>  $nome_arquivo,
            ]);

            # Vincula as categorias
            $post->categorias()->sync($request->get('categorias'));

            // \DB::commit();

            # status de retorno
            Session::flash('success', ' O post foi salvo com sucesso!');
            return redirect()->route('posts.show')->with($post->id);


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

        $post  = Post::with('categorias')->get()->find($post);

        // dd($post->titulo);

        return view('posts.show', compact('post')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
    }


} // end class
