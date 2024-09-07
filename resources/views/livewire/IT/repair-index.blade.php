<div>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary btn-sm" style="border-radius: 7px" data-bs-toggle="modal"
            data-bs-target="#WorkOrderModal" wire:click='addWorkOrder'>
            <span class="font_anuphan">CREATE</span>
        </button>
        <!-- Button trigger modal -->
        @if (session('message'))
            <div x-data="{ isShow: true }" x-show="isShow" x-init="setTimeout(() => isShow = false, 3000)"
                class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-c-green">
                        <strong class="me-auto">การแจ้งเตือน</strong>
                        <small>mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        <strong class="text-primary"> <i class="fa-solid fa-floppy-disk"></i>
                            {{ session('message') }}</strong>
                    </div>
                </div>
            </div>
        @endif

        <!-- Table -->
        <div wire:init='initLoading' class="col-12 mt-2 text-center">
            @if ($isLoading)
                <div class="card table-card">
                    <div class="card-header d-flex align-items-center justify-content-between py-3 font_Prompt">
                        <h4 class="mb-0 animate__animated animate__headShake">รายการแจ้งซ่อม</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive font_anuphan">
                            <table class="table table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th>วันที่</th>
                                        <th>ชื่อผู้แจ้ง</th>
                                        <th>สถานะ</th>
                                        <th>ประเภท</th>
                                        <th>ชื่อเครื่อง</th>
                                        <th>รายละเอียด</th>
                                        <th>สถานที่</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th style="width: 150px" class="text-center">จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workOrders as $workorder)
                                        <tr class="odd">
                                            <td class="texe align-middle">
                                                {{ strftime('%d/ %m /%Y', strtotime($workorder->created_at)) }}
                                            </td>
                                            <td class="texe align-middle">
                                                {{ $workorder->NameOfInformant }}</td>
                                            <td class="texe align-middle h5">
                                                @if ($workorder->Status == 1)
                                                    <span class="badge rounded-pill bg-primary"><i
                                                            class="ph ph-clock-clockwise"></i>
                                                        รอดำเนินการ</span>
                                                @elseif ($workorder->Status == 2)
                                                    <span class="badge rounded-pill bg-warning text-dark"><i
                                                            class="ph ph-clock-countdown"></i>
                                                        กำลังดำเนินการ</span>
                                                @elseif ($workorder->Status == 3)
                                                    <span class="badge rounded-pill bg-warning text-danger"><i
                                                            class="ph ph-telegram-logo"></i>
                                                        ส่งซ่อมภายนอก</span>
                                                @elseif ($workorder->Status == 4)
                                                    <span class="badge rounded-pill bg-success"><i
                                                            class="ph ph-check-circle"></i>
                                                        ดำเนินการเสร็จสิ้น</span>
                                                @else
                                                    <span class="badge rounded-pill bg-danger"><i
                                                            class="ph ph-x-circle"></i>
                                                        ยกเลิก</span>
                                                @endif

                                            </td>
                                            <td class="texe align-middle">
                                                @if ($workorder->typeWork)
                                                    {{ $workorder->typeWork->TypeWork }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td class="texe align-middle">
                                                {{ $workorder->MachineName }}
                                            </td>
                                            <td class="texe align-middle">
                                                {{ $workorder->Detail }}
                                            </td>
                                            <td class="texe align-middle">
                                                {{ $workorder->Location }}
                                            </td>
                                            <td class="texe align-middle">
                                                {{ $workorder->Telephone }}
                                            </td>

                                            <td class="texe text-center align-middle">
                                                <a href="#"wire:click='generatePdf({{ $workorder->id }})'
                                                    class="avtar avtar-xs btn-link-secondary">
                                                    <i class="bi bi-file-earmark-text" style="font-size: 18px;"></i>
                                                </a>
                                                <a href="#" wire:click='confirmEdit({{ $workorder->id }})' data-bs-toggle="modal"
                                                    data-bs-target="#WorkOrderModal" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="bi bi-pencil-square text-warning" style="font-size: 18px;"></i>
                                                </a>
                                                @can('delete user')
                                                <a href="#" wire:click='confirmDelete({{ $workorder->id }})'
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
                                {{ $workOrders->links() ?? '' }}
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="flex items-center justify-center">
                    <div class="inline-block w-8 h-8 border-4 rounded-full spinner-border animate-spin" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            @endif
        </div>
        <!-- Table -->
        <!-- ADD MODAL -->
        <div wire:ignore.self class="modal fade" id="WorkOrderModal" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="WorkOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-red' }} text-white">
                        <h1 class="modal-title fs-5 font_Prompt" id="WorkOrderModalLabel">
                            กรอกแบบฟอร์ม </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form"
                            wire:submit.prevent="{{ $edit ? 'UpdateWorkOrder' : 'saveWorkOrder' }}" id="myForm">
                            <div class="container-fluid">
                                <div class="row" id="error">

                                    <div class="col-md-6 mb-2">
                                        <label style="font-family: 'Prompt', sans-serif;">ชื่อผู้แจ้ง</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">

                                            </span>
                                            <input type="text" class="form-control" id="NameOfInformant"
                                                name="NameOfInformant" wire:model="NameOfInformant"
                                                placeholder="กรุณากรอกชื่อ-สกุล" required
                                                style="font-family: 'Prompt', sans-serif;">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label style="font-family: 'Prompt', sans-serif;">ประเภทงาน</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">

                                            </span>
                                            <select class="form-control my-auto font_Prompt" id="TypeWork" name="TypeWork"
                                                wire:model="TypeWork" style="color:green" required>
                                                <option selected value="">เลือกประเภท...</option>
                                                @foreach ($typeworks as $typework)
                                                    <option value="{{ $typework->TypeWorkID }}">
                                                        {{ $typework->TypeWork }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label style="font-family: 'Prompt', sans-serif;">ชื่อเครื่อง</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">

                                            </span>
                                            <input type="text" class="form-control" id="MachineName"
                                                name="MachineName" wire:model="MachineName" placeholder="ชื่อเครื่อง"
                                                required style="font-family: 'Prompt', sans-serif;">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label style="font-family: 'Prompt', sans-serif;">รหัสเครื่อง</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">

                                            </span>
                                            <input type="text" class="form-control" id="MachineCode"
                                                name="MachineCode" wire:model="MachineCode"
                                                placeholder="ตัวอย่าง ISP00-00-00/0000" required
                                                style="font-family: 'Prompt', sans-serif;">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12  mb-2">
                                        <label style="font-family: 'Prompt', sans-serif;">รายละเอียดปัญหา</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">

                                            </span>
                                            <textarea type="text" class="form-control" id="Detail" name="Detail" wire:model="Detail"
                                                placeholder="ข้อมูล" {{ $edit ? 'readonly' : '' }} required style="font-family: 'Prompt', sans-serif;"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12  mb-2">
                                        <label style="font-family: 'Prompt', sans-serif;">สถานที่</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">

                                            </span>
                                            <select class="form-control text-primary font_Prompt" id="Location" name="Location"
                                                wire:model="Location" style="color:green" required>
                                                <option selected value="">
                                                    เลือกสถานที่...</option>
                                                <option value="ออฟฟิศ">ออฟฟิศ</option>
                                                <option value="ห้องพยาบาล">ห้องพยาบาล
                                                </option>
                                                <option value="ห้องการเงิน">ห้องการเงิน
                                                </option>
                                                <option value="ห้อง QMR">ห้อง QMR</option>
                                                <option value="ห้องผู้บริหาร">ห้องผู้บริหาร
                                                </option>
                                                <option value="ห้อง Lab">ห้อง Lab</option>
                                                <option value="ห้องวิศวกรรม">ห้องวิศวกรรม
                                                </option>
                                                <option value="ห้องสโตร์">ห้องสโตร์
                                                </option>
                                                <option value="ป้อมรปภ.">ป้อมรปภ.</option>
                                                <option value="ห้องประชุมใหญ่">
                                                    ห้องประชุมใหญ่</option>
                                                <option value="โรงอาหาร">โรงอาหาร</option>
                                                <option value="ส่วนโรงงาน">ส่วนโรงงาน
                                                </option>
                                                <option value="โรงคัดแยกขยะ">โรงคัดแยกขยะ
                                                </option>
                                                <option value="บ้านพักด้านหลัง">
                                                    บ้านพักด้านหลัง</option>
                                                <option value="บ้านพักข้างนอก">
                                                    บ้านพักข้างนอก</option>
                                                <option value="อาคารกู้ภัย">อาคารกู้ภัย
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label style="font-family: 'Prompt', sans-serif;">เบอร์โทรศัพท์</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">

                                            </span>
                                            <input type="text" class="form-control" id="Telephone"
                                                name="Telephone" wire:model="Telephone" placeholder="0912345678"
                                                required style="font-family: 'Prompt', sans-serif;">
                                        </div>
                                    </div>
                                    @if ($edit == true)
                                        <hr class="mt-2" width="100%" noshade style="color: rgb(224, 170, 10);">
                                        <h5 class="text-break text-primary"
                                            style="font-family: 'Prompt', sans-serif;"><i
                                                class="fa-solid fa-user-pen text-primary"></i>
                                            ข้อมูลสำหรับเจ้าหน้าที่ : </h5>
                                        <div class="col-md-6 mb-2">
                                            <label style="font-family: 'Prompt', sans-serif;">เลขที่เอกสาร</label>
                                            <div class="input-group">
                                                <span class="input-group-text text-warning">

                                                </span>
                                                <input type="text" class="form-control" id="Number"
                                                    name="Number" wire:model="Number" placeholder="เลขที่เอกสาร"
                                                    required style="font-family: 'Prompt', sans-serif;">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label style="font-family: 'Prompt', sans-serif;">สถานะล่าสุด</label>
                                            <div class="input-group">
                                                <span class="input-group-text text-warning">

                                                </span>
                                                <select type="text" class="form-control text-primary font_Prompt"
                                                    id="Status" name="Status" wire:model="Status" required>
                                                    <option disabled selected value="">
                                                        เลือกสถานะ</option>
                                                    <option value="1">รอดำเนินการ
                                                    </option>
                                                    <option value="2">กำลังดำเนินการ
                                                    </option>
                                                    <option value="3">ส่งซ่อมภายนอก
                                                    </option>
                                                    <option value="4">
                                                        ดำเนินการเสร็จสิ้น</option>
                                                    <option value="5">ยกเลิก</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label style="font-family: 'Prompt', sans-serif;">เลือกช่าง</label>
                                            <div class="input-group">
                                                <span class="input-group-text text-warning">

                                                </span>
                                                <input type="text" class="form-control" id="Technician"
                                                    name="Technician" wire:model="Technician" placeholder="" required
                                                    style="font-family: 'Prompt', sans-serif;">
                                                {{-- <select class="form-control my-auto text-primary" id="Technician"
                        name="Technician" wire:model="Technician" placeholder="ข้อมูล" {{ $edit
                        ? 'readonly' : '' }} style="font-family: 'Prompt', sans-serif;">
                        <option selected disabled value="">เลือกช่าง...</option>
                    </select> --}}
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-12  mb-2">
                                            <label
                                                style="font-family: 'Prompt', sans-serif;">บันทึกรายงานการซ่อม</label>
                                            <div class="input-group">
                                                <span class="input-group-text text-warning">

                                                </span>
                                                <textarea type="tel" class="form-control text-primary" id="RepairReport" name="RepairReport"
                                                    wire:model="RepairReport" placeholder="" required style="font-family: 'Prompt', sans-serif;"></textarea>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                            </div>
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="submit" class="btn btn-danger mb-2 me-2" id=""
                                    style="font-family: 'Prompt', sans-serif;">

                                    {{ $edit ? ' บันทึกสถานะ' : ' แจ้งซ่อม' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ADD MODAL -->

        <!-- ADD MODAL Type -->
        <div wire:ignore.self class="modal fade" id="TypeWorkOrderModal"
        data-bs-backdrop="static" tabindex="-1" aria-labelledby="TypeWorkOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-header bg-c-green"
                    style="font-family: 'Prompt', sans-serif;">
                    <h1 class="modal-title fs-5 " id="TypeWorkOrderModalLabel">
                        กรอกข้อมูลประเภทงาน </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close" wire:click="closeModal"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="form"
                        wire:submit.prevent="saveTypeWorkOrder" id="myForm">
                        <div class="container-fluid">
                            <div class="row" id="error">
                                <div class="col-md-12 mb-2">
                                    <label
                                        style="font-family: 'Prompt', sans-serif;">ประเภทงาน</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">

                                        </span>
                                        <input type="text" class="form-control"
                                            id="TypeWork" name="TypeWork"
                                            wire:model="TypeWork" placeholder="" required
                                            style="font-family: 'Prompt', sans-serif;">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="submit" class="btn btn-primary mb-2 me-2"
                                id="" style="font-family: 'Prompt', sans-serif;"><i
                                    class="fa-solid fa-floppy-disk"></i>
                                บันทึก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ADD MODAL -->
    </div>
</div>

<script>
    const workOrders = @json($workOrders);
</script>
