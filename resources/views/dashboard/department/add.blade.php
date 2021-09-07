@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add College</h4>
          {{-- <p class="card-category">Complete your profile</p> --}}
        </div>
        <div class="card-body">
          <form action="{{ route('Department.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <option class="bmd-label-floating">Select A College</option>
                  <select class="form-control" name="collegeId" id="collegeId">
                    @foreach($college as $college)
                    <option value="{{$college->id}}">{{$college->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Department Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ old('name') }}">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Add Department</button>
            <div class="clearfix">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection