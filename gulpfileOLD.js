var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      proxy:"overbrook.dev"
    },
  })
})

gulp.task('sass', function() {
	return gulp.src('scss/**/*.scss')
		.pipe(sass()) //using gulp-sass
		.pipe(gulp.dest('css'))
		.pipe(browserSync.stream());
});

gulp.task('watch', ['browserSync', 'sass'], function (){
  gulp.watch('scss/**/*.scss', ['sass']);
})
