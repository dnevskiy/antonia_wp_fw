var gulp = require('gulp'),
	php2html = require("gulp-php2html"),
	del = require('del'),
	watch = require('gulp-watch'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),    //?
    rigger = require('gulp-rigger'),    // Плагин позволяет импортировать
                                        // один файл в другой простой конструкцией
                                        // = footer.html
                                        // и эта строка при компиляции будет заменена
                                        // на содержимое файла footer.html
    cssmin = require('gulp-clean-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    browserSync = require("browser-sync"),
    reload = browserSync.reload,
    prefixer = require("gulp-autoprefixer");

var path = {
    build: {
        html: 'wp-antonia/',
        js: 'wp-antonia/js/',
        css: 'wp-antonia/css/',
        img: 'wp-antonia/img/',
        fonts: 'wp-antonia/fonts/'
    },
    src: {
        html: 'php/**/*.php',
        js: 'js/main.js',
        style: 'sass/main.scss',
        img: 'img/**/*.*',
        fonts: 'fonts/**/*.*'
    },
    watch: {
        html: 'php/**/*.php',
        js: 'js/**/*.js',
        style: 'sass/**/*.scss',
        img: 'img/**/*.*',
        fonts: 'fonts/**/*.*'
    },
    clean: 'wp-antonia/'
};

var config = {
    proxy: "localhost/wp-antonia/"
};

gulp.task('webserver', function () {
    browserSync(config);
});

gulp.task('clean', function (cb) {
    del(path.clean, cb)
});

gulp.task('html:build', function () {
  gulp.src(path.src.html)
		//.pipe(php2html())
		.pipe(gulp.dest(path.build.html))
		.pipe(reload({stream: true}));
});

gulp.task('js:build', function () {
    gulp.src(path.src.js) 
        .pipe(rigger()) 
        .pipe(sourcemaps.init()) 
        .pipe(uglify()) 
        .pipe(sourcemaps.write()) 
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({stream: true}));
});

gulp.task('style:build', function () {
    gulp.src(path.src.style) 
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: ['sass/'],
            outputStyle: 'compressed',
            sourceMap: true,
            errLogToConsole: true
        }))
        .pipe(prefixer( 'last 2 version',
                        'safari 5',
                        'ie 8',
                        'ie 9',
                        'opera 12.1',
                        'ios 6',
                        'android 4'))
        .pipe(cssmin())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.css))
        .pipe(reload({stream: true}));
});

gulp.task('image:build', function () {
    gulp.src(path.src.img) 
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(path.build.img))
        .pipe(reload({stream: true}));
});

gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
});

gulp.task('build', [
    'html:build',
    'js:build',
    'style:build',
    'fonts:build',
    'image:build'
]);


gulp.task('watch', function(){
    watch([path.watch.html], function(event, cb) {
        gulp.start('html:build');
    });
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:build');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });
    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:build');
    });
});


gulp.task('default', ['build', 'webserver', 'watch']);