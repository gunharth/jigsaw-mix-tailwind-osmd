@extends('_layouts.master')

@section('content')
 <p>Total of {{ $posts->count() }} posts</p>

<ul>
@foreach ($posts as $post)
    <li>{{ $post->title }}</li>
@endforeach
</ul>
@endsection
