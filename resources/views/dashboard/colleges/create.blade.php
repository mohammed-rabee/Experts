@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add College</h4>
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
          <form action="{{ route('College.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row" style="padding-bottom: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">College Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ old('name') }}" required>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-left">Add College</button>
            <a href="{{ route('college.index') }}" style="float: right;">
              <span class="btn btn-primary">All Colleges</span>
            </a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
