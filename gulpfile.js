var gulp = require('gulp'),
		gutil = require('gulp-util'),
		browserify = require('gulp-browserify');
		compass = require('gulp-compass'),
		connect = require('gulp-connect'),
		gulpif = require('gulp-if'),
		uglify = require('gulp-uglify'),
		concat = require('gulp-concat'),
		path = require('path');
		//breakpoint = require('breakpoint');

var env,
		jsSources,
		sassSources,
		outputDir,
		sassStyle;

//env = 'production';

/*
if (env==='development') {
	outputDir = 'development/';
	sassStyle = 'expanded';
}	else {
	outputDir = '';
	sassStyle = 'compressed';
}
*/

jsSources = [
	'development/devjs/script.js',
	'development/devjs/map.js'
];

sassSources = ['sass/style.scss'];


// JS Task
gulp.task('js', function(){
	gulp.src(jsSources)
		.pipe(concat('script.js'))
		//.pipe(browserify())
		.on('error', gutil.log)
		.pipe(uglify())
		.pipe(gulp.dest('js'))
		.pipe(connect.reload())
});


// SASS DEV Task
gulp.task('sassdev', function(){
	gulp.src(sassSources)
		.pipe(compass({
			sass: 'sass',
			css: 'development/devcss',
			image: 'images',
			style: 'expanded',
			comments: true,
			require: ['susy', 'breakpoint']
		}) //pipe(compass)
		.on('error', gutil.log))
		.pipe(gulp.dest('development/devcss'))
		.pipe(connect.reload())
}); //gulp.task('sassdev')

// SASS PROD Task
gulp.task('sassprod', function(){
	gulp.src(sassSources)
		.pipe(compass({
			sass: 'sass',
			css: '',
			image: 'images',
			style: 'expanded',
			comments: true,
			require: ['susy', 'breakpoint']
		}) //pipe(compass)
		.on('error', gutil.log))
		.pipe(gulp.dest(''))
		.pipe(connect.reload())
}); //gulp.task('sassprod')


// WATCH Task
gulp.task('watch', function(){
	gulp.watch(jsSources, ['js']);
	gulp.watch(['sass/**/*.scss', 'sass/*.scss'], ['sassdev']);
	gulp.watch(['sass/**/*.scss', 'sass/*.scss'], ['sassprod']);
}); //WATCH

// LIVE RELOAD
gulp.task('connect', function(){
	connect.server({
		root: '',
		livereload: true
	});
}); //RELOAD

// DEFAULT
gulp.task('default', ['js', 'sassprod', 'sassdev', 'watch']);















