<div>
    <div class="container">
        <div class="page-header">
            <div class="page-block card mb-0">
                <div class="card-body font_Prompt pb-2">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title border-bottom pb-2 mb-2">
                                <h4 class="mb-0">บันทึกผ่านเข้า-ออก</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html"><i
                                            class="ph ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">ฝ่ายรักษาความปลอดภัย</a></li>
                                <li class="breadcrumb-item" aria-current="page">บันทึกผ่านเข้าออก</li>
                            </ul>
                        </div>
                        <div>
                            <button type="button" class="btn btn-outline-primary btn-sm mt-2 mb-0"
                                style="border-radius: 7px" data-bs-toggle="modal" data-bs-target="#passCardModal"
                                wire:click='addPassCard'>
                                <span class="font_anuphan">CREATE</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header mt-1">
            <div class="page-block card mb-0">
                <div class="card-body font_Prompt">
                    <!-- Table -->
                    <div wire:init='initLoading' class="col-12 text-center">
                        <div class="table-responsive font_anuphan">
                            <table class="table table-hover" id="">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 15%">วันที่</th>
                                        <th class="text-center">ชื่อ-นามสกุล</th>
                                        <th class="text-center">ทะเบียนรถ</th>
                                        <th class="text-center">หน่วยงาน</th>
                                        <th class="text-center">ติดต่อ</th>
                                        <th class="text-center">สถานะ</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($passCards as $passCard)
                                    <tr>
                                        <td>
                                            @if ($passCard->created_at)
                                            {{
                                            \Carbon\Carbon::parse($passCard->created_at)->translatedFormat('j/m/Y H:i')
                                            }}
                                            @else
                                            ไม่ระบุวันที่
                                            @endif
                                        </td>
                                        <td>{{ $passCard->prefix }}{{ $passCard->first_name }} {{ $passCard->last_name
                                            }}</td>
                                        <td>{{ $passCard->car_number }}</td>
                                        <td>{{ $passCard->pass_dept }}</td>
                                        <td>{{ $passCard->pass_contact }}</td>
                                        <td>
                                            @if ($passCard->pass_status == 1)
                                            <span class="badge bg-danger btn"
                                                wire:click='passEnd({{ $passCard->id  }})'>ดำเนินการ</span>
                                            @else
                                            <span class="badge bg-success">ดำเนินการเรียบร้อย</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="#" wire:click='confirmEdit({{ $passCard->id }})'
                                                data-bs-toggle="modal" data-bs-target="#passCardModal"
                                                class="avtar avtar-xs btn-link-secondary">
                                                <i class="bi bi-pencil-square text-warning"
                                                    style="font-size: 18px;"></i>
                                            </a>
                                            @can('delete IT')
                                            <a href="#" wire:click='confirmDelete({{ $passCard->id }})'
                                                class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <i class="bi bi-trash  text-danger" style="font-size: 18px;"></i>
                                            </a>
                                            @endcan

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="d-flex justify-content mx-4">
                                {{ $passCards->links() ?? '' }}
                            </div>
                        </div>
                    </div>
                    <!-- Table -->
                </div>
            </div>
        </div>


        <!-- ADD MODAL -->
        <div wire:ignore.self class="modal fade" id="passCardModal" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="passCardModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }} text-white">
                        <h1 class="modal-title fs-5 text-white font_Prompt" id="passCardModalLabel">
                            กรอกแบบฟอร์ม </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form"
                            wire:submit.prevent="{{ $edit ? 'updatePassCard' : 'savePassCard' }}" id="myForm">
                            <div class="container-fluid">
                                <div class="row" id="error">

                                    <div class="col-md-2 mb-2">
                                        <label class="font_Prompt">คำนำหน้า</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-bounding-box"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="prefix"
                                                name="prefix" wire:model="prefix" placeholder="" required>
                                        </div>
                                        @error('prefix')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <label class="font_Prompt">ชื่อ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-bounding-box"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="first_name"
                                                name="first_name" wire:model="first_name" placeholder="" required>
                                        </div>
                                        @error('first_name')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <label class="font_Prompt">นามสกุล</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-bounding-box"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="last_name"
                                                name="last_name" wire:model="last_name" placeholder="" required>
                                        </div>
                                        @error('last_name')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">เลขบัตรประชาชน</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-vcard"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="id_card"
                                                name="id_card" wire:model="id_card" placeholder="" required>
                                        </div>
                                        @error('id_card')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">วันเกิด</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-calendar-event"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="birthday"
                                                name="birthday" wire:model="birthday" placeholder="" >
                                        </div>
                                        @error('birthday')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label class="font_Prompt">บ้านเลขที่</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-house"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="address"
                                                name="address" wire:model="address" placeholder="">
                                        </div>
                                        @error('address')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label class="font_Prompt">หมู่</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-house"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="address_moo"
                                                name="address_moo" wire:model="address_moo" placeholder="">
                                        </div>
                                        @error('address_moo')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">ตำบล</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-geo-alt-fill"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="district"
                                                name="district" wire:model="district" placeholder="" required>
                                        </div>
                                        @error('district')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">อำเภอ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-geo-alt-fill"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="county"
                                                name="county" wire:model="county" placeholder="" required>
                                        </div>
                                        @error('county')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">จังหวัด</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-geo-alt-fill"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="province"
                                                name="province" wire:model="province" placeholder="" required>
                                        </div>
                                        @error('province')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">ทะเบียนรถ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-123"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="car_number"
                                                name="car_number" wire:model="car_number" placeholder="">
                                        </div>
                                        @error('car_number')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">หน่วยงาน</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-list-task"></i>
                                            </span>
                                            <select class="form-control text-primary font_Prompt" id="pass_dept"
                                                name="pass_dept" wire:model="pass_dept">
                                                <option selected value="">
                                                    เลือก...</option>
                                                <option value="ลูกค้าขายปาล์ม">ลูกค้าขายปาล์ม</option>
                                                <option value="ลูกค้าซื้อสินค้า">ลูกค้าซื้อสินค้า</option>
                                                <option value="หน่วยงานราชการ">หน่วยงานราชการ</option>
                                                <option value="เจ้าหน้าที่ธนาคาร">เจ้าหน้าที่ธนาคาร</option>
                                                <option value="แขกผู้บริหาร">แขกผู้บริหาร</option>
                                                <option value="บุคคลทั่วไป">บุคคลทั่วไป</option>
                                            </select>
                                        </div>
                                        @error('pass_dept')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">ติดต่อ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-123"></i>
                                            </span>
                                            <select class="form-control my-auto font_Prompt text-primary" id="pass_contact" name="pass_contact"
                                                wire:model="pass_contact">
                                                <option selected="" value="">
                                                    เลือกผู้ติดต่อ...</option>
                                                @foreach($emps as $emp)
                                                <option value="{{ $emp->EmpName }}">{{
                                                    $emp->EmpName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('pass_contact')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="font_Prompt">หมายเหตุ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-list-columns-reverse"></i>
                                            </span>
                                            <textarea type="text" class="form-control form-control-sm font_Prompt"
                                                id="pass_remark" name="pass_remark" wire:model="pass_remark"
                                                placeholder=""></textarea>
                                        </div>
                                        @error('pass_remark')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="submit" class="btn btn-primary mb-2 me-2" id=""
                                    style="font-family: 'Prompt', sans-serif;">
                                    {{ $edit ? ' บันทึกสถานะ' : ' บันทึก' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ADD MODAL -->
    </div>
</div>
