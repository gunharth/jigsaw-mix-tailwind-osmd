@extends('_layouts.master')

@section('body')
 <ul class="list-reset leading-tight">
            <li class="font-sans py-4">
                <a class="text-xl text-black font-bold hover:text-black tracking-wide" href="/latest-blog">Latest Blog</a>
                <div class="text-sm text-grey mt-1">
                    <span class="font-bold">Published on</span>
                    December 29, 2017
                </div>
            </li>
            </ul>
            <pre><code class="language-js">const argv = require('yargs').argv
const command = require('node-cmd')
const mix = require('laravel-mix')
const OnBuild = require('on-build-webpack')
const Watch = require('webpack-watch')
const tailwind = require('tailwindcss')

const env = argv.e || argv.env || 'local'
const plugins = [
    new OnBuild(() =&gt; {
        command.get('./vendor/bin/jigsaw build ' + env, (error, stdout, stderr) =&gt; {
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
]

mix.webpackConfig({ plugins })
mix.setPublicPath('source')

mix
    .js('source/_assets/js/app.js', 'source/js')
    .less('source/_assets/less/main.less', 'source/css')
    .options({
        postCss: [
            tailwind('tailwind.js'),
        ]
    })
    .browserSync({
        port: 8000,
        server: { baseDir: 'build_' + env },
        proxy: null,
        files: [
            'build_' + env + '/**/*'
        ]
    })
    .disableNotifications()</code></pre>
@endsection
