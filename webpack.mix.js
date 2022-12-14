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
 mix.browserSync({
  proxy: "http://127.0.0.1:8000",
});

     mix.js("resources/js/app.js", "public/js")
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
  ]);
  mix.js('resources/js/sidebar.js', 'public/js'); 
  mix.js('resources/js/test.js', 'public/js'); 
  mix.js('resources/js/cart.js', 'public/js'); 
  mix.js('resources/js/singleitemcart.js', 'public/js');


 
