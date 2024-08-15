@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="page-header">
            <div class="page-block card mb-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title border-bottom pb-2 mb-2">
                                <h4> Create User
                                    <a href="{{url('users')}}" class="btn btn-danger float-end p-1">Back</a>
                                </h4>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('users/')}}"><i
                                            class="ph ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Users</a></li>
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
                    <form action="{{ url('users')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Roles</label>
                            <select name="roles[]" class="form-control" multiple>
                                <option value="">Select Role</option>
                                @foreach ($roles as $role )
                                <option value="{{ $role }}">{{ $role }}</option>
                                @endforeach
                            </select>
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
