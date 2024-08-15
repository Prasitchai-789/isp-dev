<div>
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

                                <div class="page-header-title border-bottom pb-2 mb-2 font_Prompt">
                                    <h4 class="animate__animated animate__headShake">รายการเครื่องจักร
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary btn-sm float-end"
                                            style="border-radius: 7px" data-bs-toggle="modal"
                                            data-bs-target="#sparepartModal" wire:click='addSparePart'>
                                            <span class="font_anuphan">CREATE</span>
                                        </button>
                                        <!-- Button trigger modal -->
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-12 font_anuphan">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('report-machinery.index') }}"><i
                                                class="ph ph-house"></i>หน้าหลัก</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('machinery.index')}}">ฝ่ายผลิตและวิศวกรรม</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page"><strong>รายการเครื่องจักร</strong></li>
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
                                            src="https://hadef.com/wp-content/uploads/Eintraeger-Elektrokran-HADEF-EEE-Schleppkabel-2.png" alt="seo bg"
                                            class="img-fluid">
                                        <div class=" bg-grd-primary"></div>
                                        <div class="card-body seo-content">
                                            <h4 class="m-t-10 text-white">Devices and resolution</h4>
                                            <p class="m-b-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="font_anuphan text-center h5">ข้อมูลเครื่องจักร</div>

                                <div class="col-12 py-2 d-flex justify-content-center align-items-center">

                                    <table class="table text-start font_anuphan">
                                        <tbody>
                                            <tr>
                                                <td class="column1 text-start h6" style="width: 80px">ชื่อเครื่องจักร</td>
                                                <td class="column2 text-start">: Overhead Crane </td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">หมายเลขเครื่องจักร</td>
                                                <td class="column2">: ST002A</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">ทะเบียนเครื่องจักร</td>
                                                <td class="column2">: ISP-5901-xxx</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">ลักษณะงาน</td>
                                                <td class="column2">: ยกกะบะปาล์ม</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">หน่วยงาน</td>
                                                <td class="column2">: บรรจุปาล์ม</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">เริ่มใช้งาน</td>
                                                <td class="column2">: 23-May-59</td>
                                            </tr>
                                            <tr>
                                                <td class="column1"></td>
                                                <td class="column2"></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr style="color: rgb(0, 17, 172)">
                            <div class="col-lg-12 text-center font_anuphan h5">รายการ</div>
                            <div class="table-responsive font_anuphan my-2">
                                <table class="table table-hover" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th class="text-center">รายการ</th>
                                            <th class="text-center">ยี่ห้อ</th>
                                            <th class="text-center">รุ่น</th>
                                            <th class="text-center">หมายเลข</th>
                                            <th class="text-center">ขนาด</th>
                                            <th class="text-center">สถานะ</th>
                                            <th class="text-center">แผนบำรุงรักษา</th>
                                            <th class="text-center">จำนวนการซ่อม</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                                 <!-- ADD MODAL -->
                            <div wire:ignore.self class="modal fade" id="sparepartModal" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="sparepartModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }} text-white">
                                        <h1 class="modal-title fs-5 font_anuphan text-white"
                                            id="sparepartModalLabel">
                                            กรอกแบบฟอร์ม </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form novalidate class="form "
                                            wire:submit.prevent="{{ $edit ? 'updateSparePart' : 'saveSparePart' }}"
                                            id="myForm">
                                            <div class="container-fluid">
                                                <div class="row" id="error">

                                                    <div class="col-md-6 mb-2">
                                                        <label class="font_Prompt">รายการ</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text text-primary">
                                                                <i class="bi bi-pc"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="name_spare" name="name_spare"
                                                                wire:model="name_spare" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="font_Prompt">ยี่ห้อ</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text ">
                                                                <i class="bi bi-cpu text-primary"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="brand_spare" name="brand_spare"
                                                                wire:model="brand_spare" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="font_Prompt">แบบ (Type)</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text ">
                                                                <i class="bi bi-cpu text-primary"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="type_spare" name="type_spare"
                                                                wire:model="type_spare" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="font_Prompt">รุ่น</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text text-primary">
                                                                <i class="bi bi-pc-horizontal"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="model_spare" name="model_spare"
                                                                wire:model="model_spare" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="font_Prompt">หมายเลข</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text ">
                                                                <i class="bi bi-memory text-primary"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="number_spare" name="number_spare"
                                                                wire:model="number_spare" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label
                                                            style="font-family: 'Prompt', sans-serif;">ขนาด</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text text-primary">
                                                                <i class="bi bi-device-ssd"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="size_spare" name="size_spare"
                                                                wire:model="size_spare" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label
                                                            style="font-family: 'Prompt', sans-serif;">สารหล่อหลื่น</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text text-primary">
                                                                <i class="bi bi-device-ssd"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="lubricant" name="lubricant"
                                                                wire:model="lubricant" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label
                                                            style="font-family: 'Prompt', sans-serif;">KW</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text text-primary">
                                                                <i class="bi bi-device-ssd"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="kw_spare" name="kw_spare"
                                                                wire:model="kw_spare" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label
                                                            style="font-family: 'Prompt', sans-serif;">จำนวน</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text text-primary">
                                                                <i class="bi bi-device-ssd"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="quantity_spare" name="quantity_spare"
                                                                wire:model="quantity_spare" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mb-2">
                                                        <label class="font_Prompt">สถานะ</label>
                                                        <div class="input-group ">
                                                            <span class="input-group-text text-primary"><i
                                                                    class="fa-solid fa-clock"></i></span>
                                                            <select class="form-select   my-auto font_Prompt"
                                                                id="status_spare" name="status_spare"
                                                                wire:model="status_spare" style="color:green"
                                                                required>
                                                                <option selected value="">เลือก...</option>
                                                                <option value="1">ปกติ</option>
                                                                <option value="2">แจ้งซ่อม</option>
                                                                <option value="3">ยกเลิก</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="font_Prompt">แผนการบำรุงรักษา</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text text-primary">
                                                                <i class="bi bi-motherboard"></i>
                                                            </span>
                                                            <input type="date"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="plan_spare" name="plan_spare"
                                                                wire:model="plan_spare" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label class="font_Prompt">เริ่มใช้งาน</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text text-primary">
                                                                <i class="bi bi-hash"></i>
                                                            </span>
                                                            <input type="date"
                                                                class="form-control form-control-sm font_Prompt text-primary"
                                                                id="start_spare" name="start_spare"
                                                                wire:model="start_spare" placeholder="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12 col-12  mb-2">
                                                        <label
                                                            style="font-family: 'Prompt', sans-serif;">หมายเหตุ</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text text-primary">
                                                                <i class="bi bi-file-earmark-text"></i>
                                                            </span>
                                                            <textarea type="text"
                                                                class="form-control form-control-sm"
                                                                id="remark_spare" name="remark_spare"
                                                                wire:model="remark_spare" placeholder=""
                                                                required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 font_Prompt"> *
                                                        <label class="form-label">อัพโหลดภาพ</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text text-success"><i
                                                                    class="bi bi-image-fill"></i></span>
                                                            <input type="file" class="form-control"
                                                                id="photo_spare" name="photo_spare"
                                                                wire:model="photo_spare"
                                                                accept="File/jpeg,File/png">
                                                            @error('photo_spare.*') <span class="error">{{
                                                                $message
                                                                }}</span> @enderror

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
                                                            class="fa-solid fa-floppy-disk"></i>{{
                                                        $edit ? ' แก้ไข' : ' บันทึก'
                                                        }}</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ADD MODAL -->
                            <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
