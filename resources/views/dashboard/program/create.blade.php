@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-10" style="padding-left: 17%">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add Program</h4>
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

        <div class="card-body">
          <form action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Program Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ old('name') }}" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Program code</label>
                  <input class="form-control" type="text" minlength="4" maxlength="10" name="code" id="code" value="{{ old('code') }}" >
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Fake Student Number</label>
                  <input class="form-control" type="number" name="student_number_fake" id="student_number_fake" value="{{ old('student_number_fake') }}" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Fake previous enrollment number</label>
                  <input class="form-control" type="number" name="student_previous_number_enrolled_fake" id="student_previous_number_enrolled_fake" value="{{ old('student_previous_number_enrolled_fake') }}" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Fake Rate</label>
                  <input class="form-control" type="number" min="0" max="5" name="rate_fake" id="rate_fake" value="{{ old('rate_fake') }}" >
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 2.5%">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Program Description</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> Write the programe description here</label>
                    <textarea class="form-control" rows="8" minlength="10" maxlength="100" name="description" id="description" value="{{ old('description') }}" ></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Cost</label>
                  <input class="form-control" type="number" min="0" max="5000" name="cost" id="cost" value="{{ old('cost') }}" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Discount Precentage</label>
                  <input class="form-control" type="number" min="0" max="100" name="discount" id="discount" value="{{ old('discount') }}" >
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 2.5%">
              <div class="col-md-12">
                <label class="bmd" style="padding-top: 2%">Available Majors :</label><br/>
                <select class="selectpicker col-md-12" data-style="btn btn-primary" multiple data-live-search="true" name="major_id[]" id="major_id" required>
                  @foreach($majors as $major)
                  <option value="{{$major->id}}">{{$major->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="row" style="padding-top: 2%">
              <div class="col-md-12">
                <div class="form-group">
                  <a href="{{ URL::previous() }}">
                    <span class="btn btn-light pull-left">Back</span>
                  </a>
      
                  <button type="submit" class="btn btn-primary pull-right">Add Program</button>
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
