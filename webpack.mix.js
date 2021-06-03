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

mix.styles([
        'public/assets/css/bootstrap-rtl.min.css', 
        'public/assets/css/animate.css', 
        'public/assets/css/swiper.min.css', 
        'public/assets/css/icons.css', 
        'public/assets/css/aos.css', 
        'public/assets/css/main-rtl.css', 
        'public/assets/css/normalize.css',
        ], 'public/assets/css/app.css');

mix.combine([
        'public/assets/js/jquery-3.5.0.js',
        'public/assets/js/jquery-migrate.min.js',
        'public/assets/js/popper.min.js',
        'public/assets/js/bootstrap.min.js',
        'public/assets/js/vendor/particles.min.js',
        'public/assets/js/vendor/TweenMax.min.js',
        'public/assets/js/vendor/ScrollMagic.js',
        'public/assets/js/vendor/animation.gsap.js',
        'public/assets/js/vendor/debug.addIndicators.min.js',
        'public/assets/js/vendor/swiper.min.js',
        'public/assets/js/vendor/countdown.js',
        'public/assets/js/vendor/simpleParallax.min.js',
        'public/assets/js/vendor/waypoints.min.js',
        'public/assets/js/vendor/jquery.counterup.min.js',
        'public/assets/js/vendor/imagesloaded.pkgd.min.js',
        'public/assets/js/vendor/jquery.bxslider.min.js',
        'public/assets/js/vendor/sharer.js',
        'public/assets/js/vendor/sticky.min.js',
        'public/assets/js/vendor/aos.js',
        'public/assets/js/main.js',
        'public/assets/js/pages/sass.js',
        ], 'public/assets/js/app.js');


