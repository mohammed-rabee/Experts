@extends('layouts.site')

@section('content')
    <!--=================================
            Inner Header -->
    <section class="inner-header bg-holder bg-overlay-black-90" style="background-image: url('images/bg/03.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
                    <h1 class="breadcrumb-title mb-0 text-white">FAQs</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb d-flex justify-content-center justify-content-md-end ml-auto">
                        <li class="breadcrumb-item"><a href="{{ route('site.index') }}"><i class="fas fa-home mr-1"></i>Home</a></li>
                        <li class="breadcrumb-item active"><span>faqs</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              Inner Header -->

    <!--=================================
              Faqs -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4 mb-md-0">
                    <div class="accordion" id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="accordion-title mb-0">
                                    <button class="btn btn-link d-flex align-items-center ml-auto" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">But
                                        doesn’t something in that story set strangely with you? </button>
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
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="accordion-title mb-0">
                                    <button class="btn btn-link d-flex align-items-center ml-auto collapsed"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">What does success look like to me? Why do I want a
                                        particular thing? </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse accordion-content" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Motivation is not an accident or something that someone else can give you — you are
                                        the only one with the power to motivate you. Motivation cannot be an external force,
                                        it must come from within as the natural product of your desire to achieve something
                                        and your belief that you are capable to succeed at your goal. Success is something
                                        of which we all want more.</p>
                                    <p>If success is a process with a number of defined steps, then it is just like any
                                        other process. So, what is the first step in any process?</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingthree">
                                <h5 class="accordion-title mb-0">
                                    <button class="btn btn-link d-flex align-items-center ml-auto collapsed"
                                        data-toggle="collapse" data-target="#collapsethree" aria-expanded="false"
                                        aria-controls="collapsethree">How will this achievement change my life? </button>
                                </h5>
                            </div>
                            <div id="collapsethree" class="collapse accordion-content" aria-labelledby="headingthree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Making a decision to do something – this is the first step. We all know that nothing
                                        moves until someone makes a decision. The first action is always in making the
                                        decision to proceed. This is a fundamental step, which most people overlook.</p>
                                    <p>So, how can we stay on course with all the distractions in our lives? Willpower is a
                                        good start, but it’s very difficult to stay on track simply through willpower.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingfour">
                                <h5 class="accordion-title mb-0">
                                    <button class="btn btn-link d-flex align-items-center ml-auto collapsed"
                                        data-toggle="collapse" data-target="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">So how do we get clarity? </button>
                                </h5>
                            </div>
                            <div id="collapsefour" class="collapse accordion-content" aria-labelledby="headingfour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>So how do we get clarity? Simply by asking ourselves lots of questions: What do I
                                        really want? What does success look like to me? Why do I want a particular thing?
                                        How will this achievement change my life? How can I use this success to make a
                                        difference for others.</p>
                                    <p>The price is something not necessarily defined as financial. It could be time,
                                        effort, sacrifice, money or perhaps, something else. The point is that we must be
                                        fully aware of the price and be willing to pay it, if we want to have success.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingfive">
                                <h5 class="accordion-title mb-0">
                                    <button class="btn btn-link d-flex align-items-center ml-auto collapsed"
                                        data-toggle="collapse" data-target="#collapsefive" aria-expanded="false"
                                        aria-controls="collapsefive">What can you do to form the habit of becoming a
                                        success? </button>
                                </h5>
                            </div>
                            <div id="collapsefive" class="collapse accordion-content" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Franklin’s extraordinary success in life and politics can be attributed to his
                                        perseverance to overcome his personal liabilities, and his desire to constantly
                                        become better. Next time you really want to achieve something, take time to focus on
                                        your own personal journal. What is your temptation that is standing in your way to
                                        greatness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingsix">
                                <h5 class="accordion-title mb-0">
                                    <button class="btn btn-link d-flex align-items-center ml-auto collapsed"
                                        data-toggle="collapse" data-target="#collapsesix" aria-expanded="false"
                                        aria-controls="collapsesix">Was this just another little prank, courtesy of a
                                        mischievous Universe?</button>
                                </h5>
                            </div>
                            <div id="collapsesix" class="collapse accordion-content" aria-labelledby="headingsix"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>I could just think about receiving more money, and I’d get an immediate surge of
                                        business within hours. This pattern went on for 16 or 17 years, till I shut down my
                                        writing and editing business. So it wasn’t an occasional fluke. Now, I must admit I
                                        had a burning determination to stay in Japan, and for the first year or two I never
                                        knew if things would work out for me or not.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingsevan">
                                <h5 class="accordion-title mb-0">
                                    <button class="btn btn-link d-flex align-items-center ml-auto collapsed"
                                        data-toggle="collapse" data-target="#collapsesevan" aria-expanded="false"
                                        aria-controls="collapsesevan">Get yourself nice and relaxed and settled?</button>
                                </h5>
                            </div>
                            <div id="collapsesevan" class="collapse accordion-content" aria-labelledby="headingsevan"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Become aware of the temperature, the sights, the sounds and enjoy walking along the
                                        path of your life. Make it sensory rich and get comfortable with the idea. Imagine
                                        the feeling of your feet walking along the path and the sound they make.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              Faqs -->
@endsection
