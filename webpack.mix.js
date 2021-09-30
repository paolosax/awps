/*
 * AWPS uses Laravel Mix
 *
 * Check the documentation at
 * https://laravel-mix.com/
 */

let mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');

// Autloading jQuery to make it accessible to all the packages, because, you know, reasons
// You can comment this line if you don't need jQuery.
mix.autoload({
	jquery: ['$', 'window.jQuery', 'jQuery'],
});

mix.setPublicPath('./assets/dist');

// Compile assets.
mix.js('assets/src/scripts/app.js', 'assets/dist/js')
	.js('assets/src/scripts/admin.js', 'assets/dist/js')
	.block('assets/src/scripts/gutenberg.js', 'assets/dist/js')
	.sass('assets/src/sass/style.scss', 'assets/dist/css').options({
		processCssUrls: false
	})
	.sass('assets/src/sass/admin.scss', 'assets/dist/css')
	.sass('assets/src/sass/gutenberg.scss', 'assets/dist/css')
	.copy('assets/src/scripts/scripts', 'assets/dist/js/scripts')
	.copy([
		'node_modules/swiper/swiper-bundle.js',
		'node_modules/aos/dist/aos.js',
	], 'assets/dist/vendor/')
	.copy('node_modules/lightcase', 'assets/dist/vendor/lightcase', false)
	.copy('assets/src/template', 'assets/dist/template', false)
	.copy('assets/src/template/fonts', 'assets/dist/fonts/template')
	.copy('node_modules/@fortawesome/fontawesome-free/webfonts/', 'assets/dist/fonts/fontawesome')
	.copy('node_modules/lightcase/src/fonts', 'assets/dist/fonts/lightcase')
	.copy('assets/src/img', 'assets/dist/img')
	// .copy('node_modules/flag-icon-css/flags/**/*', 'assets/dist/svg/flag-icon-css')
	.copy([
		'node_modules/flag-icon-css/flags/1x1/it.svg',
		'node_modules/flag-icon-css/flags/1x1/gb.svg',
		'node_modules/flag-icon-css/flags/1x1/fr.svg',
		'node_modules/flag-icon-css/flags/1x1/de.svg',
		'node_modules/flag-icon-css/flags/1x1/es.svg',
		'node_modules/flag-icon-css/flags/1x1/nl.svg',
		'node_modules/flag-icon-css/flags/1x1/pl.svg',
	], 'assets/dist/svg/flag-icon-css/1x1')
	.copy([
		'node_modules/flag-icon-css/flags/4x3/it.svg',
		'node_modules/flag-icon-css/flags/4x3/gb.svg',
		'node_modules/flag-icon-css/flags/4x3/fr.svg',
		'node_modules/flag-icon-css/flags/4x3/de.svg',
		'node_modules/flag-icon-css/flags/4x3/es.svg',
		'node_modules/flag-icon-css/flags/4x3/nl.svg',
		'node_modules/flag-icon-css/flags/4x3/pl.svg',
	], 'assets/dist/svg/flag-icon-css/4x3');
// .copy(['node_modules/flag-icon-css/flags/1x1/it.svg', 'node_modules/flag-icon-css/flags/1x1/gb.svg'], 'assets/dist/svg/flag-icon-css/1x1')
// .copy(['node_modules/flag-icon-css/flags/4x4/it.svg', 'node_modules/flag-icon-css/flags/4x4/gb.svg'], 'assets/dist/svg/flag-icon-css/4x4');
// .sass('node_modules/bootstrap/scss/bootstrap.scss', 'assets/dist/vendor/css');

/* mix.combine([
	'node_modules/bootstrap/scss/bootstrap.scss',
	'assets/src/sass/style.scss'
], 'assets/dist/css/style.css'); */

// Add source map and versioning to assets in production environment.
if (mix.inProduction()) {
	mix.sourceMaps().version();
}