@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-10" style="padding-left: 17%">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Update Section Information</h4>
          {{-- <p class="card-category">Complete your profile</p> --}}
          @if ($errors->any())
          <div class="alert {{ $errors->first('class') }}" role="alert">
            <strong>Whoops!</strong> <br><br>
            <ul>
              @if($errors->has('message'))
              <li>{{ $errors->first('message') }}</li>
              @endif
            </ul>
          </div>
          @endif
        </div>

        <div class="card-body" style="padding-top: 2%">
          <form action="{{ route('section.update', $section->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            {{-- <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Section Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ $section->name }}" required>
                </div>
              </div> --}}
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Max Number Of Students</label>
                  <input class="form-control" type="number" min="0" max="60" name="maxNumberOfStudent" id="maxNumberOfStudent" value="{{ $section->maxNumberOfStudent }}"  required>
                </div>
              </div>
            </div>

            <div class="row" style="padding-top: 1.5%;padding-bottom: 5%">
              <div class="col-md-6">
                <div class="form-group" style="padding-top: 2%">
                  <label class="bmd">Programs</label>
                  <select class="form-control selectpicker col-md-12" data-style="btn btn-primary" name="major_program_id" id="major_program_id" required>
                    <option value=""></option>
                    @foreach($programs as $program)
                    <option value="{{$program->id}}">{{$program->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            
            {{-- <div class="row" style="padding-top: 1.5%;padding-bottom: 5%">
              <div class="col-md-12">
                <label class="bmd" style="padding-top: 2%">Available Majors :</label><br/>
                <select class="selectpicker col-md-12" multiple data-live-search="true" name="major_id[]" id="major_id">
                  @foreach($otherMajors as $amajor)
                  <option value="{{$amajor->id}}">{{$amajor->name}}</option>
                  @endforeach
                </select>
              </div>
            </div> --}}
            
            <a href="{{ route('section.index') }}">
              <span class="btn btn-light pull-left">All Sections</span>
            </a>

            <button type="submit" class="btn btn-primary pull-right">Edit Section</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
