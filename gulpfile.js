var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    // mix.sass('app.scss');
});

var gulp = require('gulp');
var cssmin = require('gulp-minify-css');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');

gulp.task('minifycss', function(){
    gulp.src('public/css/user/!(*.min).css')
        .pipe(cssmin({
            advanced: false,
            compatibility: 'ie8',
            keepBreaks: true
        }))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('public/css/user'));
});

gulp.task('minifyjs', function(){
    gulp.src('public/js/user/!(*.min).js')
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('public/js/user'));
});

gulp.task('default', ['minifycss', 'minifyjs']);

