<?php

namespace App\Services;

use Form;

class FormBuilder
{
    /**
     * Boot the Form Builder components-bootstrap.
     *
     * @return void
     */
     public static function boot()
    {
        Form::component('submitBootstrap', 'components-bootstrap.submit', [
            'value',
            'class' => '',
        ]);
        Form::component('destroyBootstrap', 'components-bootstrap.destroy', [
            'value',
            'message',
            'class' => '',
        ]);
        Form::component('controlBootstrap', 'components-bootstrap.control', [
            'type',
            'columns',
            'name',
            'errors',
            'label' => null,
            'value' => null,
            'pop' => null,
            'placeholder' => '',
        ]);
        Form::component('checkboxBootstrap', 'components-bootstrap.checkbox', [
            'name',
            'label',
        ]);
        Form::component('checkboxHorizontalBootstrap', 'components-bootstrap.checkboxHorizontal', [
            'name',
            'label',
            'value',
        ]);
        Form::component('selectBootstrap', 'components-bootstrap.select', [
            'name',
            'list' => [],
            'selected' => null,
            'label' => null,
        ]);    	
        Form::component('controlTachyons', 'components-tachyons.control', [
            'type',
            'label',
            'name',            
            'errors',
            'value' => null,
            'helper' => null,
            'required' => '(required)',
            'class' => 'mb4',
            'placeholder' => ''
        ]);
    }
}
