const gulp = require('gulp')
const webserver = require('gulp-webserver')

function monitorarArquivo(){
    return gulp.src('build')
    .pipe(webserver({
        port:8080,
        open:true,
        livereload:true
    }))
}

function servidor(cb){
    return cb()
}


module.exports = {
   monitorarArquivo,
   servidor
}