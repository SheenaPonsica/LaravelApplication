@extends('layouts.app')

@section('content')
    <h1 style="padding-top: 11px">Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div style="padding-top: 11px"></div>
            <div class="card bg-light">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="" srcset="">
                        </div>
                        <div class="col-md-8 col-sm-4">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
       <p>No posts found</p> 
    @endif
@endsection