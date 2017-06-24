let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css/app.css');


mix.styles([
    'resources/assets/libs/bootstrap/css/bootstrap.css',
    'public/css/app.css',
    'resources/assets/libs/select2/css/select2.css',
    'resources/assets/libs/font-awesome/css/font-awesome.min.css'
], 'public/css/final.css');

mix.scripts([
    'resources/assets/libs/jquery/jquery-3.1.0.min.js',
    'resources/assets/libs/bootstrap/js/bootstrap.min.js',
    'resources/assets/libs/select2/js/select2.js'
], 'public/js/final.js');
