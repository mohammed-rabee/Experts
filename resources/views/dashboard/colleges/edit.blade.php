@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-10" style="padding-left: 17%">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Updaet College Information</h4>
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
          <form action="{{ route('college.update' , $college->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="rows">
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">College Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ $college->name }}" required>
                </div>
              </div>
            </div>
            <a href="{{ URL::previous() }}">
              <span class="btn btn-light pull-left">Back</span>
            </a>
            <button type="submit" class="btn btn-primary pull-right">Edit College</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
