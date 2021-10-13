@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Edit Assigned Program for teachers</h4>
                    <p class="card-category">Here you can edit sections that teacher teach</p>
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

                        <form action="{{ route('teacher.editAssignClass', $user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered">
                                <thead class=" text-primary">
                                    <th>Majors Name</th>
    
                                    <th>Programs Name</th>
                                    
                                    <th>Sections</th>
                                </thead>
                                <tbody>
                                    @foreach ($majorPrograms as $majorProgram)
                                    <tr>
                                        <td>{{ $majorProgram->majorName  }}</td>
                                        <td>{{ $majorProgram->programName }}</td>
                                        <td width="4%">
                                            <select class="form-control selectpicker col-md-12" data-style="btn btn-primary" multiple name="section_id[]" id="section_id">
                                                @foreach($majorProgram->sections as $section)
                                                  @if(in_array($section->id, $sectionIDs))
                                                    <option value="{{$section->id}}" selected>{{ $section->name }}</option>
                                                  @else
                                                    <option value="{{$section->id}}">{{ $section->name }}</option>
                                                  @endif
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ URL::previous() }}">
                                <span class="btn btn-light pull-left">Back</span>
                            </a>
                            <button type="submit" class="btn btn-primary pull-right">Edit Assigned Programs</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection