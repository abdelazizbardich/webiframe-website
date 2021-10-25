const mix = require('laravel-mix');
require('laravel-mix-webp')
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

mix.js('resources/js/app.js', 'public/js').js('./resources/js/front/script.js','./public/js').ImageWebp({
    from: 'resources/img',
    to: 'public/images',
  })
    .sass('resources/sass/app.scss', 'public/css').postCss('./resources/css/front/main.css','./public/css')
    .sourceMaps();
