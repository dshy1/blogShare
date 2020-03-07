<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Categoria;
use Route;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {

            Schema::defaultStringLength(191);

            view()->composer('*', function($view) {
                // trazer todas as categorias para mostrar nos includes(sidebar)
                $categorias = Categoria::orderBy('id', 'desc')->limit(5)->get();
                // nome da minha plataforma para usar no title
                $plataforma = "jana.Blog";
                // nome do cliente para title
                $cliente = "Share Comunicação";
                // path(caminho) para os arquivos js, css e images (se for para o host, coloca public/)
                $path = '';

                $view->with('cliente', $cliente)
                     ->with('path', $path)
                     ->with('categorias', $categorias)
                     ->with('plataforma', $plataforma);
  
            });

            // Mudando os verbos das rotas
            Route::resourceVerbs([

                'create' => 'novo',
                'edit'   => 'editar'

            ]);

    }
}
