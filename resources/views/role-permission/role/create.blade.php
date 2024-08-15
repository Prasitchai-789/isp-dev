@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="page-header">
            <div class="page-block card mb-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title border-bottom pb-2 mb-2">
                                <h4> Create Role
                                    <a href="{{url('roles')}}" class="btn btn-danger float-end p-1">Back</a>
                                </h4>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('roles/')}}"><i
                                            class="ph ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Role</a></li>
                                <li class="breadcrumb-item" aria-current="page">Create</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header my-2">
            <div class="page-block card mb-0">
                <div class="card-body">
                    <form action="{{ url('roles')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Role Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
