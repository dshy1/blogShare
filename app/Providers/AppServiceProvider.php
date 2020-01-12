<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
// use Illuminate\Pagination\Paginator;
use App\Models\Categoria;


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
                // nome do cliente para title
                $cliente = "Share Comunicação";
                // caminho para js, css e images (se for para o host, coloca public/)
                $caminho = '';

                $view->with('cliente', $cliente)
                     ->with('caminho', $caminho)
                     ->with('categorias', $categorias);
  
        });
    }
}
