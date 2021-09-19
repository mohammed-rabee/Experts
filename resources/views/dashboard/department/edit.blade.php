@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-9" style="padding-left: 20%">
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
        <div class="card-body" style="padding-top: 1.5%">
          <form action="{{ route('department.update' , $department->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd" style="padding-top: 1.2%">College Name</label>
                  <select class="form-control" style="padding-top: 2.5%" name="college_id" id="college_id" required>
                    <option value="" class="bmd-label-floating">Choose College Name</option>
                    @foreach($otherColleges as $college)
                    <option value="{{$college->id}}">{{$college->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Department Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ $department->name }}" required>
                </div>
              </div>
            </div>
            <a href="{{ route('department.index') }}">
              <span class="btn btn-light pull-left">Beck</span>
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
