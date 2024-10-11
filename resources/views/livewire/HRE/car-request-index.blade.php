<div>
    <div class="container">
        <div class="page-header">
            <div class="page-block card mb-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title border-bottom pb-2 mb-2 font_Prompt row">
                                <h4 class="animate__animated animate__headShake col-md-12">ขออนุญาตออกนอกบริษัท
                                    <button type="button" class="btn btn-primary btn-sm col-lg-0 float-end me-2"
                                        style="border-radius: 7px " data-bs-toggle="modal"
                                        data-bs-target="#carRequestModal" wire:click='addRequest'>
                                        <span class="font_anuphan col-md-12">ขออนุญาต</span>
                                    </button>
                                </h4>
                            </div>
                            <div class="col-md-12 font_anuphan ">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('home/') }}">
                                            <i class="ph ph-house me-2"></i>หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('car-report/') }}"
                                            href="javascript: void(0)">รายการรถบริษัท ฯ</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <strong>การขออนุญาตออกนอกบริษัท</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="col-12 text-center ">
                        <div class="table-responsive font_anuphan my-2">
                            <table class="table table-hover " id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th>วันที่</th>
                                        <th >ผู้ใช้งาน</th>
                                        <th >ภารกิจ</th>
                                        <th >ฝ่าย</th>
                                        <th >ขออนุญาตใช้รถ</th>
                                        <th >ผู้อนุญาต</th>
                                        <th class="text-center">สถานะ</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carRequests as $carRequest)
                                    <tr>
                                        <td>
                                            @if ($carRequest->created_at)
                                            {{ \Carbon\Carbon::parse($carRequest->created_at)->translatedFormat('j/m/y')
                                            }}
                                            @else
                                            ไม่ระบุวันที่
                                            @endif
                                        </td>
                                        <td>{{ $carRequest->emp->EmpName }}</td>
                                        <td>{{ $carRequest->job_request }}</td>
                                        <td>{{ $carRequest->department->DeptName ?? 'N/A'}}</td>
                                        <td>{{ $carRequest->car->car_number ?? 'รถยนต์' }} {{
                                            $carRequest->car->province->ProvinceName ?? 'ส่วนตัว' }}</td>
                                        <td>{{ $carRequest->approver_request }}</td>
                                        <td class="text-center">
                                            @if ( $carRequest->status_request  == 1)
                                            <span class="badge bg-success">อนุมัติ</span>
                                            @elseif ($carRequest->status_request  == 2)
                                            <span class="badge bg-danger">ไม่อนุมัติ</span>
                                            @else
                                            <span class="badge bg-primary">รออนุมัติ</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($carRequest->status_request != 1 && $carRequest->status_request != 2)
                                            @can('approver_car')

                                            <a href="#" wire:click.prevent="confirmApprove({{ $carRequest->id }})"
                                                class="avtar avtar-xs btn-link-secondary">
                                                 <i class="ph ph-check-circle text-success text-middle" style="font-size: 22px;"></i>
                                            </a>

                                            @endcan
                                            <a href="#" wire:click='confirmEdit({{ $carRequest->id }})'
                                                data-bs-toggle="modal" data-bs-target="#carRequestModal"
                                                class="avtar avtar-xs btn-link-secondary">
                                                <i class="bi bi-pencil-square text-warning"
                                                style="font-size: 18px; vertical-align: middle;"></i>
                                            </a>

                                            @endif
                                            @can('delete IT')
                                            <a href="#" wire:click='confirmDelete({{ $carRequest->id }})'
                                                class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <i class="bi bi-trash  text-danger" style="font-size: 18px; vertical-align: middle;"></i>
                                            </a>
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content mx-4">
                                {{ $carRequests->links() ?? '' }}
                            </div>
                        </div>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
        {{-- Request Modal --}}
        <div wire:ignore.self class="modal fade" id="carRequestModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="carRequestModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }} text-white">
                        <h1 class="modal-title fs-5 font_anuphan text-white" id="carRequestModalLabel">
                            กรอกแบบฟอร์ม </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='Close'></button>
                    </div>
                    <div class="modal-body">
                        <form novalidate class="form "
                            wire:submit.prevent="{{ $edit ? 'updateCarRequest' : 'saveCarRequest' }}" id="myForm">
                            <div class="container-fluid">
                                <div class="row" id="error">

                                    <div class="col-md-12 mb-2 font_anuphan">
                                        <label class="font_Prompt">ชื่อผู้ใช้งาน</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-vcard"></i>
                                            </span>
                                            <select class="form-control my-auto" id="user_request" name="user_request"
                                                wire:model="user_request" required>
                                                <option selected="" value="">
                                                    เลือกผู้ใช้...</option>
                                                @foreach($users as $user)
                                                <option value="{{ $user->EmpID }}">{{
                                                    $user->EmpName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2 font_anuphan">
                                        <label class="font_Prompt">ฝ่าย</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-vcard"></i>
                                            </span>
                                            <select class="form-control my-auto" id="department_request"
                                                name="department_request" wire:model="department_request" required>
                                                <option selected="" value="">
                                                    เลือกฝ่าย...</option>
                                                @foreach($departments as $department)
                                                <option value="{{ $department->DeptID }}">{{
                                                    $department->DeptName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2 font_anuphan">
                                        <label class="font_Prompt">ภารกิจ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-ui-checks"></i>
                                            </span>
                                            <textarea type="text" class="form-control form-control-sm font_Prompt"
                                                id="job_request" name="job_request" wire:model="job_request"
                                                placeholder="" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2 mt-2">
                                        <label class="font_Prompt">ขออนุญาตใช้รถ</label>
                                        <div class="form-check form-switch mb-2 mt-2">
                                            <input type="checkbox" class="form-check-input input-primary" id="use_check"
                                                   wire:model.live="use_check">
                                            <label class="form-check-label font_Prompt" for="use_check">ใช้</label>
                                        </div>
                                    </div>
                                    @if($use_check == 1)
                                    <div class="col-md-12 mb-2 font_anuphan">
                                        <label class="font_Prompt">ขออนุญาตใช้รถ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-123"></i>
                                            </span>
                                            <select class="form-control my-auto" id="car_request" name="car_request"
                                                wire:model="car_request" required>
                                                <option selected="" value="">
                                                    เลือกรถ...</option>
                                                @foreach($carReports as $carReport)
                                                <option value="{{ $carReport->id }}">{{
                                                    $carReport->car_number }} {{ $carReport->province->ProvinceName ??
                                                    'N/A'
                                                    }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @endif


                                </div>
                                <div class="d-flex justify-content-end gap-2 font_Prompt mt-2">
                                    <button wire:loading.attr='disabled' wire:target='photo' type="submit"
                                        class=" {{ $edit ? 'btn btn-warning' : 'btn btn-primary' }} mb-2 me-2 btn-sm"
                                        style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i>{{ $edit ? '
                                        แก้ไข' :
                                        'บันทึก' }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Request Modal --}}
    </div>

</div>
