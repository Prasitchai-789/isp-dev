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
                                    <h4 class="animate__animated animate__headShake">Spare parts
                                        <!-- Button trigger modal -->
                                        <a type="button" class="btn btn-outline-danger btn-sm float-end"
                                            style="border-radius: 7px" href="{{ route('machinery-report.index', ['machineryId' => $sparePart->id_machinery])}}">
                                            <span class="font_anuphan"><i class="bi bi-arrow-left-short"></i>Back</span>
                                        </a>
                                        <!-- Button trigger modal -->
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-12 font_anuphan">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('machinery.index') }}"><i
                                                class="ph ph-house"></i>หน้าหลัก</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><strong>Spare parts</strong></li>
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
                            <div class="col-lg-6 mt-2">
                                <div class="col-lg-6 col-lg-12">
                                    <div class="card seo-card">
                                        <img src="{{ $sparePart->photo_spare ? asset('storage/'.$sparePart->photo_spare) : asset('images/user/avatar-1.jpg') }}" alt="Spare part image" class="img-fluid img-crop-500">
                                        <div class=" bg-grd-primary"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="font_anuphan text-center h5">ข้อมูล Spare parts</div>

                                <div class="col-12 py-2 d-flex justify-content-center align-items-center">

                                    <table class="table text-start font_anuphan">
                                        <tbody>
                                            <tr>
                                                <td class="column1 text-start h6" style="width: 150px">รายการ</td>
                                                <td class="column2 text-start">: {{ $sparePart->name_spare}} </td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">ยี่ห้อ (Brand)</td>
                                                <td class="column2">: {{ $sparePart->brand_spare}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">แบบ (Type)</td>
                                                <td class="column2">: {{ $sparePart->type_spare}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">รุ่น (Model)</td>
                                                <td class="column2">: {{ $sparePart->model_spare}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">หมายเลข</td>
                                                <td class="column2">: {{ $sparePart->number_spare}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">ขนาด</td>
                                                <td class="column2">: {{ $sparePart->size_spare}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">สารหล่อลื่น</td>
                                                <td class="column2">: {{ $sparePart->lubricant}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">ปริมาณในการเติม</td>
                                                <td class="column2">: {{ $sparePart->id}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">KW</td>
                                                <td class="column2">: {{ $sparePart->kw_spare}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">จำนวน</td>
                                                <td class="column2">: {{ $sparePart->quantity_spare}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">สถานะ</td>
                                                <td class="column2">: {{ $sparePart->status_spare}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">แผนการบำรุงรักษา</td>
                                                <td>@if($sparePart->plan_spare)
                                                    {{ \Carbon\Carbon::parse($sparePart->plan_spare)->translatedFormat('j F Y') }}
                                                    @else
                                                    ไม่ระบุวันที่
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">จำนวนครั้งการซ่อม</td>
                                                <td class="column2">: {{ $sparePart->breakdown_spare}}</td>
                                            </tr>
                                            <tr>
                                                <td class="column1 h6">เริ่มใช้งาน</td>
                                                <td>@if($sparePart->plan_spare)
                                                    {{ \Carbon\Carbon::parse($sparePart->start_spare)->translatedFormat('j F Y') }}
                                                    @else
                                                    ไม่ระบุวันที่
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="column1"></td>
                                                <td class="column2"></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
