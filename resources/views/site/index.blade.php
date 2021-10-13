@extends('layouts.site')

@section('content')

    <!--=================================
        Search Course -->
    <section class="space-pt bg-holder bg-overlay-black-30" data-jarallax='{"speed": 0.6}' data-jarallax-video="https://www.youtube.com/embed/rGtcmKIZi5c">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 ">
              <div class="space-ptb">
                <h2 class="mb-3 display-4 fw-7 text-white">We make your children’s future better </h2>
                <h6 class="mb-0 text-white">A best and cheapest way of getting know learning to make a better tomorrow .</h6>
                <a class="btn btn-md btn-primary mt-4 " data-toggle="modal" data-target="#loginModal" href="#">Join for free</a>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!--=================================
        How It Works -->
    <section class="space-ptb bg-overlay-theme-97 bg-primary" style="background-image: url('{{ asset('assets/site/images/bg/07.jpg') }}'); background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <div class="section-title">
                  <h2 class="text-white">How It Works?</h2>
                  <p class="mb-0 text-white">We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving success is staying motivated over the long haul.</p>
                </div>
              </div>
            </div>
            <div class="row pb-4">
              <div class="col-sm-4 mb-4 mb-sm-0">
                <div class="feature-info text-center">
                  <div class="feature-info-icon">
                    <i class="flaticon-register fa-4x text-dark bg-white rounded-circle"></i>
                    <img class="d-lg-block d-none" src="{{ asset('assets/site/images/feature-info/arrow-01.png') }}" alt="">
                  </div>
                  <h4 class="my-4 text-white">Register</h4>
                  <p class="text-white mb-0">One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing them with beliefs that will help their desires.</p>
                </div>
              </div>
              <div class="col-sm-4 mb-4 mb-sm-0">
                <div class="feature-info text-center">
                  <div class="feature-info-icon">
                    <i class="flaticon-add-user fa-4x text-dark bg-white rounded-circle"></i>
                    <img class="d-lg-block d-none" src="{{ asset('assets/site/images/feature-info/arrow-02.png') }}" alt="">
                  </div>
                  <h4 class="my-4 text-white">Create Account</h4>
                  <p class="text-white mb-0">The price is something not necessarily defined as financial. It could be time, effort, sacrifice, money or perhaps, something else.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="feature-info text-center">
                  <div class="feature-info-icon">
                    <i class="flaticon-edit fa-4x text-dark bg-white rounded-circle"></i>
                  </div>
                  <h4 class="my-4 text-white">Hands-On Learning</h4>
                  <p class="text-white mb-0">It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice.</p>
                </div>
              </div>
            </div>
        </div>      
    </section>
    <!--=================================
    How It Works -->

    <section class="bg-white py-4">
        <div class="row feature-info-02">
          <div class="col-sm-6 col-lg-4 border-0">
            <div class="d-flex align-items-start py-4 pl-0 pl-sm-4 mb-0 mb-sm-4">
              <div class="d-flex">
                <i class="flaticon-online-learning-1 fa-3x mt-2 text-dark"></i>
              </div>
              <div class="ml-4">
                <h6 class="fw-5 mb-0 mt-0 text-dark">100,000 online courses</h6>
                <p class="mb-0 text-dark">Focus is having the unwavering attention.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 border-0">
            <div class="d-flex align-items-start py-4 pl-0 pl-sm-4 mb-0 mb-sm-4">
              <div class="d-flex">
                <i class="flaticon-lock fa-3x mt-2 text-dark"></i>
              </div>
              <div class="ml-4">
                <h6 class="fw-5 mb-0 mt-0 text-dark">Lifetime entrance</h6>
                <p class="mb-0 text-dark">The best way is to develop and follow.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 border-0">
            <div class="d-flex align-items-start py-4 pl-0 pl-sm-4 mb-4">
              <div class="d-flex">
                <i class="flaticon-strategy fa-3x mt-2 text-dark"></i>
              </div>
              <div class="ml-4">
                <h6 class="fw-5 mb-0 mt-0 text-dark">Live learning</h6>
                <p class="mb-0 text-dark">Start with your goals in mind and then work.</p>
              </div>
            </div>
          </div>
        </div>
    </section>

  
    {{-- <!--=================================
        Education Categories -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-title text-center">
                  <h2>Choose your course & learning</h2>
                  <p>Get the oars in the water and start rowing. Execution is the single biggest factor in achievement.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="">
                  <div class="categories">
                    <img class="img-fluid" src="{{ asset('assets/site/images/categories/01.jpg') }}" alt="">
                    <h6 class="categories-title">Design</h6>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="">
                  <div class="categories">
                    <img class="img-fluid" src="{{ asset('assets/site/images/categories/02.jpg') }}" alt="">
                    <h6 class="categories-title">Development</h6>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="">
                  <div class="categories">
                    <img class="img-fluid" src="{{ asset('assets/site/images/categories/03.jpg') }}" alt="">
                    <h6 class="categories-title">Marketing</h6>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="">
                  <div class="categories">
                    <img class="img-fluid" src="{{ asset('assets/site/images/categories/04.jpg') }}" alt="">
                    <h6 class="categories-title">IT & software</h6>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="">
                  <div class="categories mb-md-0">
                    <img class="img-fluid" src="{{ asset('assets/site/images/categories/05.jpg') }}" alt="">
                    <h6 class="categories-title">Photography</h6>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="">
                  <div class="categories mb-md-0">
                    <img class="img-fluid" src="{{ asset('assets/site/images/categories/06.jpg') }}" alt="">
                    <h6 class="categories-title">Music</h6>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="">
                  <div class="categories mb-sm-0">
                    <img class="img-fluid" src="{{ asset('assets/site/images/categories/07.jpg') }}" alt="">
                    <h6 class="categories-title">Personal Development</h6>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="">
                  <div class="categories mb-0">
                    <img class="img-fluid" src="{{ asset('assets/site/images/categories/08.jpg') }}" alt="">
                    <h6 class="categories-title">Business</h6>
                  </div>
                </a>
              </div>
            </div>
        </div>      
    </section> --}}
    
    <!--=================================
        Education Categories -->
        
    <!--=================================
        info box -->
    <section class="bg-primary py-4">
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-lg-3 d-flex mb-4 mb-lg-0">
                <i class="flaticon-user text-white fa-4x mr-3"></i>
                <div class="counter">
                  <div class="counter-number">
                    <h3 class="timer text-white mb-0" data-to="2208" data-speed="2000">2208</h3>
                  </div>
                  <p class="mb-0 fw-6 text-white">Happy Students</p>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 d-flex mb-4 mb-lg-0">
                <i class="flaticon-list-1 text-white fa-4x mr-3"></i>
                <div class="counter">
                  <div class="counter-number">
                    <h3 class="timer text-white mb-0" data-to="205" data-speed="2000">2208</h3>
                  </div>
                  <p class="mb-0 fw-6 text-white">Our Courses</p>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 d-flex mb-4 mb-sm-0">
                <i class="flaticon-studying text-white fa-4x mr-3"></i>
                <div class="counter">
                  <div class="counter-number">
                    <h3 class="timer text-white mb-0" data-to="130" data-speed="2000">2208</h3>
                  </div>
                  <p class="mb-0 fw-6 text-white">Our Teachers</p>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 d-flex">
                <i class="flaticon-guarantee text-white fa-4x mr-3"></i>
                <div class="counter">
                  <div class="counter-number">
                    <h3 class="timer text-white mb-0" data-to="26" data-speed="2000">2208</h3>
                  </div>
                  <p class="mb-0 fw-6 text-white">Awards Won</p>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!--=================================
        info box -->
@endsection