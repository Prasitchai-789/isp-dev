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
                                    <h4 class="animate__animated animate__headShake">รายการเครื่องจักร</h4>
                                </div>
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
                                            @foreach ($spareParts as $index => $sparePart)
                                            <tr>
                                                <td class="text-center">{{ $spareParts->firstItem() + $index }}</td>
                                                <td class="text-center">{{ $sparePart->name_spare }}</td>
                                                <td class="text-center">{{ $sparePart->brand_spare }}</td>
                                                <td class="text-center">{{ $sparePart->model_spare }}</td>
                                                <td class="text-center">{{ $sparePart->number_spare }}</td>
                                                <td class="text-center">{{ $sparePart->size_spare }}</td>
                                                <td class="text-center">
                                                    @if ($sparePart->status_spare == 1)
                                                    <span class="badge bg-success">ปกติ</span>
                                                    @elseif ($sparePart->status_spare == 2)
                                                    <span class="badge bg-warning">แจ้งซ่อม</span>
                                                    @elseif ($sparePart->status_spare == 3)
                                                    <span class="badge bg-danger">ยกเลิก</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if ($spareParts->isNotEmpty())
                                                        @php
                                                            $plan_spare = $sparePart->plan_spare;
                                                            $plan_startDate = Carbon\Carbon::now();
                                                            $plan_endDate = Carbon\Carbon::parse($plan_spare);
                                                            $daysDifference = $plan_startDate->diffInDays($plan_endDate);

                                                            if ($daysDifference < 1) {
                                                                $status = 3;
                                                            } elseif ($daysDifference < 7) {
                                                                $status = 2;
                                                            } else {
                                                                $status = 1;
                                                            }
                                                        @endphp

                                                        @if ($status == 1)
                                                            <span class="badge bg-success">
                                                                <i class="bi bi-check2-circle"></i>
                                                                @if ($sparePart->plan_spare)
                                                                    {{ \Carbon\Carbon::parse($sparePart->plan_spare)->translatedFormat('j F Y') }}
                                                                @else
                                                                    ไม่ระบุวันที่
                                                                @endif
                                                            </span>
                                                        @elseif ($status == 2)
                                                            <span class="badge bg-warning">
                                                                <i class="bi bi-exclamation-circle"></i>
                                                                @if ($sparePart->plan_spare)
                                                                    {{ \Carbon\Carbon::parse($sparePart->plan_spare)->translatedFormat('j F Y') }}
                                                                @else
                                                                    ไม่ระบุวันที่
                                                                @endif
                                                            </span>
                                                        @elseif ($status == 3)
                                                            <span class="badge bg-danger">
                                                                <i class="bi bi-x-circle"></i>
                                                                @if ($sparePart->plan_spare)
                                                                    {{ \Carbon\Carbon::parse($sparePart->plan_spare)->translatedFormat('j F Y') }}
                                                                @else
                                                                    ไม่ระบุวันที่
                                                                @endif
                                                            </span>
                                                        @endif
                                                    @else
                                                        <p>ไม่มีข้อมูล</p>
                                                    @endif
                                                </td>

                                                <td></td>

                                                <td class="text-center">

                                                    <a href="{{ route('spare-part.index', ['sparePartId' => $sparePart->id]) }}"
                                                        class="avtar avtar-xs btn-link-secondary">
                                                        <i class="bi bi-eye text-primary" style="font-size: 18px;"></i>
                                                    </a>
                                                    {{-- <a href="#" wire:click='confirmEdit({{ $sparePart->id }})'
                                                        data-bs-toggle="modal" data-bs-target="#sparePartModal"
                                                        class="avtar avtar-xs btn-link-secondary">
                                                        <i class="bi bi-pencil-square text-warning"
                                                            style="font-size: 18px;"></i>
                                                    </a> --}}
                                                    {{-- <a href="#" wire:click='confirmDelete({{ $sparePart->id }})'
                                                        class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#">
                                                        <i class="bi bi-trash  text-danger" style="font-size: 18px;"></i>
                                                    </a> --}}
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content mx-4">
                                        {{ $spareParts->links() ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ADD MODAL -->
    <div wire:ignore.self class="modal fade" id="sparePartModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="sparePartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }} text-white">
                    <h1 class="modal-title fs-5 font_anuphan text-white" id="sparePartModalLabel">
                        กรอกแบบฟอร์ม </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form novalidate class="form "
                        wire:submit.prevent="{{ $edit ? 'updateSparePart' : 'saveSparePart' }}" id="myForm">
                        <div class="container-fluid">
                            <div class="row" id="error">

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">รายการ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-list-check"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-sm font_Prompt text-primary"
                                            id="name_spare" name="name_spare" wire:model="name_spare" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">ยี่ห้อ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-app-indicator"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-sm font_Prompt text-primary"
                                            id="brand_spare" name="brand_spare" wire:model="brand_spare" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">แบบ (Type)</label>
                                    <div class="input-group">
                                        <span class="input-group-text ">
                                            <i class="bi bi-cpu text-primary"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-sm font_Prompt text-primary"
                                            id="type_spare" name="type_spare" wire:model="type_spare" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">รุ่น</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-pc-horizontal"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-sm font_Prompt text-primary"
                                            id="model_spare" name="model_spare" wire:model="model_spare" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">หมายเลข</label>
                                    <div class="input-group">
                                        <span class="input-group-text ">
                                            <i class="bi bi-memory text-primary"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-sm font_Prompt text-primary"
                                            id="number_spare" name="number_spare" wire:model="number_spare"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label style="font-family: 'Prompt', sans-serif;">ขนาด</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-aspect-ratio"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-sm font_Prompt text-primary"
                                            id="size_spare" name="size_spare" wire:model="size_spare" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label style="font-family: 'Prompt', sans-serif;">สารหล่อหลื่น</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-funnel-fill"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-sm font_Prompt text-primary"
                                            id="lubricant" name="lubricant" wire:model="lubricant" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label style="font-family: 'Prompt', sans-serif;">KW</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-device-ssd"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-sm font_Prompt text-primary"
                                            id="kw_spare" name="kw_spare" wire:model="kw_spare" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label style="font-family: 'Prompt', sans-serif;">จำนวน</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-device-ssd"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-sm font_Prompt text-primary"
                                            id="quantity_spare" name="quantity_spare" wire:model="quantity_spare"
                                            placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">สถานะ</label>
                                    <div class="input-group ">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-stack-overflow"></i>
                                        </span>
                                        <select class="form-select   my-auto font_Prompt" id="status_spare"
                                            name="status_spare" wire:model="status_spare" style="color:green" required>
                                            <option selected value="">เลือก...
                                            </option>
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
                                            <i class="bi bi-calendar2-week"></i>
                                        </span>
                                        <input type="date" class="form-control form-control-sm font_Prompt text-primary"
                                            id="plan_spare" name="plan_spare" wire:model="plan_spare" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="font_Prompt">เริ่มใช้งาน</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-calendar-event"></i>
                                        </span>
                                        <input type="date" class="form-control form-control-sm font_Prompt text-primary"
                                            id="start_spare" name="start_spare" wire:model="start_spare" placeholder="">
                                    </div>
                                    @error('start_spare')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 col-12  mb-2">
                                    <label style="font-family: 'Prompt', sans-serif;">หมายเหตุ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-primary">
                                            <i class="bi bi-file-earmark-text"></i>
                                        </span>
                                        <textarea type="text" class="form-control form-control-sm" id="remark_spare"
                                            name="remark_spare" wire:model="remark_spare" placeholder=""
                                            required></textarea>
                                    </div>
                                    @error('remark_spare')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3 font_Prompt"> *
                                    <label class="form-label">อัพโหลดภาพ</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-success"><i
                                                class="bi bi-image-fill"></i></span>
                                        <input type="file" class="form-control" id="photo_spare" name="photo_spare"
                                            wire:model="photo_spare" accept="">
                                        @error('photo_spare.*')
                                        <span class="error">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div wire:loading wire:target="photo_spare">
                                        Uploading...
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-end gap-2 font_Prompt">
                                <button wire:loading.attr='disabled' wire:target='photo_spare' type="submit"
                                    class=" {{ $edit ? 'btn btn-warning' : 'btn btn-primary' }} mb-2 me-2 btn-sm"
                                    style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i>{{ $edit ? '
                                    แก้ไข' : ' บันทึก' }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ADD MODAL -->

</div>