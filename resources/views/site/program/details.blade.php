@extends('layouts.site')

@section('content')

    <!--================================= Inner Header -->
    <section class="inner-header bg-holder bg-overlay-black-90"
        style="background-image: url('https://www.learnod.com/img/courses/technical-analysis-online-course.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
                    <h1 class="breadcrumb-title mb-0 text-white"> {{ $program->name }} </h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ml-auto">    
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--================================= Inner Header -->

    <!--================================= Course Details -->

    <section class="space-ptb course-details">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xl-6 ">
                    <img class="img-fluid  mb-4" src="{{ asset('assets/site/images/course/10.jpg') }}" alt="">
                    {{-- <img class="img-fluid  mb-4" src="{{asset('/images/'.$classes->image)}}" alt=""> --}}
                </div>
                <div class="col-md-6 col-xl-6 flex-col">
                    <ul class="list-unstyled d-flex flex-wrap mb-5">
                        <li class="mr-3 mr-lg-5 mb-2 mb-lg-0">
                            <div class="d-flex">
                                <i class="flaticon-bookmark fa-3x mt-2 mr-2 mr-lg-3 text-primary"></i>
                                <div class="d-block">
                                    <p class="mb-0">Program Name</p>
                                    <span class="lead fw-6 text-dark">
                                        {{ $program->name }}</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <i class="flaticon-student fa-3x mt-2 mr-2 mr-lg-3 text-primary"></i>
                                <div class="d-block">
                                    <p class="mb-0">Student Number</p>
                                    <span class="lead fw-6 text-dark">{{ $program->student_previous_number_enrolled_fake }} (All Registerd Students)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="border mb-4">
                                <h6 class="text-dark px-4 py-2 bg-light mb-0">
                                    Description:
                                </h6>
                                <div class="p-4 border-top">
                                   {{ $program->description }}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="text-dark px-4 py-2 bg-light mb-0">Student Rate</h6>
                            <div class="p-4 border-top">
                              <div class="d-flex align-items-center mb-2">
                                <b class="display-4 text-warning font-weight-bold">{{ $program->rate_fake }}</b>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- sessions -->
                @if ($registred == true && $registerButNotActive == false)
                <div class="col-6 col-xl-6">
                    <div class="accordion" id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="accordion-title mb-0">
                                    <button class="btn btn-link d-flex align-items-center ml-auto" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Program
                                        Sessions </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show accordion-content" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Motivation is not an accident or something that someone else can give you — you are
                                        the only one with the power to motivate you. Motivation cannot be an external force,
                                        it must come from within as the natural product of your desire to achieve something
                                        and your belief that you are capable to succeed at your goal. Success is something
                                        of which we all want more.</p>
                                    <p> Others call it a sense of entitlement. No matter what term you use, it’s basically
                                        the same thing. Either way, it’s governed by who you think you are and what
                                        circumstances you accept as appropriate for you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- not active -->
                @elseif ($registred == true && $registerButNotActive == true)
                <div class="col-6 col-xl-6">
                    <div class="accordion" id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="accordion-title mb-0">
                                    <button class="btn btn-link d-flex align-items-center ml-auto" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">You need to activate your registration on this course,Contact with us for activation: </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show accordion-content" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <h2>Contact Detail</h2>
                                    <p class="mb-2"><b class="text-dark">Call us:</b> +(974) 701-231-58</p>
                                    <p class="mb-4"><b class="text-dark">Mail us:</b> experts.plus.center@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- not registered -->
                @elseif ($registred == false)
                <div class="col-6 col-xl-6">
                    <a class="btn btn-primary" href="/program/register/{{$program->id}}">Register</a>
                </div>
                @endif
            </div> 
        </div>
    </section>


@endsection
