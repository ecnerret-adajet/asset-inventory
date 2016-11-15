var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
       mix.styles([
        '_all-skins.min.css',
        'AdminLTE.css',
        'bootstrap.min.css',
        'bootstrap-select.min.css',
        'custom.css',
        'dataTables.bootstrap.min.css',
        'dataTables.tableTools.css',
        'font-awesome.min.css',
        'ionicons.min.css',
        'jquery-jvectormap-1.2.2.css',
        'responsive.bootstrap.min.css',
        'select2.min.css'
    ], 'public/css/all.css');
  
});


