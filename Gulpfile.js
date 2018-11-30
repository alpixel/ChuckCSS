var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');
var rename = require('gulp-rename');
var plumber = require('gulp-plumber');
var cssnano = require('gulp-cssnano');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');


/*
    * CHUCKCSS FILES COMPILATION
*/
gulp.task('chuckcss_minify_less', function() {
    gulp.src('chuckcss/front.less')
        .pipe(plumber())
        .pipe(less())
        .pipe(cssnano())
        .pipe(postcss([ autoprefixer() ]))
        .pipe(rename({basename: 'chuckcss', suffix: '.min'}))
        .pipe(gulp.dest('dist/'));
});

gulp.task('chuckcss_less', function() {
    gulp.src('chuckcss/front.less')
        .pipe(plumber())
        .pipe(less())
        .pipe(postcss([ autoprefixer() ]))
        .pipe(rename({basename: 'chuckcss'}))
        .pipe(gulp.dest('dist/'));
});

/*
    * PRINT FILE
*/
gulp.task('chuckcss_print', function() {
    gulp.src('chuckcss/print.less')
        .pipe(plumber())
        .pipe(less())
        .pipe(cssnano())
        .pipe(postcss([ autoprefixer() ]))
        .pipe(rename({basename: 'print'}))
        .pipe(gulp.dest('dist/'));
});

/*
    * TEST FILE (index)
*/
gulp.task('test', function() {
    gulp.src('tests/test.less')
        .pipe(plumber())
        .pipe(less())
        .pipe(cssnano())
        .pipe(postcss([ autoprefixer() ]))
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
  'test',
  'watch'
]);
