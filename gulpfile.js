var gulp         = require('gulp');
    sourcemaps   = require('gulp-sourcemaps'),
    browserSync  = require('browser-sync').create(),
    sass         = require('gulp-sass'),
    php          = require('gulp-connect-php'),
    plumber      = require('gulp-plumber'),
    sassGlob     = require('gulp-sass-glob'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCss     = require('gulp-clean-css'),
    notify       = require('gulp-notify');


// Error Handling
var onError = function( err ) {
    console.log( 'An error occurred:', err.message );
    this.emit( 'end' );
};

// Static Server + watching scss/html files
gulp.task('php', function(){
    php.server({
        base: './app',
        port: 8010,
        keepalive: true
    });
});

gulp.task('serve',['php', 'sass'], function() {
    browserSync.init({
        proxy: "localhost:8010",
        baseDir: "./",
        open: true,
        notify: false
    });

    gulp.watch("app/scss/*/*.scss", ['sass']);
    gulp.watch("app/scss/*/*/*.scss", ['sass']);
    gulp.watch("app/*.html").on('change', browserSync.reload);
    gulp.watch("app/*.php").on('change', browserSync.reload);
    gulp.watch("app/js/*.js").on('change', browserSync.reload);
    gulp.watch("app/img/*").on('change', browserSync.reload);
    gulp.watch("app/fonts/*").on('change', browserSync.reload);
    gulp.watch("app/includes/*").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("app/scss/*.scss")
        .on('error', sass.logError)
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sassGlob())
        .pipe(sass())
        .pipe(autoprefixer('last 4 version'))
        .pipe(cleanCss())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest("app/css"))
        .pipe(browserSync.stream())
        .pipe(notify({ message: 'sass task complete' }));
});

gulp.task('default', ['serve']);
gulp.task('start', ['serve']);