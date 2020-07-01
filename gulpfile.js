const gulp = require('gulp')

const {series, parallel} = require('gulp')

const { appHtml,appJS,appIMG, appCSS,copy } =  require("./tasks/app")
const { monitorarArquivo,servidor } =  require("./tasks/server")

module.exports.default = series(
    parallel(
        series(appHtml,appJS,appIMG, appCSS, copy),
    ),
    servidor,monitorarArquivo
)