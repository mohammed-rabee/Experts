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
                        <li class="breadcrumb-item"><a href="{{ route('site.index') }}"><i
                                    class="fas fa-home mr-1"></i>Home</a></li>
                        <li class="breadcrumb-item active"><span>({{ Auth::user()->username }}) Registred Courses</span></li>
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
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="mb-0">Showing 1-5 of <span
                                    class="text-primary">{{ $programs->count() }}</span></h6>
                        </div>
                    </div>
                    <div class="course-filter d-sm-flex mb-4">
                        {{-- <ul class="course-view-list list-unstyled d-flex mb-0">
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
                        </ul> --}}
                    </div>
                    <div class="course">
                        @foreach ($programs as $majorProgram)
                            <a class="text-dark" href="/course/{{$majorProgram->id}}">
                                <div class="row no-gutters box-shadow mb-4">
                                    <div class="col-sm-5">
                                        <div class="course-img h-100">
                                            <img class="img-fluid"
                                                src="{{ asset($majorProgram->program->image) }}" alt="">
                                            <p class="course-category"><i class="far fa-bookmark"></i>{{ $major->name }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="course-info p-0 h-100">
                                            <div class="px-4 pt-4">
                                                <div class="course-title">
                                                    {{ $majorProgram->program->name }}
                                                </div>
                                                <div class="course-instructor mb-2" style="color: blue">
                                                    Description:
                                                </div>
                                                <p class="mb-0">{{ $majorProgram->program->description }}</p>
                                            </div>
                                            <div class="course-rate-price px-4 pb-3">
                                                <div class="rating">
                                                    <span>{{ $majorProgram->program->rate_fake }}</span>
                                                    Ratings
                                                </div>
                                                <div class="price">{{ $majorProgram->program->cost }} $</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4 mt-md-5">
                            <nav>
                                <ul class="pagination justify-content-center mb-0">
                                    {{-- <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li> --}}
                                    @if ($programs->links()->paginator->hasPages())
                                        <div class="d-flex justify-content-center">
                                            {{ $programs->links() }}
                                        </div>
                                    @endif
                                    {{-- <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li> --}}
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
