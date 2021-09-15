@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add Major</h4>
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
          <form action="{{ route('major.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Department Name</label>
                  <select class="form-control" name="collegeId" id="collegeId" required>
                    <option value="" class="bmd-label-floating"> choose Department</option>
                    @foreach($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Major Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ old('name') }}" required>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Add Major</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
