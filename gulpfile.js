// REQUIRED VARS
var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin'),
    cache = require('gulp-cache');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');

// BROWSER SYNC w/ MAMP
gulp.task('browser-sync', function () {
    browserSync.init({
        // SET THIS TO YOUR LOCAL URL
        proxy: "localhost:8888"
    });
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});

// IMAGEMIN OPTIMIZATION
gulp.task('images', function () {
    gulp.src('src/images/**/*')
        .pipe(cache(imagemin({optimizationLevel: 3, progressive: true, interlaced: true})))
        .pipe(gulp.dest('dist/images/'));
});

// SCSS
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

// COMPILE JS
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

// RUN GULP TASKS
gulp.task('default', ['browser-sync'], function () {
    gulp.watch("src/css/**/*.scss", ['styles']);
    gulp.watch("src/js/**/*.js", ['scripts']);
    gulp.watch("*.html", ['bs-reload']);
    gulp.watch("*.php", ['bs-reload']);
});