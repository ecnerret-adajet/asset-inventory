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
    mix.sass('app.scss');
    
    
       mix.styles([
        'bootstrap.min.css',
        'bootstrap-select.min.css',
        'select2.min.css',
        'dataTables.bootstrap.min.css',
        'responsive.bootstrap.min.css',
        'dataTables.tableTools.css',
        'style.css'
    ], null, 'public/css');
    
    
      mix.scripts([
        'bootstrap-select.min.js',
        'jquery.min.js',
        'bootstrap.min.js',
        'select2.min.js',
        'bootstrap-filestyle.min.js',
        'laravel-bootstrap-modal-form.js',
        'jquery.dataTables.min.js',
        'dataTables.responsive.min.js',
        'responsive.bootstrap.min.js',
        'jquery.dataTables.columnFilter.js',
        'dataTables.tableTools.min.js',
        'dataTables.bootstrap.min.js'
    ], null, 'public/js');
});


