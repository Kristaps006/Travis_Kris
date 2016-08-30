var project_settings = {
    development_url : 'blue-rabbit.dev',    // For browsersync
    project_name: 'Blue Rabbit',            // eg. 4077-faxekondi
    project_type: 'theme',                  // Relevant for sonarqube
    theme_name: 'blue-rabbit-theme',        // eg. 4077-theme
    version: '1.0',                         // Version Number
    enable_browser_sync : true,             // Disable or enable browsersync here
    root_dir_file_extensions: ['html', 'htm', 'php', 'png', 'ico', 'css'], // Select which filetypes should be synced from root-folder
    project_directories: ['page-templates', 'woocommerce', 'module-templates', 'js', 'includes', 'fonts', 'img', 'css']
};

// Define the required packages
var gulp        = require('gulp'),
    fs          = require('fs'),
    compass     = require('gulp-compass'),
    browserSync = require('browser-sync').create(),
    concat      = require('gulp-concat'),
    wrap        = require('gulp-wrap'),
    cleanCSS    = require('gulp-clean-css'),
    data        = require('gulp-data'),
    stylus      = require('gulp-stylus'),
    sourcemaps  = require('gulp-sourcemaps'),
    gutil       = require('gulp-util'),
    jshint      = require('gulp-jshint'),
    dirSync     = require('gulp-directory-sync'),
    rename      = require('gulp-rename'),
    zip         = require('gulp-zip'),
    del         = require('del'),
    newer       = require('gulp-newer'),
    foreach     = require('gulp-foreach'),
    tap         = require('gulp-tap');



/**
 * Task: default (when running "gulp")
 *
 * This will:
 * Run the "browser-sync" task
 */
gulp.task('default', ['watch']);

/**
 * Task: build (when running "gulp build")
 *
 * This will:
 * Generate property-file for sonarqube analysis
 * Compile source-files
 * Add distributable files to /theme/**theme_name**
 * Create a zip-version for use in wordpress GUI-install
 */
gulp.task('build', ['compile', 'collect-static', 'compress'], function (cb) {
    return cb();
});

/**
 * Will watch Stylus and JS files and compile them on change.
 */
gulp.task('watch', ['compile'], function() {
    gulp.watch('stylus/**/*.styl', ['compile-stylus']);
    gulp.watch('js/frontend/**/*.js', ['compile-js-frontend', 'browser-reload']);
    gulp.watch('js/shared/**/*.js', ['compile-js-frontend']);
    if(project_settings.enable_browser_sync){
        // initialize browser-sync if it is enabled in project-settings
        gulp.start('browser-sync');
    }
});

/**
 * This task will call the necessary tasks to compile the project
 */
gulp.task('compile', ['compile-js', 'compile-css'], function (cb) {
    return cb();
});

// Will compile css by selected preprocessor
gulp.task('compile-css', function () {
    gulp.start('compile-stylus');
});

// Task wil compile styl into css and create sourcemaps and compress
gulp.task('compile-stylus', function() {
    gulp.src([
            './stylus/main.styl'
        ])
        .pipe(stylus())
        .pipe(concat('main.css'))
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.stream());
    
});

// This task will compile the project javascript
gulp.task('compile-js', ['compile-js-frontend'], function (cb) {
    return cb();
});

/**
 * Task: compile-js
 *
 * This will:
 * 1) Concat all our js files into one single js file.
 * 2) Wrap the file in a wrapper file (containing jQuery noConflict etc).
 * 3) Create a minification of the output
 */
gulp.task('compile-js-frontend', function() {
    return gulp.src([
            'js/shared/**/*.js',
            'js/frontend/base/**/*.js',
            'js/frontend/helpers/**/*.js',
            'js/frontend/modules/**/*.js',

            '!js/frontend/base/wrapper.js'  // Exclude the wrapper, since we will use this to wrap the concatenated files
        ])
        .pipe(concat('main.js'))    // Concat into 1 file
        .pipe(wrap({src: 'js/frontend/base/wrapper.js'}))   // Wrap the concatenation result in a wrapper
        .pipe(gulp.dest('js'));  // Output result in js folder
});

gulp.task('compress', function () {
    return gulp.src('theme/'+project_settings.theme_name+'/**')
        .pipe(zip('theme.zip'))
        .pipe(gulp.dest('./'));
});

// Clean task will delete all compiled files
gulp.task('clean', function () {
    return del([
        'theme',
        '.sass-cache',
        'css',
        'js/main.js',
        'theme.zip'
    ]);
});

// Task will sync html files from source to theme
gulp.task('collect-static', ['sync-folders'], function sync_root() {
    return gulp.src( '' )
        .pipe(dirSync(
            './',
            'theme/'+project_settings.theme_name+'/',
            {
                printSummary: true,
                ignore: function check_file_type( dir, file ) {
                    if(project_settings.root_dir_file_extensions.indexOf(file.substr(file.lastIndexOf('.') + 1)) != -1){
                        return false;
                    }
                    else{
                        return true;
                    }
                }
            } ));
});

// Task will sync project folders to distributable theme. Will only sync minified JS files
gulp.task('sync-folders', ['compile'], function () {
    return gulp.src( project_settings.project_directories )
        .pipe(foreach(function(stream, file){
            dir = file.path.match(/([^\/]*)\/*$/)[1];
            return stream
                .pipe(dirSync( dir,  'theme/'+project_settings.theme_name+'/'+dir, { printSummary: true, ignore: function( dir, file ) {
                    if(dir.indexOf('js') == 0){
                        if(file.indexOf('main.js') > -1){
                            return false;
                        }
                        else{
                            return true;
                        }
                    }
                }}));
        }));
});

// Will initialize server for browserSync
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: {
            target: project_settings.development_url
        },
        reloadDelay: 300
    });
});

// Task to reload synced browsers (if active)
gulp.task('browser-reload', function () {
    if(browserSync.active){
        browserSync.reload;
    }
    else{
        gutil.log("Browser-sync disabled in project settings");
    }
});

function swallowError (error) {
    this.emit('end');
}