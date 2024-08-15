<div class="">
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary btn-sm" style="border-radius: 7px" data-bs-toggle="modal"
            data-bs-target="#windowsModal" wire:click='addWindows'>
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
        <div>
        </div>

        <!-- Table -->
        <div wire:init='initLoading' class="col-12 mt-2 text-center">
            @if ($isLoading)
            <div class="card table-card">
                <div class="card-header d-flex align-items-center justify-content-between py-3 font_Prompt">
                    <h4 class="mb-0 animate__animated animate__headShake">รายการข้อมูล Licensed Windows</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive font_anuphan">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>ITEM</th>
                                    <th>ระบบปฎิบัติการ</th>
                                    <th>licensed</th>
                                    <th>ประเภท</th>
                                    <th>วันที่ซื้อ</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ( $wins as $win)
                            <tr>
                                <td>{{$win->id}}</td>
                                <td>{{$win->version}}</td>
                                <td>{{$win->licensed}}</td>
                                <td>{{$win->type}}</td>
                                <td>{{$win->buy}}</td>
                                <td>
                                    @if($win->status == 1)
                                    <span class="badge bg-danger">ใช้งาน</span>
                                    @else
                                    <span class="badge bg-success">ว่าง</span>
                                    @endif
                                </td>
                                <td>{{-- <a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                            class="fa-solid fa-eye"></i></a> --}}
                                    <a href="#" wire:click='confirmEdit({{$win->id}})' data-bs-toggle="modal"
                                        data-bs-target="#windowsModal" class="avtar avtar-xs btn-link-secondary">
                                        <i class="bi bi-pencil-square text-warning" style="font-size: 18px;"></i>
                                    </a>
                                    <a href="#" wire:click='confirmDelete({{$win->id}})'
                                        class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                        data-bs-target="#">
                                        <i class="bi bi-trash  text-danger" style="font-size: 18px;"></i>
                                    </a>
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
            @endif

        </div>
        <!-- Table -->


        <!-- ADD MODAL -->
        <div wire:ignore.self class="modal fade" id="windowsModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="windowsModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }} text-white">
                        <h1 class="modal-title fs-5 font_anuphan text-white" id="windowsModalLabel">
                            กรอกแบบฟอร์ม </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form novalidate class="form "
                            wire:submit.prevent="{{ $edit ? 'updateWindows' : 'saveWindows' }}" id="myForm">
                            <div class="container-fluid">
                                <div class="row" id="error">
                                    <div class="col-md-12 mb-2">
                                        <label class="font_Prompt">ระบบปฎิบัติการ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <img src="{{ asset('feather-icons/icons/grid_gray.svg') }}" width="15" height="15"/>
                                            </span>
                                            <input type="text" class="form-control" id="version" name="version"
                                                wire:model="version" placeholder="" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label class="font_Prompt">ชื่อผู้ใช้งาน</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <img src="{{ asset('feather-icons/icons/user_gray.svg') }}" width="15" height="15"/>
                                            </span>
                                            <input type="text" class="form-control" id="licensed" name="licensed"
                                                wire:model="licensed" placeholder="" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label class="font_Prompt">ประเภท</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <img src="{{ asset('feather-icons/icons/folder_gray.svg') }}" width="15" height="15"/>
                                            </span>
                                            <input type="text" class="form-control" id="type" name="type"
                                                wire:model="type" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="font_Prompt">ซื้อวันที่</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <img src="{{ asset('feather-icons/icons/calendar_gray.svg') }}" width="15" height="15"/>
                                            </span>
                                            <input type="date" class="form-control" id="buy" name="buy" wire:model="buy"
                                                placeholder="" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label>Status</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <img src="{{ asset('feather-icons/icons/hash_gray.svg') }}" width="15" height="15"/>
                                            </span>
                                            <select class="form-control my-auto" id="status" name="status"
                                                wire:model="status" required="">
                                                <option selected="" value="">เลือก Status...</option>
                                                <option value="1">ใช้งาน</option>
                                                <option value="2">ว่าง</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12  mb-2">
                                        <label class="font_Prompt">รายละเอียด</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <img src="{{ asset('feather-icons/icons/file-text_gray.svg') }}" width="15" height="15"/>
                                            </span>
                                            <textarea type="text" class="form-control form-control-sm" id="remark"
                                                name="remark" wire:model="remark" placeholder="" required></textarea>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 font_Prompt mt-4">
                                <button wire:loading.attr='disabled' wire:target='photo' type="submit"
                                    class=" {{ $edit ? 'btn btn-warning' : 'btn btn-primary' }} mb-2 me-2 btn-sm"
                                    style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i>{{
                                    $edit ? ' แก้ไข' : ' บันทึก'
                                    }}</button>
                            </div>
                        </form>

                        <div class="row">


                        </div>
                    </div>
                </div>
            </div>
            <!-- ADD MODAL -->
        </div>
        <!-- Delete Dialog -->

        <!-- Delete Dialog -->

    </div>
