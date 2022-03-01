var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');
var rename = require('gulp-rename');
const csso = require('gulp-csso');
const autoprefixer = require('gulp-autoprefixer');


/*
    * CHUCKCSS FILES COMPILATION
*/
function chuckcss_minify_less() {
    gulp.src('chuckcss/front.less')
        .pipe(less())
        .pipe(autoprefixer())
        .pipe(csso())
        .pipe(rename({basename: 'chuckcss', suffix: '.min'}))
        .pipe(gulp.dest('dist/'));

    return gulp.src('chuckcss/front-light.less')
        .pipe(less())
        .pipe(autoprefixer())
        .pipe(csso())
        .pipe(rename({basename: 'chuckcss-light', suffix: '.min'}))
        .pipe(gulp.dest('dist/'));
}

function chuckcss_less() {
    gulp.src('chuckcss/front.less')
        .pipe(less())
        .pipe(autoprefixer())
        .pipe(rename({basename: 'chuckcss'}))
        .pipe(gulp.dest('dist/'));

    return gulp.src('chuckcss/front-light.less')
        .pipe(less())
        .pipe(autoprefixer())
        .pipe(rename({basename: 'chuckcss-light'}))
        .pipe(gulp.dest('dist/'));
}

/*
    * PRINT FILE
*/
function chuckcss_print() {
    return gulp.src('chuckcss/print.less')
        .pipe(less())
        .pipe(autoprefixer())
        .pipe(csso())
        .pipe(rename({basename: 'print'}))
        .pipe(gulp.dest('dist/'));
}


// define complex tasks
const build = gulp.parallel(chuckcss_less, chuckcss_minify_less, chuckcss_print);


// export tasks
exports.chuckcss_less = chuckcss_less;
exports.chuckcss_minify_less = chuckcss_minify_less;
exports.chuckcss_print = chuckcss_print;
exports.build = build;
exports.default = build;


