@extends('layouts.app')

@section('title', $page->title)

@section('content')
<div class="container mt-5">
    <h1>{{ $page->title }}</h1>
    <div class="mt-4">
        {!! nl2br(e($page->content)) !!}
    </div>
</div>
@endsection
