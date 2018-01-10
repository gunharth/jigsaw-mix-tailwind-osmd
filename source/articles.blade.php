@extends('_layouts.master')

@section('content')
 <p>Total of {{ $articles->count() }} articles</p>

<ul>
@php

$filtered = $articles->keyBy('article');

@endphp
@foreach ($filtered as $group)
    {{ $group->article }}
@endforeach
</ul>
@endsection
