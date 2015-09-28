'use strict';

var gulp = require('gulp');
var $ = require('gulp-load-plugins')({
  rename: {
    'gulp-connect-php': 'connect',
    'gulp-minify-css': 'minify'
  }
});
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var basename = require('path').basename;
var config = {
    hostname: '127.0.0.1',
    port: '8000'
};

var AUTOPREFIXER_BROWSERS = [
  '> 1%',
  'last 2 versions',
  'Firefox ESR',
  'Opera 12.1'
];

gulp.task('styles', function() {
  return gulp.src(['assets/css/main.css'])
    .pipe($.sourcemaps.init())
    .pipe($.autoprefixer({browsers: AUTOPREFIXER_BROWSERS}))
    .pipe($.minify())
    .pipe($.rename({suffix: '.min'}))
    .pipe($.sourcemaps.write('.'))
    .pipe(gulp.dest('assets/css'))
    .pipe($.filter('**/*.css'))
    .pipe(reload({stream: true}));
});

gulp.task('scripts', function () {
  var scripts = [
    {
      src: ['assets/js/main.js'],
      dest: 'assets/js'
    },{
      src: ['assets/js/templates/post.js'],
      dest: 'assets/js/templates'
    },{
      src: ['assets/js/templates/home.js'],
      dest: 'assets/js/templates'
    }
  ];

  for (var i in scripts) {
    var script = scripts[i];
    gulp.src(script.src)
      .pipe($.sourcemaps.init())
      .pipe($.uglify())
      .pipe($.rename({suffix: '.min'}))
      .pipe($.sourcemaps.write('.'))
      .pipe(gulp.dest(script.dest))
      .pipe(reload({stream: true, once: true}));
  }
});

gulp.task('serve', ['styles', 'scripts'], function () {
    $.connect.server({
      hostname: config.hostname,
      port: config.port,
      base: '.'
    }, function() {
      console.log('PHP server initialized, starting BrowserSync');
      browserSync({
        proxy: config.hostname + ':' + config.port,
        notify: true,
        tunnel: false
      });
    });

  // watch for changes
  gulp.watch([
    'site/**/*.php',
    'assets/images/**/*',
  ]).on('change', reload);

  gulp.watch('assets/css/main.css', ['styles']);
  gulp.watch('assets/js/**/*.js', ['scripts']);
});

gulp.task('default', ['serve']);
