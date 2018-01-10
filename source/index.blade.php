@extends('_layouts.master')

@section('content')

<ul class="list-reset leading-tight">
@foreach ($posts as $post)
    <li class="font-sans py-4">
        <a class="text-xl text-black font-bold hover:text-black tracking-wide" href="/latest-blog">{{ $post->title }}</a></li>
        <div class="text-sm text-grey mt-1">
            <span class="font-bold">Published on</span>
            December 29, 2017
        </div>
    </li>
@endforeach
</ul>

<pre><code class="language-js">
const argv = require('yargs').argv
const command = require('node-cmd')
const mix = require('laravel-mix')
const OnBuild = require('on-build-webpack')
const Watch = require('webpack-watch')
const tailwind = require('tailwindcss')
</code></pre>
@endsection
