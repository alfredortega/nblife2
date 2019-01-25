<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('text', 'components.form.text',['name', 'value' => null, 'attributes' => []]);
        Form::component('textarea', 'components.form.textarea',['name', 'value' => null, 'attributes' => []]);
        Form::component('submit', 'components.form.submit',['value' => 'submit', 'attributes' => []]);
        Form::component('hidden', 'components.form.hidden',['name', 'value' => null, 'attributes' => []]);
        Form::component('file', 'components.form.file',['name',  'attributes' => []]);
        Form::component('checkbox', 'components.form.checkbox',['name', 'value', 'isselected' => false, 'attributes' => []]);
        Form::component('radio', 'components.form.radio',['name', 'value', 'isselected' => false, 'attributes' => []]);
        Form::component('select', 'components.form.select',['name', 'options' => [], 'value' => null, 'attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
