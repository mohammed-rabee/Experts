@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Students Accounts Need Activation</h4>
                    <p class="card-category"> Here you can see a list of all Students accounts waiting your approvel</p>
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
                                <th>Student Email</th>
                                <th>Major Name</th>
                                <th>Program Name</th>
                                <th>Section Name</th>

                                {{-- <th>Type</th> --}}
                                
                                <th>Control</th>
                            </thead>
                            <tbody>
                                @foreach ($registers as $register)
                                <tr>
                                    <td>{{ $register->studentEmail }}</td>
                                    <td>{{ $register->majorName }}</td>
                                    <td>{{ $register->programName }}</td>
                                    <td>{{ $register->sectionName }}</td>
                                
                                    <td>
                                        <a class="btn btn-success show_confirm2" href="{{ route('program.pendingApprovelConfirm', $register->id) }}">Approve Registration</a>
                                        <a class="btn btn-danger show_confirm2" href="{{ route('program.pendingApprovelDelete', $register->id) }}">Delete Registration </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $registers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection