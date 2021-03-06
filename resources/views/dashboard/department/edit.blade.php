@extends('layouts.dashboard')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-10" style="padding-left: 17%">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Updaet Department Information</h4>
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
          <form action="{{ route('department.update' , $department->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row" style="padding-bottom: 1.5%;">
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Department Name</label>
                  <input class="form-control" type="text" name="name" id="name" value="{{ $department->name }}">
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1.5%;padding-bottom: 5%">
              <div class="col-md-12">
                <label class="bmd" style="padding-top: 2%"> Colleges : </label><br/>
                <select class="selectpicker col-md-12" data-style="btn btn-primary" multiple data-live-search="true" name="college_id" id="college_id">
                  <option value="" disabled>Choose College</option>
                  @foreach($colleges as $college)
                  @if(in_array($college->id, $keys))
                  <option value="{{$college->id}}" selected>{{$college->name}}</option>
                  @else
                  <option value="{{$college->id}}">{{$college->name}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
            </div>
            <a href="{{ URL::previous() }}">
              <span class="btn btn-light pull-left">Back</span>
            </a>
            <button type="submit" class="btn btn-primary pull-right">Edit Department</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
