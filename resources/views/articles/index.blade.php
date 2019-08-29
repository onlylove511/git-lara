
@extends('layouts.master')

@section('head.title')
    Danh sach bai viet
@endsection

@section('body.content')
  <div class="container" style="margin-top: 60px;">
    <div class="row">

        @foreach($articles as $a)
        <div class="col-sm-12 text-center">
            <h1>{{ $a->title }}</h1>
            <p>{{ $a->content }}</p>
        <p><a href="{{ route('article.show', $a->id) }}">Đọc thêm</a></p>
        </div>
        @endforeach

    </div>
  </div>
@endsection

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

