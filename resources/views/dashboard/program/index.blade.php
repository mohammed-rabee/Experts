@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Programs</h4>
                    <p class="card-category"> Here you can see a list of all Programs in the system</p>
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

                        <a href="{{ route('program.create') }}" style="padding-top: 1.5%">
                            <span class="btn btn-primary">Add Program</span>
                        </a>
                        <br>
                        <br>

                        <table class="table table-bordered">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Program Name</th>
                                <th>Program Description</th>
                                <th>Program Code</th>

                                <th>Real Student Number</th>
                                <th>Fake Student Number</th>

                                <th>Real Previous Enrollment Number</th>
                                <th>Fake Previous Enrollment Number</th>
                                
                                <th>Real Rate</th>
                                <th>Fake Rate</th>


                                <th>Cost</th>
                                <th>Discount Precentage</th>
                                
                                <th>Control</th>
                            </thead>
                            <tbody>
                                @foreach ($programs as $program)
                                <tr>
                                    <td>{{ $program->id }}</td>
                                    <td>{{ $program->name }}</td>
                                    <td>{{ $program->description }}</td>
                                    <td>{{ $program->code }}</td>

                                    <td>{{ $program->student_number }}</td>
                                    <td>{{ $program->student_number_fake }}</td>
                                    
                                    <td>{{ $program->student_previous_number_enrolled }}</td>
                                    <td>{{ $program->student_previous_number_enrolled_fake }}</td>

                                    <td>{{ $program->rate }}</td>
                                    <td>{{ $program->rate_fake }}</td>

                                    
                                    <td>{{ $program->cost }}</td>
                                    <td>{{ $program->discount }}</td>
                                    <td>
                                        <form action="{{ route('program.delete',$program->id) }}" method="POST">

                                            <a class="btn btn-primary"
                                                href="{{ route('program.edit', $program->id) }}">Edit</a>

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