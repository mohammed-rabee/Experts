@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-10" style="padding-left: 17%">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Majors</h4>
                    <p class="card-category"> Here you can see a list of all Majors in the system</p>
                </div>
                <div class="card-body" style="padding-top: 1.5%">
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

                        <a href="{{ route('major.create') }}" style="padding-top: 1.5%">
                            <span class="btn btn-primary">Add Major</span>
                        </a>
                        <br>
                        <br>

                        <table class="table table-bordered">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Major Name</th>
                                <th>Study Years</th>
                                <th>Discount Precentage</th>
                                <th>Department Name</th>
                                <th>Control</th>
                            </thead>
                            <tbody>
                                @foreach ($majors as $major)
                                <tr>
                                    <td>{{ $major->id }}</td>
                                    <td>{{ $major->name }}</td>
                                    <td>{{ $major->numberOfYears }}</td>
                                    <td>{{ $major->discount }}</td>
                                    <th>{{ $major->department->name }}</th>
                                    <td align="center">
                                        <form action="{{ route('major.delete',$major->id) }}" method="POST">

                                            <a class="btn btn-primary"
                                                href="{{ route('major.edit', $major->id) }}">Edit</a>

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