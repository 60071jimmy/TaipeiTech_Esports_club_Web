var elixir = require('laravel-elixir');

require('laravel-elixir-vue');
require("gulp-cssmin");
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
var gulp = require('gulp');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');


var min = gulp.task('min', function () {
    gulp.src('public/css/agency.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('public/css'));
});

elixir(mix => {
    mix.sass('./public/scss/agency.scss')
       .webpack('app.js');
    gulp.run(['min']);
});