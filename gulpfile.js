const {series, parallel} = require('gulp')
const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const uglifycss = require('gulp-uglifycss')
const concat = require('gulp-concat')
const uglify = require('gulp-uglify')
const babel = require('gulp-babel')

function SCSS(){
	return gulp.src('resources/scss/index.scss', 'resources/sass/index.scss')
		.pipe(sass().on('error: ', sass.logError))
		.pipe(uglifycss({"uglycomments": false}))
		.pipe(concat('main-style.css'))
		.pipe(gulp.dest('public/css/layout'))
}
function JS(cb){
	gulp.src('resources/js/**/*.js')
		.pipe(uglify())
		.pipe(concat('main-script.js'))
		.pipe(gulp.dest('public/js/layout'))
		return cb()
}
function BTSCSS(){
	return gulp.src('node_modules/bootstrap/scss/**/*.scss')
	.pipe(sass().on('error: ', sass.logError))
	.pipe(uglifycss({"uglycomments": false}))
	.pipe(concat('boot-style.css'))
	.pipe(gulp.dest('public/css/layout/boot'))
}
function BTJS(callback){
	gulp.src('node_modules/bootstrap/dist/js/bootstrap.bundle.js')
	.pipe(uglify())
	.pipe(concat('boot-script.js'))
	.pipe(gulp.dest('public/js/layout/boot'))
	return callback()
}
function HCJS(cb){
	gulp.src('node_modules/highcharts/**/*.js')
	.pipe(uglify())
	.pipe(babel({
		comments: false
	}))
	.pipe(concat('charts-script.js'))
	.pipe(gulp.dest('public/js/layout/highchart'))
	return cb()
}

module.exports.default = series 
(
	parallel(SCSS, JS),  //local
	parallel(BTSCSS, BTJS) //bootstrap
	/* HCJS //highcharts */
)