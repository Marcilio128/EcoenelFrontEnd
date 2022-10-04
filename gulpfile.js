const {series} = require('gulp')
const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const uglifycss = require('gulp-uglifycss')
const concat = require('gulp-concat')

function SCSS(){
	return gulp.src('resources/scss/index.scss')
		.pipe(sass().on('error: ', sass.logError))
		.pipe(uglifycss({"uglycomments": false}))
		.pipe(concat('main-style.css'))
		.pipe(gulp.dest('public/css/layout'))
}
exports.default = series (SCSS)