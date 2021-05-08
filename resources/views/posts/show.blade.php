@extends('layouts.app')

@section('content')
    <div style="padding-top: 25px"></div>
    <a href="/posts" class="btn btn-outline-dark">Go Back</a>
    <h1 style="padding-top: 35px">{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="" srcset="">
    <hr>
    <div style="font-size: 25px">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST'])!!}
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>
            <!--<div style="padding-top: 15px"></div>-->
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-outline-danger float-right'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection
