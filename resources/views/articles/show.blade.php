@extends('layouts.master')

@section('head.title')
{{ $article->title }}
@endsection

@section('body.content')
<div class="container" style="margin-top: 60px;">
    <div class="row">
        <a href="{{ url('/') }}" class="btn">BACK</a>

        <div class="col-sm-12 text-center">
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->content }}</p>
        </div>

    </div>
</div>
@endsection


