<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;

class PesquisaController extends Controller
{
    // Pesquisar por categoria na sidebar
    public function pesquisaCategoria(Request $request) {

        $categorias = Categoria::all();

        $posts = Post::whereHas('categorias', function ($query) use ($request) {
            $query->where('categorias.id', $request->id);
        })->paginate(6);

		$count = count($posts);

        return view('site.lista', compact('categorias', 'posts', 'count'));    
            
    }

    // Pesquisar por tag
    public function pesquisaTag($tag) {

        $word = $tag;

		$posts = Post::where('titulo', 'LIKE', "%{$word}%")->latest()->paginate(6);
	
		$count = count($posts);

        return view('site.lista', compact('posts', 'count'));    
            
    }

}// end class
