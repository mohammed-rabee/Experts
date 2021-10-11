@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Teacher</h4>
                    <p class="card-category"> Here you can see a list of all Teachers in the system</p>
                </div>
                <div class="card-body" style="padding-top: 1%">
                    <div class="table-responsive">
                        @if ($errors->any())
                        <div class="alert {{ $errors->first('class') }}" role="alert">
                            <ul>
                                @if($errors->has('message'))
                                <li>{{ $errors->first('message') }}</li>
                                @endif
                            </ul>
                        </div>
                        @endif

                        <a href="{{ route('user.create') }}" style="padding-top: 1.5%">
                            <span class="btn btn-primary">Add User</span>
                        </a>
                        <br>
                        <br>

                        <table class="table table-bordered">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>BirthDate</th>

                                {{-- <th>Type</th> --}}
                                
                                <th>Control</th>
                                <th>Program assgin</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->fname }}</td>
                                    <td>{{ $user->lname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->birthDate }}</td>
                                    {{-- <td>
                                        <select class="selectpicker" data-style="btn btn-primary" name="gander" id="gander" >
                                            @foreach($user->roles as $role)
                                            <option value="{{ $role->id }}" disabled>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </td> --}}
                                
                                    <td>
                                        <form action="{{ route('user.delete',$user->id) }}" method="POST">

                                            <a class="btn btn-primary"
                                                href="{{ route('user.edit', $user->id) }}">Edit</a>

                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger show_confirm">Delete</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('teacher.assign', $user->id) }}">Assign New Programs</a>
                                        <a class="btn btn-light" href="{{ route('teacher.editAssign', $user->id) }}">Edit Assigned Programs</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection