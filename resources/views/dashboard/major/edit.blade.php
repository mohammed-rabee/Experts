@extends('layouts.dashboard')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-10" style="padding-left: 17%">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Updaet Major Information</h4>
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
          <form action="{{ route('major.update' , $major->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Major Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ $major->name }}">
                </div>
              </div>
            </div>
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Discount</label>
                  <input class="form-control" type="number" min="0" max="100" name="discount" id="discount" value="{{ $major->discount }}">
                </div>
              </div>
            </div>
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Number of Years</label>
                  <input class="form-control" type="number" min="0" max="6" name="numberOfYears" id="numberOfYears" value="{{ $major->numberOfYears }}">
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1.5%;padding-bottom: 5%">
              <div class="col-md-12">
                <label class="bmd" style="padding-top: 2%">Major Departments: </label><br/>
                <select class="selectpicker col-md-12" data-style="btn btn-primary" data-live-search="true" name="department_id" id="department_id">
                  <option value="" disabled>Choose Department</option>
                  @foreach($departments as $department)
                  @if(in_array($department->id, $keys))
                  <option value="{{$department->id}}" selected>{{$department->name}}</option>
                  @else
                  <option value="{{$department->id}}">{{$department->name}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
            </div>
            <a href="{{ URL::previous() }}">
              <span class="btn btn-light pull-left">Back</span>
            </a>
            <button type="submit" class="btn btn-primary pull-right">Edit Major</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
