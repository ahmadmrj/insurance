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
    // .js('node_modules/popper.js/dist/popper.js', 'public/js')
    // .js('node_modules/jquery/dist/jquery.js', 'public/js')
    // .js(['node_modules/bootstrap/js/dist/alert.js', 'node_modules/bootstrap/js/dist/button.js', 'node_modules/bootstrap/js/dist/collapse.js', 'node_modules/bootstrap/js/dist/dropdown.js', 'node_modules/bootstrap/js/dist/modal.js', 'node_modules/bootstrap/js/dist/tab.js', 'node_modules/bootstrap/js/dist/tooltip.js'], 'public/js/bootstrap.js')
    .sass('resources/sass/app.scss', 'public/css')
    // .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css')
    // .styles(['public/css/bootstrap.css', 'public/css/app.css'], 'public/css/app.css');
