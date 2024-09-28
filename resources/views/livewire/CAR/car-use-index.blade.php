<div>
    <div class="container">
        <div class="page-header">
            <div class="page-block card mb-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title border-bottom pb-2 mb-2 font_Prompt">
                                <h4 class="animate__animated animate__headShake">ขออนุญาติออกนอกบริษัท</h4>

                            </div>
                            <div class="col-md-12 font_anuphan ">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('home/') }}">
                                            <i class="ph ph-house me-2"></i>หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('car-report/') }}"
                                            href="javascript: void(0)">ฝ่ายรักษาความปลอดภัยและยานยนต์</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <strong>บันทึกการใช้งานรถ</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="col-12 text-center ">
                        <div class="table-responsive font_anuphan my-2">
                            <table class="table table-hover " id="">
                                <thead>
                                    <tr>
                                        <th>วันที่</th>
                                        <th>ผู้ใช้งาน</th>
                                        <th>ทะเบียนรถ</th>
                                        <th>ภารกิจ</th>
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
                                        <td>{{ $carRequest->car->car_number ?? 'N/A' }} {{
                                            $carRequest->car->province->ProvinceName ?? 'N/A' }}</td>
                                        <td>{{ $carRequest->job_request }}</td>
                                        <td class="text-center">
                                            @if ( $carRequest->status_request == 1)
                                            <span class="badge bg-success">อนุมัติ</span>
                                            @elseif ($carRequest->status_request == 2)
                                            <span class="badge bg-danger">ไม่อนุมัติ</span>
                                            @else
                                            <span class="badge bg-primary">รออนุมัติ</span>
                                            @endif
                                        </td>
                                        <td class="text-center font_Prompt">
                                            @if($carRequest->status_request == 1)
                                            <a href="#" wire:click='addCarUse({{ $carRequest->id }})'
                                                data-bs-toggle="modal" data-bs-target=""
                                                class="avtar avtar-xs btn-link-secondary">
                                                <i class="ph ph-arrow-fat-line-up text-primary"
                                                    style="font-size: 22px; vertical-align: middle;"></i>
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content mx-4">
                            </div>
                        </div>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-2">
        <div class="page-header">
            <div class="page-block card mb-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title border-bottom pb-2 mb-2 font_Prompt">
                                <h4 class="animate__animated animate__headShake">บันทึกการเข้าออก
                                    <button type="button" class="btn btn-primary btn-sm col-lg-0 float-end"
                                        style="border-radius: 7px " data-bs-toggle="modal"
                                        data-bs-target="#carUseModal">
                                        <span class="font_anuphan">การใช้งาน</span>
                                    </button>
                                </h4>

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
                                        <th>ผู้ใช้งาน</th>
                                        <th>ทะเบียนรถ</th>
                                        <th>ภารกิจ</th>
                                        <th class="text-center">เลขไมล์เริ่ม</th>
                                        <th class="text-center">เลขไมล์เสร็จ</th>
                                        <th class="text-center">ระยะทาง (Km.)</th>
                                        <th class="text-center">สถานะ</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carUses as $carUse)
                                    <tr>
                                        <td>
                                            @if ($carUse->created_at)
                                            {{ \Carbon\Carbon::parse($carUse->created_at)->translatedFormat('j/m/y')
                                            }}
                                            @else
                                            ไม่ระบุวันที่
                                            @endif
                                        </td>
                                        <td>{{ $carUse->emp->EmpName }}</td>
                                        <td>{{ $carUse->car->car_number ?? 'N/A' }} {{
                                            $carUse->car->province->ProvinceName ?? 'N/A' }}</td>
                                        <td>{{ $carUse->use_job }}</td>
                                        <td class="text-center">{{ $carUse->use_start }}</td>
                                        <td class="text-center">{{ $carUse->use_end }}</td>
                                        <td class="text-center">{{ $carUse->use_distance }}</td>
                                        <td class="text-center">
                                            @if ( $carUse->use_status == 1)
                                            <span class="badge bg-danger btn" data-bs-toggle="modal"
                                                data-bs-target="#endModal" class="avtar avtar-xs btn-link-secondary"
                                                wire:click='end({{ $carUse->id }})'>นำรถไปใช้</span>
                                            @else
                                            <span class="badge bg-success btn">เสร็จภารกิจ</span>
                                            @endif
                                        </td>
                                        <td class="text-center font_Prompt">
                                            <a href="#" wire:click='end({{ $carUse->id }})' data-bs-toggle="modal"
                                                data-bs-target="#endModal" class="avtar avtar-xs btn-link-secondary">
                                                <i class="bi bi-pencil-square text-warning"
                                                    style="font-size: 18px; vertical-align: middle;"></i>
                                            </a>
                                            @can('admin')
                                            <a href="#" wire:click='confirmDelete({{ $carUse->id }})'
                                                class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <i class="bi bi-trash  text-danger"
                                                    style="font-size: 18px; vertical-align: middle;"></i>
                                            </a>
                                            @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content mx-4">
                            </div>
                        </div>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>

    {{-- carUse Modal --}}
    <div wire:ignore.self class="modal fade" id="carUseModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="carUseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }} text-white">
                    <h1 class="modal-title fs-5 font_anuphan text-white" id="carUseModalLabel">
                        กรอกแบบฟอร์ม </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='Close'></button>
                </div>
                <div class="modal-body">
                    <form novalidate class="form " wire:submit.prevent="{{ $edit ? 'updateCarUse' : 'saveCarUse' }}"
                        id="myForm">
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
                                {{-- <div class="col-md-12 mb-2 font_anuphan">
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
                                </div> --}}
                                <div class="col-md-12 mb-2 font_anuphan">
                                    <label class="font_Prompt">ภารกิจ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-ui-checks"></i>
                                        </span>
                                        <textarea type="text" class="form-control form-control-sm font_Prompt"
                                            id="use_job" name="use_job" wire:model="use_job" placeholder=""
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 font_anuphan">
                                    <label class="font_Prompt">ขออนุญาตใช้รถ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-123"></i>
                                        </span>
                                        <select class="form-control my-auto" id="car_id" name="car_id"
                                            wire:model="car_id" required>
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
                                {{-- @can(['approver_car'])
                                <div class="col-md-12 mb-2 font_anuphan">
                                    <label class="font_Prompt">ผู้อนุญาต</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-person-workspace"></i>
                                        </span>
                                        <input type="text" class="form-control" id="approver_request"
                                            name="approver_request" wire:model="approver_request" placeholder=""
                                            required>
                                    </div>
                                </div>
                                @endcan --}}

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
    {{-- End carUse Modal --}}

    {{-- End Modal --}}
    <div wire:ignore.self class="modal fade" id="endModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="endModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }} text-white">
                    <h1 class="modal-title fs-5 font_anuphan text-white" id="endModalLabel">
                        กรอกแบบฟอร์ม </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='Close'></button>
                </div>
                <div class="modal-body">
                    <form novalidate class="form " wire:submit.prevent='updateCarUseEnd'
                        id="myForm">
                        <div class="container-fluid">
                            <div class="font_anuphan">
                                <h5>ผู้ใช้งาน : {{ $user_name }}</h5> <br>
                                <h5>ทะเบียนรถ : {{ $car }} {{ $car_province }}</h5> <br>
                            </div>
                            <div class="row" id="error">
                                <div class="col-md-12 mb-2 font_anuphan">
                                    <label class="font_Prompt mb-2">เลขไมล์เสร็จ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-ui-checks"></i>
                                        </span>
                                        <input type="text" class="form-control" id="use_end"
                                            name="use_end" wire:model="use_end" placeholder=""
                                            required>
                                    </div>
                                </div>
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
    {{-- END Modal --}}
</div>
