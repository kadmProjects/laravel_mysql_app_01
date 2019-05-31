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

mix.js([
	'resources/js/index.js',
	'resources/js/create.js',
	'resources/js/store.js',
	'resources/js/show.js',
	'resources/js/edit.js',
	'resources/js/update.js',
	'resources/js/destroy.js'
], 'public/js/app.js');


