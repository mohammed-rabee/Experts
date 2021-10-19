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
                <div class="col-6 col-xl-6">
                    <img class="img-fluid  mb-4" src="{{asset($program->image)}}" alt="">
                    <!--- sessions -->
                    @if ($teacher == true)
                        @foreach ($sections as $section)
                            <div class="border mb-4">
                                <h6 class="text-dark px-4 py-2 bg-light mb-0">{{ $section->name }}</h6>
                                <div class="p-4 border-top">
                                    <span class="lead text-dark fw-6">Sessions: </span>
                                    @if (!$section->sessions->isEmpty())
                                        @foreach ($section->sessions as $session)
                                            <div>
                                                <div class="accordion" id="accordion_{{ $session->id }}"
                                                    style="padding-top: 4%">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne_{{ $session->id }}">
                                                            <h5 class="accordion-title mb-0">
                                                                <button
                                                                    class="btn btn-link d-flex align-items-center ml-auto"
                                                                    data-toggle="collapse"
                                                                    data-target="#collapseOne_{{ $session->id }}"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne_{{ $session->id }}">{{ $session->name }}
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseOne_{{ $session->id }}"
                                                            class="collapse accordion-content"
                                                            aria-labelledby="headingOne_{{ $session->id }}"
                                                            data-parent="#accordion_{{ $session->id }}">
                                                            <form action="/session/modify/{{ $session->id }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="bmd-label-floating">session
                                                                                    name:</label>
                                                                                <input class="form-control" type="text"
                                                                                    name="name" id="name"
                                                                                    value="{{ $session->name }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="bmd-label-floating">Url:</label>
                                                                                <input class="form-control" type="text"
                                                                                    name="url" id="url"
                                                                                    value="{{ $session->url }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="bmd-label-floating">time:</label>
                                                                                <input class="form-control" type="datetime-local"
                                                                                    name="time" min="{{$session->time}}"
                                                                                    value="{{$session->time}}">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Annoncment:</label>
                                                                            <textarea class="form-control" rows="8"
                                                                                minlength="10" maxlength="100"
                                                                                name="annoncment"
                                                                                id="annoncment">{{ $session->annoncment }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="btn btn-danger" style="float: left"
                                                                    href="{{ route('session.delete', $session->id) }}">Delete
                                                                    Session</a>
                                                                <button class="btn btn-primary" style="float: right"
                                                                    type="submit">Modify
                                                                    Session</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                    <p>No Session Created</p>
                                    @endif
                                </div>
                                <div class="accordion" id="accordionadd_{{ $section->id }}" style="padding-top: 4%">
                                    <div class="card">
                                        <div class="card-header" id="headingOneadd_{{ $section->id }}">
                                            <h5 class="accordion-title mb-0">
                                                <button class="btn btn-link d-flex align-items-center ml-auto"
                                                    data-toggle="collapse"
                                                    data-target="#collapseOneadd_{{ $section->id }}" aria-expanded="true"
                                                    aria-controls="collapseOneadd_{{ $section->id }}">Create New Sessions
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOneadd_{{ $section->id }}" class="collapse accordion-content"
                                            aria-labelledby="headingOneadd_{{ $section->id }}"
                                            data-parent="#accordionadd_{{ $section->id }}">
                                            <form action="/session/store/{{ $section->id }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">session name:</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    id="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Url:</label>
                                                                <input class="form-control" type="text" name="url"
                                                                    id="url">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">time:</label>
                                                                <input class="form-control" type="datetime-local" name="time">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Annoncment:</label>
                                                            <textarea class="form-control" rows="8" minlength="10"
                                                                maxlength="100" name="annoncment"
                                                                id="annoncment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" style="float: right" type="submit">Add
                                                    Session</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" id="accordionadd__{{ $section->id }}"
                                    style="padding-top: 4%">
                                    <div class="card">
                                        <div class="card-header" id="headingOneadd__{{ $section->id }}">
                                            <h5 class="accordion-title mb-0">
                                                <button class="btn btn-link d-flex align-items-center ml-auto"
                                                    data-toggle="collapse"
                                                    data-target="#collapseOneadd__{{ $section->id }}"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOneadd__{{ $section->id }}">Upload Section
                                                    Documents
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOneadd__{{ $section->id }}" class="collapse accordion-content"
                                            aria-labelledby="headingOneadd__{{ $section->id }}"
                                            data-parent="#accordionadd__{{ $section->id }}">
                                            <form action="/section/AddDoc/{{ $section->id }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Document name:</label>
                                                                <input class="form-control" type="text" name="name">
                                                                <label class="bmd-label-floating">Upload file:</label>
                                                                <input class="form-control" type="file" name="doc">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" style="float: right" type="submit">Add
                                                    file</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="border mb-4">
                                        <div class="accordion" id="accordionadd___{{ $section->id }}">
                                            <div class="card">
                                                <div class="card-header" id="headingOneadd___{{ $section->id }}">
                                                    <h5 class="accordion-title text-dark px-4 py-2 bg-light mb-0">
                                                        <button class="btn btn-link d-flex align-items-center ml-auto"
                                                            data-toggle="collapse"
                                                            data-target="#collapseOneadd___{{ $section->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapseOneadd___{{ $section->id }}">Section
                                                            Documents
                                                        </button>
                                                    </h5>
                                                </div>
                                                @if (!$section->resources->isEmpty())
                                                    @foreach ($section->resources as $resourse)
                                                        <div id="collapseOneadd___{{ $section->id }}"
                                                            class="collapse accordion-content"
                                                            aria-labelledby="headingOneadd___{{ $section->id }}"
                                                            data-parent="#accordionadd___{{ $section->id }}">
                                                            <div class="card-body"
                                                                style="padding-left: 7%; padding-right: 45%">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <a
                                                                                href="{{ asset($resourse->url) }}">{{ $resourse->name }}.pdf</a>
                                                                            <a style="float: right"
                                                                                href="{{ route('resourse.delete', $resourse->id) }}">Delete
                                                                                Document</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <h6 style="padding-left: 7%; padding-top: 3%">No Documents for this
                                                        Section</h6>
                                                @endif
                                                {{-- @endif --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @elseif ($teacher == false)
                        <!-- active -->
                        @if ($registred == true && $registerButNotActive == false)
                            @if (!$sessions->isEmpty())
                                @foreach ($sessions as $session)
                                    <div>
                                        <div class="accordion" id="accordion_{{ $session->id }}"
                                            style="padding-top: 4%">
                                            <div class="card">
                                                <div class="card-header" id="headingOne_{{ $session->id }}">
                                                    <h5 class="accordion-title mb-0">
                                                        <button class="btn btn-link d-flex align-items-center ml-auto"
                                                            data-toggle="collapse"
                                                            data-target="#collapseOne_{{ $session->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapseOne_{{ $session->id }}">{{ $session->name }}
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne_{{ $session->id }}"
                                                    class="collapse accordion-content"
                                                    aria-labelledby="headingOne_{{ $session->id }}"
                                                    data-parent="#accordion_{{ $session->id }}">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Url:</label>
                                                                    <input class="form-control" type="text" name="url"
                                                                        id="url" value="{{ $session->url }}" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">time:</label>
                                                                    <input class="form-control" type="text"
                                                                        name="time" value="{{$session->time}}"
                                                                        disabled>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Annoncment:</label>
                                                                <textarea class="form-control" rows="8" minlength="10"
                                                                    maxlength="100" name="annoncment" id="annoncment"
                                                                    disabled>{{ $session->annoncment }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            <div class="accordion" id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="accordion-title mb-0">
                                            <button class="btn btn-link d-flex align-items-center ml-auto" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Sessions:</button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show accordion-content" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p>No Session Created</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- not active -->
                        @elseif ($registred == true && $registerButNotActive == true)
                            <div class="accordion" id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="accordion-title mb-0">
                                            <button class="btn btn-link d-flex align-items-center ml-auto"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">You need to activate your registration on
                                                this
                                                course,Contact with us for activation: </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show accordion-content"
                                        aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <h2>Contact Detail</h2>
                                            <p class="mb-2"><b class="text-dark">Call us:</b> +(974)
                                                701-231-58</p>
                                            <p class="mb-4"><b class="text-dark">Mail us:</b>
                                                experts.plus.center@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- not registered -->
                        @elseif ($registred == false)
                            <div class="col-6 col-xl-6">
                                <a class="btn btn-primary" href="/program/register/{{ $program->id }}">Register</a>
                            </div>
                        @endif
                    @endif
                    @if ($teacher == true)
                        @if (isset($sections))
                            <div class="d-flex justify-content-center">
                                {{ $sections->links() }}
                            </div>
                        @endif
                    @else
                        @if (isset($sessions))
                            <div class="d-flex justify-content-center">
                                {{ $sessions->links() }}
                            </div>
                        @endif
                    @endif
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
                                    <span
                                        class="lead fw-6 text-dark">{{ $program->student_previous_number_enrolled_fake }}
                                        (All Registerd Students)</span>
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
                        <div class="col-md-6">
                            <h6 class="text-dark px-4 py-2 bg-light mb-0">Student Rate</h6>
                            <div class="p-4 border-top">
                                <div class="d-flex align-items-center mb-2">
                                    <b class="display-4 text-warning font-weight-bold">{{ $program->rate_fake }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
