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
                                    <h4 class="animate__animated animate__headShake">รายการรถบริษัท ฯ
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary btn-sm float-end"
                                            style="border-radius: 7px" data-bs-toggle="modal"
                                            data-bs-target="#machineryModal" wire:click='addMachinery'>
                                            <span class="font_anuphan">CREATE</span>
                                        </button>
                                        <!-- Button trigger modal -->
                                    </h4>
                                </div>
                            </div>

                            <div class="col-md-12 font_anuphan">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('home/') }}"><i
                                                class="ph ph-house"></i> หน้าหลัก</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0)">ทะเบียนทรัพย์สิน</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page"><strong>รายการรถบริษัท ฯ</strong>
                                    </li>
                                </ul>
                            </div>
                            @if (session('message'))
                                <div x-data="{ isShow: true }" x-show="isShow" x-init="setTimeout(() => isShow = false, 3000)"
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
                            <div  class="col-12 mt-2 text-center">
                                    <div class="table-responsive font_anuphan my-2">
                                        <table class="table table-hover" id="pc-dt-simple">
                                            <thead>
                                                <tr>
                                                    <th>ลำดับ</th>
                                                    <th class="text-center">เลขทะเบียน</th>
                                                    <th class="text-center">จังหวัด</th>
                                                    <th class="text-center">ประเภทรถ</th>
                                                    <th class="text-center">ลักษณะ</th>
                                                    <th class="text-center">ยี่ห้อ</th>
                                                    <th class="text-center">รุ่น</th>
                                                    <th class="text-center">ปี</th>
                                                    <th class="text-center">สี</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                        <div>
                            </div>
                        </div>
                    </div>
                    <!-- Table -->

                    <!-- ADD MODAL -->
                    {{-- <div wire:ignore.self class="modal fade" id="machineryModal" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="machineryModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }} text-white">
                                    <h1 class="modal-title fs-5 font_anuphan text-white" id="machineryModalLabel">
                                        กรอกแบบฟอร์ม </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form novalidate class="form "
                                        wire:submit.prevent="{{ $edit ? 'updateMachinery' : 'saveMachinery' }}"
                                        id="myForm">
                                        <div class="container-fluid">
                                            <div class="row" id="error">

                                                <div class="col-md-6 mb-2">
                                                    <label class="font_Prompt">ชื่อเครื่องจักร</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text text-primary">
                                                            <i class="bi bi-back"></i>
                                                        </span>
                                                        <input type="text"
                                                            class="form-control form-control-sm font_Prompt text-primary"
                                                            id="name_machinery" name="name_machinery"
                                                            wire:model="name_machinery" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label class="font_Prompt">หมายเลขเครื่อง</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text text-primary">
                                                            <i class="bi bi-list-ol"></i>
                                                        </span>
                                                        <input type="text"
                                                            class="form-control form-control-sm font_Prompt text-primary"
                                                            id="number_machinery" name="number_machinery"
                                                            wire:model="number_machinery" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label class="font_Prompt">เลขทะเบียนเครื่องจักร</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text text-primary">
                                                            <i class="bi bi-list-ol"></i>
                                                        </span>
                                                        <input type="text"
                                                            class="form-control form-control-sm font_Prompt text-primary"
                                                            id="register_machinery" name="register_machinery"
                                                            wire:model="register_machinery" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label class="font_Prompt">ลักษณะงานที่ใช้</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text ">
                                                            <i class="bi bi-memory text-primary"></i>
                                                        </span>
                                                        <input type="text"
                                                            class="form-control form-control-sm font_Prompt text-primary"
                                                            id="job_machinery" name="job_machinery"
                                                            wire:model="job_machinery" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label style="font-family: 'Prompt', sans-serif;">หน่วยงาน</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text text-primary">
                                                            <i class="bi bi-person-rolodex"></i>
                                                        </span>
                                                        <input type="text"
                                                            class="form-control form-control-sm font_Prompt text-primary"
                                                            id="agency_machinery" name="agency_machinery"
                                                            wire:model="agency_machinery" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-2">
                                                    <label class="font_Prompt">แบบ (Type)</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text text-primary">
                                                            <i class="bi bi-code-square"></i>
                                                        </span>
                                                        <input type="text"
                                                            class="form-control form-control-sm font_Prompt text-primary"
                                                            id="type" name="type" wire:model="type"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label class="font_Prompt">สถานะ</label>
                                                    <div class="input-group ">
                                                        <span class="input-group-text text-primary">
                                                            <i class="bi bi-stack-overflow"></i>
                                                        </span>
                                                        <select class="form-select   my-auto font_Prompt"
                                                            id="status_machinery" name="status_machinery"
                                                            wire:model="status_machinery"
                                                            style="color:rgb(39, 89, 215)" required>
                                                            <option selected value="">เลือก...</option>
                                                            <option value="1">ปกติ</option>
                                                            <option value="2">แจ้งซ่อม</option>
                                                            <option value="3">ยกเลิก</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label class="font_Prompt">เริ่มใช้งาน</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text text-primary">
                                                            <i class="bi bi-calendar-event"></i>
                                                        </span>
                                                        <input type="date"
                                                            class="form-control form-control-sm font_Prompt text-primary"
                                                            id="start_machinery" name="start_machinery"
                                                            wire:model="start_machinery" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label class="font_Prompt">แผนการบำรุงรักษา</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text text-primary">
                                                            <i class="bi bi-calendar4-week"></i>
                                                        </span>
                                                        <input type="date"
                                                            class="form-control form-control-sm font_Prompt text-primary"
                                                            id="plan_machinery" name="plan_machinery"
                                                            wire:model="plan_machinery" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-12  mb-2">
                                                    <label style="font-family: 'Prompt', sans-serif;">หมายเหตุ</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text text-primary">
                                                            <i class="bi bi-file-earmark-text"></i>
                                                        </span>
                                                        <textarea type="text" class="form-control form-control-sm" id="remark_machinery" name="remark_machinery"
                                                            wire:model="remark_machinery" placeholder="" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 font_Prompt"> *
                                                    <label class="form-label">อัพโหลดภาพ</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text text-success"><i
                                                                class="bi bi-image-fill"></i></span>
                                                        <input type="file" class="form-control"
                                                            id="photo_machinery" name="photo_machinery"
                                                            wire:model="photo_machinery" accept="File/jpeg,File/png">
                                                        @error('photo_machinery.*')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror

                                                    </div>
                                                    <div wire:loading wire:target="photo_machinery">
                                                        Uploading...
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-end gap-2 font_Prompt">
                                                <button wire:loading.attr='disabled' wire:target='photo'
                                                    type="submit"
                                                    class=" {{ $edit ? 'btn btn-warning' : 'btn btn-primary' }} mb-2 me-2 btn-sm"
                                                    style="border-radius: 10px"><i
                                                        class="fa-solid fa-floppy-disk"></i>{{ $edit ? ' แก้ไข' : ' บันทึก' }}</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- ADD MODAL -->
                </div>
            </div>
        </div>
    </div>
</div>
