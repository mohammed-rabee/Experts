@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Assign New Program To Teacher</h4>
                    <p class="card-category"> Here you can see assign new program to teachers</p>
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

                        <form action="{{ route('teacher.assignClass', $user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Majors Name</th>
    
                                    <th>Programs Name</th>
                                    
                                    <th>Sections</th>
                                    <th>Assign</th>
                                </thead>
                                <tbody>
                                    @foreach ($majorPrograms as $majorProgram)
                                    <tr>
                                        <td>{{ $majorProgram->id }}</td>
                                        <td>{{ $majorProgram->majorName  }}</td>
                                        <td>{{ $majorProgram->programName }}</td>
                                        <td>
                                            <select class="form-control col-md-12" data-style="btn btn-primary" name="section_id" id="section_id">
                                                <option value="" disabled selected>Choose Section : </option>
                                                @foreach($majorProgram->sections as $section)
                                                <option value="{{$section->id}}">Name: {{ $section->name }} , Current Number Of Student: {{ $section->maxNumberOfStudent }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Assign</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                        <a href="{{ URL::previous() }}">
                            <span class="btn btn-light pull-left">Back</span>
                          </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection