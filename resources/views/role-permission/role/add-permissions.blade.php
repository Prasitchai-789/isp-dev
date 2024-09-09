@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="page-block card mb-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-12">

                        @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <div class="page-header-title border-bottom pb-2 mb-2">
                            <h4>Role : {{ $role->name }}
                                <a href="{{url('roles')}}" class="btn btn-danger float-end p-1">Back</a>
                            </h4>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('roles/')}}"><i class="ph ph-house"></i></a></li>
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
                <form action="{{ url('roles/'.$role->id.'/give-permissions')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        @error('permission')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label for="">Permissions</label>

                        <div class="row">
                            @foreach ($permissions as $permission)
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="permission[]" value="{{ $permission->name }}"
                                    {{ in_array($permission->id,$rolePermissions ) ? 'checked' : '' }}
                                    />
                                    {{ $permission->name }}
                                </label>
                            </div>
                            @endforeach
                        </div>


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
