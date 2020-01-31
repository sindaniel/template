<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        

        \Form::component('bsText', 'components.form.text', ['name', 'value' => null, 'attributes' => [], 'help'=>null]);
        \Form::component('bsTextarea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
        \Form::component('bsFile', 'components.form.file', ['name',  'attributes' => []]);
        \Form::component('bsPassword', 'components.form.password', ['name', 'attributes' => [], 'help'=>null]);
        \Form::component('bsSelect', 'components.form.select', ['name', 'options'=>[], 'value' => null, 'attributes' => []]);



    }
}
