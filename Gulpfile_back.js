var gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch');
    notify = require('gulp-notify');
    elixir = require('laravel-elixir');

/*
var config = {
    scssDir: './resources/assets/sass/scss',
    cssDir: './public/assets/css'
};

gulp.task('style', function(){
    gulp.src(config.scssDir + '/*.scss')
        .pipe(sass())
        .on('error', sass.logError)
        .pipe(gulp.dest(config.cssDir))
});
*/
/*
gulp.task('watch', function(){
    watch(config.scssDir + '/*.scss', function(){
        gulp.start('style');
    });
});*/


elixir(function(mix) {
   // mix.sass(['app.scss', 'style.scss']);
    mix.styles([
        './resources/assets/css/style1.css',
        './resources/assets/css/nav.css'
    ], 'public/assets/css/nuevo.css', 'public/assets/css');
});
/*
gulp.src("./src/test.ext")
    .pipe(notify("Hello Gulp!"));*/