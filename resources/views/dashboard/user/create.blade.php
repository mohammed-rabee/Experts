@extends('layouts.dashboard')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-10" style="padding-left: 17%">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add User</h4>
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
          <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">User Name :</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="username" id="username" value="{{ old('username') }}" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Password :</label>
                  <input class="form-control" type="password" minlength="4" maxlength="10" name="password" id="password" value="{{ old('password') }}" >
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">First Name :</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="fname" id="fname" value="{{ old('fname') }}" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Last Name :</label>
                  <input class="form-control" type="text" minlength="4" maxlength="10" name="lname" id="lname" value="{{ old('lname') }}" >
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Email :</label>
                  <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Phone :</label>
                  <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone') }}" >
                </div>
              </div>
              
            </div>
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Birthday :</label>
                  <input class="form-control date" type="text" name="birthDate" id="birthDate" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                {{-- <label class="bmd" style="padding-top: 2%">Gander :</label><br/> --}}
                <select class="selectpicker" data-style="btn btn-primary" name="gander" id="gander" >
                  {{-- <option disabled selected> -- Select Gender -- </option> --}}
                  <option value="" disabled selected>Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <select class="selectpicker" data-style="btn btn-primary" name="role" id="role" >
                  {{-- <option disabled selected> -- Select User Type -- </option> --}}
                  <option value="" disabled selected>Role</option>
                  @foreach($roles as $role)
                  <option value="{{ $role->name }}">{{ $role->name }}</option>
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
      
                  <button type="submit" class="btn btn-primary pull-right">Add User</button>
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
