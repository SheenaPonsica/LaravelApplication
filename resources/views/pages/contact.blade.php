@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contact</li>
    </ol>
  </nav>
        <div class="container" style="padding-top: 51px; padding-bottom: 51px">
                <div class="card">
                        <div class="card">
                                <div class="card-header" style="font-size: 21px">
                                Message Us
                                </div>
                                <section class="form-section">
                                        <div class="about-company-section">
                                            <div class="container p-1 p-sm-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <input type="text" class="form-control" placeholder="Full Name*">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <input type="email" class="form-control" placeholder="Email Address*">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <input type="number" class="form-control" placeholder="Contact Number*">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <input type="text" class="form-control" placeholder="Subject*">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                                                </div>
                                                                <div class="form-group col-md-12 text-center">
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-6 Address">
                                                        <h5>Call Us / WhatsApp</h5>
                                                        <p><a href="tel:+630908760349"><i class="fa fa-phone-square" aria-hidden="true"></i> +63 0908760439</a><br></p>
                                                        <h5>Email / Website</h5>
                                                        <p><a href="mailto:sheenaponsica1125@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> sheenaponsica@gmail.com</a></p>
                                                        <h5>Working Hours</h5>
                                                        <p>Monday - Friday: 9am - 6pm</p>
                                                        <h5>Address</h5>
                                                        <p>Purok 1, F. Tan Street, Barangay Valencia, Ormoc City, Leyte, Philipphihnes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                        </div>
                </div>
        </div>
@endsection
