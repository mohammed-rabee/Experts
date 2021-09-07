@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Simple Table</h4>
                    <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Department Name</th>
                                <th>Control</th>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                <tr>
                                    <td>{{ $department->id }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>
                                        {{-- <a href="{{ route('home', ['id'=> $department->$id]) }}"
                                            class="btn btn-primary waves-effect waves-light btn-xs">
                                            {{__('dashboard.edit')}}
                                            <i class="ico ico-right fa fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger waves-effect waves-light btn-xs"
                                            data-id="{{ $department->$id }}" onclick="confirmDelete(this)" data-remodal-target="remodal">
                                            {{__('dashboard.delete')}}
                                            <i class="ico ico-right fa fa-close"></i>
                                        </button>
                                        <a class="btn btn-warning waves-effect waves-light btn-xs" data-toggle="modal"
                                            data-target="#boostrapModal-1" onclick="showClasses({{$department->$id}})">
                                            <i class="ico ico-right fa fa-eye"></i> {{__('dashboard.show_classes')}}
                                        </a>
                                        <form id="delete_form_{{ $department->$id }}" method="POST" action="{{ route('home') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $department->$id }}">
                                        </form>
                
                                        <a href="{{ route('home', ['id'=> $department->$id]) }}"
                                            class="btn btn-danger waves-effect waves-light btn-xs">
                                            <i class="ico ico-right fa fa-trash"></i>
                                            del image
                                        </a> --}}
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
