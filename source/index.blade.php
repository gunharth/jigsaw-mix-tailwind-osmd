@extends('_layouts.master')

@section('content')

<ul class="list-reset leading-tight">
@foreach ($posts as $post)
    <li class="font-sans py-4">
        <a class="post-title" href="{{ $page->baseUrl }}{{ $post->getPath() }}">{{ $post->title }}</a></li>
        <div class="text-sm text-grey mb-3">
            <span class="font-bold">Published on</span>
            {{ $post->dateFormatted() }}
        </div>
    </li>
@endforeach
</ul>

<code><!--put this in so purgecss dosn't remove code style--></code>

@endsection
