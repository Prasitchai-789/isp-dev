<div>
    <div class="row">
        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text font_Prompt bg-c-blue text-white">เลือกวันที่</i></span>
                <input type="date" class="form-control font_Prompt " id="filterDate" name="filterDate"
                    wire:model.live="filterDate" placeholder="วันที่">
            </div>
        </div>
    </div>
    <div class="page-header my-2 mb-0">
        <div class="page-block card mb-3">
            <div class="card-body p-2 m-2">
                <h4 class="text-center text-primary-emphasis font_anuphan mb-0">รายงานการรับซื้อผลปาล์ม ณ วันที่
                    {{ $selectedDate }}</h4>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- <div class="col-xl-3 col-md-12">
            <div class="col-xl-12 col-md-12">
                <div class="card comp-card border-left-blue">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-b-20 font_Prompt mb-2">ปริมาณการรับซื้อผลปาล์ม</h6>
                                <h3 class="text-primary"> <span class="h6">Kg.</span></h3>
                                <p class="m-b-0"><span class="float-end text-primary-emphasis"> Kg.</span></p>
                            </div>
                            <div class="col-auto" id="avgChart3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="card comp-card border-left-green">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-b-20 font_Prompt mb-2">ยอดเงิน</h6>
                                <h3 class="text-primary"> <span class="h6">Kg.</span></h3>
                                <p class="m-b-0"><span class="float-end text-primary-emphasis"> Kg.</span></p>
                            </div>
                            <div class="col-auto" id="avgChart3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="card comp-card border-left-pink">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-b-20 font_Prompt mb-2">ราคาเฉลี่ย</h6>
                                <h3 class="text-primary"> <span class="h6">Kg.</span></h3>
                                <p class="m-b-0"><span class="float-end text-primary-emphasis"> Kg.</span></p>
                            </div>
                            <div class="col-auto" id="avgChart3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-xl-3 col-md-12">
            <div class="col-xl-12 col-md-12">
                <div class="card border-left-blue order-card">
                    <div class="card-body p-3">
                        <h6 class="font_anuphan">ปริมาณรับซื้อผลปาล์ม</h6>
                        <h2 class="text-end"><i class="feather icon-shopping-cart float-start"></i><span
                                class="text-primary">{{ $getSumByDate }}</span></h2>
                        <p class="m-b-0 text-base font_Prompt"><span class="float-end">Kg.</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="card border-left-green order-card">
                    <div class="card-body p-3">
                        <h6 class="font_anuphan">ราคาเฉลี่ย</h6>
                        <h2 class="text-end"><i class="feather icon-shopping-cart float-start"></i><span
                                class="text-success"> {{ $getAveragePriceByDate }}</span></h2>
                        <p class="m-b-0 text-base font_Prompt"><span class="float-end">บาท/Kg.</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="card border-left-red order-card">
                    <div class="card-body p-3">
                        <h6 class="font_anuphan">ยอดเงิน</h6>
                        <h2 class="text-end"><i class="feather icon-shopping-cart float-start"></i><span
                                class="text-danger"> {{ $getSumPriceByDate }} MB</span></h2>
                        <p class="m-b-0 text-base font_Prompt"><span class="float-end"></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card border-left-pink  p-0">
                <!-- Bar Chart -->
                <div id="chartGM">
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12">
            <div class="col-xl-12 col-md-12">
                <div class="card bg-grd-primary order-card">
                    <div class="card-body p-3">
                        <h6 class="text-white font_anuphan">ยอดสะสมประจำเดือน{{$selectedMonth }}</h6>
                        <h2 class="text-end text-white "><i
                                class="feather icon-shopping-cart float-start"></i><span>{{ $monthlySums }}</span></h2>
                        <p class="m-b-0"><span class="float-end text-white">Kg.</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="card bg-grd-success order-card">
                    <div class="card-body p-3">
                        <h6 class="text-white font_anuphan">ราคาเฉลี่ยประจำเดือน{{$selectedMonth }}</h6>
                        <h2 class="text-end text-white "><span>{{ $averagePriceOfMonth }}</span></h2>
                        <p class="m-b-3"><span class="float-end">บาท/Kg.</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="card bg-grd-danger order-card">
                    <div class="card-body p-3">
                        <h6 class="text-white font_anuphan"> ยอดเงินสะสมประจำเดือน{{$selectedMonth }}</h6>
                        <h2 class="text-end text-white "><i
                                class="feather icon-shopping-cart float-start"></i><span> {{ $monthlySumsPrice }} MB </span></h2>
                        <p class="m-b-0"><span class="float-end text-white"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="font_Prompt">ข้อมูลการรับซื้อผลปาล์ม เดือน{{$selectedMonth }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2 class="d-inline-block text-primary m-r-10">{{ $monthlyCount }}</h2>
                            <div class="d-inline-block">
                                <p class="m-b-0"><i class="fa fa-caret-up m-r-10 text-success"></i>100%</p>
                                <p class="text-muted">รายการ</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="d-inline-block text-success m-r-10">{{ $monthlyVendorAgrSum }}</h2>
                            <div class="d-inline-block">
                                <p class="m-b-0"><i class="fa fa-caret-down m-r-10 text-danger"></i>{{ $monthlyVendorAgrPercent }} %</p>
                                <p class="text-muted">{{ $monthlyAgrCount }} รายการ</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="d-inline-block text-danger m-r-10">{{ $monthlyVendorRamSum }}</h2>
                            <div class="d-inline-block">
                                <p class="m-b-0"><i class="fa fa-caret-up m-r-10 text-success"></i>{{ $monthlyVendorRamPercent }} %</p>
                                <p class="text-muted">{{ $monthlyRamCount }} รายการ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div id="plamOfMonth">
                </div>
            </div>

        </div>
    </div>



</div>

<script>
    const getPalmOf7 = {!! json_encode($getPalmOf7) !!};
    const getPriceOf7 = {!! json_encode($getPriceOf7) !!};
    const subDaysFormatted = {!! json_encode($subDaysFormatted) !!};
    const dataMonthlySums = {!! json_encode($dataMonthlySums) !!};
    const labelMonthlySums = {!! json_encode($labelMonthlySums) !!};
</script>
