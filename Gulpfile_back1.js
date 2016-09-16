var  elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.styles([
        './resources/assets/css/style1.css',
        './resources/assets/css/nav.css'
    ], 'public/assets/css/nuevo.css', null);

    mix.copy('/resources/assets/css/bootstrap.min.css', 'public/assets/css')
});
