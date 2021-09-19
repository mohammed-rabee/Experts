@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-9" style="padding-left: 20%">
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
        <div class="card-body" style="padding-top: 1.5%">
          <form action="{{ route('major.update' , $major->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row" style="padding-top: 1.5%;padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd" style="padding-top: 1.2%">College Name</label>
                  <select class="form-control" style="padding-top: 2.5%" name="college_id" id="college_id" required>
                    <option value="" class="bmd-label-floating">Choose College Name</option>
                    @foreach($otherDepartments as $department)
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
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ $major->name }}" required>
                </div>
              </div>
            </div>
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Discount</label>
                  <input class="form-control" type="number" min="0" max="100" name="discount" id="discount" value="{{ $major->discount }}" required>
                </div>
              </div>
            </div>
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Number of Years</label>
                  <input class="form-control" type="number" min="0" max="6" name="numberOfYears" id="numberOfYears" value="{{ $major->numberOfYears }}" required>
                </div>
              </div>
            </div>
            <a href="{{ route('major.index') }}">
              <span class="btn btn-light pull-left">Beck</span>
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
