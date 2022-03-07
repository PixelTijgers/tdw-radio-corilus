const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const ResourceMix = require('./resources/js/common/ResourceMix.js');

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
    .js('resources/js/front/front.js', 'public/js/front/front.js')
    .sass('resources/scss/front/front.scss', 'public/css/front/front.css')
    // Do not process CSS urls.
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
        processCssUrls: false,
    })
    .version();

    // Copies node_modules/<dir> files to public/vendor/<dir>. Uses this for already compiled dists in node_modules.
    ResourceMix
        .init(mix)
        .nodeModuleDists([
            // Scripts
            'mburger-css/dist/mburger.js',
            'mmenu-js/dist/mmenu.js',
            'mmenu-light/dist/mmenu-light.js',
            'mmenu-light/dist/mmenu-light.polyfills.js',
            'single-page-nav/jquery.singlePageNav.min.js',
            'sticky-js/dist/sticky.min.js',

            // Styles
            'flag-icons/css/flag-icons.min.css',
            'mburger-css/dist/mburger.css',
            'mmenu-js/dist/mmenu.css',
            'mmenu-light/dist/mmenu-light.css',
        ]);
