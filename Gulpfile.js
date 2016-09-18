var  elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
        .styles([
        './resources/assets/css/style_pruebas_gulp.css',
        './resources/assets/css/nav.css'
    ], './public/css/app.css', null)
        .copy('./resources/assets/css/', 'public/css')
        .copy('./resources/assets/fonts/', 'public/fonts/')
        .copy('./resources/assets/img/', 'public/img/')
        .copy('./resources/assets/ionicons/', 'public/ionicons/')
        .copy('./resources/assets/js/', 'public/js/')
});
