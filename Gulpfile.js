var gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch');
    elixir = require('laravel-elixir');

var config = {
    scssDir: '.resources/assets/scss',
    cssDir: '.public/assets/css'
};

gulp.task('style', function(){
    gulp.src(config.scssDir + '/*.scss')
        .pipe(sass())
        .on('error', sass.logError)
        .pipe(gulp.dest(config.cssDir))
});

gulp.task('watch', function(){
    watch(config.scssDir + '/**/*.scss', function(){
        gulp.start('style');
    });
});

elixir(function(mix) {
    mix.less('app.less');
});