var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var gulp = require('gulp');
const htmlmin = require('gulp-htmlmin');
const browserSync = require("browser-sync").create();
 
function minify() {
  
  console.log('minifying js ...');
 
    return gulp.src('src/js/*.js')
        .pipe(concat('all.js'))
        .pipe(uglify({
        compress: {
            drop_console: true
        }
        }))
        .pipe(gulp.dest('dist/js/'));
}
 
function pages(){
    return gulp.src('./src/**/*.html') 
        .pipe(htmlmin({ collapseWhitespace: true, removeComments: true }))
        .pipe(gulp.dest('./dist'));
} 

function images(){
    return gulp.src('./src/css/images/*')         
        .pipe(gulp.dest('dist/css/images'));
} 

function images2(){
    return gulp.src('./src/img/**')         
        .pipe(gulp.dest('dist/img'));
} 

function css(){
    return gulp.src('./src/css/*')         
        .pipe(gulp.dest('dist/css'));
} 

function ico(){
    return gulp.src('./src/favicon.ico')         
        .pipe(gulp.dest('dist/favicon.ico'));
} 

function php(){
    return gulp.src('./src/*.php')         
        .pipe(gulp.dest('dist'));
} 

function reload() {
    browserSync.reload();
} 

// Add browsersync initialization at the start of the watch task
function watch() {
    browserSync.init({
        // You can tell browserSync to use this directory and serve it as a mini-server
        server: {
            baseDir: "./src"
        }
        // If you are already serving your website locally using something like apache
        // You can use the proxy setting to proxy that instead
        // proxy: "yourlocal.dev"
    });
    //gulp.watch(paths.styles.src, style);
    // We should tell gulp which files to watch to trigger the reload
    // This can be html or whatever you're using to develop your website
    // Note -- you can obviously add the path to the Paths object
    gulp.watch("src/*.html", reload);
    gulp.watch("src/**/*.*", reload);
}

gulp.task('default', gulp.series(minify, pages, images, images2, css, ico, php,watch))
  