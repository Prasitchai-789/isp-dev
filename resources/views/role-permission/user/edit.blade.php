@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="page-header">
            <div class="page-block card mb-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title border-bottom pb-2 mb-2">
                                <h4> Edit User
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
                    <form action="{{ url('users/'.$user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Employee Name</label>
                            <div class="input-group">
                                <select class="form-control my-auto" id="emp_id" name="emp_id"
                                    wire:model="emp_id" required>
                                    <option selected="" value="">
                                        เลือกชื่อ...</option>
                                    @foreach($emps as $emp)
                                    <option value="{{ $emp->EmpID }}">{{
                                        $emp->EmpName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Roles</label>
                            <select name="roles[]" class="form-control" multiple>
                                <option value="">Select Role</option>
                                @foreach ($roles as $role )
                                <option
                                value="{{ $role }}"
                                {{ in_array($role, $userRoles) ? 'selected' : ''}}
                                >
                                {{ $role }}
                            </option>
                                @endforeach
                            </select>
                            @error('roles') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
