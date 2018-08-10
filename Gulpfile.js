var gulp = require('gulp');
var less = require('gulp-less');
var shell = require('gulp-shell');
var cssnano = require('gulp-cssnano');
var watch = require('gulp-watch');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var gutil = require('gulp-util');
var autoprefixer = require('gulp-autoprefixer');


/*
    * CHUCKCSS FILES COMPILATION
*/
gulp.task('chuckcss_minify_less', function() {
    gulp.src('chuckcss/front.less')
        .pipe(less())
        .pipe(cssnano({
            'postcss-minify-font-values': true
        }))
        .pipe(autoprefixer({
            browsers:"> 1%, last 2 versions, Safari >= 8"
        }))
        .pipe(rename({basename: 'chuckcss', suffix: '.min'}))
        .pipe(gulp.dest('dist/'));
});

gulp.task('chuckcss_less', function() {
    gulp.src('chuckcss/front.less')
        .pipe(less())
        .pipe(autoprefixer({
            browsers:"> 1%, last 2 versions, Safari >= 8"
        }))
        .pipe(rename({basename: 'chuckcss'}))
        .pipe(gulp.dest('dist/'));
});

/*
    * PRINT FILE
*/
gulp.task('chuckcss_print', function() {
    gulp.src('chuckcss/print.less')
        .pipe(less())
        .pipe(cssnano({
            'postcss-minify-font-values': true
        }))
        .pipe(autoprefixer({
            browsers:"> 1%, last 2 versions, Safari >= 8"
        }))
        .pipe(rename({basename: 'print'}))
        .pipe(gulp.dest('dist/'));
});

/*
    * TEST FILE (index)
*/
gulp.task('test', function() {
    gulp.src('tests/test.less')
        .pipe(less())
        // .pipe(cssnano({
        //     'postcss-minify-font-values': true
        // }))
        .pipe(autoprefixer({
            browsers:"> 1%, last 2 versions, Safari >= 8"
        }))
        .pipe(rename({basename: 'test'}))
        .pipe(gulp.dest('tests/'));
});

gulp.task('watch', function() {
    gulp.watch('chuckcss/**/*.less', ['chuckcss_minify_less', 'chuckcss_less']);
    gulp.watch('chuckcss/print.less', ['chuckcss_print']);
    gulp.watch('tests/test.less', ['test']);

});

gulp.task('default', [
  'chuckcss_less',
  'chuckcss_minify_less',
  'chuckcss_print',
  'test'
]);
