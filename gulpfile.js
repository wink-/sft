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
 mix.sass('app.scss')
     .scripts([
      'libs/jquery.js',
      'libs/jquery.dataTables.js',
      'libs/dataTables.bootstrap.js',
      'libs/dataTables.buttons.js',
      'libs/jszip.js',
      'libs/pdfmake.js',
      'libs/vfs_fonts.js',
      'libs/buttons.html5.js',
      'libs/buttons.print.js',
      'libs/dataTables.colReorder.js',


     ], './public/js/libs.js')
     .styles([
  //    'libs/jquery.dataTables.css',
      'libs/dataTables.bootstrap.css',
      'libs/buttons.dataTables.css',
      'libs/colReorder.bootstrap.css',



      ], './public/css/libs.css');
});
