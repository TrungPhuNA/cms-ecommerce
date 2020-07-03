const mix = require('laravel-mix');

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


mix.sass('resources/sass/admin/pages/global.scss','public/admin/css')
mix.js('resources/js/admin/pages/global.js','public/admin/js').autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
});
// mix.autoload({ 'jquery': ['window.$', 'window.jQuery'] })

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.version();
