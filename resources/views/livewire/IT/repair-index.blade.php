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
                                <div class="row border-bottom">
                                        <div class="font_Prompt col-lg-11 col-sm-12">
                                            <h4 class="animate__animated animate__headShake m-0">รายการแจ้งซ่อม
                                            </h4>
                                        </div>

                                    <div class="col-lg-1 col-sm-12">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary btn-sm  mb-1 "
                                        style="border-radius: 7px" data-bs-toggle="modal"
                                        data-bs-target="#machineryModal" wire:click='addMachinery'>
                                        <span class="font_anuphan">CREATE</span>
                                    </button>
                                    <!-- Button trigger modal -->
                                    </div>
                                </div>
                                {{-- <div class="page-header-title border-bottom pb-2 mb-2 font_Prompt">
                                    <h4 class="animate__animated animate__headShake">รายการแจ้งซ่อม
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary btn-sm float-end"
                                            style="border-radius: 7px" data-bs-toggle="modal"
                                            data-bs-target="#machineryModal" wire:click='addMachinery'>
                                            <span class="font_anuphan">CREATE</span>
                                        </button>
                                        <!-- Button trigger modal -->
                                    </h4>
                                </div> --}}
                            </div>

                            {{-- <div>
        <button wire:click="generatePdf">Generate PDF</button>
    </div> --}}

                            <div class="col-md-12 font_anuphan my-2">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('home/') }}"><i
                                                class="ph ph-house"></i>หน้าหลัก</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0)">เทคโนโลยีสารสนเทศ</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page"><strong>รายการแจ้งซ่อม</strong>
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
                            <div class="col-12 text-center">
                                <div class="table-responsive font_anuphan">
                                    <table class="table table-hover" id="pc-dt-simple">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th class="text-center">ชื่อเครื่องจักร</th>
                                                <th class="text-center">หมายเลขเครื่อง</th>
                                                <th class="text-center">เลขทะเบียนเครื่องจักร</th>
                                                <th class="text-center">ลักษณะงานที่ใช้</th>
                                                <th class="text-center">หน่วยงาน</th>
                                                <th class="text-center">สถานะ</th>
                                                <th class="text-center">เริ่มใช้งาน</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>
                                <div>
                            </div>
                            <!-- Table -->

                            <!-- ADD MODAL -->

                            <!-- ADD MODAL -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
