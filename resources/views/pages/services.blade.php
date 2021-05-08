@extends('layouts.app')

@section('content')
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
        </nav>
        <div class="jumbotron" style="background: white">
                <h1 class="display-4">Hello, Good Day Everyone!</h1>
                <h3 class="lead">This is our services page</h3>
                <hr class="my-4">
                <h3>Our passion is your success</h3>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more ...</a>
        </div>
        <div class="container-fluid" style="padding-bottom: 25px">
                <div class="card" style="font-size: 25px">
                        <div class="card-header" style="font-size: 40px">
                          Services We Offer
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Web Programming</li>
                          <li class="list-group-item">Web Designing</li>
                          <li class="list-group-item">SEO</li>
                        </ul>
                </div>
        </div>
@endsection
