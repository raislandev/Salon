const gulp = require('gulp')
const babel = require('gulp-babel')
const uglify = require('gulp-uglify')
const sass = require('gulp-sass')
const uglifycss = require('gulp-uglifycss')
const concat  = require('gulp-concat')
const htmlmin  = require('gulp-htmlmin')

function appHtml(cb){
    return gulp.src('src/**/*.html')
    .pipe(htmlmin({ collapseWhitespace:true}))
    .pipe(gulp.dest('build'))
}

function appCSS(){
    return gulp.src('src/assets/css/**/*.css')
    .pipe(uglifycss({"uglyComments":false}))
    .pipe(concat("app.min.css"))
    .pipe(gulp.dest("build/assets/css"))
}

 function appJS(){
    return  gulp.src('src/assets/js/**/*.js')
    .pipe(babel({ presets: ['env'] }))
    .pipe(uglify())
    .pipe(concat('app.min.js'))
    .pipe(gulp.dest('build/assets/js'))
}

function copy(){
    return gulp.src('src/vendor/**/*.*')
    .pipe(gulp.dest('build/vendor'))
}

function appIMG(){
    return gulp.src('src/assets/img/**/*.*')
    .pipe(gulp.dest('build/assets/img'))
}

module.exports = {
    appHtml,
    appCSS,
    appJS,
    copy,
    appIMG
    
}