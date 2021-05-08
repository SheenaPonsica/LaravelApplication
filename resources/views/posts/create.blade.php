@extends('layouts.app')

@section('content')
    <h1 style="padding-top: 11px">Create Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'placeholder' => 'Body Text'])}}
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-outline-primary'])}}
        <a href="/home" class="btn btn-outline-dark float-right">Cancel</a>
    {!! Form::close() !!}
@endsection