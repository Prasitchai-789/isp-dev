<div>
    <div class="row">
        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text font_Prompt bg-c-blue text-white">เลือกวันที่</i></span>
                <input type="date" class="form-control font_Prompt " id="filterDate" name="filterDate"
                wire:model.live="filterDate"  placeholder="วันที่">
            </div>
        </div>
    </div>
    <div class="page-header my-2 mb-0">
        <div class="page-block card mb-3">
            <div class="card-body p-2 m-2">
                <h4 class="text-center text-primary-emphasis font_anuphan mb-0">รายงานการรับซื้อผลปาล์มประจำวันที่ {{ $selectedDate }}</h4>
            </div>
        </div>
    </div>


    <div class="row my-0">

        <div class="col-xl-4 col-md-6">
            <div class="card comp-card border-left-blue">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-20 font_Prompt mb-2">ปริมาณผลปาล์ม</h6>
                            <h3 class="text-primary">{{ $sumFFBsubDays1 }} <span class="h6">Kg.</span></h3>
                            <p class="m-b-0">This Month<span class="float-end text-primary-emphasis">{{ $monthlySums }} Kg.</span></p>
                        </div>
                        <div class="col-auto" id="avgChart3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card comp-card border-left-green">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-20 font_Prompt mb-2">ราคาเฉลี่ย <span class="h6">(บาท/kg.)</span></h6>
                            <h3 class="text-success">{{ $averagePriceSubDays1 }}</h3>
                            <p class="m-b-0">This Month<span class="float-end text-success-emphasis">{{ $averagePriceOfMonth }} บาท/kg.</span></p>
                        </div>
                        <div class="col-auto" id="avgChart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card comp-card border-left-red">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-20 font_Prompt mb-2">ยอดเงิน</h6>
                            <h3 class="text-danger">{{ $sumAmnt2subDays1 }} MB</h3>
                            <p class="m-b-0">This Month<span class="float-end text-danger-emphasis">{{ $monthlySumsPrice }} MB.</span></p>
                        </div>
                        <div class="col-auto" id="avgChart2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-12">
            <div class="card border-left-pink  p-0">
                <!-- Bar Chart -->
                <div id="chartOfMonth">
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-left-yellow">
                        <div class="card-body bg-patern">
                            <div class="row">
                                <div class="col-auto h5 font_Prompt"><span>สัดส่วนลูกค้า</span></div>
                                <div class="col text-end">
                                    <h4 class="mb-0">Total : {{ $sumFFBsubDays1 }}</h4><span class="text-c-green"></span>
                                </div>
                            </div>
                            <div>
                                <div id="chart" class="mx-5">
                                </div>

                                <div class="row mt-3 mx-4">
                                    <div class="col">
                                        <h3 class="m-0 text-primary"></i>{{ $sumram }} <span class="h6">Kg.</span></h3>
                                        <span class="ms-0 font_Prompt">ลานเท</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-0 text-success"></i>{{ $sumagr }} <span class="h6">Kg.</span></h3>
                                        <span class="ms-0 font_Prompt ">เกษตรกร</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        const dataffb =  {!! (json_encode($dataffb) ) !!};
        const labelsdate =  {!! (json_encode($labelsdate) ) !!};
        const percentage =  {{$percentage}};
        const percentram =  {{$percentram}};
    </script>

    {{-- <script>
        // const dataffbOfMonth =  {!! (json_encode($dataffbOfMonth) ) !!};
        // const labelsdateOfMonth =  {!! (json_encode($labelsdateOfMonth) ) !!};
        // const averagePrices =  {!! (json_encode($averagePrices) ) !!};
        // const averagePricesSubDays =  {!! (json_encode($averagePricesSubDays) ) !!};
        // const sumPriceSubDays =  {!! (json_encode($sumPriceSubDays) ) !!};
    </script> --}}
