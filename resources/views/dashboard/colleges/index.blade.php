@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-10" style="padding-left: 17%">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Colleges</h4>
                    <p class="card-category"> Here you can see a list of all Colleges in the system</p>
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
                                <th>College Name</th>
                                <th>Control</th>
                            </thead>
                            <tbody>
                                @foreach ($colleges as $college)
                                <tr>
                                    <td>{{ $college->id }}</td>
                                    <td>{{ $college->name }}</td>
                                    <td align="center">
                                        {{-- <a href="{{ route('College.edit', ['id'=> $college->id]) }}"
                                        class="btn btn-primary waves-effect waves-light btn-xs">
                                        Edit
                                        <i class="ico ico-right fa fa-edit"></i>
                                        </a>

                                        <form method="POST"
                                            action="{{ route('College.delete', ['id' => $college->id] ) }}">
                                            @csrf
                                            <input name="_method" type="hidden">
                                            <button type="submit"
                                                class="btn btn-danger waves-effect waves-light btn-xs show_confirm"
                                                data-toggle="tooltip" title='Delete'>
                                                Delete college
                                                <i class="ico ico-right fa fa-close"> </i>
                                            </button>
                                        </form> --}}
                                        <form action="{{ route('college.delete',$college->id) }}" method="POST">

                                            <a class="btn btn-primary"
                                                href="{{ route('college.edit', $college->id) }}">Edit</a>

                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger show_confirm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div class="remodal" data-remodal-id="modeltest" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                            <div class="remodal-content">
                                <h2 id="modal1Title">Are you sure ?</h2>
                            </div>

                            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                            <a class="remodal-confirm" onclick="document.getElementById('delete_form').submit();">Ok</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection