@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-10" style="padding-left: 17%">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add Section</h4>
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

        <div class="card-body" style="padding-top: 1.5%">
          <form action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            {{-- <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Section Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ old('name') }}" required>
                </div>
              </div>
            </div> --}}
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-7">
                <div class="form-group">
                  <label class="bmd-label-floating">Max Number Of Students</label>
                  <input class="form-control" type="number" min="0" max="60" name="maxNumberOfStudent" id="maxNumberOfStudent" value="{{ old('maxNumberOfStudent') }}" required>
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1.5%;padding-bottom: 1%">
              <div class="col-md-9">
                <div class="form-group" style="padding-top: 2%">
                  <label class="bmd">Programs</label>
                </div>
              </div>
            </div>
            @foreach($programs as $program)
            <div class="row">
              <div class="col-md-10">
                <select class="selectpicker col-md-5" data-style="btn btn-primary" name="major_program_id" id="major_program_id" required>
                  <option disabled> -- Select Program -- </option>
                  <option value="{{$program->id}}">{{$program->name}}</option>
                </select>
                <select class="selectpicker col-md-4" data-style="btn btn-ligt" name="major_id" id="major_id" required>
                  @foreach($program->majors as $major)
                  <option disabled selected value> -- Select Major -- </option>
                  <option value="{{$major->id}}">{{$major->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            @endforeach
            
                  
                  
                  
                  
                

            <div class="row" style="padding-top: 2%">
              <div class="col-md-12">
                <div class="form-group">
                  <a href="{{ route('section.index') }}">
                    <span class="btn btn-light pull-left">All Sections</span>
                  </a>
      
                  <button type="submit" class="btn btn-primary pull-right">Add Section</button>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
