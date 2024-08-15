<div>

    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="font_anuphan">เพิ่มผู้ใช้งาน</span>
        </button>
        <button wire:click='exportExcel' type="button" class="btn btn-primary">
            <span class="font_anuphan">Export Excel</span>
        </button>
        <button wire:click='importExcel' type="button" class="btn btn-primary">
            <span class="font_anuphan">Import Excel</span>
        </button>
        <div>
            @if (@session()->has('message'))
            <div x-data="{ isShow: true }" x-show="isShow" x-init="setTimeout(() => isShow = false, 3000)"
                class="alert alert-success mt-2" role="alert">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="col-12 mt-2">
            <div class="card table-card">

                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h4 class="mb-0 animate__animated animate__bounce">User</h4><button class="btn btn-sm btn-link-primary">View All</button>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Date/Time</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0"><img
                                                    src="{{ asset('images/user/avatar-1.jpg') }}" alt="user image"
                                                    class="img-radius wid-40"></div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">{{$user->name}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td class="font_anuphan">{{$user->created_at->translatedFormat('j F Y')}} <span
                                            class="text-muted text-sm d-block">{{ $user->created_at->format('h:i A')
                                            }}</span></td>
                                    <td>$950.54</td>
                                    <td><span class="badge text-bg-success">Completed</span></td>
                                    <td><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="#" wire:click='confirmEdit({{ $user->id }})' data-bs-toggle="modal"
                                            data-bs-target="#editModal" class="avtar avtar-xs btn-link-secondary"><i
                                                class="fa-solid fa-pen-to-square"></i> </a>
                                        <a href="#" wire:click='confirmDelete({{ $user->id }})'
                                            class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal"
                                            data-bs-target="#deletemodal"><i
                                                class="fa-solid fa-trash text-danger"></i></a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                        <div class="d-flex justify-content mx-4">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Area chart</h6>
                <div id="chart"></div>
            </div>
        </div>
    </div>
    


    <div id="chart2">
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 font_anuphan" id="exampleModalLabel">เพิ่มผู้ใช้งาน</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form novalidate wire:submit.prevent='store'>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input wire:model.live="name" type="text" class="form-control" id="name"
                                placeholder="Full Name">
                            @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input wire:model.live="email" type="email" class="form-control" id="email"
                                aria-describedby="emailHelp" placeholder="name@mail.com">
                            @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input wire:model.live='password' type="password" class="form-control" id="password"
                                placeholder="">
                            @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
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
                    <h1 class="modal-title fs-5 font_anuphan" id="editModalLabel">แก้ไขข้อมูลผู้ใช้ {{ $name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form novalidate wire:submit.prevent="update">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input wire:model='name' type="text" class="form-control" id="nameedit">
                            @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input wire:model="email" type="email" class="form-control" id="emailedit">
                            @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
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
                    <p class="text-danger">แน่ใจว่าต้องการลบข้อมูลนี้ {{ $name }}</p>
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
