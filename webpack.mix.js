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

mix
    .js('resources/assets/js/app.js', 'public/js')
    .scripts([
        'resources/assets/js/scripts/backtotop.js',
    ], 'public/js/dashboard.js')
    .scripts([
        'node_modules/scrollreveal/dist/scrollreveal.js',
        'resources/assets/js/scripts/landing.js',
        'resources/assets/js/scripts/backtotop.js',
    ], 'public/js/landing.js')
    .scripts([
        'node_modules/scrollreveal/dist/scrollreveal.js',
        'resources/assets/js/scripts/blog.js',
        'resources/assets/js/scripts/backtotop.js',
    ], 'public/js/blog.js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/landing.scss', 'public/css')
    .sass('resources/assets/sass/blog.scss', 'public/css')

    .extract(['vue', 'lodash', 'jquery', 'bootstrap', 'axios', 'jquery.easing', 'magnific-popup', 'mixitup'])
    .version();

if (!mix.inProduction()) {
    mix.sourceMaps();
}