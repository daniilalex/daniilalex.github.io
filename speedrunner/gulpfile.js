import { task, watch, src, dest, parallel } from "gulp";
import browserSync, { reload, stream } from "browser-sync";
const sass = require("gulp-sass")(require("sass"));
import cleanCSS from "gulp-clean-css";
import autoprefixer from "gulp-autoprefixer";
import rename from "gulp-rename";

//static server to watch index.html
task("server", function () {
  browserSync({
    server: {
      baseDir: "app",
    },
  });
  watch("app/*.html").on("change", reload);
});

//compile sass to css, option(compressed sass), rename(.min),autoprefixer,clean $ auto-inject browser
task("styles", function () {
  return src("app/sass/**/*.+(scss|sass)")
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(rename({ suffix: ".min", prefix: "" }))
    .pipe(autoprefixer())
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(dest("app/css"))
    .pipe(stream());
});
//watch styles
task("watch", function () {
  watch("app/sass/**/*.+(scss|sass)", parallel("styles"));
});
//start gulp
task("default", parallel("watch", "server", "styles"));
