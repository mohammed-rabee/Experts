@extends('layouts.app')

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
          <form action="{{ route('user.update' , $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">User Name :</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="username" id="username" value="{{ $user->username }}" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Password :</label>
                  <input class="form-control" type="password" minlength="4" maxlength="10" name="password" id="password" value="{{ $user->password }}" >
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">First Name :</label>
                  <input class="form-control" type="text" minlength="8" maxlength="50" name="fname" id="fname" value="{{ $user->fname }}" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Last Name :</label>
                  <input class="form-control" type="text" minlength="4" maxlength="10" name="lname" id="lname" value="{{ $user->lname }}" >
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Email :</label>
                  <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Phone :</label>
                  <input class="form-control" type="text" name="phone" id="phone" value="{{ $user->phone }}" >
                </div>
              </div>
              
            </div>
            <div class="row" style="padding-top: 1.5%">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Birthday :</label>
                  <input class="form-control date" type="text" name="birthDate" id="birthDate"  value="{{ $user->birthDate }}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                {{-- <label class="bmd" style="padding-top: 2%">Gander :</label><br/> --}}
                <select class="selectpicker" data-style="btn btn-primary" name="gander" id="gander" >
                  {{-- <option disabled selected> -- Select Gender -- </option> --}}
                  @if ( $user->gender == 'Male')
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                    @else
                    <option value="Male">Male</option>
                    <option value="Female" selected>Female</option>
                  @endif
                </select>
                <select class="selectpicker" data-style="btn btn-primary" name="role" id="role" >
                  <option value="" disabled selected>Role</option>
                  @foreach($allRoles as $role)
                  @if (in_array($role->id, $userRoles))
                  <option value="{{ $role->name }}" selected>{{ $role->name }}</option>
                  @else
                  <option value="{{ $role->name }}">{{ $role->name }}</option>
                  @endif
                  
                  @endforeach
                </select>
                </div>
              </div>
            </div>

            <div class="row" style="padding-top: 2%">
              <div class="col-md-12">
                <div class="form-group">
                  <a href="{{ route('user.index') }}">
                    <span class="btn btn-light pull-left">Cancel</span>
                  </a>
      
                  <button type="submit" class="btn btn-primary pull-right">Edit User</button>
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
