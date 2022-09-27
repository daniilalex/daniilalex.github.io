const gulp = require("gulp");
const browserSync = require("browser-sync");
const sass = require("gulp-sass")(require("sass"));
const cleanCSS = require("gulp-clean-css");
const autoprefixer = require("gulp-autoprefixer");
const rename = require("gulp-rename");

//static server to watch index.html
gulp.task("server", function () {
  browserSync({
    server: {
      baseDir: "app",
    },
  });
  gulp.watch("app/*.html").on("change", browserSync.reload);
});

//compile sass to css, option(compressed sass), rename(.min),autoprefixer,clean $ auto-inject browser
gulp.task("styles", function () {
  return gulp
    .src("app/sass/**/*.+(scss|sass)")
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(rename({ suffix: ".min", prefix: "" }))
    .pipe(autoprefixer())
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(gulp.dest("app/css"))
    .pipe(browserSync.stream());
});
//watch styles
gulp.task("watch", function () {
  gulp.watch("app/sass/**/*.+(scss|sass)", gulp.parallel("styles"));
});
//start gulp
gulp.task("default", gulp.parallel("watch", "server", "styles"));
