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

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/landing.js', 'public/js')
    .js('resources/js/showcase.js', 'public/js')
    .js('resources/js/blog.js', 'public/js')

    .copy('node_modules/ckeditor/config.js', 'public/js/ckeditor/config.js')
    .copy('node_modules/ckeditor/styles.js', 'public/js/ckeditor/styles.js')
    .copy('node_modules/ckeditor/contents.css', 'public/js/ckeditor/contents.css')

    .copyDirectory('node_modules/ckeditor/skins', 'public/js/ckeditor/skins')
    .copyDirectory('node_modules/ckeditor/lang', 'public/js/ckeditor/lang')
    .copyDirectory('node_modules/ckeditor/plugins', 'public/js/ckeditor/plugins')

    .scripts([
        'node_modules/pace-js/pace.js',
    ], 'public/js/script.js')
    .scripts([
        'node_modules/scrollreveal/dist/scrollreveal.js',
        'resources/js/scripts/blog.js',
        'resources/js/scripts/backtotop.js',
    ], 'public/js/blog-public.js')

    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/landing.scss', 'public/css')
    .sass('resources/sass/blog.scss', 'public/css')

    .extract([
        'lodash', 'jquery', 'popper.js', 'bootstrap', 'axios',
        'jquery.easing', 'jquery-validation'
    ])

    .version();

if (!mix.inProduction()) {
    mix.sourceMaps();
}
