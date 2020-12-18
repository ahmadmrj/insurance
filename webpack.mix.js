const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('node_modules/mdbootstrap/js/mdb.js', 'public/js')
    .copy('node_modules/mdbootstrap/css/mdb.css', 'resources/css/mdb.css')
    .sass('resources/css/app.scss', 'public/css')
    .styles(['resources/css/mdb.css', 'public/css/app.css'], 'public/css/app.css');
