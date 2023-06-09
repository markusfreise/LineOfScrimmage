const mix = require('laravel-mix');
const { max } = require('lodash');

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

mix.js('resources/js/site.js', './js').vue().sass('resources/scss/site.scss','./css/site.css').sass('resources/scss/editor.scss','./css/editor.css').options({processCssUrls: false}).sourceMaps(true, 'source-map').browserSync({watch: true, files: ['./css/*.css','./*.php','./*/*.php'], host: 'eawent.test', proxy: {target: 'https://eawent.test'}});