@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-10" style="padding-left: 17%">
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

        <div class="card-body" style="padding-top: 1.5%">
          <form action="{{ route('major.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd" style="padding-top: 1.5%">Department Name</label>
                  <select class="form-control" style="padding-top: 2.5%" name="department_id" id="department_id" required>
                    <option value="" class="bmd-label-floating">Choose Department Name</option>
                    @foreach($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Major Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ old('name') }}" required>
                </div>
              </div>
            </div>
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Number of Years</label>
                  <input class="form-control" type="number" min="0" max="6" name="numberOfYears" id="numberOfYears" value="{{ old('numberOfYears') }}" required>
                </div>
              </div>
            </div>
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Discount Precentage</label>
                  <input class="form-control" type="number" min="0" max="100" name="discount" id="discount" value="{{ old('discount') }}" required>
                </div>
              </div>
            </div>
            
            <a href="{{ route('major.index') }}">
              <span class="btn btn-light pull-left">All Majors</span>
            </a>

            <button type="submit" class="btn btn-primary pull-right">Add Major</button>

            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
