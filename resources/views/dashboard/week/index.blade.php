@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-10" style="padding-left: 17%">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">{{ $programs->name }} Weeks:</h4>
                    <p class="card-category"> Here you can see a list of {{ $program->name }} weeks</p>
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

                        <a href="{{ route('college.create') }}" style="padding-top: 1.5%">
                            <span class="btn btn-primary">Add College</span>
                        </a>
                        <br>
                        <br>
                        
                        <table class="table table-bordered">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Week Name</th>
                                <th>Control</th>
                            </thead>
                            <tbody>
                                @foreach ($weeks as $week)
                                <tr>
                                    <td>{{ $week->id }}</td>
                                    <td>{{ $week->name }}</td>
                                    <td align="center">
                                        <form action="{{ route('college.delete',$week->id) }}" method="POST">

                                            <a class="btn btn-primary"
                                                href="{{ route('college.edit', $week->id) }}">Edit</a>

                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger show_confirm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $weeks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection