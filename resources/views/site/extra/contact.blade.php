@extends('layouts.site')

@section('content')

    <!--=================================
        Inner Header -->
    <section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/03.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
                    <h1 class="breadcrumb-title mb-0 text-white">Contact Us</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ml-auto">
                        <li class="breadcrumb-item"><a href="{{ route('site.index') }}"><i class="fas fa-home mr-1"></i>Home</a></li>
                        <li class="breadcrumb-item active"><span>Contact Us</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          Inner Header -->

    <!--=================================
          Contact Us -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="section-title">
                        <h2>Contact Detail</h2>
                        <p>If success is a process with a number of defined steps, then it is just like any other process.
                            So, what is the first step in any process?</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                {{-- <div class="col-md-9">
                    <form class="row fill-form mb-4 mb-md-0 form-flat-style">
                        <div class="form-group col-sm-6">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Subject</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-primary">Send us</button>
                        </div>
                    </form>
                </div> --}}
                <div class="col-md-8 text-center">
                    <p class="mb-2"><b class="text-dark">Call us:</b> +(974) 701-231-58</p>
                    <p class="mb-4"><b class="text-dark">Mail us:</b> experts.plus.center@gmail.com</p>
                    <div class="social-icon-round icon-sm">
                        <ul class="justify-content-center">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          Contact Us -->

    <!--=================================
          Additional Info -->
    <section class="space-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="section-title">
                        <h2>Additional Contact Info</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center px-0 px-sm-3 mb-4 mb-md-0">
                        <i class="flaticon-support fa-3x text-primary"></i>
                        <h4 class="my-4">Our Support Center</h4>
                        <p class="mb-0">For those of you who are serious about having more, doing more, giving
                            more and being more, success is achievable.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center px-0 px-sm-3 mb-4 mb-md-0">
                        <i class="flaticon-video fa-3x text-primary"></i>
                        <h4 class="my-4">Our Motto</h4>
                        <p class="mb-0">The first thing to remember about success is that it is a process –
                            nothing more, nothing less. There is really no magic.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center px-0 px-sm-3">
                        <i class="flaticon-clock-1 fa-3x text-primary"></i>
                        <h4 class="my-4">Education Hours</h4>
                        <p class="mb-0">Saturday to Thursday : 8 am – 11 pm.<br>Friday :
                            Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
          Additional Info -->

@endsection
