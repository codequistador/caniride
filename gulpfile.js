var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var browserSync = require('browser-sync');
var connect = require('gulp-connect-php');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var del = require('del');

var config = {
	bootstrapDir: './bower_components/bootstrap-sass',
	publicDir: './dist',
};

var reload = browserSync.reload;

gulp.task('css', function() {
  return gulp.src('./app/scss/main.scss')
  .pipe(sass({
      includePaths: [config.bootstrapDir + '/assets/stylesheets'],
  }))
  .pipe(gulp.dest(config.publicDir + '/css'))
  .pipe(browserSync.reload({
  	stream: true
  }));
});

gulp.task('fonts', function() {
  return gulp.src(config.bootstrapDir + '/assets/fonts/**/*')
  .pipe(gulp.dest(config.publicDir + '/fonts'))
  .pipe(browserSync.reload({
  	stream: true
  }));
});

gulp.task('js', function() {
  return gulp.src([config.bootstrapDir + '/assets/javascripts/bootstrap.min.js', './app/js/**/*.js'])
  .pipe(concat('all.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest(config.publicDir + '/js'))
  .pipe(browserSync.reload({
    stream: true
  }));
});

gulp.task('php', function() {
  return gulp.src('app/cities/**/*.php')
  .pipe(gulp.dest(config.publicDir))
  .pipe(browserSync.reload({
    stream: true
  }));
});

gulp.task('images', function(){
  return gulp.src('app/images/**/*.+(png|jpg|jpeg|gif|svg|ico)')
  .pipe(cache(imagemin({
      interlaced: true
  })))
  .pipe(gulp.dest('dist/images'))
});

gulp.task('clean:dist', function() {
  return del.sync('dist');
})

gulp.task('watch', ['css', 'js', 'php'], function() {
  connect.server({
    base: './dist',
    port: 8010,
    keepalive: true
  }, function (){
    browserSync({
      proxy: '127.0.0.1:8010',
      port: 8080,
      open: true,
      notify: false
    });
  });

  gulp.watch('dist/**/*.php').on('change', function () {
    browserSync.reload();
  });
  gulp.watch('app/scss/**/*.scss', ['css']);
  gulp.watch('app/**/*.php', ['php']);
  gulp.watch('app/js/**/*.js', ['js']);
  gulp.watch('app/images/**/*.+(png|jpg|jpeg|gif|svg|ico)', ['images']);
});

gulp.task('default', ['clean:dist', 'php', 'css', 'fonts', 'images', 'js'], function() {

});
