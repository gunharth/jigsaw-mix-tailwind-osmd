@extends('_layouts.master')

@section('content')

<ul class="list-reset leading-tight">
@foreach ($posts as $post)
    <li class="font-sans py-4">
        <a class="post-title" href="{{ $post->getPath() }}">{{ $post->title }}</a></li>
        <div class="text-sm text-grey mb-3">
            <span class="font-bold">Published on</span>
            December 29, 2017
        </div>
    </li>
@endforeach
</ul>

@endsection
