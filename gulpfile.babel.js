import gulp from 'gulp'
import sass from 'gulp-sass'
import del from 'del'
import yargs from 'yargs'
import browserSync from 'browser-sync';


const PRODUCTION = yargs.argv.prod;
const server = browserSync.create();

const paths = {
    styles: {
        src: 'src/assets/scss/main.scss',
        dist: 'dist/assets/css'
    }
}

export const serve = (done) => {
    server.init({
        proxy: 'http://localhost:8888/wordpress/'
    });
    done();
}

export const reload = (done) => {
    server.reload();
    done(); 
}



export const styles = () => {
    return gulp.src(paths.styles.src)
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(paths.styles.dist))
    .pipe(server.stream());
}

export const watch = () => {
    gulp.watch('src/assets/scss/**/*.scss', styles);
    gulp.watch('**/*.php', reload)
}

export const dev = gulp.series(serve, watch);


export default dev;