<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Http\Livewire\TestH1;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Livewire::component('test-h1', TestH1::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
