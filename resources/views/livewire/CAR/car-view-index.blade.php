<div>
    <div class="container">
        <div class="page-header">
            <div class="page-block card mb-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                @if (session('status'))
                                <div class="alert alert-success">{{ session('status') }}</div>
                                @endif
                                <div class="page-header-title border-bottom pb-2 mb-2 font_Prompt">
                                    <h4 class="animate__animated animate__headShake">ข้อมูลรถ
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary btn-sm float-end mx-2"
                                            style="border-radius: 7px" data-bs-toggle="modal"
                                            data-bs-target="#carRepairModal" wire:click='addCarRepair'>
                                            <span class="font_anuphan">CREATE</span>
                                        </button>
                                        <a type="button" class="btn btn-outline-danger btn-sm float-end "
                                            style="border-radius: 7px" href="{{ route('car-report.index') }}">
                                            <span class="font_anuphan">
                                                <i class="bi bi-arrow-left-short"></i>Back</span>
                                        </a>

                                        <!-- Button trigger modal -->
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-12 font_anuphan">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('car-report.index')}}"><i
                                                class="ph ph-house"></i> หน้าหลัก</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('car-report.index') }}">รายการรถบริษัท
                                            ฯ</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page"><strong>ข้อมูลรถ</strong>
                                    </li>
                                </ul>
                            </div>
                            @if (session('message'))
                            <div x-data="{ isShow: true }" x-show="isShow"
                                x-init="setTimeout(() => isShow = false, 3000)"
                                class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div id="liveToast" class="toast show" role="alert" aria-live="assertive"
                                    aria-atomic="true">
                                    <div class="toast-header bg-c-green">
                                        <strong class="me-auto">การแจ้งเตือน</strong>
                                        <small>mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        <strong class="text-primary"> <i class="fa-solid fa-floppy-disk"></i>
                                            {{ session('message') }}</strong>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-4 mt-2">
                                <div class="col-lg-6 col-lg-12">
                                    <div class="card seo-card"><img
                                            src="{{ $carReport->car_photo ? asset('storage/' . $carReport->car_photo) : asset('images/user/picture.png') }}"
                                            alt="image" class="img-fluid img-crop">
                                        <div class=" bg-grd-primary"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="font_anuphan text-center h5">ข้อมูลรถ</div>

                                <div class="col-12 py-2 d-flex justify-content-center align-items-center">

                                    <table class="table text-start font_anuphan">
                                        <tbody>
                                            <tr>
                                                <td class="column1 h6" style="width: 120px">เลขทะเบียน</td>
                                                <td class="column2">: {{ $carReport->car_number }} {{
                                                    $carReport->province->ProvinceName ?? 'N/A' }}</td>
                                                <td class="column1 h6" style="width: 120px">ประเภทรถ</td>
                                                <td class="column2">: {{ $carReport->type->car_type_list }}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">ลักษณะ</td>
                                                <td class="column2">: {{ $carReport->character->car_character_list }}
                                                </td>
                                                <td class="column1 h6">ยี่ห้อ</td>
                                                <td class="column2">: {{ $carReport->brand->car_brand_list }}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">รุ่น</td>
                                                <td class="column2">: {{ $carReport->car_model }}</td>
                                                <td class="column1 h6">สี </td>
                                                <td class="column2">: {{ $carReport->car_color }}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">ปีที่ผลิต</td>
                                                <td class="column2">: {{ $carReport->car_year }}</td>
                                                <td class="column1 h6">วันที่จดทะเบียน</td>
                                                <td class="column2">: @if ($carReport->car_date)
                                                    {{ \Carbon\Carbon::parse($carReport->car_date)->translatedFormat('j
                                                    F Y') }}
                                                    @else
                                                    -
                                                    @endif</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">ภาษี</td>
                                                <td class="column2">: @if ($carReport->car_tax)
                                                    {{ \Carbon\Carbon::parse($carReport->car_tax)->translatedFormat('j
                                                    F Y') }}
                                                    @else
                                                    -
                                                    @endif</td>
                                                <td class="column1 h6">ประกันภัย</td>
                                                <td class="column2">: @if ($carReport->car_insurance)
                                                    {{
                                                    \Carbon\Carbon::parse($carReport->car_insurance)->translatedFormat('j
                                                    F Y') }}
                                                    @else
                                                    -
                                                    @endif</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">วันที่ซื้อ </td>
                                                <td class="column2">: @if ($carReport->car_buy)
                                                    {{ \Carbon\Carbon::parse($carReport->car_buy)->translatedFormat('j
                                                    F Y') }}
                                                    @else
                                                    -
                                                    @endif</td>
                                                <td class="column1 h6">เลขไมล์</td>
                                                <td class="column2">: {{ $carReport->car_mileage }}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">ส่วนงานที่ดูแล </td>
                                                <td class="column2">:
                                                    {{ $carReport->department->DeptName ?? 'N/A' }}
                                                </td>
                                                <td class="column1 h6">รายละเอียด </td>
                                                <td class="column2">:
                                                    {{ $carReport->car_details }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr style="color: rgb(0, 17, 172)">
                            <div class="col-lg-12 text-center font_anuphan h5">ประวัติการแจ้งซ่อม</div>
                            <div class="table-responsive font_anuphan my-2">
                                <table class="table table-hover" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th class="text-center">รายการ</th>
                                            <th class="text-center">สถานะ</th>
                                            <th class="text-center">ซ่อมครั้งล่าสุด</th>
                                            <th class="text-center">แผนการบำรุงรักษา</th>
                                            <th class="text-center">ร้านซ่อม</th>
                                            <th class="text-center">ประกันซ่อม</th>
                                            <th class="text-center">รายละเอียด</th>
                                            <th class="text-center">ผู้แจ้ง</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carRepairs as $carRepair)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $carRepair->car_issue }} </td>
                                            <td>{{ $carRepair->car_canDrive }}</td>
                                            <td>
                                                @if ($carRepair->car_lastMaintenanceDate )
                                                {{ \Carbon\Carbon::parse($carRepair->car_lastMaintenanceDate
                                                )->translatedFormat('j F Y') }}
                                                @else
                                                ไม่ระบุวันที่
                                                @endif
                                            </td>
                                            <td>
                                                @if ($carRepair->car_preferredRepairDate)
                                                @php
                                                $plan = $carRepair->car_preferredRepairDate;
                                                $plan_startDate = Carbon\Carbon::now();
                                                $plan_endDate = Carbon\Carbon::parse($plan);
                                                $daysDifference = $plan_startDate->diffInDays($plan_endDate);

                                                if ($daysDifference < 1) { $status=3; } elseif ($daysDifference < 7) {
                                                    $status=2; } else { $status=1; } @endphp @if ($status==1) <span
                                                    class="">
                                                    @if ($carRepair->car_preferredRepairDate)
                                                    {{
                                                    \Carbon\Carbon::parse($carRepair->car_preferredRepairDate)->translatedFormat('j
                                                    F Y') }}
                                                    @else
                                                    ไม่ระบุวันที่
                                                    @endif
                                                    </span>
                                                    @elseif ($status == 2)
                                                    <span class="badge bg-warning">
                                                        <i class="bi bi-exclamation-circle"></i>
                                                        @if ($carRepair->car_preferredRepairDate)
                                                        {{
                                                        \Carbon\Carbon::parse($carRepair->car_preferredRepairDate)->translatedFormat('j
                                                        F Y') }}
                                                        @else
                                                        ไม่ระบุวันที่
                                                        @endif
                                                    </span>
                                                    @elseif ($status == 3)
                                                    <span class="badge bg-danger">
                                                        <i class="bi bi-x-circle"></i>
                                                        @if ($carRepair->car_preferredRepairDate)
                                                        {{
                                                        \Carbon\Carbon::parse($carRepair->car_preferredRepairDate)->translatedFormat('j
                                                        F Y') }}
                                                        @else
                                                        ไม่ระบุวันที่
                                                        @endif
                                                    </span>
                                                    @endif
                                                    @else
                                                    <p>ไม่ระบุวันที่</p>
                                                    @endif
                                            </td>
                                            <td>{{ $carRepair->car_garage }}</td>
                                            <td>
                                                @if ($carRepair->car_warrantyInfo )
                                                {{ \Carbon\Carbon::parse($carRepair->car_warrantyInfo
                                                )->translatedFormat('j F Y') }}
                                                @else
                                                ไม่ระบุวันที่
                                                @endif
                                            </td>
                                            <td>{{ $carRepair->car_additionalNotes }}</td>
                                            <td>{{ $carRepair->car_requesterName }}</td>

                                            <td class="text-center">
                                                <a href="#" wire:click='confirmEdit({{ $carRepair->id }})'
                                                    data-bs-toggle="modal" data-bs-target="#carRepairModal"
                                                    class="avtar avtar-xs btn-link-secondary">
                                                    <i class="bi bi-pencil-square text-warning"
                                                        style="font-size: 18px;"></i>
                                                </a>
                                                <a href="#" wire:click='confirmDelete({{ $carRepair->id }})'
                                                    class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                                    data-bs-target="#">
                                                    <i class="bi bi-trash  text-danger" style="font-size: 18px;"></i>
                                                </a>
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
    </div>
    <!-- ADD MODAL -->
    <div wire:ignore.self class="modal fade" id="carRepairModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="carRepairModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }}  text-white">
                    <h1 class="modal-title fs-5 font_anuphan text-white" id="carRepairModalLabel">
                        กรอกแบบฟอร์ม </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='Close'></button>
                </div>
                <div class="modal-body">
                    <form novalidate class="form "
                        wire:submit.prevent="{{ $edit ? 'updateCarRepair' : 'saveCarRepair' }}" id="myForm">
                        <div class="container-fluid">
                            <div class="row" id="error">
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ทะเบียนรถ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-car-front"></i>
                                        </span>
                                        <select class="form-control my-auto font_Prompt" id="car_id" name="car_id"
                                            wire:model="car_id" required>
                                            <option selected="" value="">
                                                เลือกทะเบียนรถ...</option>
                                            @foreach($carReports as $carReport)
                                            <option value="{{ $carReport->id }}">{{
                                                $carReport->car_number." " .$carReport->province->ProvinceName }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">รายการ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="ph ph-list-checks"></i>
                                        </span>
                                        <input type="text" class="form-control font_Prompt" id="car_issue"
                                            name="car_issue" wire:model="car_issue" placeholder="">
                                    </div>
                                    @error('car_issue')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ซ่อมครั้งล่าสุด</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="ph ph-wrench"></i>
                                        </span>
                                        <input type="date" class="form-control font_Prompt" id="car_lastMaintenanceDate"
                                            name="car_lastMaintenanceDate" wire:model="car_lastMaintenanceDate"
                                            placeholder="">
                                    </div>
                                    @error('car_lastMaintenanceDate')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">แผนการบำรุงรักษา</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="ph ph-calendar-check"></i>
                                        </span>
                                        <input type="date" class="form-control font_Prompt" id="car_preferredRepairDate"
                                            name="car_preferredRepairDate" wire:model="car_preferredRepairDate"
                                            placeholder="">
                                    </div>
                                    @error('car_preferredRepairDate')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ร้านซ่อม</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="ph ph-garage"></i>
                                        </span>
                                        <input type="text" class="form-control font_Prompt" id="car_garage"
                                            name="car_garage" wire:model="car_garage" placeholder="">
                                    </div>
                                    @error('car_garage')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ประกันซ่อม</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="ph ph-certificate"></i>
                                        </span>
                                        <input type="date" class="form-control font_Prompt" id="car_warrantyInfo"
                                            name="car_warrantyInfo" wire:model="car_warrantyInfo" placeholder="">
                                    </div>
                                    @error('car_warrantyInfo')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-12  mb-2">
                                    <label class="font_Prompt">รายละเอียด</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-list-columns-reverse"></i>
                                        </span>
                                        <textarea type="text" class="form-control form-control-sm font_Prompt"
                                            id="car_additionalNotes" name="car_additionalNotes"
                                            wire:model="car_additionalNotes" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ตรวจเช็คตามแผน</label>
                                    <div class="form-check form-switch mb-2 mt-2"><input type="checkbox"
                                            class="form-check-input input-primary" id="car_plan" wire:model="car_plan" @if($car_plan) checked @endif>
                                        <label class="form-check-label font_Prompt" for="car_plan">ตามแผน
                                        </label>
                                    </div>
                                    @error('car_plan')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">สถานะ</label>
                                    <div class="form-check form-switch mb-2 mt-2"><input type="checkbox"
                                            class="form-check-input input-primary" id="car_canDrive"
                                            wire:model="car_canDrive" @if($car_canDrive) checked @endif>
                                        <label class="form-check-label font_Prompt" for="car_canDrive">รถยังวิ่งได้
                                        </label>
                                    </div>
                                    @error('car_canDrive')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ผู้แจ้ง</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="ph ph-user"></i>
                                        </span>
                                        <input type="text" class="form-control font_Prompt" id="car_requesterName"
                                            name="car_requesterName" wire:model="car_requesterName" placeholder="">
                                    </div>
                                    @error('car_requesterName')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2 font_Prompt">
                            <button wire:loading.attr='disabled' wire:target='photo' type="submit"
                                class=" {{ $edit ? 'btn btn-warning' : 'btn btn-primary' }} mb-2 me-2 btn-sm"
                                style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i>{{ $edit ? ' แก้ไข' :
                                'บันทึก' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ADD MODAL -->
</div>
