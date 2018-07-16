<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //Variables formulario Persona
        view()->composer('personas.form', function ($view) {
            $view->with([
                'ciudades' => \App\Ciudad::lista(),
                'documento_tipos' => \App\DocumentoTipo::orderBy('tipo', 'ASC')->get()
            ]);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
