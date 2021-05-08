@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#"></a></li>
  </ol>
</nav>
  <div class="container-fluid" style="padding-top: 90px; padding-bottom: 55px">
    <div class="card text-center" >
      <div class="card-header" style="font-size: 35px">
        LARAVEL APPLICATION
      </div>
      <div class="card-body" style="font-size: 20px;">
        <h2 class="card-title">Welcome to Laravel Application</h2>
        <p class="card-text">This Laravel Application is made and created <br> by Sheena P. Ponsica
          from BSIT 3B of EVSU-OCC <br> from the "Laravel From Scrath" Youtube series</p>
        <a href="/about" class="btn btn-outline-primary">Click to See More...</a>
      </div>
      <div class="card-footer text-muted" style="font-size: 25px">
        2 days ago
      </div>
    </div>
  </div>
@endsection
