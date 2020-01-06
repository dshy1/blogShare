<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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

            view()->composer('*', function($view){
                // nome do cliente para title
                $cliente = "Share Comunicação";
                // caminho para js, css e images (se for para o host, coloca public/)
                $caminho = '';

                $view->with('cliente', $cliente)->with('caminho', $caminho);
  
        });
    }
}
