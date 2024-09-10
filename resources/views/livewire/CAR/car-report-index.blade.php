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
                                        <div class="col-lg-6 col-sm-12">
                                            <h4 class="animate__animated animate__headShake">รายการรถบริษัท ฯ</h4>
                                            <button type="button" class="btn btn-primary btn-sm col-lg-2"
                                                style="border-radius: 7px" data-bs-toggle="modal"
                                                data-bs-target="#carReportModal" wire:click='addCarReport'>
                                                <span class="font_anuphan">เพิ่มรถ</span>
                                            </button>
                                            <button type="button" class="btn btn-outline-primary btn-sm me-2"
                                                style="border-radius: 7px" data-bs-toggle="modal"
                                                data-bs-target="#carTypeModal" wire:click='addCarType'>
                                                <span class="font_anuphan">เพิ่มประเภทรถ</span>
                                            </button>
                                            <button type="button" class="btn btn-outline-primary btn-sm me-2"
                                                style="border-radius: 7px" data-bs-toggle="modal"
                                                data-bs-target="#carCharacterModal" wire:click='addCarCharacter'>
                                                <span class="font_anuphan">เพิ่มลักษณะรถ</span>
                                            </button>
                                            <button type="button" class="btn btn-outline-primary btn-sm me-2"
                                                style="border-radius: 7px" data-bs-toggle="modal"
                                                data-bs-target="#carBrandModal" wire:click='addCarBrand'>
                                                <span class="font_anuphan">เพิ่มยี่ห้อรถ</span>
                                            </button>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 font_anuphan">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('home/') }}"><i class="ph ph-house"></i>
                                            หน้าหลัก</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0)">ทะเบียนทรัพย์สิน</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page"><strong>รายการรถบริษัท ฯ</strong>
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
                            <!-- Table -->
                            <div class="col-12 text-center">
                                <div class="table-responsive font_anuphan my-2">
                                    <table class="table table-hover" id="pc-dt-simple">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>ทะเบียนรถ</th>
                                                <th>ยี่ห้อรถ</th>
                                                <th>เลขไมล์</th>
                                                <th>ภาษี</th>
                                                <th>ประกันภัย</th>
                                                <th>ระยะเปลี่ยน</th>
                                                <th class="text-center">สถานะ</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($carReports as $carReport)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $carReport->car_number }} {{ $carReport->province->ProvinceName ?? 'N/A' }}</td>
                                                <td>{{ $carReport->brand->car_brand_list ?? 'N/A' }}</td>
                                                <td>{{ $carReport->car_mileage }}</td>
                                                <td>
                                                    @if ($carReport->car_tax)
                                                    @php
                                                        $plan = $carReport->car_tax;
                                                        $plan_startDate = Carbon\Carbon::now();
                                                        $plan_endDate = Carbon\Carbon::parse($plan);
                                                        $daysDifference = $plan_startDate->diffInDays($plan_endDate);

                                                        if ($daysDifference < 15) {
                                                            $status = 3;
                                                        } elseif ($daysDifference < 30) {
                                                            $status = 2;
                                                        } else {
                                                            $status = 1;
                                                        }
                                                    @endphp

                                                    @if ($status == 1)
                                                        <span class="">
                                                            @if ($carReport->car_tax)
                                                                {{ \Carbon\Carbon::parse($carReport->car_tax)->translatedFormat('j F Y') }}
                                                            @else
                                                                ไม่ระบุวันที่
                                                            @endif
                                                        </span>
                                                    @elseif ($status == 2)
                                                        <span class="badge bg-warning">
                                                            <i class="bi bi-exclamation-circle"></i>
                                                            @if ($carReport->car_tax)
                                                                {{ \Carbon\Carbon::parse($carReport->car_tax)->translatedFormat('j F Y') }}
                                                            @else
                                                                ไม่ระบุวันที่
                                                            @endif
                                                        </span>
                                                    @elseif ($status == 3)
                                                        <span class="badge bg-danger">
                                                            <i class="bi bi-x-circle"></i>
                                                            @if ($carReport->car_tax)
                                                                {{ \Carbon\Carbon::parse($carReport->car_tax)->translatedFormat('j F Y') }}
                                                            @else
                                                                ไม่ระบุวันที่
                                                            @endif
                                                        </span>
                                                    @endif
                                                @else
                                                    <p>ไม่ระบุวันที่</p>
                                                @endif
                                                </td>
                                                <td>
                                                    @if ($carReport->car_insurance)
                                                    @php
                                                        $plan = $carReport->car_insurance;
                                                        $plan_startDate = Carbon\Carbon::now();
                                                        $plan_endDate = Carbon\Carbon::parse($plan);
                                                        $daysDifference = $plan_startDate->diffInDays($plan_endDate);

                                                        if ($daysDifference < 15) {
                                                            $status = 3;
                                                        } elseif ($daysDifference < 30) {
                                                            $status = 2;
                                                        } else {
                                                            $status = 1;
                                                        }
                                                    @endphp

                                                    @if ($status == 1)
                                                        <span class="">
                                                            @if ($carReport->car_insurance)
                                                                {{ \Carbon\Carbon::parse($carReport->car_insurance)->translatedFormat('j F Y') }}
                                                            @else
                                                                ไม่ระบุวันที่
                                                            @endif
                                                        </span>
                                                    @elseif ($status == 2)
                                                        <span class="badge bg-warning">
                                                            <i class="bi bi-exclamation-circle"></i>
                                                            @if ($carReport->car_insurance)
                                                                {{ \Carbon\Carbon::parse($carReport->car_insurance)->translatedFormat('j F Y') }}
                                                            @else
                                                                ไม่ระบุวันที่
                                                            @endif
                                                        </span>
                                                    @elseif ($status == 3)
                                                        <span class="badge bg-danger">
                                                            <i class="bi bi-x-circle"></i>
                                                            @if ($carReport->car_insurance)
                                                                {{ \Carbon\Carbon::parse($carReport->car_insurance)->translatedFormat('j F Y') }}
                                                            @else
                                                                ไม่ระบุวันที่
                                                            @endif
                                                        </span>
                                                    @endif
                                                @else
                                                    <p>ไม่ระบุวันที่</p>
                                                @endif
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                    @if ($carReport->car_status == 1)
                                                    <span class="badge bg-success">ใช้งาน</span>
                                                    @else
                                                    <span class="badge bg-danger">ซ่อมแซม</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('car-view.index', ['carReportId' => $carReport->id]) }}"
                                                        class="avtar avtar-xs btn-link-secondary">
                                                        <i class="bi bi-eye text-primary" style="font-size: 18px;"></i>
                                                    </a>
                                                    <a href="#" wire:click='confirmEdit({{ $carReport->id }})'
                                                        data-bs-toggle="modal" data-bs-target="#carReportModal"
                                                        class="avtar avtar-xs btn-link-secondary">
                                                        <i class="bi bi-pencil-square text-warning"
                                                            style="font-size: 18px;"></i>
                                                    </a>
                                                    <a href="#" wire:click='confirmDelete({{ $carReport->id }})'
                                                        class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#">
                                                        <i class="bi bi-trash  text-danger"
                                                            style="font-size: 18px;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content mx-4">
                                        {{ $carReports->links() ?? '' }}
                                    </div>
                                </div>

                            </div>
                            <!-- Table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ADD Report MODAL -->
    <div wire:ignore.self class="modal fade" id="carReportModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="carReportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }}  text-white">
                    <h1 class="modal-title fs-5 font_anuphan text-white" id="carReportModalLabel">
                        กรอกแบบฟอร์ม </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click='Close'></button>
                </div>
                <div class="modal-body">
                    <form novalidate class="form "
                        wire:submit.prevent="{{ $edit ? 'updateCarReport' : 'saveCarReport' }}" id="myForm">
                        <div class="container-fluid">
                            <div class="row" id="error">
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">เลขทะเบียน</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-123"></i>
                                        </span>
                                        <input type="text" class="form-control font_Prompt" id="car_number" name="car_number"
                                            wire:model="car_number" placeholder="" required="">
                                    </div>
                                    @error('car_number')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">จังหวัด</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-person-vcard"></i>
                                        </span>
                                        <select class="form-control my-auto font_Prompt" id="car_county"
                                            name="car_county" wire:model="car_county" required="">
                                            <option selected="" value="">
                                                เลือกประเภทรถ</option>
                                            @foreach($provinces as $province)
                                            <option value="{{ $province->ProvinceID }}">{{
                                                $province->ProvinceName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('car_county')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ประเภทรถ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-car-front"></i>
                                        </span>
                                        <select class="form-control my-auto font_Prompt" id="car_type" name="car_type"
                                            wire:model="car_type" required="">
                                            <option selected="" value="">
                                                เลือกประเภทรถ</option>
                                            @foreach($carTypes as $carType)
                                            <option value="{{ $carType->id }}">{{
                                                $carType->car_type_list }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ลักษณะ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-car-front-fill"></i>
                                        </span>
                                        <select class="form-control my-auto font_Prompt" id="car_character"
                                            name="car_character" wire:model="car_character" required="">
                                            <option selected="" value="">
                                                เลือกลักษณะรถ</option>
                                            @foreach($carCharacters as $carCharacter)
                                            <option value="{{ $carCharacter->id }}">{{
                                                $carCharacter->car_character_list
                                                }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ยี่ห้อรถ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-person-vcard"></i>
                                        </span>
                                        <select class="form-control my-auto font_Prompt" id="car_brand" name="car_brand"
                                            wire:model="car_brand" required="">
                                            <option selected="" value="">เลือกยี่ห้อ
                                            </option>
                                            @foreach($carBrands as $carBrand)
                                            <option value="{{ $carBrand->id }}">{{
                                                $carBrand->car_brand_list }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">รุ่น</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-person-vcard"></i>
                                        </span>
                                        <input type="text" class="form-control" id="car_model" name="car_model"
                                            wire:model="car_model" placeholder="" required="">
                                        @error('car_model')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">สี</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-palette"></i>
                                        </span>
                                        <input type="text" class="form-control font_Prompt" id="car_color" name="car_color"
                                            wire:model="car_color" placeholder="" required="">
                                    </div>
                                    @error('car_color')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ปีที่ผลิต</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-calendar"></i>
                                        </span>
                                        <input type="text" class="form-control font_Prompt" id="car_year"
                                            name="car_year" wire:model="car_year" placeholder="ค.ศ.1999" required="">
                                    </div>
                                    @error('car_year')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">น้ำมันเชื้อเพลิง</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-fuel-pump"></i>
                                        </span>
                                        <input type="text" class="form-control font_Prompt" id="car_fuel" name="car_fuel"
                                            wire:model="car_fuel" placeholder="" required="">
                                    </div>
                                    @error('car_fuel')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">เลขไมล์</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-speedometer"></i>
                                        </span>
                                        <input type="text" class="form-control" id="car_mileage" name="car_mileage"
                                            wire:model="car_mileage" placeholder="" required="">
                                    </div>
                                    @error('car_mileage')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">วันจดทะเบียน</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-calendar-day"></i>
                                        </span>
                                        <input type="date" class="form-control" id="car_date" name="car_date"
                                            wire:model="car_date" placeholder="" required="">
                                    </div>
                                    @error('car_date')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">วันที่ซื้อ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-calendar-date"></i>
                                        </span>
                                        <input type="date" class="form-control" id="car_buy" name="car_buy"
                                            wire:model="car_buy" placeholder="" required="">
                                    </div>
                                    @error('car_buy')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ภาษี</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-cash-coin"></i>
                                        </span>
                                        <input type="date" class="form-control" id="car_tax" name="car_tax"
                                            wire:model="car_tax" placeholder="" required="">
                                    </div>
                                    @error('car_tax')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ประกันภัย</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-gear-wide-connected"></i>
                                        </span>
                                        <input type="date" class="form-control" id="car_insurance" name="car_insurance"
                                            wire:model="car_insurance" placeholder="" required="">
                                    </div>
                                    @error('car_insurance')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ส่วนงานที่ดูแล</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-people-fill"></i>
                                        </span>
                                        <select class="form-control my-auto font_Prompt" id="car_department" name="car_department"
                                            wire:model="car_department" required="">
                                            <option selected="" value="">
                                                เลือกฝ่าย...</option>
                                            @foreach($departments as $department)
                                            <option value="{{ $department->DeptID }}">{{
                                                $department->DeptName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">สถานะ</label>
                                    <div class="form-check form-switch mb-2 mt-2"><input type="checkbox"
                                            class="form-check-input input-primary" id="car_status"
                                            wire:model="car_status"  @if($car_status) checked @endif>
                                        <label class="form-check-label font_Prompt" for="car_status">ใช้งาน
                                        </label>
                                    </div>
                                    @error('car_status')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 col-12  mb-2">
                                    <label class="font_Prompt">รายละเอียด</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-list-columns-reverse"></i>
                                        </span>
                                        <textarea type="text" class="form-control form-control-sm font_Prompt" id="car_details"
                                            name="car_details" wire:model="car_details" placeholder=""
                                            required></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 font_Prompt">
                                    <label class="form-label">รูปภาพ</label>
                                    <div class="input-group">

                                        <input type="file" class="form-control" id="car_photo" name="car_photo"
                                            wire:model="car_photo" accept="File/jpeg,File/PNG">
                                        @error('car_photo')
                                        <span class="error text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
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
    <!-- End Report MODAL -->

    <!-- ADD Character MODAL -->
    <div wire:ignore.self class="modal fade" id="carCharacterModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="carCharacterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }}  text-white">
                    <h1 class="modal-title fs-5 font_anuphan text-white" id="carCharacterModalLabel">
                        กรอกข้อมูลลักษณะรถ </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form novalidate class="form "
                    wire:submit.prevent="{{ $edit ? 'updateCarCharacter' : 'saveCarCharacter' }}" id="myForm">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row" id="error">
                                <div class="col-md-12 mb-12">
                                    <label class="font_Prompt">ลักษณะรถ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="ph ph-car"></i>
                                        </span>
                                        <input type="text" class="form-control" id="car_character_list"
                                            name="car_character_list" wire:model="car_character_list" placeholder=""
                                            required="">
                                    </div>
                                    @error('car_character_list')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end font_Prompt me-4">
                        <button wire:loading.attr='disabled' wire:target='photo' type="submit"
                            class=" {{ $edit ? 'btn btn-warning' : 'btn btn-primary' }} mb-2 me-2 btn-sm"
                            style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i>{{
                            $edit ? ' แก้ไข' :
                            '
                            บันทึก' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Character MODAL -->

    <!-- ADD Type MODAL -->
    <div wire:ignore.self class="modal fade" id="carTypeModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="carTypeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }}  text-white">
                    <h1 class="modal-title fs-5 font_anuphan text-white" id="carTypeModalLabel">
                        กรอกข้อมูลประเภทรถ </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form novalidate class="form " wire:submit.prevent="{{ $edit ? 'updateCarType' : 'saveCarType' }}"
                    id="myForm">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row" id="error">
                                <div class="col-md-12 mb-12">
                                    <label class="font_Prompt">ประเภทรถ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="ph ph-car"></i>
                                        </span>
                                        <input type="text" class="form-control" id="car_type_list" name="car_type_list"
                                            wire:model="car_type_list" placeholder="" required="">
                                    </div>
                                    @error('car_type_list')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end font_Prompt me-4">
                        <button wire:loading.attr='disabled' wire:target='photo' type="submit"
                            class=" {{ $edit ? 'btn btn-warning' : 'btn btn-primary' }} mb-2 me-2 btn-sm"
                            style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i>{{
                            $edit ? ' แก้ไข' :
                            '
                            บันทึก' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Type MODAL -->

    <!-- ADD Brand MODAL -->
    <div wire:ignore.self class="modal fade" id="carBrandModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="carBrandModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }}  text-white">
                    <h1 class="modal-title fs-5 font_anuphan text-white" id="carBrandModalLabel">
                        กรอกข้อมูลยี่ห้อรถ </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form novalidate class="form " wire:submit.prevent="{{ $edit ? 'updateCarBrand' : 'saveCarBrand' }}"
                    id="myForm">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row" id="error">
                                <div class="col-md-12 mb-12">
                                    <label class="font_Prompt">ยี่ห้อรถ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="ph ph-car"></i>
                                        </span>
                                        <input type="text" class="form-control" id="car_brand_list"
                                            name="car_brand_list" wire:model="car_brand_list" placeholder=""
                                            required="">
                                    </div>
                                    @error('car_brand_list')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end font_Prompt me-4">
                        <button wire:loading.attr='disabled' wire:target='photo' type="submit"
                            class=" {{ $edit ? 'btn btn-warning' : 'btn btn-primary' }} mb-2 me-2 btn-sm"
                            style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i>{{
                            $edit ? ' แก้ไข' :
                            '
                            บันทึก' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Type MODAL -->
</div>
