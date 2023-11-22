<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();// desactivarle a los modelos la propiedad unguard , significando que dejara pasar todos los campos que lleve
        // el fillable del resto lo ingnorara teniendo en cuenta que tambien dentro de ella pueden ir los campos que no se quieren 
        //pasar, modificar en la base de datos por ende se dejan vacio y indecandole asi mismo que no llevara nada . 
    }
}
