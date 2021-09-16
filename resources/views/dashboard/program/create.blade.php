@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add Program</h4>
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
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd" style="padding-top: 1.5%">Major Name</label>
                  <select class="form-control" style="padding-top: 2.5%" name="majorId" id="majorId" required>
                    <option value="" class="bmd-label-floating">Choose Major Name</option>
                    @foreach($majors as $major)
                    <option value="{{$major->id}}">{{$major->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Program Name</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="name" id="name" value="{{ old('name') }}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Program code</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="code" id="code" value="{{ old('code') }}" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Fake Student Number</label>
                  <input class="form-control" type="number" name="fakeNumber" id="fakeNumber" value="{{ old('fakeNumber') }}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Fake previous enrollment number</label>
                  <input class="form-control" type="number" name="fakePreviousNumber" id="fakePreviousNumber" value="{{ old('fakePreviousNumber') }}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Fake Rate</label>
                  <input class="form-control" type="number" min="0" max="5" name="fakerate" id="fakerate" value="{{ old('fakerate') }}" required>
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Program Description</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> Wrtie the programe description here</label>
                    <textarea class="form-control" rows="10" minlength="10" maxlength="100" name="description" id="description" value="{{ old('description') }}" required></textarea>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-left">Add Program</button>
            <a href="{{ route('program.index') }}" style="float: right;">
              <span class="btn btn-primary">All Programs</span>
            </a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
