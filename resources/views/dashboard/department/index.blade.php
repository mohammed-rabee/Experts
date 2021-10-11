@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-10" style="padding-left: 17%">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Departments</h4>
                    <p class="card-category"> Here you can see a list of all Departments in the system</p>
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
                        
                        <a href="{{ route('department.create') }}" style="padding-top: 1.5%">
                            <span class="btn btn-primary">Add Department</span>
                        </a>
                        <br>
                        <br>
                        
                        <table class="table table-bordered">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Department Name</th>
                                <th>College Name</th>
                                <th>Control</th>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                <tr>
                                    <td>{{ $department->id }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>{{ $department->college->name }}</td>
                                    <td align="center">
                                        <form action="{{ route('department.delete',$department->id) }}" method="POST">

                                            <a class="btn btn-primary"
                                                href="{{ route('department.edit', $department->id) }}">Edit</a>

                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger show_confirm">Delete</button>
                                        </form>
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