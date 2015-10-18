var
	gulp = require('gulp'),
	gulpsync = require('gulp-sync')(gulp),
	jade = require('gulp-jade'),
	scss = require('gulp-ruby-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	plumber = require('gulp-plumber'),
	watch = require('gulp-watch'),
	// JS
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	coffee = require('gulp-coffee'),
	// Clean
	clean = require('gulp-clean');

	// JS Vendors
	gulp.task('jsvendor', function(){
		return gulp.src(
				[
					
				]
			)
			.pipe(concat('js.vendor.js'))
			.pipe(rename('js.vendor.min.js'))
			.pipe(uglify())
			.pipe(gulp.dest('assets/javascripts/vendor/'))
			;
	});
	// Coffee
	gulp.task('coffee', function() {
		gulp.src('coffee/**/*.coffee')
			.pipe(plumber())
			.pipe(coffee({bare: true}))
			.pipe(gulp.dest('../assets/javascripts/'))
			// .pipe(connect.reload())
			;
	});
	// Stylesheets
	gulp.task('scss', function () {
		return scss('scss/clickin.app.scss', {
			sourcemap: true,
			style: 'compressed',
		})
			.pipe(plumber())
			.pipe(rename('clickin.app.css'))
			.pipe(sourcemaps.write('maps', {
				includeContent: false,
				sourceRoot: 'source'
			}))
			.pipe(gulp.dest('../assets/stylesheets/'))
			;
	});

	// Watch
	gulp.task('watch', function() {
		gulp.watch('coffee/**/*', ['coffee']);
		gulp.watch('scss/**/*', ['scss']);
	});

	// Default Task
	gulp.task('default',
		gulpsync.sync([
				// 'clean',
				[
					'coffee',
					'scss',
					'watch'
				]
			])
	 );