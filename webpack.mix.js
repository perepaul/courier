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

mix.scripts([
    'resources/js/admin/jquery.min.js',
    'resources/js/admin/materialize.js',
    'resources/js/admin/perfect-scrollbar.min.js',
    'resources/js/admin/app.js',
    'resources/js/admin/light-sidebar.js',
    'resources/js/admin/style-switcher.js',
    'resources/js/admin/custom.js'

    ], 'public/js/admin/app.js')
    .styles([
        'resources/css/admin/style.css'
    ],'public/css/admin/app.css')
    .copy('resources/css/admin/icons/','public/css/admin/icons/')
    .copy('resources/css/admin/fonts/','public/css/admin/fonts/')
    .scripts([
        'resources/js/front/jquery-2.2.4.min.js',
        'resources/js/front/bootstrap.min.js',
        'resources/js/front/bootstrap-select.min.js',
        'resources/js/front/owl.carousel.min.js',
        'resources/js/front/jquery.sticky.js',
        'resources/js/front/wow.min.js',
        'resources/js/front/theme.js'
    ],'public/js/front/app.js')
    .styles([
        'resources/css/front/bootstrap.min.css',
        'resources/css/front/bootstrap-select.min.css',
        'resources/css/front/font-awesome.min.css',
        'resources/css/front/elegant.css',
        'resources/css/front/owl.carousel.css',
        'resources/css/front/animate.css',
        'resources/css/front/theme.css',
    ],'public/css/front/app.css')
    .copy('resources/css/front/owl.video.play.html','public/css/front/')
    .copy('resources/css/front/fonts','public/css/front/fonts')
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);
