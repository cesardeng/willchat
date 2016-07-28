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

elixir(function (mix) {
    // mix.sass('app.scss');
});

var paths = {
    js: 'public/js',
    css: 'public/css'
};

var gulp = require('gulp');
var fs = require('fs');
var path = require('path');
var merge = require('merge-stream');
var minifycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');

function getFolders(dir) {
    return fs.readdirSync(dir)
        .filter(function (file) {
            return fs.statSync(path.join(dir, file)).isDirectory();
        });
}

gulp.task('minifyjs', function () {
    // public/js 下的了文件夹
    var folders = getFolders(paths.js);

    // 饮食上 public/js 目录本身
    folders.push('/');

    var tasks = folders.map(function (folder) {
        return gulp.src(path.join(paths.js, folder, '/!(*.min).js'))
            .pipe(uglify())
            .pipe(rename({suffix: '.min'}))
            .pipe(gulp.dest(path.join(paths.js, folder)));
    });

    return merge(tasks);
});

gulp.task('minifycss', function () {
    // public/css 下的了文件夹
    var folders = getFolders(paths.css);

    // 饮食上 public/css 目录本身
    folders.push('/');

    var tasks = folders.map(function (folder) {
        return gulp.src(path.join(paths.css, folder, '/!(*.min).css'))
            .pipe(minifycss({
                advanced: false,
                compatibility: 'ie8',
                keepBreaks: true
            }))
            .pipe(rename({suffix: '.min'}))
            .pipe(gulp.dest(path.join(paths.css, folder)));
    });

    return merge(tasks);
});

gulp.task('watch', function () {
    gulp.watch(['public/js/!(*.min).js', 'public/js/user/!(*.min).js'], ['minifyjs']);
    gulp.watch(['public/css/!(*.min).css', 'public/css/user/!(*.min).css'], ['minifycss']);
});

gulp.task('default', ['minifycss', 'minifyjs', 'watch']);
