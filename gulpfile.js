var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var watch = require('gulp-watch');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var ignore = require('gulp-ignore');
var rimraf = require('gulp-rimraf');

gulp.task('sass', function () {
    gulp.src('sass/*.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('css/'));
});

gulp.task('watch', function () {
    gulp.watch('sass/*.scss', ['sass']);
});

gulp.task('minify-css', function() {
  return gulp.src('css/theme.min.css') // much faster 
    .pipe(minifyCSS({ compatibility: 'ie8' }))
    .pipe(rename('theme.min.css'))
    .pipe(gulp.dest('css'));
});