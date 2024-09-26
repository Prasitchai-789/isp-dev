@extends('layouts.master')

@section('content')

<div class="container">
    <div class="page-header">
        <div class="page-block card mb-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                        @endif

                        <div class="page-header-title border-bottom pb-2 mb-2">
                            <h4>Users
                                <a href="{{url('users/create')}}" class="btn btn-primary float-end p-1">Add User</a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('permissions/')}}"><i
                                        class="ph ph-house"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Users</a></li>
                            <li class="breadcrumb-item" aria-current="page">Index</li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive font_anuphan">
                            <table class="table table-hover" id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Epm_Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ( $users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            @if (!empty($user->getRoleNames()))
                                            @foreach ( $user->getRoleNames() as $rolename )
                                            <label class="badge bg-primary mx-1">{{ $rolename }}</label>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>{{$user->emp->EmpName ?? 'N/A'}}</td>
                                        <td>
                                            <a href="{{ url('users/'.$user->id.'/edit')}}" class="avtar avtar-xs btn-link-secondary">
                                                <i class="bi bi-pencil-square text-warning text-middle" style="font-size: 18px;"></i>
                                            </a>
                                            @can('delete user')
                                            <a href="#" onclick="confirmDeleteUser('{{ url('users/'.$user->id.'/delete') }}')" class="avtar avtar-xs btn-link-secondary">
                                                <i class="bi bi-trash text-danger" style="font-size: 18px;"></i>
                                            </a>
                                            @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                <tbody>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content mx-4">
                                {{-- {{ $products->links() ?? '' }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    function confirmDeleteUser(url) {
        Swal.fire({
            title: 'คุณต้องการลบชื่อผู้ใช้ ?',
            text: "เพราะไม่สามารถกู้คืนได้ !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, ต้องการลบ !'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url; // เมื่อยืนยันการลบ เปลี่ยนเส้นทางไปยัง URL ที่ตั้งไว้
            }
        })
    }
</script>


@endsection
