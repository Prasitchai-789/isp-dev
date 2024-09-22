<div>
    <div class="container">
        <div class="page-header">
            <div class="page-block card mb-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title border-bottom pb-2 mb-2 font_Prompt">
                                <h4 class="animate__animated animate__headShake">บันทึกรายการบัตร
                                    <button type="button" class="btn btn-primary btn-sm col-lg-0 float-end"
                                        style="border-radius: 7px " data-bs-toggle="modal"
                                        data-bs-target="#addCardModal" wire:click='addCard'>
                                        <span class="font_anuphan">เพิ่มบัตร</span>
                                    </button>
                                </h4>
                            </div>
                            <div class="col-md-12 font_anuphan ">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('home/') }}">
                                            <i class="ph ph-house"></i> หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('car-report/') }}"
                                            href="javascript: void(0)">บันทึกรายการบัตร</a>
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
                            <table class="table table-hover " id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>เลขบัตร</th>
                                        <th>ทะเบียนรถ</th>
                                        <th>ฝ่าย</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($addCards as $addCard)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $addCard->card_number }}</td>
                                        <td>
                                            {{ $addCard->carReport->car_number ?? 'N/A' }}
                                            {{ $addCard->carReport->province->ProvinceName ?? 'N/A' }}
                                        </td>
                                        <td>
                                            {{ $addCard->carReport->department->DeptName ?? 'N/A' }}
                                        </td>
                                        <td class="text-center font_Prompt">
                                            <a href="#" wire:click='confirmEdit({{ $addCard->id }})'
                                                data-bs-toggle="modal" data-bs-target="#editCardModal"
                                                class="avtar avtar-xs btn-link-secondary">
                                                <i class="bi bi-pencil-square text-warning"
                                                    style="font-size: 18px;"></i>
                                            </a>
                                            <a href="#" wire:click='confirmDelete({{ $addCard->id }})'
                                                class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <i class="bi bi-trash  text-danger" style="font-size: 18px;"></i>
                                            </a>
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

    {{-- Request Modal --}}
    <div wire:ignore.self class="modal fade" id="addCardModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="addCardModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-c-blue  text-white">
                        <h1 class="modal-title fs-5 font_anuphan text-white" id="addCardModalLabel">
                            กรอกแบบฟอร์ม </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='Close'></button>
                    </div>
                    <div class="modal-body">
                        <form novalidate class="form " wire:submit.prevent="saveCard"
                            id="myForm">
                            <div class="container-fluid">
                                <div class="row" id="error">
                                    <div class="col-md-12 mb-2">
                                        <label class="font_anuphan">ทะเบียนรถ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-car-front-fill"></i>
                                            </span>
                                            <select class="form-control my-auto font_Prompt" id="car_id" name="car_id"
                                                wire:model="car_id" required="">
                                                <option selected="" value="">
                                                    เลือกรถ...</option>
                                                @foreach($carReports as $carReport)
                                                <option value="{{ $carReport->id }}">{{
                                                    $carReport->car_number }} {{ $carReport->province->ProvinceName ?? 'N/A'
                                                    }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2 font_anuphan">
                                        <label class="font_Prompt">เลขบัตร</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-vcard"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="card_number" name="card_number"
                                                wire:model="card_number" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 font_Prompt mt-4">
                                <button type="submit"
                                    class="btn btn-primary mb-2 me-2 btn-sm"
                                    style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i> บันทึก
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>

    {{-- Request Modal --}}
    <div wire:ignore.self class="modal fade" id="editCardModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="editCardModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-c-yellow  text-white">
                        <h1 class="modal-title fs-5 font_anuphan text-white" id="editCardModalLabel">
                            กรอกแบบฟอร์ม </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='Close'></button>
                    </div>
                    <div class="modal-body">
                        <form novalidate class="form " wire:submit.prevent="updateCard"
                            id="myForm">
                            <div class="container-fluid">
                                <div class="row" id="error">
                                    <div class="col-md-12 mb-2">
                                        <label class="font_anuphan">ทะเบียนรถ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-car-front-fill"></i>
                                            </span>
                                            <select class="form-control my-auto font_Prompt" id="car_id" name="car_id"
                                                wire:model="car_id" required="">
                                                <option selected="" value="">
                                                    เลือกรถ...</option>
                                                @foreach($carReports as $carReport)
                                                <option value="{{ $carReport->id }}">{{
                                                    $carReport->car_number }} {{ $carReport->province->ProvinceName ?? 'N/A'
                                                    }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2 font_anuphan">
                                        <label class="font_Prompt">เลขบัตร</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-vcard"></i>
                                            </span>
                                            <input type="text" class="form-control font_Prompt" id="card_number" name="card_number"
                                                wire:model="card_number" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 font_Prompt mt-4">
                                <button type="submit"
                                    class="btn btn-warning mb-2 me-2 btn-sm"
                                    style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i> แก้ไข
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
