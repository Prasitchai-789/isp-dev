<div class="">
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary btn-sm" style="border-radius: 7px" data-bs-toggle="modal"
            data-bs-target="#computerModal" wire:click='addComputer'>
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
                    <h4 class="mb-0">รายการคอมพิวเตอร์</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive font_anuphan">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>ITEM</th>
                                    <th>Photo</th>
                                    <th>รหัสเครื่อง</th>
                                    <th>cpu</th>
                                    <th>ram</th>
                                    <th>storage</th>
                                    <th>service_tag</th>
                                    <th>Operating system</th>
                                    <th>Status</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($computers as $computer )
                            <tr>
                                <td>{{$computer->code_com}}</td>
                                <td><img src="{{asset('/images/widget/prod.jpg')}}" alt="prod img" class="img-fluid"></td>
                                <td>{{$computer->code_com}}</td>
                                <td>{{$computer->cpu}}</td>
                                <td>{{$computer->ram}}</td>
                                <td>{{$computer->storage}}</td>
                                <td>{{$computer->service_tag}}</td>
                                <td>{{$computer->os}}</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td>
                                    {{-- <a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                            class="fa-solid fa-eye"></i></a> --}}
                                    <a href="#" wire:click='confirmEdit({{ $computer->id }})' data-bs-toggle="modal"
                                        data-bs-target="#computerModal" class="avtar avtar-xs btn-link-secondary"><i
                                            class="fa-solid fa-pen-to-square"></i> </a>
                                    <a href="#" wire:click='confirmDelete({{ $computer->id }})'
                                        class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                        data-bs-target="#"><i class="fa-solid fa-trash text-danger"></i></a>
                                </td>
                            </tr>

                            @endforeach
                            <tbody>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content mx-4">
                            {{-- {{ $products->links() ?? '' }} --}}
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
        <div wire:ignore.self class="modal fade" id="computerModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="computerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }} text-white">
                        <h1 class="modal-title fs-5 font_anuphan text-white" id="computerModalLabel">
                            กรอกแบบฟอร์ม </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form novalidate class="form "
                            wire:submit.prevent="{{ $edit ? 'updateComputer' : 'saveComputer' }}" id="myForm">
                            <div class="container-fluid">
                                <div class="row" id="error">

                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">รหัสเครื่อง</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-inbox"></i></span>
                                            <input type="text"
                                                class="form-control form-control-sm font_Prompt text-primary"
                                                id="code_com" name="code_com" wire:model.live="code_com"
                                                placeholder="XX-XXX-00-0000">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">CPU</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-inbox"></i></span>
                                            <input type="text"
                                                class="form-control form-control-sm font_Prompt text-primary" id="cpu"
                                                name="cpu" wire:model="cpu" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">Socket</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-inbox"></i></span>
                                            <input type="text"
                                                class="form-control form-control-sm font_Prompt text-primary"
                                                id="socket" name="socket" wire:model="socket" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">Ram</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-pen-to-square"></i></span>
                                            <input type="text"
                                                class="form-control form-control-sm font_Prompt text-primary" id="ram"
                                                name="ram" wire:model="ram" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label style="font-family: 'Prompt', sans-serif;">พื้นที่การเก็บข้อมูล</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-clock"></i></span>
                                            <input type="text"
                                                class="form-control form-control-sm font_Prompt text-primary"
                                                id="storage" name="storage" wire:model="storage" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">CD-ROM</label>
                                        <div class="input-group ">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-clock"></i></span>
                                            <select class="form-select   my-auto font_Prompt" id="cd_rom" name="cd_rom"
                                                wire:model="cd_rom" style="color:green" required>
                                                <option selected value="">เลือก...</option>
                                                <option value="yes">YES</option>
                                                <option value="no">NO</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">Graphice</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-inbox"></i></span>
                                            <input type="text"
                                                class="form-control form-control-sm font_Prompt text-primary"
                                                id="graphice" name="graphice" wire:model="graphice" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">Mainboard</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-pen-to-square"></i></span>
                                            <input type="text"
                                                class="form-control form-control-sm font_Prompt text-primary"
                                                id="mainboard" name="mainboard" wire:model="mainboard" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">Model</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-inbox"></i></span>
                                            <input type="text"
                                                class="form-control form-control-sm font_Prompt text-primary" id="model"
                                                name="model" wire:model="model" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">Service_tag</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-pen-to-square"></i></span>
                                            <input type="text"
                                                class="form-control form-control-sm font_Prompt text-primary"
                                                id="service_tag" name="service_tag" wire:model="service_tag"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12  mb-2">
                                        <label style="font-family: 'Prompt', sans-serif;">รายละเอียด</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary"><i
                                                    class="fa-solid fa-file-pen"></i></span>
                                            <textarea type="text" class="form-control form-control-sm" id="remark"
                                                name="remark" wire:model="remark" placeholder="" required></textarea>
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3 font_Prompt"> *
                                        <label for="formFile" class="form-label">อัพโหลดภาพ</label>
                                        <input class="form-control form-control-sm" type="file" id="photo"
                                            wire:model="photo" accept="File/jpeg,File/png">

                                        @error('photo.*') <span class="error">{{ $message }}</span> @enderror
                                        <div wire:loading wire:target="photo">
                                            Uploading...
                                        </div>
                                    </div> --}}

                                </div>
                                <div class="d-flex justify-content-end gap-2 font_Prompt">
                                    <button wire:loading.attr='disabled' wire:target='photo' type="submit"
                                        class=" {{ $edit ? 'btn btn-warning' : 'btn btn-primary' }} mb-2 me-2 btn-sm"
                                        style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i>{{
                                        $edit ? ' แก้ไข' : ' บันทึก'
                                        }}</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ADD MODAL -->
    </div>
    <!-- Delete Dialog -->
    <div wire:ignore.self class="modal fade" id="deleteComputerModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="deleteComputerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteComputerModalLabel">ยืนยันการลบข้อมูล</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h1><i class="fa-solid fa-circle-exclamation fa-shake" style="color: #fa0201;"></i></h1>
                    <p class="text-danger">แน่ใจว่าต้องการลบข้อมูลนี้ </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button wire:click='delete' type="button" class="btn btn-danger"
                        data-bs-dismiss="modal">ตกลง</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Dialog -->

</div>
