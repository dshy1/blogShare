<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;



class PostController extends Controller {

    protected $request;
    protected $post;

    public function __construct(Request $request, Post $post) {

        $this->middleware('auth');

    }

    // Traz todos os posts
    public function index() {

        $user = Auth::user();

        // Se o usuario for admin, trazer todos os posts
        if ($user->roles()->first()->name == 'admin') {
          
          $posts = Post::with('autor')->with('categorias')->orderBy('id', 'desc')->paginate(6);  
        }
        // Senão trazer somente os posts de quem está logado
        else {

            $posts = Post::where('user_id', Auth::user()->id)->with('categorias')->orderBy('id', 'desc')->paginate(6);
        }

        return view('admin.posts.lista', compact('posts', 'user'));
    }


    public function create() {

        $categorias = Categoria::all();

        return view('admin.posts.create', compact('categorias', 'catgs_post'));
    }


    public function store(Request $request) {

        // validate
        $validator = $this->validate($request, [
            'titulo'     => 'required|unique:posts|max:255',
            'texto'      => 'required',
            'categorias' => 'required|array|min:1',
            'image'      => 'mimes:jpeg,jpg,png,gif|required|max:10000'// max 10000kb

        ]);

        try{

            # Salvar as imagens na pasta storage/app/public/imagens/posts
            // cria a pasta images e dentro dela a pasta posts
            $pasta_post = 'images' . DIRECTORY_SEPARATOR . 'posts';

            // Verifica se houve um upload de uma imagem válida
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                // pega a imagem
                $arquivo_post = $request->file('image');
                // pega a extensao da imagem
                $extensao = $arquivo_post->getClientOriginalExtension();
                // cria um novo nome pra imagem com a extensao
                $nome_arquivo = 'post_' . rand(11111111, 99999999) . '.' . $extensao;
                // salva a imagem
                $upload = $arquivo_post->storeAs($pasta_post, $nome_arquivo);
            }


            $post = Post::create([
                'titulo' => $request->get('titulo'),
                'slug'   => Str::slug($request->get('titulo'), '-'),
                'texto'  => $request->get('texto'),
                'image'  => $nome_arquivo
            ]);

            # Vincula as categorias
            $post->categorias()->sync($request->get('categorias'));

            # Pega o usuario logado
            $user = Auth::user();
            
            # Salva o post para esse usuario
            $user->posts()->save($post);

            # status de retorno
            Session::flash('success', ' Post criado com sucesso!');
            return redirect()->route('posts.index');


        }catch (\Exception $exception) {

            # status de retorno
            Session::flash('error', ' O post não pôde ser cadastrado!');
            return redirect()->back()->withInput();
        }

        return redirect()->route('posts.index');
       
    } // end store


    public function show(Post $post) {

        $post       = Post::with('categorias')->with('autor')->get()->find($post);
        $categorias = Categoria::all();

        return view('admin.posts.show', compact('post', 'categorias')); 

    }

  
    public function edit($id) {
       
        $post        = Post::with('categorias')->find($id);
        $catgs_post  = $post->categorias->pluck('id', 'id')->all();
        $categorias  = Categoria::all();

        return view('admin.posts.edit', compact('post', 'catgs_post', 'categorias')); 
    }

   
    public function update(Request $request, $id) {
        

        // validate
        $validator = $this->validate($request, [
            'titulo'     => 'required|max:255',
            'texto'      => 'required',
            'categorias' => 'required|array|min:1'

        ]);

        $post = Post::findOrFail($id);

        # Salvar as imagens na pasta storage/app/public/imagens/posts
        $pasta_post   = 'images' . DIRECTORY_SEPARATOR . 'posts';

        $post->titulo = $request->input('titulo');
        $post->slug   = Str::slug($post->titulo, '-');
        $post->texto  = $request->input('texto');

        $post->save();

        # Vincula as categorias
        $post->categorias()->sync($request->get('categorias'));

        # Imagem Upload
        // Se o usuário fizer upload de uma imagem nova, salva
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $arquivo_post = $request->file('image');
            $extensao     = $arquivo_post->getClientOriginalExtension();
            $nome_arquivo = 'post_' . rand(11111111, 99999999) . '.' . $extensao;
            $upload       = $arquivo_post->storeAs($pasta_post, $nome_arquivo);
            $post->image = $nome_arquivo;

        }
        // Senão mantem a imagem atual
        $post->image = $post->image;

        $post->save();

        # status de retorno
        Session::flash('success', ' Post atualizado com sucesso!');
        return redirect()->route('posts.index');


    } // end update


    public function destroy($id) {
        
        try{

            $post = Post::findOrFail($id);
            $post->delete();

            # status de retorno
            Session::flash('success',  ' Post deletado com sucesso!');

            return redirect()->route('posts.index');

        }catch (\Exception $exception){

            # status de retorno
            Session::flash('error', 'Falha ao deletar o post!');

            return redirect()->route('posts.index');

        }
    }


} // end class
