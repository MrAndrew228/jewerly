const gulp = require('gulp');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');


const jsFiles = [
	'./media/js/main.js',
	'./media/js/textarea_auto-resize.js'
];

function styles() {
	return gulp.src('./media/css/**/*.css')
		.pipe(concat('all.css'))
		.pipe(autoprefixer({
			browsers: ['>0.1%'],
			cascade: false
		}))
		.pipe(cleanCSS({
			level: 2
		}))
		.pipe(gulp.dest('./build/css'));
}

function scripts() {
	return gulp.src(jsFiles)
		.pipe(concat('all.js'))
		.pipe(gulp.dest('./build/js'));
}

function watch() {
	gulp.watch('./media/css/**/*.css',styles);
	gulp.watch('./media/js/**/*.js',scripts)
}



gulp.task('styles', styles);
gulp.task('scripts', scripts);
gulp.task('watch', watch);
