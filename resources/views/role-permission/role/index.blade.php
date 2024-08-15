@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="page-block card mb-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            @if (session('status'))
                            <div class="alert alert-success">{{session('status')}}</div>
                            @endif

                            <div class="page-header-title border-bottom pb-2 mb-2">
                                <h4>Roles
                                    <a href="{{url('roles/create')}}" class="btn btn-primary float-end p-1">Add Role</a>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('permissions/')}}"><i
                                            class="ph ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Roles</a></li>
                                <li class="breadcrumb-item" aria-current="page">Index</li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive font_anuphan">
                                <table class="table table-hover" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $roles as $role)
                                        <tr>
                                            <td>{{$role->id}}</td>
                                            <td class="text-center">{{$role->name}}</td>
                                            <td class="text-center">
                                                <a href="{{ url('roles/'.$role->id.'/give-permissions')}}" class="btn btn-success">Add / Edit Role Permission</a>
                                                <a href="{{ url('roles/'.$role->id.'/edit')}}" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="bi bi-pencil-square text-warning text-middle" style="font-size: 18px;"></i>
                                                </a>
                                                <a href="#" onclick="confirmDeleteRole('{{ url('roles/'.$role->id.'/delete') }}')" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="bi bi-trash text-danger" style="font-size: 18px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach

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
    </div>
</div>

<script>
    function confirmDeleteRole(url) {
        Swal.fire({
            title: 'คุณต้องการลบใช่หรือไม่ ?',
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
