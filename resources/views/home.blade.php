@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 55px; padding-bottom: 55px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size: 25px">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <!--@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif-->
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h2 style="padding-top: 25px">Your Blog Posts</h2>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </table>                       
                    @else
                        <p>You Have no Posts!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
