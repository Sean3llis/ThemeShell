var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var watch = require('gulp-watch');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');
var livereload = require('gulp-livereload');

// Not In Use:
// var rimraf = require('gulp-rimraf');
// var uglify = require('gulp-uglify');
// var autoprefixer = require('gulp-autoprefixer');
// var concat = require('gulp-concat');
// var ignore = require('gulp-ignore');

gulp.task('sass', function () {
    gulp.src('sass/*.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('css/'))
        .pipe(livereload({start: true}));
});

gulp.task('watch', function () {
    gulp.watch('**/*.scss', ['sass']);
});

gulp.task('minify-css', function() {
  return gulp.src('css/theme.css') // much faster 
    .pipe(minifyCSS({ compatibility: 'ie8' }))
    .pipe(rename('theme.min.css'))
    .pipe(gulp.dest('css'));
});