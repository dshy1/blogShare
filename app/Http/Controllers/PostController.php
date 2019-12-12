<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Session;


class PostController extends Controller
{
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

        $posts = Post::with('autor')->with('categorias')->orderBy('id','desc')->paginate(6);

        // dd($posts);

        return view('posts.lista', compact('posts'));

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
        $categorias = Categoria::all();
        return view('posts.novo', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // dd($request);
        // validate
        $validatedData = $request->validate([
            'titulo'     => 'required|unique:posts',
            'texto'      => 'required',
            'categorias' => 'required',
            'image'      => 'required'
        ]);

         try{

            \DB::beginTransaction();

            $post = new Post();

            $post->titulo = $request->get('titulo');
            $post->slug = Str::slug($post->titulo, '-');
            $post->texto  = $request->get('texto');
            $post->save();

            $post->categorias()->attach($request->get('categorias'));
            $post->image  = $request->get('image');

            if($request->file('image')) { 
                // ** salvar normal
                // $path = Storage::disk('public')->put('images', $request->file('image'));
                // $post->fill( ['image'=> asset($path)] )->save();

                // ** Imagem Upload - salvar no host compartilhado
                // $path = Storage::disk('public')->put('images', $request->file('image'));
                // $post->fill(['image' => asset('public/' . $path)])->save();

                $path = Storage::disk('public')->put('images', $request->file('image'));
                $post->fill(['image' => asset('public/' . $path)])->save();

            }  

            $post->save();

            \DB::commit();

            # status de retorno
            Session::flash('success', $request['titulo'] . ' cadastrado com sucesso!');
            return redirect()->route('posts.show', $post->id); 

        }catch(\Exception $exception) {

            \DB::rollBack();
            # status de retorno
            Session::flash('error',' O post não pôde ser cadastrado!');

            return redirect()->back()->withInput();
        }

        return redirect()->route('posts.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        

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
}
