@extends('layouts.master')

@section('head.title')
    Thêm bài viết
@endsection

@section('body.content')
<div class="container" style="margin-top: 60px;">
<a href="{{ url('/') }}" class="btn">BACK</a>

    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="row">
    

        <form action="{{ route('article.store') }}" method="post" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group" >
                <label for="title" class="control-label"></label>
                <input type="text" class="form-controll" name="title" id="title" required placeholder="Tiêu đề bài viết">
            </div>

            <div class="form-group">
                <label for="Content" class="control-label"></label>
                <input type="text" class="form-controll" name="content" id="content" required placeholder="Nội dung bài viết">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Thêm</button>
            </div>
        </form>

    </div>
</div>
@endsection


