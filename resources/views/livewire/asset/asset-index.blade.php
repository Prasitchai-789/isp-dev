<div class="">
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary btn-sm" style="border-radius: 7px" data-bs-toggle="modal"
            data-bs-target="#assetModal" wire:click='addAsset'>
            <span class="font_anuphan">CREATE</span>
        </button>
        <button type="button" class="btn btn-outline-primary btn-sm" style="border-radius: 7px" data-bs-toggle="modal"
            data-bs-target="#categoryModal" wire:click='addAsset'>
            <span class="font_anuphan">เพิ่มหมวดหมู่</span>
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
                    <h4 class="mb-0 animate__animated animate__headShake">รายการทรัพย์สิน</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive font_anuphan">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รูปภาพ</th>
                                    <th>รหัสทรัพย์สิน</th>
                                    <th>รายการ</th>
                                    <th>ชื่อ/รุ่น</th>
                                    <th>หมวดหมู่</th>
                                    <th>ผู้ใช้</th>
                                    <th>ชื้อวันที่</th>
                                    <th>สถานะ</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ( $assets as $index => $asset)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><img src="{{ asset('storage/'.$asset->photo_asset) }}" alt="user image"
                                        class="wid-60"></td>
                                <td>{{$asset->code_asset}}</td>
                                <td>{{$asset->list_asset}}</td>
                                <td>{{$asset->name_asset}}</td>
                                <td>{{$asset->category ? $asset->category->name : 'No Category'}}</td>
                                <td>{{$asset->user_asset}}</td>
                                <td>@if($asset->buy_asset)
                                    {{ \Carbon\Carbon::parse($asset->buy_asset)->translatedFormat('j F Y') }}
                                    @else
                                    ไม่ระบุวันที่
                                    @endif</td>
                                <td>
                                    @if($asset->status_asset == 1)
                                    <span class="badge bg-danger">ใช้งาน</span>
                                    @else
                                    <span class="badge bg-success">ว่าง</span>
                                    @endif
                                </td>
                                <td><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                            class="fa-solid fa-eye"></i></a>
                                    <a href="#" wire:click='confirmEdit({{$asset->id}})' data-bs-toggle="modal"
                                        data-bs-target="#assetModal" class="avtar avtar-xs btn-link-secondary"><i
                                            class="fa-solid fa-pen-to-square"></i> </a>
                                    <a href="#" wire:click='confirmDelete({{$asset->id}})'
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
            @endif

        </div>
        <!-- Table -->


        <!-- ADD MODAL -->
        <div wire:ignore.self class="modal fade" id="assetModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="assetModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header {{ $edit ? 'bg-mango' : 'bg-beach' }} text-white">
                        <h1 class="modal-title fs-5 font_anuphan text-white" id="assetModalLabel">
                            กรอกแบบฟอร์ม </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form novalidate class="form " wire:submit.prevent="{{ $edit ? 'updateAsset' : 'saveAsset' }}"
                            id="myForm">
                            <div class="container-fluid">
                                <div class="row" id="error">
                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">รหัสทรัพย์สิน</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-vcard"></i></span>
                                            <input type="text" class="form-control" id="code_asset" name="code_asset"
                                                wire:model="code_asset" placeholder="" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="font_Prompt">รายการ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <img src="{{ asset('feather-icons/icons/list_gray.svg') }}" width="15" height="15"/>
                                            </span>
                                            <input type="text" class="form-control" id="list_asset" name="list_asset"
                                                wire:model="list_asset" placeholder="" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label class="font_Prompt">ชื่อ/รุ่น</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-vcard"></i></span>
                                            <input type="text" class="form-control" id="name_asset" name="name_asset"
                                                wire:model="name_asset" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="font_Prompt">หมวดหมู่</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <img src="{{ asset('feather-icons/icons/list_gray.svg') }}" width="15" height="15"/>
                                            </span>
                                            <select class="form-control my-auto" id="category_asset"
                                                name="category_asset" wire:model="category_asset" required="">
                                                <option selected="" value="">เลือก หมวดหมู่...</option>
                                                @foreach ($categorys as $category )
                                                <option value="{{ $category->id }}" @if($category->id == $category_asset) selected @endif>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="font_Prompt">ผู้ใช้งาน</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person"></i></span>
                                            <input type="text" class="form-control" id="user_asset" name="user_asset"
                                                wire:model="user_asset" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="font_Prompt">ชื้อวันที่</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-calendar-week"></i>
                                            </span>
                                            <input type="date" class="form-control" id="buy_asset" name="buy_asset"
                                                wire:model="buy_asset"
                                                value="{{ $buy_asset ? \Carbon\Carbon::parse($buy_asset)->format('Y-m-d') : '' }}"
                                                placeholder="" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label>สถานะ</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="fa-solid fa-user-gear"></i></span>
                                            <select class="form-control my-auto" id="status_asset" name="status_asset"
                                                wire:model="status_asset" required="">
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
                                            <textarea type="text" class="form-control form-control-sm" id="remark_asset"
                                                name="remark_asset" wire:model="remark_asset" placeholder=""
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 font_Prompt"> *
                                        <label class="form-label">อัพโหลดภาพ</label>
                                        <div class="input-group">

                                            <input type="file" class="form-control" id="photo_asset" name="photo_asset"
                                                wire:model="photo_asset" accept="File/jpeg,File/png">
                                            @error('photo_asset.*') <span class="error">{{ $message }}</span> @enderror

                                        </div>
                                        <div wire:loading wire:target="photo_asset">
                                            Uploading...
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
        </div>
        <!-- ADD MODAL -->

        <!-- ADD Category MODAL -->
        <div wire:ignore.self class="modal fade" id="categoryModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header {{ $edit ? 'bg-c-yellow' : 'bg-c-blue' }} text-white">
                        <h1 class="modal-title fs-5 font_anuphan text-white" id="categoryModalLabel">
                            กรอกแบบฟอร์ม </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form novalidate class="form " wire:submit.prevent="{{ $edit ? 'updateAsset' : 'saveCategory' }}"
                            id="">
                            <div class="container-fluid">
                                <div class="row" id="error">
                                    <div class="col-md-12 mb-2">
                                        <label class="font_Prompt">หมวดหมู่</label>
                                        <div class="input-group">
                                            <span class="input-group-text text-primary">
                                                <i class="bi bi-person-vcard"></i></span>
                                            <input type="text" class="form-control" id="name" name="name"
                                                wire:model="name" placeholder="" required="">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 font_Prompt mt-4">
                                <button  type="submit" class=" {{ $edit ? 'btn btn-warning' : 'btn btn-primary' }} mb-2 me-2 btn-sm"
                                    style="border-radius: 10px"><i class="fa-solid fa-floppy-disk"></i>
                                    {{ $edit ? ' แก้ไข' : ' บันทึก' }}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- ADD Category MODAL -->

    </div>
