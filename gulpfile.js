const elixir = require('laravel-elixir');


var base_src  = 'resources/assets';
var base_dest = 'public/assets';
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('/main.scss', 'resources/assets/css/main.css');

    mix.styles([
    '/main.css',
    '/priceslider.css',
    '/slider.css'
    ]);

    mix.scripts([
    '/jquery.slides.js',
    // '/priceslider.js',
    'infinitescroll.js',
    '/sidebar-menu.js',
    '/slider-detail.js',
    '/foldout-filter.js',
    '/slider.js',
    '/cookie.js',
    ]);

    //mix.scripts(['jquery.slides.js', 'priceslider.js', 'slider-menu.js', 'slider.js'], 'public/js/main.js');

});
  console.log(elixir);
