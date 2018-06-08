var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    plumber      = require('gulp-plumber');

gulp.task('css', function () {
  gulp.src('./style/sass/main.scss')
    .pipe(plumber())
    .pipe(sass.sync())
    .pipe(gulp.dest('./style/css'));
})

gulp.task('watch', function () {
  gulp.watch('style/sass/main.scss', ['css']);
})

gulp.task('default', ['css', 'watch']);
