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

// mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/vendor/jquery/jquery.min.js');

// mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/vendor/bootstrap/css/bootstrap.min.css');
// mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css.map', 'public/vendor/bootstrap/css/bootstrap.min.css.map');
// mix.copy('node_modules/bootstrap/dist/css/bootstrap-theme.min.css', 'public/vendor/bootstrap/css/bootstrap-theme.min.css');
// mix.copy('node_modules/bootstrap/dist/css/bootstrap-theme.min.css.map', 'public/vendor/bootstrap/css/bootstrap-theme.min.css.map');
// mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/vendor/bootstrap/js/bootstrap.min.js');
// mix.copyDirectory('node_modules/bootstrap/dist/fonts', 'public/vendor/bootstrap/fonts');

// mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/vendor/fontawesome/webfonts');
// mix.copy('node_modules/@fortawesome/fontawesome-free/css/all.min.css', 'public/vendor/fontawesome/css/fontawesome.min.css');

// mix.copy('node_modules/lozad/dist/lozad.min.js', 'public/vendor/lozad/lozad.min.js');

// mix.copy('node_modules/autosize/dist/autosize.min.js', 'public/vendor/autosize/autosize.min.js');

mix.copyDirectory('resources/vendor', 'public/vendor');

mix.copyDirectory('node_modules/jquery/dist/', 'public/vendor/jquery');

mix.copyDirectory('node_modules/bootstrap/dist', 'public/vendor/bootstrap');

mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/css', 'public/vendor/fontawesome/css');
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/vendor/fontawesome/webfonts');

mix.copyDirectory('node_modules/autosize/dist', 'public/vendor/autosize');

mix.copyDirectory('node_modules/lozad/dist', 'public/vendor/lozad');

mix.copyDirectory('vendor/dcat/laravel-admin/resources/dist', 'public/vendor/dcat-admin')

mix.copyDirectory('resources/images', 'public/images');

mix.js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [
    //
  ]);
