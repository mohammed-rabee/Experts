@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-10" style="padding-left: 17%">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add Department</h4>
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
          <form action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Department Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ old('name') }}" required>
                </div>
              </div>
            </div>

            <div class="row" style="padding-top: 2.5%;">
              <div class="col-md-6">
                <div class="form-group" style="padding-top: 2%">
                  <label class="bmd">College Name</label>
                  <select class="form-control selectpicker col-md-12" data-style="btn btn-primary" style="padding-top: 2.5%" name="college_id" id="college_id" required>
                    <option value=""></option>
                    @foreach($colleges as $college)
                    <option value="{{$college->id}}">{{$college->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row" style="padding-top: 2%">
              <div class="col-md-12">
                <div class="form-group">
                  <a href="{{ URL::previous() }}">
                    <span class="btn btn-light pull-left">Back</span>
                  </a>
      
                  <button type="submit" class="btn btn-primary pull-right">Add Department</button>
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
