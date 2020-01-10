var browserSync = require('browser-sync');
var gulp = require('gulp');
const server = browserSync.create();

function reload(done) {
  server.reload();
  done();
}

function serve(done) {
  server.init({
    //server: {
    //  baseDir: './'
    //},
    proxy: "localhost:8080/whatsopen.today"
  });
  done();
}

const watch = () => gulp.watch('.', reload);

const dev = gulp.series(serve, watch);
exports.default = dev;
