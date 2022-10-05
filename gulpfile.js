const {series} = require('gulp')
const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const uglifycss = require('gulp-uglifycss')
const concat = require('gulp-concat')
const uglify = require('gulp-uglify')
const babel = require('gulp-babel')

function SCSS(){
	return gulp.src('resources/scss/index.scss')
		.pipe(sass().on('error: ', sass.logError))
		.pipe(uglifycss({"uglycomments": false}))
		.pipe(concat('main-style.css'))
		.pipe(gulp.dest('resources/css/layout'))
}
function JS(){
	gulp.src('resources/js/**/*.js')
		.pipe(babel({
			comments: false
		}))
		.pipe(uglify())
		.on('error', err => console.log(err))
		.pipe(concat('main-script.js'))
		.pipe(gulp.dest('resources/js/layout'))
}
module.exports.default = series (SCSS, JS)