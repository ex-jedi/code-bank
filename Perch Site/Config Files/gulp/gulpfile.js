let gulp = require("gulp");
let sass = require("gulp-sass");
let autoprefixer = require("gulp-autoprefixer");
let uglify = require("gulp-uglify");
let rename = require("gulp-rename");
let sourcemaps = require("gulp-sourcemaps");
let browserSync = require("browser-sync").create();

gulp.task("sass", function() {
  return gulp
    .src("sass/*.scss")
    .pipe(sourcemaps.init())
    .pipe(
      sass({ outputStyle: "compressed" }).on("error", function(err) {
        console.error(err.message);
        browserSync.notify(err.message, 6000); // Display error in the browser
        this.emit("end"); // Prevent gulp from catching the error and exiting the watch process
      })
    )
    .pipe(autoprefixer("last 2 versions"))
    .pipe(sourcemaps.write("../css"))
    .pipe(gulp.dest("css"))
    .pipe(browserSync.stream());
});

gulp.task("compress", function() {
  gulp
    .src("scripts/js/*.js")
    .pipe(sourcemaps.init())
    .pipe(
      uglify().on("error", function(err) {
        console.error(err.message);
        browserSync.notify(err.message, 6000); // Display error in the browser
        this.emit("end"); // Prevent gulp from catching the error and exiting the watch process
      })
    )
    .pipe(sourcemaps.write("../minified"))
    .pipe(rename({ suffix: "-min" }))
    .pipe(gulp.dest("scripts/minified/"));
});

gulp.task("browserSync", function() {
  browserSync.init({
    proxy: "breconminbreak.test"
  });
});

gulp.task("watch", ["browserSync", "sass", "compress"], function() {
  gulp.watch("sass/*.scss", ["sass"]);
  gulp.watch("scripts/js/*.js", ["compress"]);
  gulp.watch("perch/templates/**/*.*", browserSync.reload);
  gulp.watch("*.php", browserSync.reload);
  gulp.watch("*.html", browserSync.reload);
  gulp.watch("scripts/minified/*.js", browserSync.reload);
});
