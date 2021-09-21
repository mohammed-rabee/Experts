@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Sections</h4>
                    <p class="card-category"> Here you can see a list of all Sections in the system</p>
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

                        <a href="{{ route('section.create') }}" style="padding-top: 1.5%">
                            <span class="btn btn-primary">Add Section</span>
                        </a>
                        <br>
                        <br>

                        <table class="table table-bordered">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Section Name</th>
                                <th>Program Name</th>
                                <th>Max number of students</th>
                                
                                <th>Control</th>
                            </thead>
                            <tbody>
                                @foreach ($sections as $section)
                                <tr>
                                    <td>{{ $section->id }}</td>
                                    <td>{{ $section->name }}</td>
                                    <td>{{ $section->programName }}</td>
                                    <td>{{ $section->maxNumberOfStudent }}</td>

                                    <td>
                                        <form action="{{ route('section.delete',$section->id) }}" method="POST">

                                            <a class="btn btn-primary"
                                                href="{{ route('section.edit', $section->id) }}">Edit</a>

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