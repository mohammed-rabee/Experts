@extends('layouts.site')

@section('content')

<!--=================================
            Inner Header -->
            <section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/03.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
                            <h1 class="breadcrumb-title mb-0 text-white">Registred Courses</h1>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ml-auto">
                                <li class="breadcrumb-item"><a href="{{ route('site.index') }}"><i class="fas fa-home mr-1"></i>Home</a></li>
                                <li class="breadcrumb-item active"><span>{{ Auth::user()->fname }} Registred Courses</span></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!--=================================
                      Inner Header -->

    <!--=================================
            Course Details -->
    <section class="space-ptb course-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widgets">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Filter by price</h6>
                            </div>
                            <div class="widget-content">
                                <div class="form-group">
                                    <div class="collapse show" id="price">
                                        <div class="property-price-slider">
                                            <input type="text" id="property-price-slider" name="example_name" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="price-filter d-flex">
                                    <div class="price_label">
                                        Price: <span class="from">$10 — $382</span>
                                    </div>
                                    <a class="ml-auto" href="#"><i class="fas fa-filter"></i>Filter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="mb-0">Showing 1-5 of <span class="text-primary">28 course</span></h6>
                        </div>
                    </div>
                    <div class="course-filter d-sm-flex mb-4">
                        <ul class="course-view-list list-unstyled d-flex mb-0">
                            <li><a class="course-list-icon active" href="course-list.html">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a></li>
                            <li><a class="course-grid-icon" href="course-grid.html">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a></li>
                        </ul>
                    </div>
                    <div class="course">
                        {{-- @foreach ($programs as $program)
                            <div class="row no-gutters box-shadow mb-4">
                                <div class="col-sm-5">
                                    <div class="course-img h-100">
                                        <img class="img-fluid" src="{{ asset('assets/site/images/course/01.jpg') }}" alt="">
                                        <a href="#" class="course-category"><i class="far fa-bookmark"></i>Development</a>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="course-info p-0 h-100">
                                        <div class="px-4 pt-4">
                                            <div class="course-title">
                                                <a href="#">Basic web development & coding online course</a>
                                            </div>
                                            <div class="course-instructor mb-2">by
                                                <a href="#">Alice Williams</a>
                                            </div>
                                            <p class="mb-0">Introspection is the trick. Understand what you want,
                                                why you want it and what it will do for you.</p>
                                        </div>
                                        <div class="course-rate-price px-4 pb-3">
                                            <div class="rating">
                                                <span>4.1</span>
                                                <a href="#">101 Ratings</a>
                                            </div>
                                            <div class="price">$59</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach --}}
                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4 mt-md-5">
                            <nav>
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <span class="page-link">
                                            1
                                            <span class="sr-only">(current)</span>
                                        </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            Course Details -->

@endsection
