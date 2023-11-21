// Gulp module imports
import { src, dest, watch, series, parallel } from 'gulp';

import del from 'del'
import livereload from'gulp-livereload';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);
import autoprefixer from 'gulp-autoprefixer';
import concat from 'gulp-concat';
import uglify from'gulp-uglify';
import rename from 'gulp-rename';
import gulpif from 'gulp-if';
import babel from'gulp-babel';
import sourcemaps from 'gulp-sourcemaps';
import 'dotenv/config';

//Theme options
var themeName = process.env.THEME_NAME; // 👈 make sure to replace 'themeName' with the name of your project folder

// Build Directories
// ----
const dirs = {
  src: 'src',
  dist: 'web/app/themes/' + themeName
}

// File Sources
// ----
const paths = {
  //Style
  styleSrc: `${dirs.src}/scss/**/*.scss`,
  styleDist: `${dirs.dist}/assets/css`,
  //Print
  printSrc: `${dirs.src}/scss/print.scss`,
  //Scripts
  scriptSrc: `${dirs.src}/js/*.js`,
  scriptDist: `${dirs.dist}/assets/js`,
  //Lib
  libSrc: `${dirs.src}/js/lib/**/*.js`,
  libDist: `${dirs.dist}/assets/js/lib`,
  //Fonts
  fontSrc: `${dirs.src}/fonts/**/*`,
  fontDist: `${dirs.dist}/assets/fonts`,
  //Images
  imageSrc: `${dirs.src}/images/**/*`,
  imageDist: `${dirs.dist}/assets/images`,
};

// Environment variable
const wpEnv = process.env.WP_ENV;

// Functions
// ----

// Copy stuff
export const copyStuff = ( src_file, dest_file )  => src( src_file )
		.pipe( dest( dest_file ) );

// Main Tasks
// ----

// Clean
export const clean = () => del([`${dirs.dist}/assets/**/*`]);

// Styles 
export const buildStyles = () => src(paths.styleSrc)
  .pipe( gulpif(wpEnv != 'production', sourcemaps.init()) )
  .pipe( sass({
    errLogToConsole: true,
    outputStyle: 'compressed'
  }) )
  .on( 'error', console.error.bind( console ) )
  .pipe( autoprefixer() )
  .pipe( rename( { suffix: '.min' } ) )
  .pipe( gulpif(wpEnv != 'production', sourcemaps.write( './' )) )
  .pipe(dest(paths.styleDist))
  .pipe(livereload());

// Print
export const printStyles = () => src(paths.printSrc)
  .pipe( sass({
    errLogToConsole: true,
    outputStyle: 'compressed'
  }) )
  .on( 'error', console.error.bind( console ) )
  .pipe( autoprefixer() )
  .pipe( rename( { suffix: '.min' } ) )
  .pipe(dest(paths.styleDist))
  .pipe(livereload());

// Scripts
export const buildScripts = () => src(paths.scriptSrc)
  .pipe( gulpif(wpEnv != 'production', sourcemaps.init()) )
  .pipe(babel({ presets: ["@babel/preset-env"] }))
  .pipe(uglify())
  .pipe(concat('scripts.min.js'))
  .pipe( gulpif(wpEnv != 'production', sourcemaps.write( './' )) )
  .pipe(dest(paths.scriptDist))
  .pipe(livereload());

// Copy JS Lib
export const copyLib = () => copyStuff(paths.libSrc, paths.libDist)

// Copy Fonts
export const copyFonts = () => copyStuff(paths.fontSrc, paths.fontDist)

// Copy Images
export const copyImages = () => copyStuff(paths.imageSrc, paths.imageDist)

// Watch Task
export const devWatch = () => {
  // LiveReload
  livereload.listen();
  watch(paths.styleSrc, buildStyles);
  watch(paths.printSrc, printStyles);
  watch(paths.scriptSrc, buildScripts);
  watch(paths.libSrc, copyLib);
  watch(paths.fontSrc, copyFonts);
  watch(paths.imageSrc, copyImages);
};

/**
  * ========== EXPORTS
*/

exports.build = series(
  clean,
  parallel(
    buildStyles,
    printStyles,
    buildScripts,
    copyImages,
    copyLib,
    copyFonts,
  )
);

exports.watch = series(
  exports.build,
  devWatch
);

exports.default = series(
  exports.build,
);