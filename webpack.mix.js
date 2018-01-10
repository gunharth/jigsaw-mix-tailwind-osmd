const argv = require('yargs').argv;
const command = require('node-cmd');
const mix = require('laravel-mix');
const OnBuild = require('on-build-webpack');
const Watch = require('webpack-watch');
const tailwindcss = require('tailwindcss');
const glob = require("glob-all");
const PurgecssPlugin = require("purgecss-webpack-plugin");

/**
 * Custom PurgeCSS Extractor
 * https://github.com/FullHuman/purgecss
 * https://github.com/FullHuman/purgecss-webpack-plugin
 */
class TailwindExtractor {
    static extract(content) {
        return content.match(/[A-z0-9-:\/]+/g);
    }
}

const env = argv.e || argv.env || 'local'
const plugins = [
    new OnBuild(() => {
        command.get('./vendor/bin/jigsaw build ' + env, (error, stdout, stderr) => {
            if (error) {
                console.log(stderr)
                process.exit(1)
            }
            console.log(stdout)
        })
    }),
    new Watch({
        paths: ['source/**/*.md', 'source/**/*.php'],
        options: { ignoreInitial: true }
    }),
    new PurgecssPlugin({

        // Specify the locations of any files you want to scan for class names.
        paths: glob.sync([
            path.join(__dirname, "source/index.blade.php"),
            //path.join(__dirname, "source/_assets/js/**/*.vue")
        ]),
        extractors: [
            {
                extractor: TailwindExtractor,

                // Specify the file extensions to include when scanning for
                // class names.
                extensions: ["html", "js", "php", "vue"]
            }
        ]
    }),
]


mix.webpackConfig({ plugins })
mix.setPublicPath('source')

mix
    .js('source/_assets/js/app.js', 'source/js')
    .sass('source/_assets/sass/main.scss', 'source/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.js')],
    })
    .browserSync({
        // for localhost
        // port: 8000,
        // server: { baseDir: 'build_' + env },
        // proxy: null,
        // for valet
        proxy: 'http://jigsaw-mix-tailwind-osmd.test',
        files: [
            'build_' + env + '/**/*'
        ]
    })
if (mix.inProduction()) {
    mix.version();
}