<div>

    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="font_anuphan">CREATE</span>
        </button>
        <div>
            @if (@session()->has('message'))
            <div x-data="{ isShow: true }" x-show="isShow" x-init="setTimeout(() => isShow = false, 3000)"
                class="alert alert-success mt-2" role="alert">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div wire:init='initLoading' class="col-12 mt-2 text-center">
            @if ($isLoading)
            <div class="card table-card">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h4 class="mb-0 animate__animated animate__headShake">Product</h4><button class="btn btn-sm btn-link-primary">View All</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Barcode</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Unit Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0"><img
                                                    src="{{ asset('images/user/avatar-1.jpg') }}" alt="user image"
                                                    class="img-radius wid-40"></div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">{{$product->id}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$product->barcode}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->unit->name}}</td>
                                    <td> @if(is_string($product->photos))
                                        @php
                                            $photos = json_decode($product->photos);
                                        @endphp
                                        @foreach ($photos as $photo)
                                            <div>
                                                <a href="{{ asset('storage/product-image/' . $photo) }}" target="_blank">{{ $photo }}</a>
                                            </div>
                                        @endforeach
                                    @endif</td>
                                    <td><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="#" wire:click='confirmEdit({{ $product->id }})' data-bs-toggle="modal"
                                            data-bs-target="#editModal" class="avtar avtar-xs btn-link-secondary"><i
                                                class="fa-solid fa-pen-to-square"></i> </a>
                                        <a href="#" wire:click='confirmDelete({{ $product->id }})'
                                            class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                            data-bs-target="#deletemodal"><i
                                                class="fa-solid fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content mx-4">
                            {{ $products->links() ?? '' }}
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
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 font_anuphan" id="exampleModalLabel">เพิ่มสินค้า</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body font_anuphan">
                    <form novalidate wire:submit.prevent='store'>
                        <div class="mb-3">
                            <label for="unit_id" class="form-label font_anuphan">หน่วยนับ</label>
                            <select wire:model="unit_id" class="form-control" id="unit_id">
                                <option selected>เลือกหน่วยนับ</option>
                                @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                            @error('unit_id') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Barcode</label>
                            <input wire:model.live="barcode" type="text" class="form-control" id="barcode"
                                placeholder="Barcode">
                            @error('barcode') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input wire:model.live='title' type="text" class="form-control" id="title"
                                placeholder="Title">
                            @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Price</label>
                            <input wire:model.live='price' type="text" class="form-control" id="price"
                                placeholder="Price">
                            @error('price') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3"> *
                            <label for="formFile" class="form-label">อัพโหลดภาพ</label>
                            <input class="form-control" type="file" id="images" wire:model="images" multiple>

                            @error('images.*') <span class="error">{{ $message }}</span> @enderror
                            <div wire:loading wire:target="images">
                                Uploading...
                            </div>
                        </div>
                        <button  wire:loading.attr='disabled' wire:target='images' type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                    </form>

                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Edit Modal -->
    <div wire:ignore.self class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 font_anuphan" id="editModalLabel">แก้ไขข้อมูลผู้ใช้ </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form novalidate wire:submit.prevent="update">
                        <div class="mb-3">
                            <label for="unit_id" class="form-label font_anuphan">หน่วยนับ</label>
                            <select wire:model="unit_id" class="form-control" id="unit_id">
                                <option selected>เลือกหน่วยนับ</option>
                                @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                            @error('unit_id') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Barcode</label>
                            <input wire:model.live="barcode" type="text" class="form-control" id="barcode"
                                placeholder="Barcode">
                            @error('barcode') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input wire:model.live='title' type="text" class="form-control" id="title"
                                placeholder="Title">
                            @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Price</label>
                            <input wire:model.live='price' type="text" class="form-control" id="price"
                                placeholder="Price">
                            @error('price') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3"> *
                            <label for="formFile" class="form-label">อัพโหลดภาพ</label>
                            <input class="form-control" type="file" id="images" wire:model="images" multiple>

                            @error('images.*') <span class="error">{{ $message }}</span> @enderror
                            <div wire:loading wire:target="images">
                                Uploading...
                            </div>
                        </div>
                        <button  wire:loading.attr='disabled' wire:target='images' type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->


    <!-- Delete Dialog -->
    <div wire:ignore.self class="modal fade" id="deletemodal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="deletemodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deletemodalLabel">ยืนยันการลบข้อมูล</h1>
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
