var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin'),
    cache = require('gulp-cache');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');

gulp.task('browser-sync', function () {
    browserSync.init({
        proxy: "localhost:8888"
    });
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('images', function () {
    gulp.src('src/images/**/*')
        .pipe(cache(imagemin({optimizationLevel: 3, progressive: true, interlaced: true})))
        .pipe(gulp.dest('dist/images/'));
});

gulp.task('styles', function () {
    gulp.src(['src/css/**/*.scss'])
        .pipe(plumber({
            errorHandler: function (error) {
                console.log(error.message);
                this.emit('end');
            }
        }))
        .pipe(sass())
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.stream());
});

gulp.task('scripts', function () {
    return gulp.src('src/js/**/*.js')
        .pipe(plumber({
            errorHandler: function (error) {
                console.log(error.message);
                this.emit('end');
            }
        }))
        .pipe(concat('main.js'))
        .pipe(gulp.dest('js'))
        .pipe(browserSync.stream());
});

gulp.task('default', ['browser-sync'], function () {
    gulp.watch("src/css/**/*.scss", ['styles']);
    gulp.watch("src/js/**/*.js", ['scripts']);
    gulp.watch("*.html", ['bs-reload']);
    gulp.watch("*.php", ['bs-reload']);
});