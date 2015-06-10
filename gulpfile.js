var onError = function (err) {  
  gutil.beep();
  console.log(gutil.colors.red(err));
};


var gulp = require('gulp'); 

// Plugins
var browserSync = require('browser-sync').create();
var bower = require('gulp-bower');
var notify = require("gulp-notify");
var jshint = require('gulp-jshint');
var sass = require('gulp-ruby-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
var bourbon = require('node-bourbon').includePaths;
var reload = browserSync.reload;

var config = {
    sassPath: './resources/sass',
    bowerDir: './bower_components'
}

gulp.task('bower', function() {
    return bower()
        .pipe(gulp.dest(config.bowerDir))
});

gulp.task('lint', function() {
    return gulp.src('./public/assets/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

gulp.task('scripts', function() {
    return gulp.src('./public/assets/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('dist'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./public/assets/dist'));
});


gulp.task('icons', function() {
    return gulp.src(config.bowerDir + '/fontawesome/fonts/**.*')
        .pipe(gulp.dest('./public/assets/fonts'));
});

gulp.task('css', function() {
    return gulp.src(config.sassPath + '/sdms_style.scss')
        .pipe(sass({
            style: 'compressed',
            loadPath: [
                './resources/sass',
                config.bowerDir + '/bootstrap-sass-official/assets/stylesheets',
                config.bowerDir + '/fontawesome/scss',
            ]
        })
            .on("error", notify.onError(function (error) {
                return "Error: " + error.message;
            })))
        .pipe(gulp.dest('./public/assets/css'))
        .pipe(reload({stream: true}));

});

// Compile Our Sass
/*
gulp.task('sass', function() {
    gulp.src(config.sassPath + '/sdms_style.scss')
	    .pipe(plumber({
	      errorHandler: onError,

	    }))

		.pipe(sass({
			includePaths: ['sass'].concat(bourbon),
			loadPath: [
                './resources/sass',
                config.bowerDir + '/bootstrap-sass-official/assets/stylesheets',
                config.bowerDir + '/fontawesome/scss',
            ]}).on('error', sass.logError))
  		.pipe(minifyCss())
		.pipe(gulp.dest('./public/assets/css'))
        .pipe(reload({stream: true}));

});
*/




// Watch Files For Changes
gulp.task('watch', function() {
   browserSync.init({
        proxy: "dev.sdms.10.1.10.13.xip.io:8888",
        host: "localhost",
        port: 8888
    });
    gulp.watch('./public/assets/js/*.js', ['lint', 'scripts']);
    gulp.watch([config.sassPath + '/**/*.scss', './public/assets/scss/*.scss'], ['css']);
    gulp.watch("./*.html").on('change', reload);

});

gulp.task('default', ['bower', 'icons', 'css', 'lint', 'scripts', 'watch']);
