@extends('layouts.site')

@section('content')

    <!--=================================
        Inner Header -->
    <section class="space-ptb bg-holder bg-overlay-black-90" style="background-image: url('images/bg/03.jpg');">
        <div class="container">
            <div class="find-Course">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="text-white mb-4">1000+ Popular Courses</h3>
                    </div>
                </div>
                <div class="row">
                    <form class="col-md-10 offset-md-1">
                        <div class="form-row align-items-center">
                            <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                                <input type="text" class="form-control rounded-sm" placeholder="Search Course">
                            </div>
                            <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                                <input type="text" class="form-control rounded-sm" placeholder="Location">
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <select class="basic-select form-control">
                                    <option selected="selected">Choose Instructor</option>
                                    <option>Design</option>
                                    <option>Development</option>
                                    <option>Marketing</option>
                                    <option>IT & software</option>
                                    <option>Photography</option>
                                    <option>Music</option>
                                    <option>Personal Development</option>
                                    <option>Business</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-3 text-left mt-3 mt-lg-0">
                                <a class="btn btn-primary d-lg-block rounded-sm" href="#">Search course</a>
                            </div>
                        </div>
                    </form>
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
                        <div class="widget widget-serach">
                            <h6 class="widget-title">Search</h6>
                            <div class="widget-content">
                                <form class="fill-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="button" class="btn btn-primary">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="widget widget-Categories">
                            <h6 class="widget-title">Categories</h6>
                            <div class="widget-content">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                                    <label class="custom-control-label" for="checkbox1">Design</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox2">
                                    <label class="custom-control-label" for="checkbox2">Development</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox3">
                                    <label class="custom-control-label" for="checkbox3">Marketing</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox4">
                                    <label class="custom-control-label" for="checkbox4">IT & software</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox5">
                                    <label class="custom-control-label" for="checkbox5">Photography</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox6">
                                    <label class="custom-control-label" for="checkbox6">Music</label>
                                </div>
                            </div>
                        </div>
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
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Levels</h6>
                            </div>
                            <div class="widget-content">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox12">
                                    <label class="custom-control-label" for="checkbox12">Beginner</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox7">
                                    <label class="custom-control-label" for="checkbox7">Intermediate</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox8">
                                    <label class="custom-control-label" for="checkbox8">Advanced</label>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Type</h6>
                            </div>
                            <div class="widget-content">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox9">
                                    <label class="custom-control-label" for="checkbox9">Free Course</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox10">
                                    <label class="custom-control-label" for="checkbox10">Paid Course</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox11">
                                    <label class="custom-control-label" for="checkbox11">Offline Course</label>
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
                        <ul class="course-short list-unstyled d-sm-flex mb-0">
                            <li>
                                <form class="form-inline">
                                    <div class="form-group d-sm-flex d-block">
                                        <label class="justify-content-start">Short by:</label>
                                        <div class="short-by">
                                            <select class="form-control basic-select">
                                                <option>Date new to old</option>
                                                <option>Price Low to High</option>
                                                <option>Price High to Low</option>
                                                <option>Date Old to New</option>
                                                <option>Date New to Old</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <ul class="course-view-list list-unstyled d-flex mb-0">
                            <li>
                                <form class="form-inline">
                                    <div class="form-group d-sm-flex d-block">
                                        <label class="justify-content-start pr-4">Sort by: </label>
                                        <div class="short-by">
                                            <select class="form-control basic-select">
                                                <option>12</option>
                                                <option>18 </option>
                                                <option>24 </option>
                                                <option>64 </option>
                                                <option>128</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li><a href="index-05.html"><i class="fas fa-map-marker-alt fa-lg"></i></a></li>
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
                        @foreach ($programs as $program)
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
                        @endforeach
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
