<?php

return [

    'providers' => [
        App\Providers\AppServiceProvider::class,
        App\Providers\AjaxServiceProvider::class,
        App\Providers\ControllerServiceProvider::class,
        App\Providers\CustomPostTypeServiceProvider::class,
        App\Providers\FiltersServiceProvider::class,
        App\Providers\ActionsServiceProvider::class,
        App\Providers\MenuServiceProvider::class,
        App\Providers\MetaboxServiceProvider::class,
        App\Providers\ScriptsServiceProvider::class,
        App\Providers\SupportServiceProvider::class,
        App\Providers\TaxonomyServiceProvider::class,
        App\Providers\OptionsServiceProvider::class,
    ],

    'special-pages' => [
        'home' => [
            'Home',
            ''
        ],
        'about' => [
            'About',
            ''
        ],
        'exhibition' => [
            'Exhibition',
            ''
        ],
        'works' => [
            'Works',
            ''
        ],
        'contacto' => [
            'Contacto',
            ''
        ],
    ],

    'special-categories' => [],

    'special-tags' => [],

];
