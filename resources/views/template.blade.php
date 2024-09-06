@extends('layouts.master')

@section('content')

<div class="container">


    <div class="page-header">
        <div class="page-block card mb-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title border-bottom pb-2 mb-2">
                            <h4 class="mb-0">Statistics</h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html"><i
                                        class="ph ph-house"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Widget</a></li>
                            <li class="breadcrumb-item" aria-current="page">Statistics</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-header my-2">
        <div class="page-block card mb-0">
            <div class="card-body">

            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6 col-xl-3">
            <div class="card bg-grd-primary notification-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 notify-icon"><i class="fa fa-envelope"></i></div>
                        <div class="col-8 notify-cont">
                            <h4>123</h4>
                            <p>Unread Mails <span class="font_anuphan">ประสิทธิ์ชัย</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-grd-success notification-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 notify-icon"><i class="fa fa-camera"></i></div>
                        <div class="col-8 notify-cont">
                            <h4>123</h4>
                            <p>Image Upload</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-grd-warning notification-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 notify-icon"><i class="fa fa-comments"></i></div>
                        <div class="col-8 notify-cont">
                            <h4>123</h4>
                            <p>Total Messages</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-grd-danger notification-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 notify-icon"><i class="fa fa-shopping-cart"></i></div>
                        <div class="col-8 notify-cont">
                            <h4>123</h4>
                            <p>Orders Post</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-grd-primary order-card">
                <div class="card-body">
                    <h6 class="text-white">Orders Received</h6>
                    <h2 class="text-end text-white"><i
                            class="feather icon-shopping-cart float-start"></i><span>486</span></h2>
                    <p class="m-b-0">Completed Orders<span class="float-end">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="bg-grd-success card order-card">
                <div class="card-body">
                    <h6 class="text-white">Total Sales</h6>
                    <h2 class="text-end text-white"><i class="feather icon-tag float-start"></i><span>1641</span></h2>
                    <p class="m-b-0">This Month<span class="float-end">213</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-grd-warning order-card">
                <div class="card-body">
                    <h6 class="text-white">Revenue</h6>
                    <h2 class="text-end text-white"><i class="feather icon-repeat float-start"></i><span>$42,562</span>
                    </h2>
                    <p class="m-b-0">This Month<span class="float-end">$5,032</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card bg-grd-danger order-card">
                <div class="card-body">
                    <h6 class="text-white">Total Profit</h6>
                    <h2 class="text-end text-white"><i class="feather icon-award float-start"></i><span>$9,562</span>
                    </h2>
                    <p class="m-b-0">This Month<span class="float-end">$542</span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-4">
            <div class="card trnasiction-card">
                <div class="card-header bg-grd-danger">
                    <h5 class="text-white">Not Complete<span class="d-block">Cycle ends in 22 days</span>
                    </h5>
                    <div class="card-header-right">
                        <div class="transection-preogress running-75">
                            <p class="m-b-0">44%</p>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="trnasiction-profile">
                        <h4 class="text-white">RT</h4>
                    </div>
                    <h6>Registered Respiratory <span class="d-block">Therapist</span></h6>
                    <p>RT 334445566</p>
                </div>
                <div class="border-top transection-footer row">
                    <div class="col-6 border-right"><a href="#" class="text-dark"><i
                                class="fa fa-plus-circle m-r-10"></i>Report CE</a></div>
                    <div class="col-6"><a href="#" class="text-dark"><i class="fa fa-eye m-r-10"></i>Transcript</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <div class="card trnasiction-card">
                <div class="card-header bg-grd-success">
                    <h5 class="text-white">Not Complete<span class="d-block">Next cycle starts Feb 2
                            2017</span></h5>
                    <div class="card-header-right">
                        <div class="transection-preogress complited"><span class="fa fa-check f-20"></span>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="trnasiction-profile bg-grd-success">
                        <h4 class="text-white">RN</h4>
                    </div>
                    <h6>Registered Nurse<span class="d-block">Nurse</span></h6>
                    <p>RN 334445566</p>
                </div>
                <div class="border-top transection-footer row">
                    <div class="col-6 border-right"><a href="#" class="text-dark"><i
                                class="fa fa-plus-circle m-r-10"></i>Report CE</a></div>
                    <div class="col-6"><a href="#" class="text-dark"><i class="fa fa-eye m-r-10"></i>Transcript</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <div class="card trnasiction-card">
                <div class="card-header bg-grd-success">
                    <h5 class="text-white">Not Complete<span class="d-block">Next cycle starts Feb 2
                            2017</span></h5>
                    <div class="card-header-right">
                        <div class="transection-preogress complited"><span class="fa fa-check f-20"></span>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="trnasiction-profile bg-grd-success">
                        <h4 class="text-white">MT</h4>
                    </div>
                    <h6>Massage<span class="d-block">Therapist</span></h6>
                    <p>MT 334445566</p>
                </div>
                <div class="border-top transection-footer row">
                    <div class="col-6 border-right"><a href="#" class="text-dark"><i
                                class="fa fa-plus-circle m-r-10"></i>Report CE</a></div>
                    <div class="col-6"><a href="#" class="text-dark"><i class="fa fa-eye m-r-10"></i>Transcript</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body user-radial-card">
                    <div data-label="50%" class="radial-bar radial-bar-90 radial-bar-lg radial-bar-danger">
                        <img src="{{ asset('images/user/avatar-2.jpg') }}" class="img-radius wid-70" alt="User-Image">
                    </div><span class="f-36 text-danger">3,6</span>
                    <p>From 6 GB</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body user-radial-card">
                    <div data-label="50%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-success">
                        <img src="{{ asset('images/user/avatar-1.jpg') }}" class="img-radius wid-70" alt="User-Image">
                    </div><span class="f-36 text-success">85%</span>
                    <p>From 6 GB</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body user-radial-card">
                    <div data-label="50%" class="radial-bar radial-bar-60 radial-bar-lg radial-bar-primary">
                        <img src="{{ asset('images/user/avatar-3.jpg') }}" class="img-radius wid-70" alt="User-Image">
                    </div><span class="f-36 text-primary">73%</span>
                    <p>From 6 GB</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body user-radial-card">
                    <div data-label="50%" class="radial-bar radial-bar-35 radial-bar-lg radial-bar-warning">
                        <img src="{{ asset('images/user/avatar-4.jpg') }}" class="img-radius wid-70" alt="User-Image">
                    </div><span class="f-36 text-warning">6</span>
                    <p>From 6 GB</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-body text-center"><i class="fa fa-envelope-open text-primary d-block f-40"></i>
                    <h4 class="m-t-20"><span class="text-primary">8.62k</span> Subscribers</h4>
                    <p class="m-b-20">Your main list is growing</p><button
                        class="btn btn-primary btn-sm btn-round">Manage List</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body text-center"><i class="fab fa-twitter text-success d-block f-40"></i>
                    <h4 class="m-t-20"><span class="text-success">+40</span> Followers</h4>
                    <p class="m-b-20">Your main list is growing</p><button
                        class="btn btn-success btn-sm btn-round">Check them out</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body text-center"><i class="fa fa-puzzle-piece text-danger d-block f-40"></i>
                    <h4 class="m-t-20">Business Plan</h4>
                    <p class="m-b-20">This is your current active plan</p><button
                        class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card statustic-card">
                <div class="card-header">
                    <h5>Articles</h5>
                </div>
                <div class="card-body text-center"><span class="d-block text-primary f-36">56</span>
                    <p class="m-b-0">Total</p>
                    <div class="progress">
                        <div class="progress-bar bg-grd-primary" style="width: 56%"></div>
                    </div>
                </div>
                <div class="card-footer bg-grd-primary">
                    <h6 class="text-white m-b-0">Draft: 22</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card statustic-card">
                <div class="card-header">
                    <h5>Categories</h5>
                </div>
                <div class="card-body text-center"><span class="d-block text-success f-36">14</span>
                    <p class="m-b-0">Total</p>
                    <div class="progress">
                        <div class="progress-bar bg-grd-success" style="width: 14%"></div>
                    </div>
                </div>
                <div class="card-footer bg-grd-success">
                    <h6 class="text-white m-b-0">Used: 14</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card statustic-card">
                <div class="card-header">
                    <h5>Tickets</h5>
                </div>
                <div class="card-body text-center"><span class="d-block text-danger f-36">85</span>
                    <p class="m-b-0">Total</p>
                    <div class="progress">
                        <div class="progress-bar bg-grd-danger" style="width: 85%"></div>
                    </div>
                </div>
                <div class="card-footer bg-grd-danger">
                    <h6 class="text-white m-b-0">Closed Today: 85</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card statustic-card">
                <div class="card-header">
                    <h5>Forums</h5>
                </div>
                <div class="card-body text-center"><span class="d-block text-warning f-36">42</span>
                    <p class="m-b-0">Total</p>
                    <div class="progress">
                        <div class="progress-bar bg-grd-warning" style="width: 42%"></div>
                    </div>
                </div>
                <div class="card-footer bg-grd-warning">
                    <h6 class="text-white m-b-0">Unanswered: 42</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Summary</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2 class="d-inline-block text-primary m-r-10">46</h2>
                            <div class="d-inline-block">
                                <p class="m-b-0"><i class="fa fa-caret-up m-r-10 text-success"></i>100%</p>
                                <p class="text-muted">New Installation</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="d-inline-block text-success m-r-10">897</h2>
                            <div class="d-inline-block">
                                <p class="m-b-0"><i class="fa fa-caret-down m-r-10 text-danger"></i>10%</p>
                                <p class="text-muted">Total Users</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="d-inline-block text-danger m-r-10">8456</h2>
                            <div class="d-inline-block">
                                <p class="m-b-0"><i class="fa fa-caret-up m-r-10 text-success"></i>87%</p>
                                <p class="text-muted">Total Views</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-b-0">
                    <div class="card-header-right">
                        <h5 class="text-muted">$25</h5>
                    </div>
                </div>
                <div class="card-body text-center"><img src="{{ asset('images/widget/prod.jpg') }}" class="img-fluid"
                        alt="product">
                    <h6 class="m-b-0">Sports Shoes</h6>
                    <p class="m-b-10">Some quick example text.</p><button class="btn btn-primary btn-round">Buy
                        now</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Popular</h5>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-4"><a class="img-post card"
                                data-lightbox="{{ asset('images/application/img-soc-gal-1.jpg') }}"><img
                                    src="{{ asset('images/application/img-soc-gal-1.jpg') }}" alt="img"
                                    class="card-img">
                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                            </a></div>
                        <div class="col-4"><a class="img-post card"
                                data-lightbox="{{ asset('images/application/img-soc-gal-2.jpg') }}"><img
                                    src="{{ asset('images/application/img-soc-gal-2.jpg') }}" alt="img"
                                    class="card-img">
                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                            </a></div>
                        <div class="col-4"><a class="img-post card"
                                data-lightbox="{{ asset('images/application/img-soc-gal-3.jpg') }}"><img
                                    src="{{ asset('images/application/img-soc-gal-3.jpg') }}" alt="img"
                                    class="card-img">
                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                            </a></div>
                        <div class="col-4"><a class="img-post card"
                                data-lightbox="../assets/images/application/img-soc-gal-4.jpg"><img
                                    src="../assets/images/application/img-soc-gal-4.jpg" alt="img" class="card-img">
                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                            </a></div>
                        <div class="col-4"><a class="img-post card"
                                data-lightbox="../assets/images/application/img-soc-gal-5.jpg"><img
                                    src="../assets/images/application/img-soc-gal-5.jpg" alt="img" class="card-img">
                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                            </a></div>
                        <div class="col-4"><a class="img-post card"
                                data-lightbox="../assets/images/application/img-soc-gal-6.jpg"><img
                                    src="../assets/images/application/img-soc-gal-6.jpg" alt="img" class="card-img">
                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                            </a></div>
                        <div class="col-4"><a class="img-post card"
                                data-lightbox="../assets/images/application/img-soc-gal-7.jpg"><img
                                    src="../assets/images/application/img-soc-gal-7.jpg" alt="img" class="card-img">
                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                            </a></div>
                        <div class="col-4"><a class="img-post card"
                                data-lightbox="../assets/images/application/img-soc-gal-8.jpg"><img
                                    src="../assets/images/application/img-soc-gal-8.jpg" alt="img" class="card-img">
                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                            </a></div>
                        <div class="col-4"><a class="img-post card"
                                data-lightbox="../assets/images/application/img-soc-gal-9.jpg"><img
                                    src="../assets/images/application/img-soc-gal-9.jpg" alt="img" class="card-img">
                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                            </a></div>
                    </div>
                    <div class="text-center m-t-15"><button class="btn btn-outline-primary btn-round btn-sm">Load
                            More</button></div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-lightbox post-modal-lightbox" id="lightboxModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"><button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="modal-body"><img src="../assets/images/user/avatar-5.jpg" alt="images"
                            class="modal-image w-100 img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 float-end">New York , NY</h6><span class="d-block mb-1">Monday 2:00
                        PM</span>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto">
                            <h2 class="text-c-purple m-0"><i class="feather icon-cloud-snow text-muted me-2"></i>23<sup
                                    class="f-20">°</sup></h2>
                        </div>
                        <div class="col text-end">
                            <div class="mb-1 d-inline-flex"><label class="m-r-5 f-20 mb-0" for="Switchtemp">°C</label>
                                <div class="form-check form-switch mb-0 p-0 d-inline-flex"><input
                                        class="form-check-input m-0" type="checkbox" role="switch" id="Switchtemp"
                                        checked="checked"></div><label class="m-l-5 f-20 mb-0"
                                    for="Switchtemp">°F</label>
                            </div><small class="d-block mt-0">Partly Cloudy</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header pb-3">
                    <h5>Overdue tasks</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h2 class="m-0"><i class="feather icon-arrow-up text-success"></i>4</h2>
                        </div>
                        <div class="col text-end">
                            <h5 class="text-success m-0">15%</h5><span class="d-block">Last Month:6</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row d-flex align-items-center m-0">
                        <div class="col-6 text-center">
                            <div class="py-4">
                                <h2 class="text-c-purple">19<sup class="f-20">°</sup></h2><span>Sunny</span>
                            </div>
                        </div>
                        <div class="col-6 text-center bg-primary p-0">
                            <div class="py-4"><i class="feather icon-sun f-36 text-white"></i>
                                <h6 class="mt-3 mb-0 text-white f-w-400">New York , NY</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card comp-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-20">Impressions</h6>
                            <h3 class="text-primary">1,563</h3>
                            <p class="m-b-0">May 23 - June 01 (2018)</p>
                        </div>
                        <div class="col-auto"><i class="fas fa-eye bg-light-primary"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card comp-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-20">Goal</h6>
                            <h3 class="text-success">30,564</h3>
                            <p class="m-b-0">May 28 - June 01 (2018)</p>
                        </div>
                        <div class="col-auto"><i class="fas fa-bullseye bg-light-success"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card comp-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-20">Impact</h6>
                            <h3 class="text-warning">42.6%</h3>
                            <p class="m-b-0">May 30 - June 01 (2018)</p>
                        </div>
                        <div class="col-auto"><i class="fas fa-hand-paper bg-light-warning"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-grd-danger">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Total Profit</h6>
                            <h3 class="m-b-0 text-white">$1,783</h3>
                        </div>
                        <div class="col-auto"><i class="fas fa-money-bill-alt text-white"></i></div>
                    </div>
                    <p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From
                        Previous Month</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-grd-primary">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Total Orders</h6>
                            <h3 class="m-b-0 text-white">15,830</h3>
                        </div>
                        <div class="col-auto"><i class="fas fa-database text-white"></i></div>
                    </div>
                    <p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From
                        Previous Month</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-grd-success">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Average Price</h6>
                            <h3 class="m-b-0 text-white">$6,780</h3>
                        </div>
                        <div class="col-auto"><i class="fas fa-dollar-sign text-white"></i></div>
                    </div>
                    <p class="m-b-0 text-white"><span class="label label-success m-r-10">+52%</span>From
                        Previous Month</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-grd-warning">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Product Sold</h6>
                            <h3 class="m-b-0 text-white">6,784</h3>
                        </div>
                        <div class="col-auto"><i class="fas fa-tags text-white"></i></div>
                    </div>
                    <p class="m-b-0 text-white"><span class="label label-warning m-r-10">+52%</span>From
                        Previous Month</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card statistics-card-1">
                <div class="card-body"><img src="{{asset('images/widget/img-status-7.svg')}}" alt="img"
                        class="img-fluid img-bg">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img src="{{asset('images/widget/img-facebook.svg')}}" alt="img"
                                class="img-fluid"></div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-0 text-muted">Total Likes</p>
                            <div class="d-inline-flex align-items-center">
                                <h5 class="f-w-300 d-flex align-items-center m-b-0">12,281</h5><span
                                    class="badge bg-success ms-2">+7.2%</span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mt-5 text-center">
                        <div class="col-6">
                            <p class="mb-0 text-muted">Target</p>
                            <h5 class="mb-0">35,098</h5>
                        </div>
                        <div class="col-6 border-start">
                            <p class="mb-0 text-muted">Duration</p>
                            <h5 class="mb-0">3,539</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card statistics-card-1">
                <div class="card-body"><img src="{{asset('images/widget/img-status-8.svg')}}" alt="img"
                        class="img-fluid img-bg">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img src="{{asset('images/widget/img-google.svg')}}" alt="img"
                                class="img-fluid"></div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-0 text-muted">Total Likes</p>
                            <div class="d-inline-flex align-items-center">
                                <h5 class="f-w-300 d-flex align-items-center m-b-0">12,281</h5><span
                                    class="badge bg-success ms-2">+5.9%</span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mt-5 text-center">
                        <div class="col-6">
                            <p class="mb-0 text-muted">Target</p>
                            <h5 class="mb-0">35,098</h5>
                        </div>
                        <div class="col-6 border-start">
                            <p class="mb-0 text-muted">Duration</p>
                            <h5 class="mb-0">3,539</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-4">
            <div class="card statistics-card-1">
                <div class="card-body"><img src="{{asset('images/widget/img-status-9.svg')}}" alt="img"
                        class="img-fluid img-bg">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img src="{{asset('images/widget/img-twitter.svg')}}" alt="img"
                                class="img-fluid"></div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-0 text-muted">Total Likes</p>
                            <div class="d-inline-flex align-items-center">
                                <h5 class="f-w-300 d-flex align-items-center m-b-0">12,281</h5><span
                                    class="badge bg-success ms-2">+6.2%</span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mt-5 text-center">
                        <div class="col-6">
                            <p class="mb-0 text-muted">Target</p>
                            <h5 class="mb-0">35,098</h5>
                        </div>
                        <div class="col-6 border-start">
                            <p class="mb-0 text-muted">Duration</p>
                            <h5 class="mb-0">3,539</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card proj-t-card">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col-auto"><i class="far fa-calendar-check text-danger f-30"></i></div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5">Ticket Answered</h6>
                            <h6 class="m-b-0 text-danger">Live Update</h6>
                        </div>
                    </div>
                    <div class="row align-items-center text-center">
                        <div class="col">
                            <h6 class="m-b-0">327</h6>
                        </div>
                        <div class="col"><i class="fas fa-exchange-alt text-danger f-18"></i></div>
                        <div class="col">
                            <h6 class="m-b-0">10 Days</h6>
                        </div>
                    </div>
                    <h6 class="pt-badge bg-danger">53%</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card proj-t-card">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col-auto"><i class="fas fa-paper-plane text-success f-30"></i></div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5">Project Launched</h6>
                            <h6 class="m-b-0 text-success">Live Update</h6>
                        </div>
                    </div>
                    <div class="row align-items-center text-center">
                        <div class="col">
                            <h6 class="m-b-0">3 Year</h6>
                        </div>
                        <div class="col"><i class="fas fa-exchange-alt text-success f-18"></i></div>
                        <div class="col">
                            <h6 class="m-b-0">623</h6>
                        </div>
                    </div>
                    <h6 class="pt-badge bg-success">76%</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card proj-t-card">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col-auto"><i class="fas fa-lightbulb text-warning f-30"></i></div>
                        <div class="col p-l-0">
                            <h6 class="m-b-5">Unique Innovation</h6>
                            <h6 class="m-b-0 text-warning">Live Update</h6>
                        </div>
                    </div>
                    <div class="row align-items-center text-center">
                        <div class="col">
                            <h6 class="m-b-0">1 Month</h6>
                        </div>
                        <div class="col"><i class="fas fa-exchange-alt text-warning f-18"></i></div>
                        <div class="col">
                            <h6 class="m-b-0">248</h6>
                        </div>
                    </div>
                    <h6 class="pt-badge bg-warning">73%</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ticket-card">
                <div class="card-body">
                    <p class="m-b-25 bg-light-danger lbl-card"><i class="fas fa-folder-open m-r-5"></i> Open
                        Tickets</p>
                    <div class="text-center">
                        <h2 class="m-b-0 d-inline-block text-danger">128</h2>
                        <p class="m-b-0 d-inline-block">Tickets</p>
                        <p class="m-b-0 m-t-10"><i class="fas fa-caret-down m-r-10 f-18 text-danger"></i>From Previous
                            Month
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ticket-card">
                <div class="card-body">
                    <p class="m-b-25 bg-light-primary lbl-card"><i class="fas fa-file-archive m-r-5"></i>
                        Close Tickets</p>
                    <div class="text-center">
                        <h2 class="m-b-0 d-inline-block text-primary">134</h2>
                        <p class="m-b-0 d-inline-block">Tickets</p>
                        <p class="m-b-0 m-t-10"><i class="fas fa-caret-up m-r-10 f-18 text-primary"></i>From
                            Previous Month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ticket-card">
                <div class="card-body">
                    <p class="m-b-25 bg-light-success lbl-card"><i class="fas fa-users m-r-5"></i> New
                        Clients</p>
                    <div class="text-center">
                        <h2 class="m-b-0 d-inline-block text-success">307</h2>
                        <p class="m-b-0 d-inline-block">Clients</p>
                        <p class="m-b-0 m-t-10"><i class="fas fa-caret-up m-r-10 f-18 text-success"></i>From
                            Previous Month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ticket-card">
                <div class="card-body">
                    <p class="m-b-25 bg-light-warning lbl-card"><i class="fas fa-database m-r-5"></i> New
                        Orders</p>
                    <div class="text-center">
                        <h2 class="m-b-0 d-inline-block text-warning">231</h2>
                        <p class="m-b-0 d-inline-block">Orders</p>
                        <p class="m-b-0 m-t-10"><i class="fas fa-caret-up m-r-10 f-18 text-warning"></i>From
                            Previous Month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card analytic-card bg-grd-success">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col-auto"><i class="fas fa-shopping-cart text-success f-18 analytic-icon"></i></div>
                        <div class="col text-end">
                            <h3 class="m-b-5 text-white">15,678</h3>
                            <h6 class="m-b-0 text-white">Total Sales</h6>
                        </div>
                    </div>
                    <p class="m-b-0 text-white d-inline-block">Total Income :</p>
                    <h5 class="text-white d-inline-block m-b-0 m-l-10">$2,451</h5>
                    <h6 class="m-b-0 d-inline-block text-white float-end"><i class="fas fa-caret-up m-r-10 f-18"></i>10%
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card analytic-card bg-grd-primary">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col-auto"><i class="fas fa-users text-primary f-18 analytic-icon"></i>
                        </div>
                        <div class="col text-end">
                            <h3 class="m-b-5 text-white">1,678</h3>
                            <h6 class="m-b-0 text-white">Total Users</h6>
                        </div>
                    </div>
                    <p class="m-b-0 text-white d-inline-block">Total Revenue :</p>
                    <h5 class="text-white d-inline-block m-b-0 m-l-10">$2,451</h5>
                    <h6 class="m-b-0 d-inline-block text-white float-end"><i class="fas fa-caret-up m-r-10 f-18"></i>30%
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card analytic-card bg-grd-danger">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col-auto"><i class="fas fa-file-code text-danger f-18 analytic-icon"></i></div>
                        <div class="col text-end">
                            <h3 class="m-b-5 text-white">15,678</h3>
                            <h6 class="m-b-0 text-white">Total Project</h6>
                        </div>
                    </div>
                    <p class="m-b-0 d-inline-block text-white">Active Projects :</p>
                    <h5 class="text-white d-inline-block m-b-0 m-l-10">$2,451</h5>
                    <h6 class="m-b-0 d-inline-block text-white float-end"><i
                            class="fas fa-caret-down m-r-10 f-18"></i>10%</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card statistics-card-1">
                <div class="card-body"><img src="{{asset('images/widget/img-status-1.svg')}}" alt="img"
                        class="img-fluid img-bg h-100">
                    <div class="d-flex align-items-center justify-content-between mb-3 drp-div">
                        <h6 class="mb-0">Online Orders</h6>
                        <div class="dropdown"><a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">View</a> <a
                                    class="dropdown-item" href="#">Edit</a></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <h3 class="f-w-300 d-flex align-items-center m-b-0">237 <small class="text-muted">/400</small>
                        </h3><span class="badge bg-light-success ms-2">36%</span>
                    </div>
                    <p class="text-muted mb-2 text-sm mt-3">Delivery Orders</p>
                    <div class="progress" style="height: 7px">
                        <div class="progress-bar bg-brand-color-2" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card statistics-card-1">
                <div class="card-body"><img src="{{ asset('images/widget/img-status-2.svg') }}" alt="img"
                        class="img-fluid img-bg">
                    <div class="d-flex align-items-center justify-content-between mb-3 drp-div">
                        <h6 class="mb-0">Pending Orders</h6>
                        <div class="dropdown"><a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">View</a> <a
                                    class="dropdown-item" href="#">Edit</a></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <h3 class="f-w-300 d-flex align-items-center m-b-0">100 <small class="text-muted">/500</small>
                        </h3><span class="badge bg-light-primary ms-2">20%</span>
                    </div>
                    <p class="text-muted mb-2 text-sm mt-3">Delivery Orders</p>
                    <div class="progress" style="height: 7px">
                        <div class="progress-bar bg-brand-color-1" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card statistics-card-1">
                <div class="card-body"><img src="../assets/images/widget/img-status-3.svg" alt="img"
                        class="img-fluid img-bg">
                    <div class="d-flex align-items-center justify-content-between mb-3 drp-div">
                        <h6 class="mb-0">Return Orders</h6>
                        <div class="dropdown"><a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">View</a> <a
                                    class="dropdown-item" href="#">Edit</a></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <h3 class="f-w-300 d-flex align-items-center m-b-0">50 <small class="text-muted">/400</small>
                        </h3><span class="badge bg-light-danger ms-2">10%</span>
                    </div>
                    <p class="text-muted mb-2 text-sm mt-3">Return Orders</p>
                    <div class="progress" style="height: 7px">
                        <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5>Register User</h5>
                    <div class="dropdown"><a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="material-icons-two-tone f-18">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">View</a> <a
                                class="dropdown-item" href="#">Edit</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-end mb-3">
                        <h4 class="mb-0">1205</h4><span class="badge bg-light-success ms-2">20%</span>
                    </div>
                    <p class="text-muted mb-0">Monthly Increase</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5>Daily User</h5>
                    <div class="dropdown"><a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="material-icons-two-tone f-18">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">View</a> <a
                                class="dropdown-item" href="#">Edit</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-end mb-3">
                        <h4 class="mb-0">467</h4><span class="badge bg-light-warning ms-2">10%</span>
                    </div>
                    <p class="text-muted mb-0">Weekly Increase</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5>Premium User</h5>
                    <div class="dropdown"><a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="material-icons-two-tone f-18">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">View</a> <a
                                class="dropdown-item" href="#">Edit</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-end mb-3">
                        <h4 class="mb-0">346</h4><span class="badge bg-light-primary ms-2">50%</span>
                    </div>
                    <p class="text-muted mb-0">Yearly Increase</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="card-body bg-light-primary">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <p class="text-muted mb-1">Total Visitors</p>
                            <div class="d-flex align-items-center mb-1">
                                <h4 class="mb-0">235</h4><span class="badge bg-primary ms-2">20%</span>
                            </div>
                            <p class="text-primary text-sm mb-0">More than last Month</p>
                        </div>
                        <div class="col-6"><img src="{{ asset('images/widget/img-visitor.png') }}" alt="img"
                                class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0"><i class="ph ph-circle text-warning me-2"></i> Parcel in the way</p>
                        <i class="ph ph-info f-20 ms-1" data-bs-toggle="tooltip" data-bs-title="Parcel in the way"></i>
                    </div>
                    <div class="d-flex align-items-center my-2">
                        <h2 class="d-flex align-items-center m-b-0">25 <small class="text-muted">/40</small>
                        </h2>
                    </div>
                    <p class="mb-0"><span class="text-success"><i class="ph ph-caret-up f-20 align-bottom"></i>
                            +15%</span> last month</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5>Product earn</h5>
                    <div class="dropdown"><a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="material-icons-two-tone f-18">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">View</a> <a
                                class="dropdown-item" href="#">Edit</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-0">Sale Product</p>
                            <div class="d-flex align-items-end mt-1">
                                <h4 class="mb-0">375</h4><span class="badge bg-light-success ms-2">36%</span>
                            </div>
                        </div>
                        <div class="avtar bg-brand-color-2 text-white"><i class="ph ph-cube f-26"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <h6 class="mb-0">Releases new version</h6><span class="badge bg-primary ms-2">350</span>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0"><i class="ph ph-tag-chevron text-primary f-30"></i></div>
                        <div class="flex-grow-1 ms-3">
                            <div class="d-inline-flex align-items-center mb-2">
                                <h6 class="mb-0">v0.63.3</h6><span class="badge bg-light-success ms-2">Latest</span>
                            </div>
                            <p class="mb-0 text-muted">on Sep 29</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0"><img src="../assets/images/favicon.svg" alt="img" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <h5 class="mb-0">Gradient Able</h5><span class="text-sm text-muted">Gradient
                                Able@developers.io</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-2">
                            <div class="user-group"><img src="../assets/images/user/avatar-6.jpg" alt="user-image"
                                    class="avtar"> <img src="../assets/images/user/avatar-6.jpg" alt="user-image"
                                    class="avtar">
                                <img src="../assets/images/user/avatar-7.jpg" alt="user-image" class="avtar"> <img
                                    src="../assets/images/user/avatar-8.jpg" alt="user-image" class="avtar"> <span
                                    class="avtar rounded-circle bg-light-warning text-warning">+2</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0"><a href="#"
                                class="avtar avtar-s bg-primary rounded-circle text-white"><i
                                    class="ti ti-plus f-18"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-inline-flex align-items-center"><i
                                class="ph ph-arrow-down-left text-primary me-2 f-20"></i>
                            <p class="text-muted mb-0">Income</p>
                        </div>
                        <h4 class="mb-0">3.15k</h4>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6>Languages</h6>
                    <p class="text-muted text-sm">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.</p>
                    <div class="progress my-3 bg-transparent" style="height: 8px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row g-1">
                        <div class="col-6">
                            <p class="mb-0"><i class="ph ph-circle text-success f-12"></i> React native</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-0"><i class="ph ph-circle text-primary f-12"></i> Figma</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-0"><i class="ph ph-circle text-warning f-12"></i> Bootstrap 5</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-0"><i class="ph ph-circle text-danger f-12"></i> Shopify</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <p class="mb-0">Users</p><i class="ph ph-arrow-square-out f-20 ms-1" data-bs-toggle="tooltip"
                            data-bs-title="Users"></i>
                    </div>
                    <h5 class="mb-0">56,908</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <p class="mb-0">Income this month</p><i class="ph ph-arrow-square-in f-20 ms-1 text-danger"
                            data-bs-toggle="tooltip" data-bs-title="Income this month"></i>
                    </div>
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0">$3,569</h5><span class="badge bg-danger ms-2"><i
                                class="ph ph-arrow-down me-1 align-middle"></i> 2.6%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card seo-card"><img src="{{ asset('images/widget/seoimg1.jpg') }}" alt="seo bg"
                            class="img-fluid">
                        <div class="overlay-bg bg-grd-primary"></div>
                        <div class="card-body seo-content"><span class="label label-success">Traffic</span>
                            <h4 class="m-t-10 text-white">Devices and resolution</h4>
                            <p class="m-b-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-xl-12">
                            <div class="card seo-card"><img src="{{ asset('images/widget/seoimg2.jpg') }}" alt="seo bg"
                                    class="img-fluid">
                                <div class="overlay-bg"></div>
                                <div class="card-body seo-content">
                                    <h6 class="text-white">New Users</h6>
                                    <p class="m-b-5 m-t-15"><i class="fa fa-caret-up text-success m-r-10"></i> +52%</p>
                                    <p class="m-b-0">Calculated in 7 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-12">
                            <div class="card seo-card"><img src="{{ asset('images/widget/seoimg3.jpg') }}" alt="seo bg"
                                    class="img-fluid">
                                <div class="overlay-bg"></div>
                                <div class="card-body seo-content">
                                    <h6 class="text-white">Bounce Rate</h6>
                                    <p class="m-b-5 m-t-15"><i class="fa fa-caret-down text-danger m-r-10"></i> -82%</p>
                                    <p class="m-b-0">Calculated in 7 days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card user-card">
                <div class="card-header">
                    <h5>Profile</h5>
                </div>
                <div class="card-body text-center">
                    <div class="usre-image"><img src="{{ asset('images/user/avatar-1.jpg') }}" class="img-radius"
                            alt="User-Profile-Image"></div>
                    <h6 class="f-w-600 m-t-15 m-b-10">Alessa Robert</h6>
                    <p class="text-muted">Active | Male | Born 23.05.1992</p>
                    <hr>
                    <p class="text-muted m-t-15">Activity Level: 87%</p>
                    <ul class="list-unstyled activity-leval">
                        <li class="active"></li>
                        <li class="active"></li>
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="bg-grd-primary counter-block m-t-10 p-20">
                        <div class="row">
                            <div class="col-4"><i class="feather icon-message-square"></i>
                                <p>1256</p>
                            </div>
                            <div class="col-4"><i class="feather icon-users"></i>
                                <p>8562</p>
                            </div>
                            <div class="col-4"><i class="feather icon-briefcase"></i>
                                <p>189</p>
                            </div>
                        </div>
                    </div>
                    <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and
                        typesetting.</p>
                    <hr>
                    <div class="row justify-content-center user-social-link">
                        <div class="col-auto"><a href="#"><i class="fab fa-facebook text-facebook"></i></a>
                        </div>
                        <div class="col-auto"><a href="#"><i class="fab fa-twitter text-twitter"></i></a>
                        </div>
                        <div class="col-auto"><a href="#"><i class="fab fa-dribbble text-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card table-card">
            <div class="card-header d-flex align-items-center justify-content-between py-3">
                <h5 class="mb-0">Transaction History</h5><button class="btn btn-sm btn-link-primary">View All</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="pc-dt-simple">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Category</th>
                                <th>Date/Time</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0"><img src="{{ asset('images/user/avatar-1.jpg') }}"
                                                alt="user image" class="img-radius wid-40"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Airi Satou</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Salary Payment</td>
                                <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                <td>$950.54</td>
                                <td><span class="badge text-bg-success">Completed</span></td>
                                <td><a href="#" class="avtar avtar-xs btn-link-secondary"><i class="ti ti-eye f-20"></i>
                                    </a><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                            class="ti ti-edit f-20"></i> </a><a href="#"
                                        class="avtar avtar-xs btn-link-secondary"><i class="ti ti-trash f-20"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0"><img src="{{ asset('images/user/avatar-2.jpg') }}"
                                                alt="user image" class="img-radius wid-40"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Ashton Cox</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Project Payment</td>
                                <td>2023/02/01 <span class="text-muted text-sm d-block">02:14 PM</span></td>
                                <td>$520.30</td>
                                <td><span class="badge text-bg-success">Completed</span></td>
                                <td><a href="#" class="avtar avtar-xs btn-link-secondary"><i class="ti ti-eye f-20"></i>
                                    </a><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                            class="ti ti-edit f-20"></i> </a><a href="#"
                                        class="avtar avtar-xs btn-link-secondary"><i class="ti ti-trash f-20"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0"><img src="{{ asset('images/user/avatar-3.jpg') }}"
                                                alt="user image" class="img-radius wid-40"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Bradley Greer</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>You Tube Subscribe</td>
                                <td>2023/01/22 <span class="text-muted text-sm d-block">10:32 AM</span></td>
                                <td>$100.00</td>
                                <td><span class="badge text-bg-warning">Pending</span></td>
                                <td><a href="#" class="avtar avtar-xs btn-link-secondary"><i class="ti ti-eye f-20"></i>
                                    </a><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                            class="ti ti-edit f-20"></i> </a><a href="#"
                                        class="avtar avtar-xs btn-link-secondary"><i class="ti ti-trash f-20"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0"><img src="{{ asset('images/user/avatar-4.jpg') }}"
                                                alt="user image" class="img-radius wid-40"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Brielle Williamson</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Slary Payment</td>
                                <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                <td>$760.25</td>
                                <td><span class="badge text-bg-primary">In Progress</span></td>
                                <td><a href="#" class="avtar avtar-xs btn-link-secondary"><i class="ti ti-eye f-20"></i>
                                    </a><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                            class="ti ti-edit f-20"></i> </a><a href="#"
                                        class="avtar avtar-xs btn-link-secondary"><i class="ti ti-trash f-20"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0"><img src="{{ asset('images/user/avatar-5.jpg') }}"
                                                alt="user image" class="img-radius wid-40"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Airi Satou</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Spotify Subscribe</td>
                                <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                <td>$60.05</td>
                                <td><span class="badge text-bg-danger">Canceled</span></td>
                                <td><a href="#" class="avtar avtar-xs btn-link-secondary"><i class="ti ti-eye f-20"></i>
                                    </a><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                            class="ti ti-edit f-20"></i> </a><a href="#"
                                        class="avtar avtar-xs btn-link-secondary"><i class="ti ti-trash f-20"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="pc-content">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Unique Visitor</h5>
                    </div>
                    <div class="card-body">
                        <div id="Statistics-chart" style="min-height: 245px;">
                            <div id="apexchartsd9kns8xh"
                                class="apexcharts-canvas apexchartsd9kns8xh apexcharts-theme-light"
                                style="width: 581px; height: 230px;"><svg id="SvgjsSvg2201" width="581" height="230"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="581" height="230">
                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 115px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="Arts"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="background: rgb(115, 180, 255) !important; color: rgb(115, 180, 255); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="Arts" data:collapsed="false"
                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Arts</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="Commerce"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                    style="background: rgb(89, 224, 197) !important; color: rgb(89, 224, 197); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="Commerce" data:collapsed="false"
                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Commerce</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <rect id="SvgjsRect2207" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG2318" class="apexcharts-yaxis" rel="0" transform="translate(9.25, 0)">
                                        <g id="SvgjsG2319" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2321"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="49.6"
                                                text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2322">70</tspan>
                                                <title>70</title>
                                            </text><text id="SvgjsText2324" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="74.63333333333333" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2325">60</tspan>
                                                <title>60</title>
                                            </text><text id="SvgjsText2327" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="99.66666666666666" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2328">50</tspan>
                                                <title>50</title>
                                            </text><text id="SvgjsText2330" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="124.69999999999999" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2331">40</tspan>
                                                <title>40</title>
                                            </text><text id="SvgjsText2333" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="149.73333333333332" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2334">30</tspan>
                                                <title>30</title>
                                            </text><text id="SvgjsText2336" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="174.76666666666665" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2337">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText2339" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="199.79999999999998" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2340">10</tspan>
                                                <title>10</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG2203" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(39.25, 48)">
                                        <defs id="SvgjsDefs2202">
                                            <clipPath id="gridRectMaskd9kns8xh">
                                                <rect id="SvgjsRect2220" width="537.75" height="162.2" x="-4" y="-6"
                                                    rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskd9kns8xh"></clipPath>
                                            <clipPath id="nonForecastMaskd9kns8xh"></clipPath>
                                            <clipPath id="gridRectMarkerMaskd9kns8xh">
                                                <rect id="SvgjsRect2221" width="583.75" height="202.2" x="-26" y="-26"
                                                    rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2237" x1="0" y1="1" x2="1" y2="1">
                                                <stop id="SvgjsStop2238" stop-opacity="1"
                                                    stop-color="rgba(64,153,255,1)" offset="0"></stop>
                                                <stop id="SvgjsStop2239" stop-opacity="1"
                                                    stop-color="rgba(115,180,255,1)" offset="1"></stop>
                                                <stop id="SvgjsStop2240" stop-opacity="1"
                                                    stop-color="rgba(115,180,255,1)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient2256" x1="0" y1="1" x2="1" y2="1">
                                                <stop id="SvgjsStop2257" stop-opacity="1"
                                                    stop-color="rgba(46,216,182,1)" offset="0"></stop>
                                                <stop id="SvgjsStop2258" stop-opacity="1"
                                                    stop-color="rgba(89,224,197,1)" offset="1"></stop>
                                                <stop id="SvgjsStop2259" stop-opacity="1"
                                                    stop-color="rgba(89,224,197,1)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine2208" x1="0" y1="0" x2="0" y2="150.2" stroke="#b6b6b6"
                                            stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                            x="0" y="0" width="1" height="150.2" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1"></line>
                                        <line id="SvgjsLine2265" x1="15.01377467105263" y1="151.2"
                                            x2="15.01377467105263" y2="157.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2266" x1="74.48581414473685" y1="151.2"
                                            x2="74.48581414473685" y2="157.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2267" x1="123.46278782894731" y1="151.2"
                                            x2="123.46278782894731" y2="157.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2268" x1="175.93811677631567" y1="151.2"
                                            x2="175.93811677631567" y2="157.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2269" x1="224.91509046052613" y1="151.2"
                                            x2="224.91509046052613" y2="157.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2270" x1="284.3871299342105" y1="151.2"
                                            x2="284.3871299342105" y2="157.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2271" x1="333.3641036184214" y1="151.2"
                                            x2="333.3641036184214" y2="157.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2272" x1="389.3377878289481" y1="151.2"
                                            x2="389.3377878289481" y2="157.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2273" x1="438.31476151315894" y1="151.2"
                                            x2="438.31476151315894" y2="157.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2274" x1="497.78680098684356" y1="151.2"
                                            x2="497.78680098684356" y2="157.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                        <g id="SvgjsG2261" class="apexcharts-grid">
                                            <g id="SvgjsG2262" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine2276" x1="0" y1="25.03333333333333" x2="531.75"
                                                    y2="25.03333333333333" stroke="#cccccc3b" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2277" x1="0" y1="50.06666666666666" x2="531.75"
                                                    y2="50.06666666666666" stroke="#cccccc3b" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2278" x1="0" y1="75.1" x2="531.75" y2="75.1"
                                                    stroke="#cccccc3b" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2279" x1="0" y1="100.13333333333333" x2="531.75"
                                                    y2="100.13333333333333" stroke="#cccccc3b" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2280" x1="0" y1="125.16666666666666" x2="531.75"
                                                    y2="125.16666666666666" stroke="#cccccc3b" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2263" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine2283" x1="0" y1="150.2" x2="531.75" y2="150.2"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2282" x1="0" y1="1" x2="0" y2="150.2"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2264" class="apexcharts-grid-borders">
                                            <line id="SvgjsLine2275" x1="0" y1="0" x2="531.75" y2="0" stroke="#cccccc3b"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2281" x1="0" y1="150.2" x2="531.75" y2="150.2"
                                                stroke="#cccccc3b" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2222" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG2223" class="apexcharts-series" zIndex="0" seriesName="Arts"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath2241"
                                                    d="M 0 125.16666666666666C 37.957154605263156 125.16666666666666 70.49185855263158 50.06666666666666 108.44901315789474 50.06666666666666C 143.95731907894736 50.06666666666666 174.39300986842107 100.13333333333333 209.9013157894737 100.13333333333333C 247.85847039473686 100.13333333333333 280.3931743421053 25.03333333333333 318.35032894736844 25.03333333333333C 355.08305921052636 25.03333333333333 386.5682565789474 100.13333333333333 423.3009868421053 100.13333333333333C 461.2581414473685 100.13333333333333 493.79284539473684 50.06666666666666 531.75 50.06666666666666"
                                                    fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient2237)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMaskd9kns8xh)"
                                                    pathTo="M 0 125.16666666666666C 37.957154605263156 125.16666666666666 70.49185855263158 50.06666666666666 108.44901315789474 50.06666666666666C 143.95731907894736 50.06666666666666 174.39300986842107 100.13333333333333 209.9013157894737 100.13333333333333C 247.85847039473686 100.13333333333333 280.3931743421053 25.03333333333333 318.35032894736844 25.03333333333333C 355.08305921052636 25.03333333333333 386.5682565789474 100.13333333333333 423.3009868421053 100.13333333333333C 461.2581414473685 100.13333333333333 493.79284539473684 50.06666666666666 531.75 50.06666666666666"
                                                    pathFrom="M -1 175.23333333333332 L -1 175.23333333333332 L 108.44901315789474 175.23333333333332 L 209.9013157894737 175.23333333333332 L 318.35032894736844 175.23333333333332 L 423.3009868421053 175.23333333333332 L 531.75 175.23333333333332"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG2224"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0">
                                                    <g id="SvgjsG2226" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskd9kns8xh)">
                                                        <circle id="SvgjsCircle2227" r="5" cx="0"
                                                            cy="125.16666666666666"
                                                            class="apexcharts-marker no-pointer-events wl5d5e9ih"
                                                            stroke="#ffffff" fill="#4099ff" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                            index="0" default-marker-size="5"></circle>
                                                        <circle id="SvgjsCircle2228" r="5" cx="108.44901315789474"
                                                            cy="50.06666666666666"
                                                            class="apexcharts-marker no-pointer-events ww22g3qun"
                                                            stroke="#ffffff" fill="#4099ff" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                            index="0" default-marker-size="5"></circle>
                                                    </g>
                                                    <g id="SvgjsG2229" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskd9kns8xh)">
                                                        <circle id="SvgjsCircle2230" r="5" cx="209.9013157894737"
                                                            cy="100.13333333333333"
                                                            class="apexcharts-marker no-pointer-events w08bgacxn"
                                                            stroke="#ffffff" fill="#4099ff" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                            index="0" default-marker-size="5"></circle>
                                                    </g>
                                                    <g id="SvgjsG2231" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskd9kns8xh)">
                                                        <circle id="SvgjsCircle2232" r="5" cx="318.35032894736844"
                                                            cy="25.03333333333333"
                                                            class="apexcharts-marker no-pointer-events wxw8z9frs"
                                                            stroke="#ffffff" fill="#4099ff" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                            index="0" default-marker-size="5"></circle>
                                                    </g>
                                                    <g id="SvgjsG2233" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskd9kns8xh)">
                                                        <circle id="SvgjsCircle2234" r="5" cx="423.3009868421053"
                                                            cy="100.13333333333333"
                                                            class="apexcharts-marker no-pointer-events w6j35d3i1"
                                                            stroke="#ffffff" fill="#4099ff" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                            index="0" default-marker-size="5"></circle>
                                                    </g>
                                                    <g id="SvgjsG2235" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskd9kns8xh)">
                                                        <circle id="SvgjsCircle2236" r="5" cx="531.75"
                                                            cy="50.06666666666666"
                                                            class="apexcharts-marker no-pointer-events wxchb9p5w"
                                                            stroke="#ffffff" fill="#4099ff" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                            index="0" default-marker-size="5"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2242" class="apexcharts-series" zIndex="1"
                                                seriesName="Commerce" data:longestSeries="true" rel="2"
                                                data:realIndex="1">
                                                <path id="SvgjsPath2260"
                                                    d="M 0 25.03333333333333C 37.957154605263156 25.03333333333333 70.49185855263158 100.13333333333333 108.44901315789474 100.13333333333333C 143.95731907894736 100.13333333333333 174.39300986842107 12.516666666666652 209.9013157894737 12.516666666666652C 247.85847039473686 12.516666666666652 280.3931743421053 62.58333333333333 318.35032894736844 62.58333333333333C 355.08305921052636 62.58333333333333 386.5682565789474 7.509999999999991 423.3009868421053 7.509999999999991C 461.2581414473685 7.509999999999991 493.79284539473684 87.61666666666666 531.75 87.61666666666666"
                                                    fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient2256)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                    stroke-dasharray="0" class="apexcharts-line" index="1"
                                                    clip-path="url(#gridRectMaskd9kns8xh)"
                                                    pathTo="M 0 25.03333333333333C 37.957154605263156 25.03333333333333 70.49185855263158 100.13333333333333 108.44901315789474 100.13333333333333C 143.95731907894736 100.13333333333333 174.39300986842107 12.516666666666652 209.9013157894737 12.516666666666652C 247.85847039473686 12.516666666666652 280.3931743421053 62.58333333333333 318.35032894736844 62.58333333333333C 355.08305921052636 62.58333333333333 386.5682565789474 7.509999999999991 423.3009868421053 7.509999999999991C 461.2581414473685 7.509999999999991 493.79284539473684 87.61666666666666 531.75 87.61666666666666"
                                                    pathFrom="M -1 175.23333333333332 L -1 175.23333333333332 L 108.44901315789474 175.23333333333332 L 209.9013157894737 175.23333333333332 L 318.35032894736844 175.23333333333332 L 423.3009868421053 175.23333333333332 L 531.75 175.23333333333332"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG2243"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="1">
                                                    <g id="SvgjsG2245" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskd9kns8xh)">
                                                        <circle id="SvgjsCircle2246" r="5" cx="0" cy="25.03333333333333"
                                                            class="apexcharts-marker no-pointer-events w9ihf9tu5"
                                                            stroke="#ffffff" fill="#2ed8b6" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                            index="1" default-marker-size="5"></circle>
                                                        <circle id="SvgjsCircle2247" r="5" cx="108.44901315789474"
                                                            cy="100.13333333333333"
                                                            class="apexcharts-marker no-pointer-events w7gnjcja9"
                                                            stroke="#ffffff" fill="#2ed8b6" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                            index="1" default-marker-size="5"></circle>
                                                    </g>
                                                    <g id="SvgjsG2248" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskd9kns8xh)">
                                                        <circle id="SvgjsCircle2249" r="5" cx="209.9013157894737"
                                                            cy="12.516666666666652"
                                                            class="apexcharts-marker no-pointer-events wriydnow2"
                                                            stroke="#ffffff" fill="#2ed8b6" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                            index="1" default-marker-size="5"></circle>
                                                    </g>
                                                    <g id="SvgjsG2250" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskd9kns8xh)">
                                                        <circle id="SvgjsCircle2251" r="5" cx="318.35032894736844"
                                                            cy="62.58333333333333"
                                                            class="apexcharts-marker no-pointer-events w4zrxpdku"
                                                            stroke="#ffffff" fill="#2ed8b6" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                            index="1" default-marker-size="5"></circle>
                                                    </g>
                                                    <g id="SvgjsG2252" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskd9kns8xh)">
                                                        <circle id="SvgjsCircle2253" r="5" cx="423.3009868421053"
                                                            cy="7.509999999999991"
                                                            class="apexcharts-marker no-pointer-events wp2u8d6w7"
                                                            stroke="#ffffff" fill="#2ed8b6" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                            index="1" default-marker-size="5"></circle>
                                                    </g>
                                                    <g id="SvgjsG2254" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskd9kns8xh)">
                                                        <circle id="SvgjsCircle2255" r="5" cx="531.75"
                                                            cy="87.61666666666666"
                                                            class="apexcharts-marker no-pointer-events w2ujhtydh"
                                                            stroke="#ffffff" fill="#2ed8b6" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                            index="1" default-marker-size="5"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2225" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG2244" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine2284" x1="0" y1="0" x2="531.75" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2285" x1="0" y1="0" x2="531.75" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2286" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2287" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText2289"
                                                    font-family="Helvetica, Arial, sans-serif" x="15.01377467105263"
                                                    y="179.2" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2290">15 Jan</tspan>
                                                    <title>15 Jan</title>
                                                </text><text id="SvgjsText2292"
                                                    font-family="Helvetica, Arial, sans-serif" x="74.48581414473685"
                                                    y="179.2" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2293">Feb '00</tspan>
                                                    <title>Feb '00</title>
                                                </text><text id="SvgjsText2295"
                                                    font-family="Helvetica, Arial, sans-serif" x="123.46278782894731"
                                                    y="179.2" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2296">15 Feb</tspan>
                                                    <title>15 Feb</title>
                                                </text><text id="SvgjsText2298"
                                                    font-family="Helvetica, Arial, sans-serif" x="175.93811677631567"
                                                    y="179.2" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2299">Mar '00</tspan>
                                                    <title>Mar '00</title>
                                                </text><text id="SvgjsText2301"
                                                    font-family="Helvetica, Arial, sans-serif" x="224.91509046052613"
                                                    y="179.2" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2302">15 Mar</tspan>
                                                    <title>15 Mar</title>
                                                </text><text id="SvgjsText2304"
                                                    font-family="Helvetica, Arial, sans-serif" x="284.3871299342105"
                                                    y="179.2" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2305">Apr '00</tspan>
                                                    <title>Apr '00</title>
                                                </text><text id="SvgjsText2307"
                                                    font-family="Helvetica, Arial, sans-serif" x="333.3641036184214"
                                                    y="179.2" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2308">15 Apr</tspan>
                                                    <title>15 Apr</title>
                                                </text><text id="SvgjsText2310"
                                                    font-family="Helvetica, Arial, sans-serif" x="389.3377878289481"
                                                    y="179.2" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2311">May '00</tspan>
                                                    <title>May '00</title>
                                                </text><text id="SvgjsText2313"
                                                    font-family="Helvetica, Arial, sans-serif" x="438.31476151315894"
                                                    y="179.2" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2314">15 May</tspan>
                                                    <title>15 May</title>
                                                </text><text id="SvgjsText2316"
                                                    font-family="Helvetica, Arial, sans-serif" x="497.78680098684356"
                                                    y="179.2" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2317">Jun '00</tspan>
                                                    <title>Jun '00</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG2341" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2342" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2343" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect2344" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect2345" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(115, 180, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(89, 224, 197);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body bg-patern">
                                <div class="row">
                                    <div class="col-auto"><span>Customers</span></div>
                                    <div class="col text-end">
                                        <h2 class="mb-0">826</h2><span class="text-c-green">8.2%<i
                                                class="feather icon-trending-up mx-1"></i></span>
                                    </div>
                                </div>
                                <div id="customer-chart" style="min-height: 156.8px;">
                                    <div id="apexchartsplstjbsr"
                                        class="apexcharts-canvas apexchartsplstjbsr apexcharts-theme-light"
                                        style="width: 253px; height: 156.8px;"><svg id="SvgjsSvg2346" width="253"
                                            height="156.8" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="253" height="156.8">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml">
                                                </div>
                                            </foreignObject>
                                            <g id="SvgjsG2348" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(51.5, 20)">
                                                <defs id="SvgjsDefs2347">
                                                    <clipPath id="gridRectMaskplstjbsr">
                                                        <rect id="SvgjsRect2349" width="154" height="134" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskplstjbsr"></clipPath>
                                                    <clipPath id="nonForecastMaskplstjbsr"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskplstjbsr">
                                                        <rect id="SvgjsRect2350" width="154" height="134" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG2351" class="apexcharts-pie">
                                                    <g id="SvgjsG2352" transform="translate(0, 0) scale(1)">
                                                        <circle id="SvgjsCircle2353" r="44.560975609756106" cx="75"
                                                            cy="65" fill="transparent"></circle>
                                                        <g id="SvgjsG2354" class="apexcharts-slices">
                                                            <g id="SvgjsG2355"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="New" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2356"
                                                                    d="M 75 5.58536585365853 A 59.41463414634147 59.41463414634147 0 1 1 18.041100243968152 48.09489753577575 L 32.28082518297611 52.321173151831815 A 44.560975609756106 44.560975609756106 0 1 0 75 20.439024390243894 L 75 5.58536585365853 z "
                                                                    fill="rgba(64,153,255,1)" fill-opacity="1 1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                    index="0" j="0" data:angle="286.53061224489795"
                                                                    data:startAngle="0" data:strokeWidth="0"
                                                                    data:value="39"
                                                                    data:pathOrig="M 75 5.58536585365853 A 59.41463414634147 59.41463414634147 0 1 1 18.041100243968152 48.09489753577575 L 32.28082518297611 52.321173151831815 A 44.560975609756106 44.560975609756106 0 1 0 75 20.439024390243894 L 75 5.58536585365853 z ">
                                                                </path>
                                                            </g>
                                                            <g id="SvgjsG2357"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="Return" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath2358"
                                                                    d="M 18.041100243968152 48.09489753577575 A 59.41463414634147 59.41463414634147 0 0 1 74.98963019015542 5.58536675859515 L 74.99222264261657 20.439025068946357 A 44.560975609756106 44.560975609756106 0 0 0 32.28082518297611 52.321173151831815 L 18.041100243968152 48.09489753577575 z "
                                                                    fill="rgba(46,216,182,1)" fill-opacity="1 1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                    index="0" j="1" data:angle="73.46938775510205"
                                                                    data:startAngle="286.53061224489795"
                                                                    data:strokeWidth="0" data:value="10"
                                                                    data:pathOrig="M 18.041100243968152 48.09489753577575 A 59.41463414634147 59.41463414634147 0 0 1 74.98963019015542 5.58536675859515 L 74.99222264261657 20.439025068946357 A 44.560975609756106 44.560975609756106 0 0 0 32.28082518297611 52.321173151831815 L 18.041100243968152 48.09489753577575 z ">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2359" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2360" x1="0" y1="0" x2="150" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(64, 153, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(46, 216, 182);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h3 class="m-0"><i class="fas fa-circle f-10 m-r-5 text-success"></i>674</h3>
                                        <span class="ms-3">New</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-0"><i class="fas fa-circle text-primary f-10 m-r-5"></i>182</h3>
                                        <span class="ms-3">Return</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-primary text-white">
                            <div class="card-body bg-patern-white">
                                <div class="row">
                                    <div class="col-auto"><span>Customers</span></div>
                                    <div class="col text-end">
                                        <h2 class="mb-0 text-white">826</h2><span class="text-white">8.2%<i
                                                class="feather icon-trending-up mx-1"></i></span>
                                    </div>
                                </div>
                                <div id="customer-chart1" style="min-height: 156.8px;">
                                    <div id="apexchartsc73hq9p8"
                                        class="apexcharts-canvas apexchartsc73hq9p8 apexcharts-theme-light"
                                        style="width: 253px; height: 156.8px;"><svg id="SvgjsSvg2361" width="253"
                                            height="156.8" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="253" height="156.8">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml">
                                                </div>
                                            </foreignObject>
                                            <g id="SvgjsG2363" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(51.5, 20)">
                                                <defs id="SvgjsDefs2362">
                                                    <clipPath id="gridRectMaskc73hq9p8">
                                                        <rect id="SvgjsRect2364" width="154" height="134" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskc73hq9p8"></clipPath>
                                                    <clipPath id="nonForecastMaskc73hq9p8"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskc73hq9p8">
                                                        <rect id="SvgjsRect2365" width="154" height="134" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG2366" class="apexcharts-pie">
                                                    <g id="SvgjsG2367" transform="translate(0, 0) scale(1)">
                                                        <circle id="SvgjsCircle2368" r="44.560975609756106" cx="75"
                                                            cy="65" fill="transparent"></circle>
                                                        <g id="SvgjsG2369" class="apexcharts-slices">
                                                            <g id="SvgjsG2370"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="New" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2371"
                                                                    d="M 75 5.58536585365853 A 59.41463414634147 59.41463414634147 0 1 1 49.220956378283596 118.53073566366567 L 55.665717283712695 105.14805174774926 A 44.560975609756106 44.560975609756106 0 1 0 75 20.439024390243894 L 75 5.58536585365853 z "
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1 1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                    index="0" j="0" data:angle="205.71428571428572"
                                                                    data:startAngle="0" data:strokeWidth="0"
                                                                    data:value="20"
                                                                    data:pathOrig="M 75 5.58536585365853 A 59.41463414634147 59.41463414634147 0 1 1 49.220956378283596 118.53073566366567 L 55.665717283712695 105.14805174774926 A 44.560975609756106 44.560975609756106 0 1 0 75 20.439024390243894 L 75 5.58536585365853 z ">
                                                                </path>
                                                            </g>
                                                            <g id="SvgjsG2372"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="Return" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath2373"
                                                                    d="M 49.220956378283596 118.53073566366567 A 59.41463414634147 59.41463414634147 0 0 1 74.98963019015542 5.58536675859515 L 74.99222264261657 20.439025068946357 A 44.560975609756106 44.560975609756106 0 0 0 55.665717283712695 105.14805174774926 L 49.220956378283596 118.53073566366567 z "
                                                                    fill="rgba(46,216,182,1)" fill-opacity="1 1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                    index="0" j="1" data:angle="154.28571428571428"
                                                                    data:startAngle="205.71428571428572"
                                                                    data:strokeWidth="0" data:value="15"
                                                                    data:pathOrig="M 49.220956378283596 118.53073566366567 A 59.41463414634147 59.41463414634147 0 0 1 74.98963019015542 5.58536675859515 L 74.99222264261657 20.439025068946357 A 44.560975609756106 44.560975609756106 0 0 0 55.665717283712695 105.14805174774926 L 49.220956378283596 118.53073566366567 z ">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2374" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2375" x1="0" y1="0" x2="150" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 255, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(46, 216, 182);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h3 class="m-0 text-white"><i
                                                class="fas fa-circle f-10 m-r-5 text-success"></i>674</h3><span
                                            class="ms-3">New</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-0 text-white"><i
                                                class="fas fa-circle f-10 m-r-5 text-white"></i>182</h3><span
                                            class="ms-3">Return</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card seo-card overflow-hidden">
                    <div class="card-body seo-statustic"><i class="feather icon-save f-20 text-danger"></i>
                        <h5 class="mb-1">65%</h5>
                        <p>Memory</p>
                    </div>
                    <div class="seo-chart">
                        <div id="seo-card1" style="min-height: 145px;">
                            <div id="apexchartsmuy4l69kl"
                                class="apexcharts-canvas apexchartsmuy4l69kl apexcharts-theme-light"
                                style="width: 412px; height: 145px;"><svg id="SvgjsSvg2377" width="412" height="145"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="412" height="145">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                            style="max-height: 72.5px;"></div>
                                    </foreignObject>
                                    <rect id="SvgjsRect2381" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG2430" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)">
                                    </g>
                                    <g id="SvgjsG2379" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 1)">
                                        <defs id="SvgjsDefs2378">
                                            <clipPath id="gridRectMaskmuy4l69kl">
                                                <rect id="SvgjsRect2383" width="418" height="155" x="-4" y="-6" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskmuy4l69kl"></clipPath>
                                            <clipPath id="nonForecastMaskmuy4l69kl"></clipPath>
                                            <clipPath id="gridRectMarkerMaskmuy4l69kl">
                                                <rect id="SvgjsRect2384" width="416" height="147" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2389" x1="0" y1="1" x2="1" y2="1">
                                                <stop id="SvgjsStop2390" stop-opacity="1"
                                                    stop-color="rgba(255,83,112,1)" offset="0"></stop>
                                                <stop id="SvgjsStop2391" stop-opacity="0.8"
                                                    stop-color="rgba(255,134,154,0.8)" offset="1"></stop>
                                                <stop id="SvgjsStop2392" stop-opacity="0.8"
                                                    stop-color="rgba(255,134,154,0.8)" offset="1"></stop>
                                                <stop id="SvgjsStop2393" stop-opacity="1"
                                                    stop-color="rgba(255,83,112,1)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine2382" x1="246.70000000000002" y1="0" x2="246.70000000000002"
                                            y2="143" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-xcrosshairs" x="246.70000000000002" y="0" width="1"
                                            height="143" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                            stroke-width="1"></line>
                                        <g id="SvgjsG2396" class="apexcharts-grid">
                                            <g id="SvgjsG2397" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine2400" x1="0" y1="0" x2="412" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2401" x1="0" y1="8.411764705882353" x2="412"
                                                    y2="8.411764705882353" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2402" x1="0" y1="16.823529411764707" x2="412"
                                                    y2="16.823529411764707" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2403" x1="0" y1="25.235294117647058" x2="412"
                                                    y2="25.235294117647058" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2404" x1="0" y1="33.64705882352941" x2="412"
                                                    y2="33.64705882352941" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2405" x1="0" y1="42.05882352941177" x2="412"
                                                    y2="42.05882352941177" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2406" x1="0" y1="50.47058823529412" x2="412"
                                                    y2="50.47058823529412" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2407" x1="0" y1="58.88235294117648" x2="412"
                                                    y2="58.88235294117648" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2408" x1="0" y1="67.29411764705883" x2="412"
                                                    y2="67.29411764705883" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2409" x1="0" y1="75.70588235294117" x2="412"
                                                    y2="75.70588235294117" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2410" x1="0" y1="84.11764705882352" x2="412"
                                                    y2="84.11764705882352" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2411" x1="0" y1="92.52941176470587" x2="412"
                                                    y2="92.52941176470587" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2412" x1="0" y1="100.94117647058822" x2="412"
                                                    y2="100.94117647058822" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2413" x1="0" y1="109.35294117647057" x2="412"
                                                    y2="109.35294117647057" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2414" x1="0" y1="117.76470588235291" x2="412"
                                                    y2="117.76470588235291" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2415" x1="0" y1="126.17647058823526" x2="412"
                                                    y2="126.17647058823526" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2416" x1="0" y1="134.58823529411762" x2="412"
                                                    y2="134.58823529411762" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2417" x1="0" y1="142.99999999999997" x2="412"
                                                    y2="142.99999999999997" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2398" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine2419" x1="0" y1="143" x2="412" y2="143"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2418" x1="0" y1="1" x2="0" y2="143" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2399" class="apexcharts-grid-borders" style="display: none;"></g>
                                        <g id="SvgjsG2385" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG2386" class="apexcharts-series" zIndex="0"
                                                seriesName="series-1" data:longestSeries="true" rel="1"
                                                data:realIndex="0">
                                                <path id="SvgjsPath2394"
                                                    d="M 0 143 L 0 75.70588235294117C 28.84 75.70588235294117 53.56 92.52941176470588 82.4 92.52941176470588C 111.24000000000001 92.52941176470588 135.96 50.4705882352941 164.8 50.4705882352941C 193.64000000000001 50.4705882352941 218.36 67.29411764705881 247.20000000000002 67.29411764705881C 276.04 67.29411764705881 300.76000000000005 8.411764705882348 329.6 8.411764705882348C 358.44 8.411764705882348 383.16 33.647058823529406 412 33.647058823529406C 412 33.647058823529406 412 33.647058823529406 412 143M 412 33.647058823529406z"
                                                    fill="url(#SvgjsLinearGradient2389)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskmuy4l69kl)"
                                                    pathTo="M 0 143 L 0 75.70588235294117C 28.84 75.70588235294117 53.56 92.52941176470588 82.4 92.52941176470588C 111.24000000000001 92.52941176470588 135.96 50.4705882352941 164.8 50.4705882352941C 193.64000000000001 50.4705882352941 218.36 67.29411764705881 247.20000000000002 67.29411764705881C 276.04 67.29411764705881 300.76000000000005 8.411764705882348 329.6 8.411764705882348C 358.44 8.411764705882348 383.16 33.647058823529406 412 33.647058823529406C 412 33.647058823529406 412 33.647058823529406 412 143M 412 33.647058823529406z"
                                                    pathFrom="M -1 151.41176470588235 L -1 151.41176470588235 L 82.4 151.41176470588235 L 164.8 151.41176470588235 L 247.20000000000002 151.41176470588235 L 329.6 151.41176470588235 L 412 151.41176470588235">
                                                </path>
                                                <path id="SvgjsPath2395"
                                                    d="M 0 75.70588235294117C 28.84 75.70588235294117 53.56 92.52941176470588 82.4 92.52941176470588C 111.24000000000001 92.52941176470588 135.96 50.4705882352941 164.8 50.4705882352941C 193.64000000000001 50.4705882352941 218.36 67.29411764705881 247.20000000000002 67.29411764705881C 276.04 67.29411764705881 300.76000000000005 8.411764705882348 329.6 8.411764705882348C 358.44 8.411764705882348 383.16 33.647058823529406 412 33.647058823529406"
                                                    fill="none" fill-opacity="1" stroke="#ff5370" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskmuy4l69kl)"
                                                    pathTo="M 0 75.70588235294117C 28.84 75.70588235294117 53.56 92.52941176470588 82.4 92.52941176470588C 111.24000000000001 92.52941176470588 135.96 50.4705882352941 164.8 50.4705882352941C 193.64000000000001 50.4705882352941 218.36 67.29411764705881 247.20000000000002 67.29411764705881C 276.04 67.29411764705881 300.76000000000005 8.411764705882348 329.6 8.411764705882348C 358.44 8.411764705882348 383.16 33.647058823529406 412 33.647058823529406"
                                                    pathFrom="M -1 151.41176470588235 L -1 151.41176470588235 L 82.4 151.41176470588235 L 164.8 151.41176470588235 L 247.20000000000002 151.41176470588235 L 329.6 151.41176470588235 L 412 151.41176470588235"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG2387"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2434" r="0" cx="247.20000000000002"
                                                            cy="67.29411764705881"
                                                            class="apexcharts-marker wff4jzbuu no-pointer-events"
                                                            stroke="#ffffff" fill="#ff5370" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2388" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine2420" x1="0" y1="0" x2="412" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2421" x1="0" y1="0" x2="412" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2422" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2423" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG2431" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2432" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2433" class="apexcharts-point-annotations"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                    style="left: 166.934px; top: 70.2941px;">
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                        style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(255, 83, 112); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Ticket </span><span
                                                    class="apexcharts-tooltip-text-y-value">50</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center"><i class="fa fa-envelope-open text-primary d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-primary">8.62k</span> Subscribers</h4>
                        <p class="m-b-20">Your main list is growing</p><button
                            class="btn btn-primary btn-sm btn-round">Manage List</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center"><i class="fab fa-twitter text-success d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-success">+40</span> Followers</h4>
                        <p class="m-b-20">Your main list is growing</p><button
                            class="btn btn-success btn-sm btn-round">Check them out</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h6>Conversions</h6>
                        <h4 class="m-0">0.85% <span class="text-primary"><i class="feather icon-arrow-up"></i>
                                0.50%</span></h4><span>Purchased</span>
                    </div>
                    <div id="coversions-chart1" style="min-height: 65px;">
                        <div id="apexchartswoagquar" class="apexcharts-canvas apexchartswoagquar apexcharts-theme-light"
                            style="width: 412px; height: 65px;"><svg id="SvgjsSvg2435" width="412" height="65"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="412" height="65">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 32.5px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect2443" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2747" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2437" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(11.665116279069768, 0)">
                                    <defs id="SvgjsDefs2436">
                                        <linearGradient id="SvgjsLinearGradient2439" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2440" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop2441" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop2442" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskwoagquar">
                                            <rect id="SvgjsRect2445" width="416" height="69" x="-9.665116279069768"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskwoagquar"></clipPath>
                                        <clipPath id="nonForecastMaskwoagquar"></clipPath>
                                        <clipPath id="gridRectMarkerMaskwoagquar">
                                            <rect id="SvgjsRect2446" width="400.6697674418605" height="69" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient2452" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2453" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2454" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2455" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2458" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2459" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2460" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2461" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2464" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2465" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2466" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2467" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2470" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2471" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2472" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2473" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2476" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2477" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2478" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2479" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2482" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2483" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2484" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2485" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2488" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2489" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2490" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2491" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2494" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2495" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2496" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2497" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2500" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2501" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2502" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2503" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2506" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2507" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2508" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2509" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2512" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2513" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2514" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2515" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2518" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2519" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2520" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2521" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2524" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2525" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2526" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2527" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2530" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2531" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2532" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2533" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2536" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2537" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2538" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2539" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2542" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2543" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2544" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2545" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2548" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2549" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2550" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2551" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2554" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2555" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2556" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2557" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2560" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2561" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2562" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2563" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2566" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2567" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2568" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2569" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2572" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2573" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2574" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2575" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2578" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2579" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2580" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2581" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2584" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2585" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2586" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2587" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2590" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2591" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2592" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2593" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2596" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2597" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2598" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2599" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2602" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2603" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2604" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2605" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2608" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2609" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2610" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2611" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2614" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2615" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2616" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2617" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2620" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2621" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2622" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2623" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2626" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2627" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2628" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2629" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2632" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2633" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2634" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2635" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2638" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2639" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2640" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2641" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2644" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2645" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2646" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2647" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2650" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2651" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2652" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2653" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2656" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2657" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2658" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2659" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2662" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2663" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2664" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2665" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2668" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2669" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2670" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2671" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2674" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2675" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2676" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2677" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2680" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2681" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2682" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2683" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2686" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2687" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2688" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2689" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2692" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2693" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2694" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2695" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2698" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2699" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2700" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2701" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2704" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2705" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2706" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2707" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2710" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2711" stop-opacity="0.99"
                                                stop-color="rgba(64,153,255,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2712" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2713" stop-opacity="0.99"
                                                stop-color="rgba(115,180,255,0.99)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <line id="SvgjsLine2444" x1="0" y1="0" x2="0" y2="65" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                        height="65" fill="url(#SvgjsLinearGradient2439)" filter="none"
                                        fill-opacity="0.9" stroke-width="0"></line>
                                    <g id="SvgjsG2716" class="apexcharts-grid">
                                        <g id="SvgjsG2717" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine2720" x1="-7.6651162790697684" y1="0"
                                                x2="404.33488372093024" y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2721" x1="-7.6651162790697684" y1="7.222222222222222"
                                                x2="404.33488372093024" y2="7.222222222222222" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2722" x1="-7.6651162790697684" y1="14.444444444444445"
                                                x2="404.33488372093024" y2="14.444444444444445" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2723" x1="-7.6651162790697684" y1="21.666666666666668"
                                                x2="404.33488372093024" y2="21.666666666666668" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2724" x1="-7.6651162790697684" y1="28.88888888888889"
                                                x2="404.33488372093024" y2="28.88888888888889" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2725" x1="-7.6651162790697684" y1="36.111111111111114"
                                                x2="404.33488372093024" y2="36.111111111111114" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2726" x1="-7.6651162790697684" y1="43.333333333333336"
                                                x2="404.33488372093024" y2="43.333333333333336" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2727" x1="-7.6651162790697684" y1="50.55555555555556"
                                                x2="404.33488372093024" y2="50.55555555555556" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2728" x1="-7.6651162790697684" y1="57.77777777777778"
                                                x2="404.33488372093024" y2="57.77777777777778" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2729" x1="-7.6651162790697684" y1="65"
                                                x2="404.33488372093024" y2="65" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2718" class="apexcharts-gridlines-vertical" style="display: none;">
                                        </g>
                                        <line id="SvgjsLine2731" x1="0" y1="65" x2="396.6697674418605" y2="65"
                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2730" x1="0" y1="1" x2="0" y2="65" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG2719" class="apexcharts-grid-borders" style="display: none;"></g>
                                    <g id="SvgjsG2447" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG2448" class="apexcharts-series" rel="1" seriesName="series-1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath2457"
                                                d="M -3.6899513250405622 65.001 L -3.6899513250405622 46.94544444444444 L 3.6899513250405622 46.94544444444444 L 3.6899513250405622 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2452)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M -3.6899513250405622 65.001 L -3.6899513250405622 46.94544444444444 L 3.6899513250405622 46.94544444444444 L 3.6899513250405622 65.001 Z"
                                                pathFrom="M -3.6899513250405622 65.001 L -3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L -3.6899513250405622 65.001 Z"
                                                cy="46.94444444444444" cx="3.6899513250405622" j="0" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2463"
                                                d="M 5.534926987560844 65.001 L 5.534926987560844 17.334333333333337 L 12.914829637641969 17.334333333333337 L 12.914829637641969 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2458)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 5.534926987560844 65.001 L 5.534926987560844 17.334333333333337 L 12.914829637641969 17.334333333333337 L 12.914829637641969 65.001 Z"
                                                pathFrom="M 5.534926987560844 65.001 L 5.534926987560844 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 5.534926987560844 65.001 Z"
                                                cy="17.333333333333336" cx="12.914829637641969" j="1" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2469"
                                                d="M 14.75980530016225 65.001 L 14.75980530016225 35.38988888888888 L 22.139707950243377 35.38988888888888 L 22.139707950243377 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2464)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 14.75980530016225 65.001 L 14.75980530016225 35.38988888888888 L 22.139707950243377 35.38988888888888 L 22.139707950243377 65.001 Z"
                                                pathFrom="M 14.75980530016225 65.001 L 14.75980530016225 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 14.75980530016225 65.001 Z"
                                                cy="35.388888888888886" cx="22.139707950243377" j="2" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2475"
                                                d="M 23.984683612763654 65.001 L 23.984683612763654 0.7232222222222143 L 31.364586262844778 0.7232222222222143 L 31.364586262844778 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2470)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 23.984683612763654 65.001 L 23.984683612763654 0.7232222222222143 L 31.364586262844778 0.7232222222222143 L 31.364586262844778 65.001 Z"
                                                pathFrom="M 23.984683612763654 65.001 L 23.984683612763654 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 23.984683612763654 65.001 Z"
                                                cy="0.7222222222222143" cx="31.364586262844778" j="3" val="89"
                                                barHeight="64.27777777777779" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2481"
                                                d="M 33.209561925365065 65.001 L 33.209561925365065 19.501 L 40.589464575446186 19.501 L 40.589464575446186 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2476)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 33.209561925365065 65.001 L 33.209561925365065 19.501 L 40.589464575446186 19.501 L 40.589464575446186 65.001 Z"
                                                pathFrom="M 33.209561925365065 65.001 L 33.209561925365065 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 33.209561925365065 65.001 Z"
                                                cy="19.5" cx="40.589464575446186" j="4" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2487"
                                                d="M 42.43444023796647 65.001 L 42.43444023796647 46.94544444444444 L 49.81434288804759 46.94544444444444 L 49.81434288804759 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2482)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 42.43444023796647 65.001 L 42.43444023796647 46.94544444444444 L 49.81434288804759 46.94544444444444 L 49.81434288804759 65.001 Z"
                                                pathFrom="M 42.43444023796647 65.001 L 42.43444023796647 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 42.43444023796647 65.001 Z"
                                                cy="46.94444444444444" cx="49.81434288804759" j="5" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2493"
                                                d="M 51.659318550567875 65.001 L 51.659318550567875 33.22322222222222 L 59.039221200648996 33.22322222222222 L 59.039221200648996 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2488)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 51.659318550567875 65.001 L 51.659318550567875 33.22322222222222 L 59.039221200648996 33.22322222222222 L 59.039221200648996 65.001 Z"
                                                pathFrom="M 51.659318550567875 65.001 L 51.659318550567875 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 51.659318550567875 65.001 Z"
                                                cy="33.22222222222222" cx="59.039221200648996" j="6" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2499"
                                                d="M 60.88419686316929 65.001 L 60.88419686316929 56.33433333333333 L 68.26409951325041 56.33433333333333 L 68.26409951325041 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2494)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 60.88419686316929 65.001 L 60.88419686316929 56.33433333333333 L 68.26409951325041 56.33433333333333 L 68.26409951325041 65.001 Z"
                                                pathFrom="M 60.88419686316929 65.001 L 60.88419686316929 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 60.88419686316929 65.001 Z"
                                                cy="56.333333333333336" cx="68.26409951325041" j="7" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2505"
                                                d="M 70.10907517577068 65.001 L 70.10907517577068 39.001 L 77.4889778258518 39.001 L 77.4889778258518 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2500)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 70.10907517577068 65.001 L 70.10907517577068 39.001 L 77.4889778258518 39.001 L 77.4889778258518 65.001 Z"
                                                pathFrom="M 70.10907517577068 65.001 L 70.10907517577068 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 70.10907517577068 65.001 Z"
                                                cy="39" cx="77.4889778258518" j="8" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2511"
                                                d="M 79.33395348837209 65.001 L 79.33395348837209 58.501 L 86.71385613845321 58.501 L 86.71385613845321 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2506)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 79.33395348837209 65.001 L 79.33395348837209 58.501 L 86.71385613845321 58.501 L 86.71385613845321 65.001 Z"
                                                pathFrom="M 79.33395348837209 65.001 L 79.33395348837209 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 79.33395348837209 65.001 Z"
                                                cy="58.5" cx="86.71385613845321" j="9" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2517"
                                                d="M 88.5588318009735 65.001 L 88.5588318009735 26.001 L 95.93873445105461 26.001 L 95.93873445105461 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2512)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 88.5588318009735 65.001 L 88.5588318009735 26.001 L 95.93873445105461 26.001 L 95.93873445105461 65.001 Z"
                                                pathFrom="M 88.5588318009735 65.001 L 88.5588318009735 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 88.5588318009735 65.001 Z"
                                                cy="26" cx="95.93873445105461" j="10" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2523"
                                                d="M 97.7837101135749 65.001 L 97.7837101135749 46.94544444444444 L 105.16361276365602 46.94544444444444 L 105.16361276365602 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2518)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 97.7837101135749 65.001 L 97.7837101135749 46.94544444444444 L 105.16361276365602 46.94544444444444 L 105.16361276365602 65.001 Z"
                                                pathFrom="M 97.7837101135749 65.001 L 97.7837101135749 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 97.7837101135749 65.001 Z"
                                                cy="46.94444444444444" cx="105.16361276365602" j="11" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2529"
                                                d="M 107.0085884261763 65.001 L 107.0085884261763 17.334333333333337 L 114.38849107625742 17.334333333333337 L 114.38849107625742 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2524)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 107.0085884261763 65.001 L 107.0085884261763 17.334333333333337 L 114.38849107625742 17.334333333333337 L 114.38849107625742 65.001 Z"
                                                pathFrom="M 107.0085884261763 65.001 L 107.0085884261763 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 107.0085884261763 65.001 Z"
                                                cy="17.333333333333336" cx="114.38849107625742" j="12" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2535"
                                                d="M 116.23346673877771 65.001 L 116.23346673877771 35.38988888888888 L 123.61336938885883 35.38988888888888 L 123.61336938885883 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2530)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 116.23346673877771 65.001 L 116.23346673877771 35.38988888888888 L 123.61336938885883 35.38988888888888 L 123.61336938885883 65.001 Z"
                                                pathFrom="M 116.23346673877771 65.001 L 116.23346673877771 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 116.23346673877771 65.001 Z"
                                                cy="35.388888888888886" cx="123.61336938885883" j="13" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2541"
                                                d="M 125.45834505137913 65.001 L 125.45834505137913 0.7232222222222143 L 132.83824770146026 0.7232222222222143 L 132.83824770146026 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2536)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 125.45834505137913 65.001 L 125.45834505137913 0.7232222222222143 L 132.83824770146026 0.7232222222222143 L 132.83824770146026 65.001 Z"
                                                pathFrom="M 125.45834505137913 65.001 L 125.45834505137913 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 125.45834505137913 65.001 Z"
                                                cy="0.7222222222222143" cx="132.83824770146026" j="14" val="89"
                                                barHeight="64.27777777777779" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2547"
                                                d="M 134.68322336398052 65.001 L 134.68322336398052 19.501 L 142.06312601406165 19.501 L 142.06312601406165 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2542)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 134.68322336398052 65.001 L 134.68322336398052 19.501 L 142.06312601406165 19.501 L 142.06312601406165 65.001 Z"
                                                pathFrom="M 134.68322336398052 65.001 L 134.68322336398052 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 134.68322336398052 65.001 Z"
                                                cy="19.5" cx="142.06312601406165" j="15" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2553"
                                                d="M 143.90810167658194 65.001 L 143.90810167658194 26.001 L 151.28800432666307 26.001 L 151.28800432666307 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2548)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 143.90810167658194 65.001 L 143.90810167658194 26.001 L 151.28800432666307 26.001 L 151.28800432666307 65.001 Z"
                                                pathFrom="M 143.90810167658194 65.001 L 143.90810167658194 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 143.90810167658194 65.001 Z"
                                                cy="26" cx="151.28800432666307" j="16" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2559"
                                                d="M 153.13297998918333 65.001 L 153.13297998918333 46.94544444444444 L 160.51288263926446 46.94544444444444 L 160.51288263926446 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2554)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 153.13297998918333 65.001 L 153.13297998918333 46.94544444444444 L 160.51288263926446 46.94544444444444 L 160.51288263926446 65.001 Z"
                                                pathFrom="M 153.13297998918333 65.001 L 153.13297998918333 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 153.13297998918333 65.001 Z"
                                                cy="46.94444444444444" cx="160.51288263926446" j="17" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2565"
                                                d="M 162.35785830178474 65.001 L 162.35785830178474 17.334333333333337 L 169.73776095186588 17.334333333333337 L 169.73776095186588 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2560)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 162.35785830178474 65.001 L 162.35785830178474 17.334333333333337 L 169.73776095186588 17.334333333333337 L 169.73776095186588 65.001 Z"
                                                pathFrom="M 162.35785830178474 65.001 L 162.35785830178474 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 162.35785830178474 65.001 Z"
                                                cy="17.333333333333336" cx="169.73776095186588" j="18" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2571"
                                                d="M 171.58273661438614 65.001 L 171.58273661438614 35.38988888888888 L 178.96263926446727 35.38988888888888 L 178.96263926446727 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2566)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 171.58273661438614 65.001 L 171.58273661438614 35.38988888888888 L 178.96263926446727 35.38988888888888 L 178.96263926446727 65.001 Z"
                                                pathFrom="M 171.58273661438614 65.001 L 171.58273661438614 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 171.58273661438614 65.001 Z"
                                                cy="35.388888888888886" cx="178.96263926446727" j="19" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2577"
                                                d="M 180.80761492698755 65.001 L 180.80761492698755 3.612111111111107 L 188.1875175770687 3.612111111111107 L 188.1875175770687 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2572)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 180.80761492698755 65.001 L 180.80761492698755 3.612111111111107 L 188.1875175770687 3.612111111111107 L 188.1875175770687 65.001 Z"
                                                pathFrom="M 180.80761492698755 65.001 L 180.80761492698755 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 180.80761492698755 65.001 Z"
                                                cy="3.611111111111107" cx="188.1875175770687" j="20" val="85"
                                                barHeight="61.38888888888889" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2583"
                                                d="M 190.03249323958897 65.001 L 190.03249323958897 19.501 L 197.4123958896701 19.501 L 197.4123958896701 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2578)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 190.03249323958897 65.001 L 190.03249323958897 19.501 L 197.4123958896701 19.501 L 197.4123958896701 65.001 Z"
                                                pathFrom="M 190.03249323958897 65.001 L 190.03249323958897 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 190.03249323958897 65.001 Z"
                                                cy="19.5" cx="197.4123958896701" j="21" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2589"
                                                d="M 199.25737155219036 65.001 L 199.25737155219036 46.94544444444444 L 206.6372742022715 46.94544444444444 L 206.6372742022715 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2584)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 199.25737155219036 65.001 L 199.25737155219036 46.94544444444444 L 206.6372742022715 46.94544444444444 L 206.6372742022715 65.001 Z"
                                                pathFrom="M 199.25737155219036 65.001 L 199.25737155219036 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 199.25737155219036 65.001 Z"
                                                cy="46.94444444444444" cx="206.6372742022715" j="22" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2595"
                                                d="M 208.48224986479178 65.001 L 208.48224986479178 33.22322222222222 L 215.86215251487292 33.22322222222222 L 215.86215251487292 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2590)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 208.48224986479178 65.001 L 208.48224986479178 33.22322222222222 L 215.86215251487292 33.22322222222222 L 215.86215251487292 65.001 Z"
                                                pathFrom="M 208.48224986479178 65.001 L 208.48224986479178 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 208.48224986479178 65.001 Z"
                                                cy="33.22222222222222" cx="215.86215251487292" j="23" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2601"
                                                d="M 217.70712817739317 65.001 L 217.70712817739317 56.33433333333333 L 225.0870308274743 56.33433333333333 L 225.0870308274743 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2596)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 217.70712817739317 65.001 L 217.70712817739317 56.33433333333333 L 225.0870308274743 56.33433333333333 L 225.0870308274743 65.001 Z"
                                                pathFrom="M 217.70712817739317 65.001 L 217.70712817739317 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 217.70712817739317 65.001 Z"
                                                cy="56.333333333333336" cx="225.0870308274743" j="24" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2607"
                                                d="M 226.9320064899946 65.001 L 226.9320064899946 39.001 L 234.31190914007573 39.001 L 234.31190914007573 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2602)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 226.9320064899946 65.001 L 226.9320064899946 39.001 L 234.31190914007573 39.001 L 234.31190914007573 65.001 Z"
                                                pathFrom="M 226.9320064899946 65.001 L 226.9320064899946 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 226.9320064899946 65.001 Z"
                                                cy="39" cx="234.31190914007573" j="25" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2613"
                                                d="M 236.15688480259598 65.001 L 236.15688480259598 58.501 L 243.53678745267712 58.501 L 243.53678745267712 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2608)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 236.15688480259598 65.001 L 236.15688480259598 58.501 L 243.53678745267712 58.501 L 243.53678745267712 65.001 Z"
                                                pathFrom="M 236.15688480259598 65.001 L 236.15688480259598 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 236.15688480259598 65.001 Z"
                                                cy="58.5" cx="243.53678745267712" j="26" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2619"
                                                d="M 245.3817631151974 65.001 L 245.3817631151974 26.001 L 252.76166576527854 26.001 L 252.76166576527854 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2614)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 245.3817631151974 65.001 L 245.3817631151974 26.001 L 252.76166576527854 26.001 L 252.76166576527854 65.001 Z"
                                                pathFrom="M 245.3817631151974 65.001 L 245.3817631151974 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 245.3817631151974 65.001 Z"
                                                cy="26" cx="252.76166576527854" j="27" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2625"
                                                d="M 254.60664142779882 65.001 L 254.60664142779882 46.94544444444444 L 261.98654407787996 46.94544444444444 L 261.98654407787996 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2620)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 254.60664142779882 65.001 L 254.60664142779882 46.94544444444444 L 261.98654407787996 46.94544444444444 L 261.98654407787996 65.001 Z"
                                                pathFrom="M 254.60664142779882 65.001 L 254.60664142779882 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 254.60664142779882 65.001 Z"
                                                cy="46.94444444444444" cx="261.98654407787996" j="28" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2631"
                                                d="M 263.8315197404002 65.001 L 263.8315197404002 17.334333333333337 L 271.21142239048135 17.334333333333337 L 271.21142239048135 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2626)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 263.8315197404002 65.001 L 263.8315197404002 17.334333333333337 L 271.21142239048135 17.334333333333337 L 271.21142239048135 65.001 Z"
                                                pathFrom="M 263.8315197404002 65.001 L 263.8315197404002 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 263.8315197404002 65.001 Z"
                                                cy="17.333333333333336" cx="271.21142239048135" j="29" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2637"
                                                d="M 273.0563980530016 65.001 L 273.0563980530016 35.38988888888888 L 280.43630070308274 35.38988888888888 L 280.43630070308274 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2632)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 273.0563980530016 65.001 L 273.0563980530016 35.38988888888888 L 280.43630070308274 35.38988888888888 L 280.43630070308274 65.001 Z"
                                                pathFrom="M 273.0563980530016 65.001 L 273.0563980530016 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 273.0563980530016 65.001 Z"
                                                cy="35.388888888888886" cx="280.43630070308274" j="30" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2643"
                                                d="M 282.28127636560305 65.001 L 282.28127636560305 0.7232222222222143 L 289.6611790156842 0.7232222222222143 L 289.6611790156842 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2638)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 282.28127636560305 65.001 L 282.28127636560305 0.7232222222222143 L 289.6611790156842 0.7232222222222143 L 289.6611790156842 65.001 Z"
                                                pathFrom="M 282.28127636560305 65.001 L 282.28127636560305 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 282.28127636560305 65.001 Z"
                                                cy="0.7222222222222143" cx="289.6611790156842" j="31" val="89"
                                                barHeight="64.27777777777779" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2649"
                                                d="M 291.50615467820444 65.001 L 291.50615467820444 19.501 L 298.8860573282856 19.501 L 298.8860573282856 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2644)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 291.50615467820444 65.001 L 291.50615467820444 19.501 L 298.8860573282856 19.501 L 298.8860573282856 65.001 Z"
                                                pathFrom="M 291.50615467820444 65.001 L 291.50615467820444 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 291.50615467820444 65.001 Z"
                                                cy="19.5" cx="298.8860573282856" j="32" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2655"
                                                d="M 300.73103299080583 65.001 L 300.73103299080583 46.94544444444444 L 308.11093564088696 46.94544444444444 L 308.11093564088696 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2650)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 300.73103299080583 65.001 L 300.73103299080583 46.94544444444444 L 308.11093564088696 46.94544444444444 L 308.11093564088696 65.001 Z"
                                                pathFrom="M 300.73103299080583 65.001 L 300.73103299080583 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 300.73103299080583 65.001 Z"
                                                cy="46.94444444444444" cx="308.11093564088696" j="33" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2661"
                                                d="M 309.9559113034072 65.001 L 309.9559113034072 33.22322222222222 L 317.33581395348835 33.22322222222222 L 317.33581395348835 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2656)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 309.9559113034072 65.001 L 309.9559113034072 33.22322222222222 L 317.33581395348835 33.22322222222222 L 317.33581395348835 65.001 Z"
                                                pathFrom="M 309.9559113034072 65.001 L 309.9559113034072 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 309.9559113034072 65.001 Z"
                                                cy="33.22222222222222" cx="317.33581395348835" j="34" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2667"
                                                d="M 319.18078961600867 65.001 L 319.18078961600867 56.33433333333333 L 326.5606922660898 56.33433333333333 L 326.5606922660898 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2662)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 319.18078961600867 65.001 L 319.18078961600867 56.33433333333333 L 326.5606922660898 56.33433333333333 L 326.5606922660898 65.001 Z"
                                                pathFrom="M 319.18078961600867 65.001 L 319.18078961600867 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 319.18078961600867 65.001 Z"
                                                cy="56.333333333333336" cx="326.5606922660898" j="35" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2673"
                                                d="M 328.40566792861006 65.001 L 328.40566792861006 39.001 L 335.7855705786912 39.001 L 335.7855705786912 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2668)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 328.40566792861006 65.001 L 328.40566792861006 39.001 L 335.7855705786912 39.001 L 335.7855705786912 65.001 Z"
                                                pathFrom="M 328.40566792861006 65.001 L 328.40566792861006 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 328.40566792861006 65.001 Z"
                                                cy="39" cx="335.7855705786912" j="36" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2679"
                                                d="M 337.63054624121145 65.001 L 337.63054624121145 58.501 L 345.0104488912926 58.501 L 345.0104488912926 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2674)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 337.63054624121145 65.001 L 337.63054624121145 58.501 L 345.0104488912926 58.501 L 345.0104488912926 65.001 Z"
                                                pathFrom="M 337.63054624121145 65.001 L 337.63054624121145 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 337.63054624121145 65.001 Z"
                                                cy="58.5" cx="345.0104488912926" j="37" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2685"
                                                d="M 346.85542455381284 65.001 L 346.85542455381284 46.94544444444444 L 354.235327203894 46.94544444444444 L 354.235327203894 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2680)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 346.85542455381284 65.001 L 346.85542455381284 46.94544444444444 L 354.235327203894 46.94544444444444 L 354.235327203894 65.001 Z"
                                                pathFrom="M 346.85542455381284 65.001 L 346.85542455381284 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 346.85542455381284 65.001 Z"
                                                cy="46.94444444444444" cx="354.235327203894" j="38" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2691"
                                                d="M 356.0803028664143 65.001 L 356.0803028664143 33.22322222222222 L 363.4602055164954 33.22322222222222 L 363.4602055164954 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2686)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 356.0803028664143 65.001 L 356.0803028664143 33.22322222222222 L 363.4602055164954 33.22322222222222 L 363.4602055164954 65.001 Z"
                                                pathFrom="M 356.0803028664143 65.001 L 356.0803028664143 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 356.0803028664143 65.001 Z"
                                                cy="33.22222222222222" cx="363.4602055164954" j="39" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2697"
                                                d="M 365.3051811790157 65.001 L 365.3051811790157 56.33433333333333 L 372.6850838290968 56.33433333333333 L 372.6850838290968 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2692)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 365.3051811790157 65.001 L 365.3051811790157 56.33433333333333 L 372.6850838290968 56.33433333333333 L 372.6850838290968 65.001 Z"
                                                pathFrom="M 365.3051811790157 65.001 L 365.3051811790157 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 365.3051811790157 65.001 Z"
                                                cy="56.333333333333336" cx="372.6850838290968" j="40" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2703"
                                                d="M 374.53005949161707 65.001 L 374.53005949161707 39.001 L 381.9099621416982 39.001 L 381.9099621416982 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2698)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 374.53005949161707 65.001 L 374.53005949161707 39.001 L 381.9099621416982 39.001 L 381.9099621416982 65.001 Z"
                                                pathFrom="M 374.53005949161707 65.001 L 374.53005949161707 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 374.53005949161707 65.001 Z"
                                                cy="39" cx="381.9099621416982" j="41" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2709"
                                                d="M 383.7549378042185 65.001 L 383.7549378042185 58.501 L 391.13484045429965 58.501 L 391.13484045429965 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2704)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 383.7549378042185 65.001 L 383.7549378042185 58.501 L 391.13484045429965 58.501 L 391.13484045429965 65.001 Z"
                                                pathFrom="M 383.7549378042185 65.001 L 383.7549378042185 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 383.7549378042185 65.001 Z"
                                                cy="58.5" cx="391.13484045429965" j="42" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2715"
                                                d="M 392.9798161168199 65.001 L 392.9798161168199 26.001 L 400.35971876690104 26.001 L 400.35971876690104 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2710)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskwoagquar)"
                                                pathTo="M 392.9798161168199 65.001 L 392.9798161168199 26.001 L 400.35971876690104 26.001 L 400.35971876690104 65.001 Z"
                                                pathFrom="M 392.9798161168199 65.001 L 392.9798161168199 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 392.9798161168199 65.001 Z"
                                                cy="26" cx="400.35971876690104" j="43" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <g id="SvgjsG2450" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG2456" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2462" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2468" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2474" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2480" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2486" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2492" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2498" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2504" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2510" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2516" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2522" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2528" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2534" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2540" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2546" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2552" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2558" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2564" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2570" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2576" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2582" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2588" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2594" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2600" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2606" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2612" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2618" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2624" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2630" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2636" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2642" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2648" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2654" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2660" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2666" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2672" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2678" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2684" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2690" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2696" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2702" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2708" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                                <g id="SvgjsG2714" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskwoagquar)"></g>
                                            </g>
                                            <g id="SvgjsG2451"
                                                class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                        </g>
                                        <g id="SvgjsG2449" class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                            data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine2732" x1="-7.6651162790697684" y1="0" x2="404.33488372093024"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2733" x1="-7.6651162790697684" y1="0" x2="404.33488372093024"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2734" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2735" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG2748" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2749" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2750" class="apexcharts-point-annotations"></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(115, 180, 255);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h6>Conversions</h6>
                        <h4 class="m-0">0.85% <span class="text-success"><i class="feather icon-arrow-up"></i>
                                0.50%</span></h4><span>Purchased</span>
                    </div>
                    <div id="coversions-chart2" style="min-height: 65px;">
                        <div id="apexchartskik86lm6" class="apexcharts-canvas apexchartskik86lm6 apexcharts-theme-light"
                            style="width: 412px; height: 65px;"><svg id="SvgjsSvg2751" width="412" height="65"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="412" height="65">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 32.5px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect2759" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG3063" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2753" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(11.665116279069768, 0)">
                                    <defs id="SvgjsDefs2752">
                                        <linearGradient id="SvgjsLinearGradient2755" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2756" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop2757" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop2758" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskkik86lm6">
                                            <rect id="SvgjsRect2761" width="416" height="69" x="-9.665116279069768"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskkik86lm6"></clipPath>
                                        <clipPath id="nonForecastMaskkik86lm6"></clipPath>
                                        <clipPath id="gridRectMarkerMaskkik86lm6">
                                            <rect id="SvgjsRect2762" width="400.6697674418605" height="69" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient2768" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2769" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2770" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2771" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2774" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2775" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2776" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2777" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2780" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2781" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2782" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2783" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2786" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2787" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2788" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2789" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2792" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2793" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2794" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2795" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2798" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2799" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2800" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2801" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2804" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2805" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2806" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2807" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2810" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2811" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2812" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2813" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2816" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2817" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2818" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2819" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2822" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2823" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2824" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2825" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2828" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2829" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2830" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2831" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2834" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2835" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2836" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2837" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2840" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2841" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2842" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2843" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2846" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2847" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2848" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2849" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2852" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2853" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2854" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2855" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2858" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2859" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2860" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2861" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2864" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2865" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2866" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2867" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2870" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2871" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2872" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2873" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2876" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2877" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2878" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2879" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2882" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2883" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2884" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2885" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2888" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2889" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2890" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2891" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2894" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2895" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2896" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2897" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2900" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2901" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2902" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2903" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2906" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2907" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2908" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2909" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2912" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2913" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2914" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2915" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2918" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2919" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2920" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2921" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2924" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2925" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2926" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2927" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2930" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2931" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2932" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2933" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2936" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2937" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2938" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2939" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2942" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2943" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2944" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2945" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2948" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2949" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2950" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2951" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2954" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2955" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2956" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2957" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2960" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2961" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2962" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2963" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2966" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2967" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2968" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2969" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2972" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2973" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2974" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2975" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2978" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2979" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2980" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2981" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2984" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2985" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2986" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2987" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2990" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2991" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2992" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2993" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2996" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2997" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop2998" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop2999" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3002" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3003" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3004" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3005" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3008" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3009" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3010" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3011" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3014" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3015" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3016" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3017" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3020" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3021" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3022" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3023" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3026" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3027" stop-opacity="0.99"
                                                stop-color="rgba(46,216,182,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3028" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3029" stop-opacity="0.99"
                                                stop-color="rgba(89,224,197,0.99)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <line id="SvgjsLine2760" x1="0" y1="0" x2="0" y2="65" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                        height="65" fill="url(#SvgjsLinearGradient2755)" filter="none"
                                        fill-opacity="0.9" stroke-width="0"></line>
                                    <g id="SvgjsG3032" class="apexcharts-grid">
                                        <g id="SvgjsG3033" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine3036" x1="-7.6651162790697684" y1="0"
                                                x2="404.33488372093024" y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine3037" x1="-7.6651162790697684" y1="7.222222222222222"
                                                x2="404.33488372093024" y2="7.222222222222222" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3038" x1="-7.6651162790697684" y1="14.444444444444445"
                                                x2="404.33488372093024" y2="14.444444444444445" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3039" x1="-7.6651162790697684" y1="21.666666666666668"
                                                x2="404.33488372093024" y2="21.666666666666668" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3040" x1="-7.6651162790697684" y1="28.88888888888889"
                                                x2="404.33488372093024" y2="28.88888888888889" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3041" x1="-7.6651162790697684" y1="36.111111111111114"
                                                x2="404.33488372093024" y2="36.111111111111114" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3042" x1="-7.6651162790697684" y1="43.333333333333336"
                                                x2="404.33488372093024" y2="43.333333333333336" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3043" x1="-7.6651162790697684" y1="50.55555555555556"
                                                x2="404.33488372093024" y2="50.55555555555556" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3044" x1="-7.6651162790697684" y1="57.77777777777778"
                                                x2="404.33488372093024" y2="57.77777777777778" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3045" x1="-7.6651162790697684" y1="65"
                                                x2="404.33488372093024" y2="65" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG3034" class="apexcharts-gridlines-vertical" style="display: none;">
                                        </g>
                                        <line id="SvgjsLine3047" x1="0" y1="65" x2="396.6697674418605" y2="65"
                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine3046" x1="0" y1="1" x2="0" y2="65" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG3035" class="apexcharts-grid-borders" style="display: none;"></g>
                                    <g id="SvgjsG2763" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG2764" class="apexcharts-series" rel="1" seriesName="series-1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath2773"
                                                d="M -3.6899513250405622 65.001 L -3.6899513250405622 46.94544444444444 L 3.6899513250405622 46.94544444444444 L 3.6899513250405622 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2768)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M -3.6899513250405622 65.001 L -3.6899513250405622 46.94544444444444 L 3.6899513250405622 46.94544444444444 L 3.6899513250405622 65.001 Z"
                                                pathFrom="M -3.6899513250405622 65.001 L -3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L -3.6899513250405622 65.001 Z"
                                                cy="46.94444444444444" cx="3.6899513250405622" j="0" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2779"
                                                d="M 5.534926987560844 65.001 L 5.534926987560844 17.334333333333337 L 12.914829637641969 17.334333333333337 L 12.914829637641969 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2774)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 5.534926987560844 65.001 L 5.534926987560844 17.334333333333337 L 12.914829637641969 17.334333333333337 L 12.914829637641969 65.001 Z"
                                                pathFrom="M 5.534926987560844 65.001 L 5.534926987560844 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 5.534926987560844 65.001 Z"
                                                cy="17.333333333333336" cx="12.914829637641969" j="1" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2785"
                                                d="M 14.75980530016225 65.001 L 14.75980530016225 35.38988888888888 L 22.139707950243377 35.38988888888888 L 22.139707950243377 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2780)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 14.75980530016225 65.001 L 14.75980530016225 35.38988888888888 L 22.139707950243377 35.38988888888888 L 22.139707950243377 65.001 Z"
                                                pathFrom="M 14.75980530016225 65.001 L 14.75980530016225 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 14.75980530016225 65.001 Z"
                                                cy="35.388888888888886" cx="22.139707950243377" j="2" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2791"
                                                d="M 23.984683612763654 65.001 L 23.984683612763654 0.7232222222222143 L 31.364586262844778 0.7232222222222143 L 31.364586262844778 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2786)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 23.984683612763654 65.001 L 23.984683612763654 0.7232222222222143 L 31.364586262844778 0.7232222222222143 L 31.364586262844778 65.001 Z"
                                                pathFrom="M 23.984683612763654 65.001 L 23.984683612763654 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 23.984683612763654 65.001 Z"
                                                cy="0.7222222222222143" cx="31.364586262844778" j="3" val="89"
                                                barHeight="64.27777777777779" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2797"
                                                d="M 33.209561925365065 65.001 L 33.209561925365065 19.501 L 40.589464575446186 19.501 L 40.589464575446186 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2792)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 33.209561925365065 65.001 L 33.209561925365065 19.501 L 40.589464575446186 19.501 L 40.589464575446186 65.001 Z"
                                                pathFrom="M 33.209561925365065 65.001 L 33.209561925365065 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 33.209561925365065 65.001 Z"
                                                cy="19.5" cx="40.589464575446186" j="4" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2803"
                                                d="M 42.43444023796647 65.001 L 42.43444023796647 46.94544444444444 L 49.81434288804759 46.94544444444444 L 49.81434288804759 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2798)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 42.43444023796647 65.001 L 42.43444023796647 46.94544444444444 L 49.81434288804759 46.94544444444444 L 49.81434288804759 65.001 Z"
                                                pathFrom="M 42.43444023796647 65.001 L 42.43444023796647 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 42.43444023796647 65.001 Z"
                                                cy="46.94444444444444" cx="49.81434288804759" j="5" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2809"
                                                d="M 51.659318550567875 65.001 L 51.659318550567875 33.22322222222222 L 59.039221200648996 33.22322222222222 L 59.039221200648996 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2804)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 51.659318550567875 65.001 L 51.659318550567875 33.22322222222222 L 59.039221200648996 33.22322222222222 L 59.039221200648996 65.001 Z"
                                                pathFrom="M 51.659318550567875 65.001 L 51.659318550567875 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 51.659318550567875 65.001 Z"
                                                cy="33.22222222222222" cx="59.039221200648996" j="6" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2815"
                                                d="M 60.88419686316929 65.001 L 60.88419686316929 56.33433333333333 L 68.26409951325041 56.33433333333333 L 68.26409951325041 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2810)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 60.88419686316929 65.001 L 60.88419686316929 56.33433333333333 L 68.26409951325041 56.33433333333333 L 68.26409951325041 65.001 Z"
                                                pathFrom="M 60.88419686316929 65.001 L 60.88419686316929 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 60.88419686316929 65.001 Z"
                                                cy="56.333333333333336" cx="68.26409951325041" j="7" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2821"
                                                d="M 70.10907517577068 65.001 L 70.10907517577068 39.001 L 77.4889778258518 39.001 L 77.4889778258518 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2816)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 70.10907517577068 65.001 L 70.10907517577068 39.001 L 77.4889778258518 39.001 L 77.4889778258518 65.001 Z"
                                                pathFrom="M 70.10907517577068 65.001 L 70.10907517577068 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 70.10907517577068 65.001 Z"
                                                cy="39" cx="77.4889778258518" j="8" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2827"
                                                d="M 79.33395348837209 65.001 L 79.33395348837209 58.501 L 86.71385613845321 58.501 L 86.71385613845321 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2822)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 79.33395348837209 65.001 L 79.33395348837209 58.501 L 86.71385613845321 58.501 L 86.71385613845321 65.001 Z"
                                                pathFrom="M 79.33395348837209 65.001 L 79.33395348837209 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 79.33395348837209 65.001 Z"
                                                cy="58.5" cx="86.71385613845321" j="9" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2833"
                                                d="M 88.5588318009735 65.001 L 88.5588318009735 26.001 L 95.93873445105461 26.001 L 95.93873445105461 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2828)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 88.5588318009735 65.001 L 88.5588318009735 26.001 L 95.93873445105461 26.001 L 95.93873445105461 65.001 Z"
                                                pathFrom="M 88.5588318009735 65.001 L 88.5588318009735 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 88.5588318009735 65.001 Z"
                                                cy="26" cx="95.93873445105461" j="10" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2839"
                                                d="M 97.7837101135749 65.001 L 97.7837101135749 46.94544444444444 L 105.16361276365602 46.94544444444444 L 105.16361276365602 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2834)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 97.7837101135749 65.001 L 97.7837101135749 46.94544444444444 L 105.16361276365602 46.94544444444444 L 105.16361276365602 65.001 Z"
                                                pathFrom="M 97.7837101135749 65.001 L 97.7837101135749 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 97.7837101135749 65.001 Z"
                                                cy="46.94444444444444" cx="105.16361276365602" j="11" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2845"
                                                d="M 107.0085884261763 65.001 L 107.0085884261763 17.334333333333337 L 114.38849107625742 17.334333333333337 L 114.38849107625742 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2840)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 107.0085884261763 65.001 L 107.0085884261763 17.334333333333337 L 114.38849107625742 17.334333333333337 L 114.38849107625742 65.001 Z"
                                                pathFrom="M 107.0085884261763 65.001 L 107.0085884261763 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 107.0085884261763 65.001 Z"
                                                cy="17.333333333333336" cx="114.38849107625742" j="12" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2851"
                                                d="M 116.23346673877771 65.001 L 116.23346673877771 35.38988888888888 L 123.61336938885883 35.38988888888888 L 123.61336938885883 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2846)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 116.23346673877771 65.001 L 116.23346673877771 35.38988888888888 L 123.61336938885883 35.38988888888888 L 123.61336938885883 65.001 Z"
                                                pathFrom="M 116.23346673877771 65.001 L 116.23346673877771 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 116.23346673877771 65.001 Z"
                                                cy="35.388888888888886" cx="123.61336938885883" j="13" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2857"
                                                d="M 125.45834505137913 65.001 L 125.45834505137913 0.7232222222222143 L 132.83824770146026 0.7232222222222143 L 132.83824770146026 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2852)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 125.45834505137913 65.001 L 125.45834505137913 0.7232222222222143 L 132.83824770146026 0.7232222222222143 L 132.83824770146026 65.001 Z"
                                                pathFrom="M 125.45834505137913 65.001 L 125.45834505137913 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 125.45834505137913 65.001 Z"
                                                cy="0.7222222222222143" cx="132.83824770146026" j="14" val="89"
                                                barHeight="64.27777777777779" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2863"
                                                d="M 134.68322336398052 65.001 L 134.68322336398052 19.501 L 142.06312601406165 19.501 L 142.06312601406165 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2858)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 134.68322336398052 65.001 L 134.68322336398052 19.501 L 142.06312601406165 19.501 L 142.06312601406165 65.001 Z"
                                                pathFrom="M 134.68322336398052 65.001 L 134.68322336398052 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 134.68322336398052 65.001 Z"
                                                cy="19.5" cx="142.06312601406165" j="15" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2869"
                                                d="M 143.90810167658194 65.001 L 143.90810167658194 26.001 L 151.28800432666307 26.001 L 151.28800432666307 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2864)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 143.90810167658194 65.001 L 143.90810167658194 26.001 L 151.28800432666307 26.001 L 151.28800432666307 65.001 Z"
                                                pathFrom="M 143.90810167658194 65.001 L 143.90810167658194 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 143.90810167658194 65.001 Z"
                                                cy="26" cx="151.28800432666307" j="16" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2875"
                                                d="M 153.13297998918333 65.001 L 153.13297998918333 46.94544444444444 L 160.51288263926446 46.94544444444444 L 160.51288263926446 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2870)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 153.13297998918333 65.001 L 153.13297998918333 46.94544444444444 L 160.51288263926446 46.94544444444444 L 160.51288263926446 65.001 Z"
                                                pathFrom="M 153.13297998918333 65.001 L 153.13297998918333 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 153.13297998918333 65.001 Z"
                                                cy="46.94444444444444" cx="160.51288263926446" j="17" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2881"
                                                d="M 162.35785830178474 65.001 L 162.35785830178474 17.334333333333337 L 169.73776095186588 17.334333333333337 L 169.73776095186588 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2876)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 162.35785830178474 65.001 L 162.35785830178474 17.334333333333337 L 169.73776095186588 17.334333333333337 L 169.73776095186588 65.001 Z"
                                                pathFrom="M 162.35785830178474 65.001 L 162.35785830178474 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 162.35785830178474 65.001 Z"
                                                cy="17.333333333333336" cx="169.73776095186588" j="18" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2887"
                                                d="M 171.58273661438614 65.001 L 171.58273661438614 35.38988888888888 L 178.96263926446727 35.38988888888888 L 178.96263926446727 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2882)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 171.58273661438614 65.001 L 171.58273661438614 35.38988888888888 L 178.96263926446727 35.38988888888888 L 178.96263926446727 65.001 Z"
                                                pathFrom="M 171.58273661438614 65.001 L 171.58273661438614 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 171.58273661438614 65.001 Z"
                                                cy="35.388888888888886" cx="178.96263926446727" j="19" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2893"
                                                d="M 180.80761492698755 65.001 L 180.80761492698755 3.612111111111107 L 188.1875175770687 3.612111111111107 L 188.1875175770687 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2888)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 180.80761492698755 65.001 L 180.80761492698755 3.612111111111107 L 188.1875175770687 3.612111111111107 L 188.1875175770687 65.001 Z"
                                                pathFrom="M 180.80761492698755 65.001 L 180.80761492698755 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 180.80761492698755 65.001 Z"
                                                cy="3.611111111111107" cx="188.1875175770687" j="20" val="85"
                                                barHeight="61.38888888888889" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2899"
                                                d="M 190.03249323958897 65.001 L 190.03249323958897 19.501 L 197.4123958896701 19.501 L 197.4123958896701 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2894)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 190.03249323958897 65.001 L 190.03249323958897 19.501 L 197.4123958896701 19.501 L 197.4123958896701 65.001 Z"
                                                pathFrom="M 190.03249323958897 65.001 L 190.03249323958897 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 190.03249323958897 65.001 Z"
                                                cy="19.5" cx="197.4123958896701" j="21" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2905"
                                                d="M 199.25737155219036 65.001 L 199.25737155219036 46.94544444444444 L 206.6372742022715 46.94544444444444 L 206.6372742022715 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2900)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 199.25737155219036 65.001 L 199.25737155219036 46.94544444444444 L 206.6372742022715 46.94544444444444 L 206.6372742022715 65.001 Z"
                                                pathFrom="M 199.25737155219036 65.001 L 199.25737155219036 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 199.25737155219036 65.001 Z"
                                                cy="46.94444444444444" cx="206.6372742022715" j="22" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2911"
                                                d="M 208.48224986479178 65.001 L 208.48224986479178 33.22322222222222 L 215.86215251487292 33.22322222222222 L 215.86215251487292 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2906)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 208.48224986479178 65.001 L 208.48224986479178 33.22322222222222 L 215.86215251487292 33.22322222222222 L 215.86215251487292 65.001 Z"
                                                pathFrom="M 208.48224986479178 65.001 L 208.48224986479178 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 208.48224986479178 65.001 Z"
                                                cy="33.22222222222222" cx="215.86215251487292" j="23" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2917"
                                                d="M 217.70712817739317 65.001 L 217.70712817739317 56.33433333333333 L 225.0870308274743 56.33433333333333 L 225.0870308274743 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2912)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 217.70712817739317 65.001 L 217.70712817739317 56.33433333333333 L 225.0870308274743 56.33433333333333 L 225.0870308274743 65.001 Z"
                                                pathFrom="M 217.70712817739317 65.001 L 217.70712817739317 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 217.70712817739317 65.001 Z"
                                                cy="56.333333333333336" cx="225.0870308274743" j="24" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2923"
                                                d="M 226.9320064899946 65.001 L 226.9320064899946 39.001 L 234.31190914007573 39.001 L 234.31190914007573 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2918)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 226.9320064899946 65.001 L 226.9320064899946 39.001 L 234.31190914007573 39.001 L 234.31190914007573 65.001 Z"
                                                pathFrom="M 226.9320064899946 65.001 L 226.9320064899946 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 226.9320064899946 65.001 Z"
                                                cy="39" cx="234.31190914007573" j="25" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2929"
                                                d="M 236.15688480259598 65.001 L 236.15688480259598 58.501 L 243.53678745267712 58.501 L 243.53678745267712 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2924)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 236.15688480259598 65.001 L 236.15688480259598 58.501 L 243.53678745267712 58.501 L 243.53678745267712 65.001 Z"
                                                pathFrom="M 236.15688480259598 65.001 L 236.15688480259598 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 236.15688480259598 65.001 Z"
                                                cy="58.5" cx="243.53678745267712" j="26" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2935"
                                                d="M 245.3817631151974 65.001 L 245.3817631151974 26.001 L 252.76166576527854 26.001 L 252.76166576527854 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2930)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 245.3817631151974 65.001 L 245.3817631151974 26.001 L 252.76166576527854 26.001 L 252.76166576527854 65.001 Z"
                                                pathFrom="M 245.3817631151974 65.001 L 245.3817631151974 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 245.3817631151974 65.001 Z"
                                                cy="26" cx="252.76166576527854" j="27" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2941"
                                                d="M 254.60664142779882 65.001 L 254.60664142779882 46.94544444444444 L 261.98654407787996 46.94544444444444 L 261.98654407787996 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2936)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 254.60664142779882 65.001 L 254.60664142779882 46.94544444444444 L 261.98654407787996 46.94544444444444 L 261.98654407787996 65.001 Z"
                                                pathFrom="M 254.60664142779882 65.001 L 254.60664142779882 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 254.60664142779882 65.001 Z"
                                                cy="46.94444444444444" cx="261.98654407787996" j="28" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2947"
                                                d="M 263.8315197404002 65.001 L 263.8315197404002 17.334333333333337 L 271.21142239048135 17.334333333333337 L 271.21142239048135 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2942)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 263.8315197404002 65.001 L 263.8315197404002 17.334333333333337 L 271.21142239048135 17.334333333333337 L 271.21142239048135 65.001 Z"
                                                pathFrom="M 263.8315197404002 65.001 L 263.8315197404002 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 263.8315197404002 65.001 Z"
                                                cy="17.333333333333336" cx="271.21142239048135" j="29" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2953"
                                                d="M 273.0563980530016 65.001 L 273.0563980530016 35.38988888888888 L 280.43630070308274 35.38988888888888 L 280.43630070308274 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2948)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 273.0563980530016 65.001 L 273.0563980530016 35.38988888888888 L 280.43630070308274 35.38988888888888 L 280.43630070308274 65.001 Z"
                                                pathFrom="M 273.0563980530016 65.001 L 273.0563980530016 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 273.0563980530016 65.001 Z"
                                                cy="35.388888888888886" cx="280.43630070308274" j="30" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2959"
                                                d="M 282.28127636560305 65.001 L 282.28127636560305 0.7232222222222143 L 289.6611790156842 0.7232222222222143 L 289.6611790156842 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2954)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 282.28127636560305 65.001 L 282.28127636560305 0.7232222222222143 L 289.6611790156842 0.7232222222222143 L 289.6611790156842 65.001 Z"
                                                pathFrom="M 282.28127636560305 65.001 L 282.28127636560305 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 282.28127636560305 65.001 Z"
                                                cy="0.7222222222222143" cx="289.6611790156842" j="31" val="89"
                                                barHeight="64.27777777777779" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2965"
                                                d="M 291.50615467820444 65.001 L 291.50615467820444 19.501 L 298.8860573282856 19.501 L 298.8860573282856 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2960)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 291.50615467820444 65.001 L 291.50615467820444 19.501 L 298.8860573282856 19.501 L 298.8860573282856 65.001 Z"
                                                pathFrom="M 291.50615467820444 65.001 L 291.50615467820444 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 291.50615467820444 65.001 Z"
                                                cy="19.5" cx="298.8860573282856" j="32" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2971"
                                                d="M 300.73103299080583 65.001 L 300.73103299080583 46.94544444444444 L 308.11093564088696 46.94544444444444 L 308.11093564088696 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2966)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 300.73103299080583 65.001 L 300.73103299080583 46.94544444444444 L 308.11093564088696 46.94544444444444 L 308.11093564088696 65.001 Z"
                                                pathFrom="M 300.73103299080583 65.001 L 300.73103299080583 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 300.73103299080583 65.001 Z"
                                                cy="46.94444444444444" cx="308.11093564088696" j="33" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2977"
                                                d="M 309.9559113034072 65.001 L 309.9559113034072 33.22322222222222 L 317.33581395348835 33.22322222222222 L 317.33581395348835 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2972)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 309.9559113034072 65.001 L 309.9559113034072 33.22322222222222 L 317.33581395348835 33.22322222222222 L 317.33581395348835 65.001 Z"
                                                pathFrom="M 309.9559113034072 65.001 L 309.9559113034072 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 309.9559113034072 65.001 Z"
                                                cy="33.22222222222222" cx="317.33581395348835" j="34" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2983"
                                                d="M 319.18078961600867 65.001 L 319.18078961600867 56.33433333333333 L 326.5606922660898 56.33433333333333 L 326.5606922660898 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2978)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 319.18078961600867 65.001 L 319.18078961600867 56.33433333333333 L 326.5606922660898 56.33433333333333 L 326.5606922660898 65.001 Z"
                                                pathFrom="M 319.18078961600867 65.001 L 319.18078961600867 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 319.18078961600867 65.001 Z"
                                                cy="56.333333333333336" cx="326.5606922660898" j="35" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2989"
                                                d="M 328.40566792861006 65.001 L 328.40566792861006 39.001 L 335.7855705786912 39.001 L 335.7855705786912 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2984)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 328.40566792861006 65.001 L 328.40566792861006 39.001 L 335.7855705786912 39.001 L 335.7855705786912 65.001 Z"
                                                pathFrom="M 328.40566792861006 65.001 L 328.40566792861006 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 328.40566792861006 65.001 Z"
                                                cy="39" cx="335.7855705786912" j="36" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath2995"
                                                d="M 337.63054624121145 65.001 L 337.63054624121145 58.501 L 345.0104488912926 58.501 L 345.0104488912926 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2990)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 337.63054624121145 65.001 L 337.63054624121145 58.501 L 345.0104488912926 58.501 L 345.0104488912926 65.001 Z"
                                                pathFrom="M 337.63054624121145 65.001 L 337.63054624121145 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 337.63054624121145 65.001 Z"
                                                cy="58.5" cx="345.0104488912926" j="37" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3001"
                                                d="M 346.85542455381284 65.001 L 346.85542455381284 46.94544444444444 L 354.235327203894 46.94544444444444 L 354.235327203894 65.001 Z"
                                                fill="url(#SvgjsLinearGradient2996)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 346.85542455381284 65.001 L 346.85542455381284 46.94544444444444 L 354.235327203894 46.94544444444444 L 354.235327203894 65.001 Z"
                                                pathFrom="M 346.85542455381284 65.001 L 346.85542455381284 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 346.85542455381284 65.001 Z"
                                                cy="46.94444444444444" cx="354.235327203894" j="38" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3007"
                                                d="M 356.0803028664143 65.001 L 356.0803028664143 33.22322222222222 L 363.4602055164954 33.22322222222222 L 363.4602055164954 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3002)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 356.0803028664143 65.001 L 356.0803028664143 33.22322222222222 L 363.4602055164954 33.22322222222222 L 363.4602055164954 65.001 Z"
                                                pathFrom="M 356.0803028664143 65.001 L 356.0803028664143 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 356.0803028664143 65.001 Z"
                                                cy="33.22222222222222" cx="363.4602055164954" j="39" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3013"
                                                d="M 365.3051811790157 65.001 L 365.3051811790157 56.33433333333333 L 372.6850838290968 56.33433333333333 L 372.6850838290968 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3008)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 365.3051811790157 65.001 L 365.3051811790157 56.33433333333333 L 372.6850838290968 56.33433333333333 L 372.6850838290968 65.001 Z"
                                                pathFrom="M 365.3051811790157 65.001 L 365.3051811790157 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 365.3051811790157 65.001 Z"
                                                cy="56.333333333333336" cx="372.6850838290968" j="40" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3019"
                                                d="M 374.53005949161707 65.001 L 374.53005949161707 39.001 L 381.9099621416982 39.001 L 381.9099621416982 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3014)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 374.53005949161707 65.001 L 374.53005949161707 39.001 L 381.9099621416982 39.001 L 381.9099621416982 65.001 Z"
                                                pathFrom="M 374.53005949161707 65.001 L 374.53005949161707 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 374.53005949161707 65.001 Z"
                                                cy="39" cx="381.9099621416982" j="41" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3025"
                                                d="M 383.7549378042185 65.001 L 383.7549378042185 58.501 L 391.13484045429965 58.501 L 391.13484045429965 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3020)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 383.7549378042185 65.001 L 383.7549378042185 58.501 L 391.13484045429965 58.501 L 391.13484045429965 65.001 Z"
                                                pathFrom="M 383.7549378042185 65.001 L 383.7549378042185 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 383.7549378042185 65.001 Z"
                                                cy="58.5" cx="391.13484045429965" j="42" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3031"
                                                d="M 392.9798161168199 65.001 L 392.9798161168199 26.001 L 400.35971876690104 26.001 L 400.35971876690104 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3026)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskkik86lm6)"
                                                pathTo="M 392.9798161168199 65.001 L 392.9798161168199 26.001 L 400.35971876690104 26.001 L 400.35971876690104 65.001 Z"
                                                pathFrom="M 392.9798161168199 65.001 L 392.9798161168199 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 392.9798161168199 65.001 Z"
                                                cy="26" cx="400.35971876690104" j="43" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <g id="SvgjsG2766" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG2772" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2778" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2784" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2790" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2796" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2802" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2808" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2814" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2820" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2826" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2832" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2838" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2844" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2850" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2856" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2862" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2868" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2874" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2880" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2886" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2892" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2898" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2904" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2910" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2916" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2922" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2928" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2934" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2940" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2946" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2952" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2958" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2964" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2970" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2976" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2982" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2988" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG2994" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG3000" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG3006" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG3012" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG3018" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG3024" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                                <g id="SvgjsG3030" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskkik86lm6)"></g>
                                            </g>
                                            <g id="SvgjsG2767"
                                                class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                        </g>
                                        <g id="SvgjsG2765" class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                            data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine3048" x1="-7.6651162790697684" y1="0" x2="404.33488372093024"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine3049" x1="-7.6651162790697684" y1="0" x2="404.33488372093024"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG3050" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG3051" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG3064" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG3065" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG3066" class="apexcharts-point-annotations"></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(89, 224, 197);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h6>Conversions</h6>
                        <h4 class="m-0">0.85% <span class="text-danger"><i class="feather icon-arrow-up"></i>
                                0.50%</span></h4><span>Purchased</span>
                    </div>
                    <div id="coversions-chart4" style="min-height: 65px;">
                        <div id="apexchartsqs55q60f" class="apexcharts-canvas apexchartsqs55q60f apexcharts-theme-light"
                            style="width: 412px; height: 65px;"><svg id="SvgjsSvg3067" width="412" height="65"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="412" height="65">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 32.5px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect3075" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG3379" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG3069" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(11.665116279069768, 0)">
                                    <defs id="SvgjsDefs3068">
                                        <linearGradient id="SvgjsLinearGradient3071" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3072" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop3073" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop3074" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskqs55q60f">
                                            <rect id="SvgjsRect3077" width="416" height="69" x="-9.665116279069768"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskqs55q60f"></clipPath>
                                        <clipPath id="nonForecastMaskqs55q60f"></clipPath>
                                        <clipPath id="gridRectMarkerMaskqs55q60f">
                                            <rect id="SvgjsRect3078" width="400.6697674418605" height="69" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient3084" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3085" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3086" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3087" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3090" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3091" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3092" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3093" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3096" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3097" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3098" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3099" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3102" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3103" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3104" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3105" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3108" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3109" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3110" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3111" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3114" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3115" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3116" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3117" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3120" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3121" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3122" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3123" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3126" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3127" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3128" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3129" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3132" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3133" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3134" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3135" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3138" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3139" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3140" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3141" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3144" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3145" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3146" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3147" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3150" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3151" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3152" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3153" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3156" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3157" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3158" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3159" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3162" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3163" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3164" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3165" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3168" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3169" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3170" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3171" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3174" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3175" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3176" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3177" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3180" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3181" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3182" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3183" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3186" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3187" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3188" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3189" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3192" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3193" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3194" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3195" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3198" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3199" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3200" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3201" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3204" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3205" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3206" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3207" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3210" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3211" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3212" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3213" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3216" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3217" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3218" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3219" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3222" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3223" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3224" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3225" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3228" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3229" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3230" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3231" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3234" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3235" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3236" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3237" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3240" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3241" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3242" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3243" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3246" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3247" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3248" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3249" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3252" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3253" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3254" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3255" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3258" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3259" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3260" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3261" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3264" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3265" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3266" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3267" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3270" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3271" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3272" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3273" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3276" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3277" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3278" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3279" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3282" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3283" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3284" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3285" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3288" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3289" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3290" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3291" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3294" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3295" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3296" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3297" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3300" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3301" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3302" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3303" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3306" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3307" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3308" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3309" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3312" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3313" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3314" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3315" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3318" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3319" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3320" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3321" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3324" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3325" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3326" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3327" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3330" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3331" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3332" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3333" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3336" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3337" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3338" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3339" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient3342" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop3343" stop-opacity="0.99"
                                                stop-color="rgba(255,83,112,0.99)" offset="0"></stop>
                                            <stop id="SvgjsStop3344" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                            <stop id="SvgjsStop3345" stop-opacity="0.99"
                                                stop-color="rgba(255,134,154,0.99)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <line id="SvgjsLine3076" x1="0" y1="0" x2="0" y2="65" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                        height="65" fill="url(#SvgjsLinearGradient3071)" filter="none"
                                        fill-opacity="0.9" stroke-width="0"></line>
                                    <g id="SvgjsG3348" class="apexcharts-grid">
                                        <g id="SvgjsG3349" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine3352" x1="-7.6651162790697684" y1="0"
                                                x2="404.33488372093024" y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine3353" x1="-7.6651162790697684" y1="7.222222222222222"
                                                x2="404.33488372093024" y2="7.222222222222222" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3354" x1="-7.6651162790697684" y1="14.444444444444445"
                                                x2="404.33488372093024" y2="14.444444444444445" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3355" x1="-7.6651162790697684" y1="21.666666666666668"
                                                x2="404.33488372093024" y2="21.666666666666668" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3356" x1="-7.6651162790697684" y1="28.88888888888889"
                                                x2="404.33488372093024" y2="28.88888888888889" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3357" x1="-7.6651162790697684" y1="36.111111111111114"
                                                x2="404.33488372093024" y2="36.111111111111114" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3358" x1="-7.6651162790697684" y1="43.333333333333336"
                                                x2="404.33488372093024" y2="43.333333333333336" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3359" x1="-7.6651162790697684" y1="50.55555555555556"
                                                x2="404.33488372093024" y2="50.55555555555556" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3360" x1="-7.6651162790697684" y1="57.77777777777778"
                                                x2="404.33488372093024" y2="57.77777777777778" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine3361" x1="-7.6651162790697684" y1="65"
                                                x2="404.33488372093024" y2="65" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG3350" class="apexcharts-gridlines-vertical" style="display: none;">
                                        </g>
                                        <line id="SvgjsLine3363" x1="0" y1="65" x2="396.6697674418605" y2="65"
                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine3362" x1="0" y1="1" x2="0" y2="65" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG3351" class="apexcharts-grid-borders" style="display: none;"></g>
                                    <g id="SvgjsG3079" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG3080" class="apexcharts-series" rel="1" seriesName="series-1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath3089"
                                                d="M -3.6899513250405622 65.001 L -3.6899513250405622 46.94544444444444 L 3.6899513250405622 46.94544444444444 L 3.6899513250405622 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3084)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M -3.6899513250405622 65.001 L -3.6899513250405622 46.94544444444444 L 3.6899513250405622 46.94544444444444 L 3.6899513250405622 65.001 Z"
                                                pathFrom="M -3.6899513250405622 65.001 L -3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L 3.6899513250405622 65.001 L -3.6899513250405622 65.001 Z"
                                                cy="46.94444444444444" cx="3.6899513250405622" j="0" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3095"
                                                d="M 5.534926987560844 65.001 L 5.534926987560844 17.334333333333337 L 12.914829637641969 17.334333333333337 L 12.914829637641969 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3090)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 5.534926987560844 65.001 L 5.534926987560844 17.334333333333337 L 12.914829637641969 17.334333333333337 L 12.914829637641969 65.001 Z"
                                                pathFrom="M 5.534926987560844 65.001 L 5.534926987560844 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 12.914829637641969 65.001 L 5.534926987560844 65.001 Z"
                                                cy="17.333333333333336" cx="12.914829637641969" j="1" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3101"
                                                d="M 14.75980530016225 65.001 L 14.75980530016225 35.38988888888888 L 22.139707950243377 35.38988888888888 L 22.139707950243377 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3096)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 14.75980530016225 65.001 L 14.75980530016225 35.38988888888888 L 22.139707950243377 35.38988888888888 L 22.139707950243377 65.001 Z"
                                                pathFrom="M 14.75980530016225 65.001 L 14.75980530016225 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 22.139707950243377 65.001 L 14.75980530016225 65.001 Z"
                                                cy="35.388888888888886" cx="22.139707950243377" j="2" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3107"
                                                d="M 23.984683612763654 65.001 L 23.984683612763654 0.7232222222222143 L 31.364586262844778 0.7232222222222143 L 31.364586262844778 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3102)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 23.984683612763654 65.001 L 23.984683612763654 0.7232222222222143 L 31.364586262844778 0.7232222222222143 L 31.364586262844778 65.001 Z"
                                                pathFrom="M 23.984683612763654 65.001 L 23.984683612763654 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 31.364586262844778 65.001 L 23.984683612763654 65.001 Z"
                                                cy="0.7222222222222143" cx="31.364586262844778" j="3" val="89"
                                                barHeight="64.27777777777779" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3113"
                                                d="M 33.209561925365065 65.001 L 33.209561925365065 19.501 L 40.589464575446186 19.501 L 40.589464575446186 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3108)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 33.209561925365065 65.001 L 33.209561925365065 19.501 L 40.589464575446186 19.501 L 40.589464575446186 65.001 Z"
                                                pathFrom="M 33.209561925365065 65.001 L 33.209561925365065 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 40.589464575446186 65.001 L 33.209561925365065 65.001 Z"
                                                cy="19.5" cx="40.589464575446186" j="4" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3119"
                                                d="M 42.43444023796647 65.001 L 42.43444023796647 46.94544444444444 L 49.81434288804759 46.94544444444444 L 49.81434288804759 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3114)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 42.43444023796647 65.001 L 42.43444023796647 46.94544444444444 L 49.81434288804759 46.94544444444444 L 49.81434288804759 65.001 Z"
                                                pathFrom="M 42.43444023796647 65.001 L 42.43444023796647 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 49.81434288804759 65.001 L 42.43444023796647 65.001 Z"
                                                cy="46.94444444444444" cx="49.81434288804759" j="5" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3125"
                                                d="M 51.659318550567875 65.001 L 51.659318550567875 33.22322222222222 L 59.039221200648996 33.22322222222222 L 59.039221200648996 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3120)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 51.659318550567875 65.001 L 51.659318550567875 33.22322222222222 L 59.039221200648996 33.22322222222222 L 59.039221200648996 65.001 Z"
                                                pathFrom="M 51.659318550567875 65.001 L 51.659318550567875 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 59.039221200648996 65.001 L 51.659318550567875 65.001 Z"
                                                cy="33.22222222222222" cx="59.039221200648996" j="6" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3131"
                                                d="M 60.88419686316929 65.001 L 60.88419686316929 56.33433333333333 L 68.26409951325041 56.33433333333333 L 68.26409951325041 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3126)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 60.88419686316929 65.001 L 60.88419686316929 56.33433333333333 L 68.26409951325041 56.33433333333333 L 68.26409951325041 65.001 Z"
                                                pathFrom="M 60.88419686316929 65.001 L 60.88419686316929 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 68.26409951325041 65.001 L 60.88419686316929 65.001 Z"
                                                cy="56.333333333333336" cx="68.26409951325041" j="7" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3137"
                                                d="M 70.10907517577068 65.001 L 70.10907517577068 39.001 L 77.4889778258518 39.001 L 77.4889778258518 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3132)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 70.10907517577068 65.001 L 70.10907517577068 39.001 L 77.4889778258518 39.001 L 77.4889778258518 65.001 Z"
                                                pathFrom="M 70.10907517577068 65.001 L 70.10907517577068 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 77.4889778258518 65.001 L 70.10907517577068 65.001 Z"
                                                cy="39" cx="77.4889778258518" j="8" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3143"
                                                d="M 79.33395348837209 65.001 L 79.33395348837209 58.501 L 86.71385613845321 58.501 L 86.71385613845321 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3138)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 79.33395348837209 65.001 L 79.33395348837209 58.501 L 86.71385613845321 58.501 L 86.71385613845321 65.001 Z"
                                                pathFrom="M 79.33395348837209 65.001 L 79.33395348837209 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 86.71385613845321 65.001 L 79.33395348837209 65.001 Z"
                                                cy="58.5" cx="86.71385613845321" j="9" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3149"
                                                d="M 88.5588318009735 65.001 L 88.5588318009735 26.001 L 95.93873445105461 26.001 L 95.93873445105461 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3144)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 88.5588318009735 65.001 L 88.5588318009735 26.001 L 95.93873445105461 26.001 L 95.93873445105461 65.001 Z"
                                                pathFrom="M 88.5588318009735 65.001 L 88.5588318009735 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 95.93873445105461 65.001 L 88.5588318009735 65.001 Z"
                                                cy="26" cx="95.93873445105461" j="10" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3155"
                                                d="M 97.7837101135749 65.001 L 97.7837101135749 46.94544444444444 L 105.16361276365602 46.94544444444444 L 105.16361276365602 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3150)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 97.7837101135749 65.001 L 97.7837101135749 46.94544444444444 L 105.16361276365602 46.94544444444444 L 105.16361276365602 65.001 Z"
                                                pathFrom="M 97.7837101135749 65.001 L 97.7837101135749 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 105.16361276365602 65.001 L 97.7837101135749 65.001 Z"
                                                cy="46.94444444444444" cx="105.16361276365602" j="11" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3161"
                                                d="M 107.0085884261763 65.001 L 107.0085884261763 17.334333333333337 L 114.38849107625742 17.334333333333337 L 114.38849107625742 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3156)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 107.0085884261763 65.001 L 107.0085884261763 17.334333333333337 L 114.38849107625742 17.334333333333337 L 114.38849107625742 65.001 Z"
                                                pathFrom="M 107.0085884261763 65.001 L 107.0085884261763 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 114.38849107625742 65.001 L 107.0085884261763 65.001 Z"
                                                cy="17.333333333333336" cx="114.38849107625742" j="12" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3167"
                                                d="M 116.23346673877771 65.001 L 116.23346673877771 35.38988888888888 L 123.61336938885883 35.38988888888888 L 123.61336938885883 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3162)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 116.23346673877771 65.001 L 116.23346673877771 35.38988888888888 L 123.61336938885883 35.38988888888888 L 123.61336938885883 65.001 Z"
                                                pathFrom="M 116.23346673877771 65.001 L 116.23346673877771 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 123.61336938885883 65.001 L 116.23346673877771 65.001 Z"
                                                cy="35.388888888888886" cx="123.61336938885883" j="13" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3173"
                                                d="M 125.45834505137913 65.001 L 125.45834505137913 0.7232222222222143 L 132.83824770146026 0.7232222222222143 L 132.83824770146026 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3168)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 125.45834505137913 65.001 L 125.45834505137913 0.7232222222222143 L 132.83824770146026 0.7232222222222143 L 132.83824770146026 65.001 Z"
                                                pathFrom="M 125.45834505137913 65.001 L 125.45834505137913 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 132.83824770146026 65.001 L 125.45834505137913 65.001 Z"
                                                cy="0.7222222222222143" cx="132.83824770146026" j="14" val="89"
                                                barHeight="64.27777777777779" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3179"
                                                d="M 134.68322336398052 65.001 L 134.68322336398052 19.501 L 142.06312601406165 19.501 L 142.06312601406165 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3174)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 134.68322336398052 65.001 L 134.68322336398052 19.501 L 142.06312601406165 19.501 L 142.06312601406165 65.001 Z"
                                                pathFrom="M 134.68322336398052 65.001 L 134.68322336398052 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 142.06312601406165 65.001 L 134.68322336398052 65.001 Z"
                                                cy="19.5" cx="142.06312601406165" j="15" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3185"
                                                d="M 143.90810167658194 65.001 L 143.90810167658194 26.001 L 151.28800432666307 26.001 L 151.28800432666307 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3180)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 143.90810167658194 65.001 L 143.90810167658194 26.001 L 151.28800432666307 26.001 L 151.28800432666307 65.001 Z"
                                                pathFrom="M 143.90810167658194 65.001 L 143.90810167658194 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 151.28800432666307 65.001 L 143.90810167658194 65.001 Z"
                                                cy="26" cx="151.28800432666307" j="16" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3191"
                                                d="M 153.13297998918333 65.001 L 153.13297998918333 46.94544444444444 L 160.51288263926446 46.94544444444444 L 160.51288263926446 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3186)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 153.13297998918333 65.001 L 153.13297998918333 46.94544444444444 L 160.51288263926446 46.94544444444444 L 160.51288263926446 65.001 Z"
                                                pathFrom="M 153.13297998918333 65.001 L 153.13297998918333 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 160.51288263926446 65.001 L 153.13297998918333 65.001 Z"
                                                cy="46.94444444444444" cx="160.51288263926446" j="17" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3197"
                                                d="M 162.35785830178474 65.001 L 162.35785830178474 17.334333333333337 L 169.73776095186588 17.334333333333337 L 169.73776095186588 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3192)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 162.35785830178474 65.001 L 162.35785830178474 17.334333333333337 L 169.73776095186588 17.334333333333337 L 169.73776095186588 65.001 Z"
                                                pathFrom="M 162.35785830178474 65.001 L 162.35785830178474 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 169.73776095186588 65.001 L 162.35785830178474 65.001 Z"
                                                cy="17.333333333333336" cx="169.73776095186588" j="18" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3203"
                                                d="M 171.58273661438614 65.001 L 171.58273661438614 35.38988888888888 L 178.96263926446727 35.38988888888888 L 178.96263926446727 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3198)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 171.58273661438614 65.001 L 171.58273661438614 35.38988888888888 L 178.96263926446727 35.38988888888888 L 178.96263926446727 65.001 Z"
                                                pathFrom="M 171.58273661438614 65.001 L 171.58273661438614 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 178.96263926446727 65.001 L 171.58273661438614 65.001 Z"
                                                cy="35.388888888888886" cx="178.96263926446727" j="19" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3209"
                                                d="M 180.80761492698755 65.001 L 180.80761492698755 3.612111111111107 L 188.1875175770687 3.612111111111107 L 188.1875175770687 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3204)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 180.80761492698755 65.001 L 180.80761492698755 3.612111111111107 L 188.1875175770687 3.612111111111107 L 188.1875175770687 65.001 Z"
                                                pathFrom="M 180.80761492698755 65.001 L 180.80761492698755 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 188.1875175770687 65.001 L 180.80761492698755 65.001 Z"
                                                cy="3.611111111111107" cx="188.1875175770687" j="20" val="85"
                                                barHeight="61.38888888888889" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3215"
                                                d="M 190.03249323958897 65.001 L 190.03249323958897 19.501 L 197.4123958896701 19.501 L 197.4123958896701 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3210)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 190.03249323958897 65.001 L 190.03249323958897 19.501 L 197.4123958896701 19.501 L 197.4123958896701 65.001 Z"
                                                pathFrom="M 190.03249323958897 65.001 L 190.03249323958897 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 197.4123958896701 65.001 L 190.03249323958897 65.001 Z"
                                                cy="19.5" cx="197.4123958896701" j="21" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3221"
                                                d="M 199.25737155219036 65.001 L 199.25737155219036 46.94544444444444 L 206.6372742022715 46.94544444444444 L 206.6372742022715 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3216)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 199.25737155219036 65.001 L 199.25737155219036 46.94544444444444 L 206.6372742022715 46.94544444444444 L 206.6372742022715 65.001 Z"
                                                pathFrom="M 199.25737155219036 65.001 L 199.25737155219036 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 206.6372742022715 65.001 L 199.25737155219036 65.001 Z"
                                                cy="46.94444444444444" cx="206.6372742022715" j="22" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3227"
                                                d="M 208.48224986479178 65.001 L 208.48224986479178 33.22322222222222 L 215.86215251487292 33.22322222222222 L 215.86215251487292 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3222)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 208.48224986479178 65.001 L 208.48224986479178 33.22322222222222 L 215.86215251487292 33.22322222222222 L 215.86215251487292 65.001 Z"
                                                pathFrom="M 208.48224986479178 65.001 L 208.48224986479178 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 215.86215251487292 65.001 L 208.48224986479178 65.001 Z"
                                                cy="33.22222222222222" cx="215.86215251487292" j="23" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3233"
                                                d="M 217.70712817739317 65.001 L 217.70712817739317 56.33433333333333 L 225.0870308274743 56.33433333333333 L 225.0870308274743 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3228)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 217.70712817739317 65.001 L 217.70712817739317 56.33433333333333 L 225.0870308274743 56.33433333333333 L 225.0870308274743 65.001 Z"
                                                pathFrom="M 217.70712817739317 65.001 L 217.70712817739317 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 225.0870308274743 65.001 L 217.70712817739317 65.001 Z"
                                                cy="56.333333333333336" cx="225.0870308274743" j="24" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3239"
                                                d="M 226.9320064899946 65.001 L 226.9320064899946 39.001 L 234.31190914007573 39.001 L 234.31190914007573 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3234)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 226.9320064899946 65.001 L 226.9320064899946 39.001 L 234.31190914007573 39.001 L 234.31190914007573 65.001 Z"
                                                pathFrom="M 226.9320064899946 65.001 L 226.9320064899946 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 234.31190914007573 65.001 L 226.9320064899946 65.001 Z"
                                                cy="39" cx="234.31190914007573" j="25" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3245"
                                                d="M 236.15688480259598 65.001 L 236.15688480259598 58.501 L 243.53678745267712 58.501 L 243.53678745267712 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3240)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 236.15688480259598 65.001 L 236.15688480259598 58.501 L 243.53678745267712 58.501 L 243.53678745267712 65.001 Z"
                                                pathFrom="M 236.15688480259598 65.001 L 236.15688480259598 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 243.53678745267712 65.001 L 236.15688480259598 65.001 Z"
                                                cy="58.5" cx="243.53678745267712" j="26" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3251"
                                                d="M 245.3817631151974 65.001 L 245.3817631151974 26.001 L 252.76166576527854 26.001 L 252.76166576527854 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3246)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 245.3817631151974 65.001 L 245.3817631151974 26.001 L 252.76166576527854 26.001 L 252.76166576527854 65.001 Z"
                                                pathFrom="M 245.3817631151974 65.001 L 245.3817631151974 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 252.76166576527854 65.001 L 245.3817631151974 65.001 Z"
                                                cy="26" cx="252.76166576527854" j="27" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3257"
                                                d="M 254.60664142779882 65.001 L 254.60664142779882 46.94544444444444 L 261.98654407787996 46.94544444444444 L 261.98654407787996 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3252)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 254.60664142779882 65.001 L 254.60664142779882 46.94544444444444 L 261.98654407787996 46.94544444444444 L 261.98654407787996 65.001 Z"
                                                pathFrom="M 254.60664142779882 65.001 L 254.60664142779882 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 261.98654407787996 65.001 L 254.60664142779882 65.001 Z"
                                                cy="46.94444444444444" cx="261.98654407787996" j="28" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3263"
                                                d="M 263.8315197404002 65.001 L 263.8315197404002 17.334333333333337 L 271.21142239048135 17.334333333333337 L 271.21142239048135 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3258)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 263.8315197404002 65.001 L 263.8315197404002 17.334333333333337 L 271.21142239048135 17.334333333333337 L 271.21142239048135 65.001 Z"
                                                pathFrom="M 263.8315197404002 65.001 L 263.8315197404002 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 271.21142239048135 65.001 L 263.8315197404002 65.001 Z"
                                                cy="17.333333333333336" cx="271.21142239048135" j="29" val="66"
                                                barHeight="47.666666666666664" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3269"
                                                d="M 273.0563980530016 65.001 L 273.0563980530016 35.38988888888888 L 280.43630070308274 35.38988888888888 L 280.43630070308274 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3264)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 273.0563980530016 65.001 L 273.0563980530016 35.38988888888888 L 280.43630070308274 35.38988888888888 L 280.43630070308274 65.001 Z"
                                                pathFrom="M 273.0563980530016 65.001 L 273.0563980530016 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 280.43630070308274 65.001 L 273.0563980530016 65.001 Z"
                                                cy="35.388888888888886" cx="280.43630070308274" j="30" val="41"
                                                barHeight="29.61111111111111" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3275"
                                                d="M 282.28127636560305 65.001 L 282.28127636560305 0.7232222222222143 L 289.6611790156842 0.7232222222222143 L 289.6611790156842 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3270)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 282.28127636560305 65.001 L 282.28127636560305 0.7232222222222143 L 289.6611790156842 0.7232222222222143 L 289.6611790156842 65.001 Z"
                                                pathFrom="M 282.28127636560305 65.001 L 282.28127636560305 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 289.6611790156842 65.001 L 282.28127636560305 65.001 Z"
                                                cy="0.7222222222222143" cx="289.6611790156842" j="31" val="89"
                                                barHeight="64.27777777777779" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3281"
                                                d="M 291.50615467820444 65.001 L 291.50615467820444 19.501 L 298.8860573282856 19.501 L 298.8860573282856 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3276)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 291.50615467820444 65.001 L 291.50615467820444 19.501 L 298.8860573282856 19.501 L 298.8860573282856 65.001 Z"
                                                pathFrom="M 291.50615467820444 65.001 L 291.50615467820444 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 298.8860573282856 65.001 L 291.50615467820444 65.001 Z"
                                                cy="19.5" cx="298.8860573282856" j="32" val="63" barHeight="45.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3287"
                                                d="M 300.73103299080583 65.001 L 300.73103299080583 46.94544444444444 L 308.11093564088696 46.94544444444444 L 308.11093564088696 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3282)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 300.73103299080583 65.001 L 300.73103299080583 46.94544444444444 L 308.11093564088696 46.94544444444444 L 308.11093564088696 65.001 Z"
                                                pathFrom="M 300.73103299080583 65.001 L 300.73103299080583 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 308.11093564088696 65.001 L 300.73103299080583 65.001 Z"
                                                cy="46.94444444444444" cx="308.11093564088696" j="33" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3293"
                                                d="M 309.9559113034072 65.001 L 309.9559113034072 33.22322222222222 L 317.33581395348835 33.22322222222222 L 317.33581395348835 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3288)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 309.9559113034072 65.001 L 309.9559113034072 33.22322222222222 L 317.33581395348835 33.22322222222222 L 317.33581395348835 65.001 Z"
                                                pathFrom="M 309.9559113034072 65.001 L 309.9559113034072 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 317.33581395348835 65.001 L 309.9559113034072 65.001 Z"
                                                cy="33.22222222222222" cx="317.33581395348835" j="34" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3299"
                                                d="M 319.18078961600867 65.001 L 319.18078961600867 56.33433333333333 L 326.5606922660898 56.33433333333333 L 326.5606922660898 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3294)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 319.18078961600867 65.001 L 319.18078961600867 56.33433333333333 L 326.5606922660898 56.33433333333333 L 326.5606922660898 65.001 Z"
                                                pathFrom="M 319.18078961600867 65.001 L 319.18078961600867 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 326.5606922660898 65.001 L 319.18078961600867 65.001 Z"
                                                cy="56.333333333333336" cx="326.5606922660898" j="35" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3305"
                                                d="M 328.40566792861006 65.001 L 328.40566792861006 39.001 L 335.7855705786912 39.001 L 335.7855705786912 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3300)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 328.40566792861006 65.001 L 328.40566792861006 39.001 L 335.7855705786912 39.001 L 335.7855705786912 65.001 Z"
                                                pathFrom="M 328.40566792861006 65.001 L 328.40566792861006 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 335.7855705786912 65.001 L 328.40566792861006 65.001 Z"
                                                cy="39" cx="335.7855705786912" j="36" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3311"
                                                d="M 337.63054624121145 65.001 L 337.63054624121145 58.501 L 345.0104488912926 58.501 L 345.0104488912926 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3306)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 337.63054624121145 65.001 L 337.63054624121145 58.501 L 345.0104488912926 58.501 L 345.0104488912926 65.001 Z"
                                                pathFrom="M 337.63054624121145 65.001 L 337.63054624121145 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 345.0104488912926 65.001 L 337.63054624121145 65.001 Z"
                                                cy="58.5" cx="345.0104488912926" j="37" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3317"
                                                d="M 346.85542455381284 65.001 L 346.85542455381284 46.94544444444444 L 354.235327203894 46.94544444444444 L 354.235327203894 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3312)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 346.85542455381284 65.001 L 346.85542455381284 46.94544444444444 L 354.235327203894 46.94544444444444 L 354.235327203894 65.001 Z"
                                                pathFrom="M 346.85542455381284 65.001 L 346.85542455381284 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 354.235327203894 65.001 L 346.85542455381284 65.001 Z"
                                                cy="46.94444444444444" cx="354.235327203894" j="38" val="25"
                                                barHeight="18.055555555555557" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3323"
                                                d="M 356.0803028664143 65.001 L 356.0803028664143 33.22322222222222 L 363.4602055164954 33.22322222222222 L 363.4602055164954 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3318)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 356.0803028664143 65.001 L 356.0803028664143 33.22322222222222 L 363.4602055164954 33.22322222222222 L 363.4602055164954 65.001 Z"
                                                pathFrom="M 356.0803028664143 65.001 L 356.0803028664143 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 363.4602055164954 65.001 L 356.0803028664143 65.001 Z"
                                                cy="33.22222222222222" cx="363.4602055164954" j="39" val="44"
                                                barHeight="31.77777777777778" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3329"
                                                d="M 365.3051811790157 65.001 L 365.3051811790157 56.33433333333333 L 372.6850838290968 56.33433333333333 L 372.6850838290968 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3324)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 365.3051811790157 65.001 L 365.3051811790157 56.33433333333333 L 372.6850838290968 56.33433333333333 L 372.6850838290968 65.001 Z"
                                                pathFrom="M 365.3051811790157 65.001 L 365.3051811790157 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 372.6850838290968 65.001 L 365.3051811790157 65.001 Z"
                                                cy="56.333333333333336" cx="372.6850838290968" j="40" val="12"
                                                barHeight="8.666666666666666" barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3335"
                                                d="M 374.53005949161707 65.001 L 374.53005949161707 39.001 L 381.9099621416982 39.001 L 381.9099621416982 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3330)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 374.53005949161707 65.001 L 374.53005949161707 39.001 L 381.9099621416982 39.001 L 381.9099621416982 65.001 Z"
                                                pathFrom="M 374.53005949161707 65.001 L 374.53005949161707 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 381.9099621416982 65.001 L 374.53005949161707 65.001 Z"
                                                cy="39" cx="381.9099621416982" j="41" val="36" barHeight="26"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3341"
                                                d="M 383.7549378042185 65.001 L 383.7549378042185 58.501 L 391.13484045429965 58.501 L 391.13484045429965 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3336)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 383.7549378042185 65.001 L 383.7549378042185 58.501 L 391.13484045429965 58.501 L 391.13484045429965 65.001 Z"
                                                pathFrom="M 383.7549378042185 65.001 L 383.7549378042185 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 391.13484045429965 65.001 L 383.7549378042185 65.001 Z"
                                                cy="58.5" cx="391.13484045429965" j="42" val="9" barHeight="6.5"
                                                barWidth="7.3799026500811244"></path>
                                            <path id="SvgjsPath3347"
                                                d="M 392.9798161168199 65.001 L 392.9798161168199 26.001 L 400.35971876690104 26.001 L 400.35971876690104 65.001 Z"
                                                fill="url(#SvgjsLinearGradient3342)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqs55q60f)"
                                                pathTo="M 392.9798161168199 65.001 L 392.9798161168199 26.001 L 400.35971876690104 26.001 L 400.35971876690104 65.001 Z"
                                                pathFrom="M 392.9798161168199 65.001 L 392.9798161168199 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 400.35971876690104 65.001 L 392.9798161168199 65.001 Z"
                                                cy="26" cx="400.35971876690104" j="43" val="54" barHeight="39"
                                                barWidth="7.3799026500811244"></path>
                                            <g id="SvgjsG3082" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG3088" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3094" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3100" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3106" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3112" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3118" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3124" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3130" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3136" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3142" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3148" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3154" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3160" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3166" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3172" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3178" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3184" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3190" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3196" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3202" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3208" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3214" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3220" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3226" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3232" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3238" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3244" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3250" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3256" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3262" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3268" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3274" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3280" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3286" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3292" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3298" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3304" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3310" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3316" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3322" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3328" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3334" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3340" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                                <g id="SvgjsG3346" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMaskqs55q60f)"></g>
                                            </g>
                                            <g id="SvgjsG3083"
                                                class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                        </g>
                                        <g id="SvgjsG3081" class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                            data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine3364" x1="-7.6651162790697684" y1="0" x2="404.33488372093024"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine3365" x1="-7.6651162790697684" y1="0" x2="404.33488372093024"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG3366" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG3367" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG3380" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG3381" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG3382" class="apexcharts-point-annotations"></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(255, 134, 154);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Campaign monitor</h5>
                        <ul class="nav nav-pills nav-fill mt-3 border-bottom pb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" id="pills-home-tab"
                                    data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                                    aria-selected="true"><i class="feather icon-film m-r-5"></i> Entertainment</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-profile-tab"
                                    data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                                    aria-selected="false" tabindex="-1"><i class="feather icon-file-text m-r-5"></i>
                                    CMS</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-contact-tab"
                                    data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                                    aria-selected="false" tabindex="-1"><i class="feather icon-mail m-r-5"></i> Mail</a>
                            </li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-news-tab"
                                    data-bs-toggle="pill" href="#pills-news" role="tab" aria-controls="pills-news"
                                    aria-selected="false" tabindex="-1"><i class="feather icon-monitor m-r-5"></i>
                                    Newslatter</a></li>
                        </ul>
                    </div>
                    <div class="card-body p-0">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="table-responsive">
                                    <div class="customer-scroll simplebar-scrollable-y"
                                        style="height: 362px; position: relative" data-simplebar="init">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                        aria-label="scrollable content"
                                                        style="height: 100%; overflow: hidden scroll;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <table class="table table-hover m-b-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th><span>Campaign date</span></th>
                                                                        <th><span>Click <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Cost <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>CTR <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ARPU <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ECPI <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ROI <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Revenue <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Conversions <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>8-11-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>485<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>769<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,7%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>10:55<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>15-10-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 65%"
                                                                                    aria-valuenow="65" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>523<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>736<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 44%"
                                                                                    aria-valuenow="44" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>4:30<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 68%"
                                                                                    aria-valuenow="68" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8-8-2017</td>
                                                                        <td>624<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 45%"
                                                                                    aria-valuenow="45" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>436<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 55%"
                                                                                    aria-valuenow="55" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>756<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 95%"
                                                                                    aria-valuenow="95" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 38%"
                                                                                    aria-valuenow="38" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,4%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>9,45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>9:05<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 67%"
                                                                                    aria-valuenow="67" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8.63%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-12-2017</td>
                                                                        <td>423<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 54%"
                                                                                    aria-valuenow="54" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>123<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>756<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 75%"
                                                                                    aria-valuenow="75" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,85<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7:45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1-6-2015</td>
                                                                        <td>465<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 66%"
                                                                                    aria-valuenow="66" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>463<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>456<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>68,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 32%"
                                                                                    aria-valuenow="32" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8:45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 71%"
                                                                                    aria-valuenow="71" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>39.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 38%"
                                                                                    aria-valuenow="38" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8-11-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 43%"
                                                                                    aria-valuenow="43" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>485<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>769<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 69%"
                                                                                    aria-valuenow="69" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,7%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>10:55<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 55%"
                                                                                    aria-valuenow="55" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>15-10-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 61%"
                                                                                    aria-valuenow="61" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>523<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 45%"
                                                                                    aria-valuenow="45" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>736<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>4:30<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: 1285px; height: 426px;">
                                            </div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                            <div class="simplebar-scrollbar"
                                                style="height: 307px; transform: translate3d(0px, 0px, 0px); display: block;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="table-responsive">
                                    <div class="customer-scroll1" style="height: 362px; position: relative"
                                        data-simplebar="init">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                        aria-label="scrollable content"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <table class="table table-hover m-b-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th><span>Campaign date</span></th>
                                                                        <th><span>Click <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Cost <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>CTR <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ARPU <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ECPI <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ROI <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Revenue <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Conversions <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>8-11-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>485<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>769<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,7%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>10:55<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>15-10-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 65%"
                                                                                    aria-valuenow="65" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>523<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>736<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 44%"
                                                                                    aria-valuenow="44" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>4:30<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 68%"
                                                                                    aria-valuenow="68" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8-8-2017</td>
                                                                        <td>624<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 45%"
                                                                                    aria-valuenow="45" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>436<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 55%"
                                                                                    aria-valuenow="55" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>756<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 95%"
                                                                                    aria-valuenow="95" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 38%"
                                                                                    aria-valuenow="38" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,4%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>9,45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>9:05<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 67%"
                                                                                    aria-valuenow="67" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8.63%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-12-2017</td>
                                                                        <td>423<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 54%"
                                                                                    aria-valuenow="54" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>123<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>756<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 75%"
                                                                                    aria-valuenow="75" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,85<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7:45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1-6-2015</td>
                                                                        <td>465<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 66%"
                                                                                    aria-valuenow="66" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>463<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>456<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>68,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 32%"
                                                                                    aria-valuenow="32" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8:45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 71%"
                                                                                    aria-valuenow="71" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>39.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 38%"
                                                                                    aria-valuenow="38" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8-11-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 43%"
                                                                                    aria-valuenow="43" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>485<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>769<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 69%"
                                                                                    aria-valuenow="69" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,7%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>10:55<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 55%"
                                                                                    aria-valuenow="55" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>15-10-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 61%"
                                                                                    aria-valuenow="61" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>523<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 45%"
                                                                                    aria-valuenow="45" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>736<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>4:30<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="table-responsive">
                                    <div class="customer-scroll2" style="height: 362px; position: relative"
                                        data-simplebar="init">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                        aria-label="scrollable content"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <table class="table table-hover m-b-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th><span>Campaign date</span></th>
                                                                        <th><span>Click <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Cost <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>CTR <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ARPU <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ECPI <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ROI <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Revenue <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Conversions <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>8-11-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>485<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>769<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,7%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>10:55<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>15-10-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 65%"
                                                                                    aria-valuenow="65" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>523<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>736<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 44%"
                                                                                    aria-valuenow="44" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>4:30<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 68%"
                                                                                    aria-valuenow="68" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8-8-2017</td>
                                                                        <td>624<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 45%"
                                                                                    aria-valuenow="45" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>436<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 55%"
                                                                                    aria-valuenow="55" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>756<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 95%"
                                                                                    aria-valuenow="95" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 38%"
                                                                                    aria-valuenow="38" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,4%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>9,45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>9:05<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 67%"
                                                                                    aria-valuenow="67" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8.63%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-12-2017</td>
                                                                        <td>423<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 54%"
                                                                                    aria-valuenow="54" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>123<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>756<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 75%"
                                                                                    aria-valuenow="75" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,85<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7:45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1-6-2015</td>
                                                                        <td>465<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 66%"
                                                                                    aria-valuenow="66" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>463<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>456<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>68,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 32%"
                                                                                    aria-valuenow="32" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8:45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 71%"
                                                                                    aria-valuenow="71" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>39.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 38%"
                                                                                    aria-valuenow="38" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8-11-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 43%"
                                                                                    aria-valuenow="43" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>485<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>769<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 69%"
                                                                                    aria-valuenow="69" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,7%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>10:55<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 55%"
                                                                                    aria-valuenow="55" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>15-10-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 61%"
                                                                                    aria-valuenow="61" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>523<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 45%"
                                                                                    aria-valuenow="45" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>736<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>4:30<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
                                <div class="table-responsive">
                                    <div class="customer-scroll3" style="height: 362px; position: relative"
                                        data-simplebar="init">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                        aria-label="scrollable content"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <table class="table table-hover m-b-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th><span>Campaign date</span></th>
                                                                        <th><span>Click <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Cost <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>CTR <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ARPU <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ECPI <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>ROI <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Revenue <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                        <th><span>Conversions <a class="help"
                                                                                    data-toggle="popover"
                                                                                    title="Popover title"
                                                                                    data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                                                        class="feather icon-help-circle f-16"></i></a></span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>8-11-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>485<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>769<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,7%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>10:55<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>15-10-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 65%"
                                                                                    aria-valuenow="65" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>523<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>736<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 44%"
                                                                                    aria-valuenow="44" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>4:30<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 68%"
                                                                                    aria-valuenow="68" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8-8-2017</td>
                                                                        <td>624<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 45%"
                                                                                    aria-valuenow="45" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>436<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 55%"
                                                                                    aria-valuenow="55" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>756<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 95%"
                                                                                    aria-valuenow="95" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 38%"
                                                                                    aria-valuenow="38" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,4%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>9,45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>9:05<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 67%"
                                                                                    aria-valuenow="67" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8.63%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-12-2017</td>
                                                                        <td>423<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 54%"
                                                                                    aria-valuenow="54" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>123<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>756<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 75%"
                                                                                    aria-valuenow="75" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,85<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7:45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1-6-2015</td>
                                                                        <td>465<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 66%"
                                                                                    aria-valuenow="66" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>463<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>456<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>68,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 32%"
                                                                                    aria-valuenow="32" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8:45<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 71%"
                                                                                    aria-valuenow="71" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>39.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 38%"
                                                                                    aria-valuenow="38" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8-11-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 43%"
                                                                                    aria-valuenow="43" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>485<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>769<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 69%"
                                                                                    aria-valuenow="69" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>45,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,7%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 80%"
                                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>8,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 41%"
                                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>10:55<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 55%"
                                                                                    aria-valuenow="55" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>33.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>15-10-2016</td>
                                                                        <td>786<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 61%"
                                                                                    aria-valuenow="61" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>523<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-primary rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 45%"
                                                                                    aria-valuenow="45" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>736<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>78,3%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 60%"
                                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>6,6%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-info rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 30%"
                                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>7,56<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-danger rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>4:30<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-warning rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 70%"
                                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td>76.8%<div class="progress mt-1"
                                                                                style="height: 4px">
                                                                                <div class="progress-bar bg-success rounded"
                                                                                    role="progressbar"
                                                                                    style="width: 40%"
                                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pc-content">
        <div class="page-header">
            <div class="page-block card mb-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title border-bottom pb-2 mb-2">
                                <h4 class="mb-0">Vertical Layout</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html"><i
                                            class="ph ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Layout</a></li>
                                <li class="breadcrumb-item" aria-current="page">Vertical Layout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body ">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="mb-0">Transactions</h5>
                <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="ti ti-dots-vertical f-18"></i></a>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a> <a
                            class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border">AI</div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0">Apple Inc.</h6>
                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">$210,000</h6>
                                    <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 10.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks">
                                <span>SM</span>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0">Spotify Music</h6>
                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">- 10,000</h6>
                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip"
                                data-bs-title="143 Posts"><span>MD</span></div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0">Medium</h6>
                                    <p class="text-muted mb-0"><small>06:30 pm</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">-26</h6>
                                    <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="143 Posts">
                                <span>U</span>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0">Uber</h6>
                                    <p class="text-muted mb-0"><small>08:40 pm</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">+210,000</h6>
                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip"
                                data-bs-title="143 Posts"><span>OC</span></div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0">Ola Cabs</h6>
                                    <p class="text-muted mb-0"><small>07:40 pm</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">+210,000</h6>
                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hello card</h5>
                    </div>
                    <div class="card-body">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-xxl-8">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 col-xl-4 my-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 me-1">Bitcoin</p>
                            <p class="mb-0 text-muted"><i class="ph ph-caret-up f-20 align-bottom text-success"></i>
                                0.73%</p>
                        </div>
                        <div class="mt-1 row align-items-center">
                            <div class="col-6">
                                <h5 class="mb-0">£ 5678.09</h5>
                                <p class="text-muted mb-0">Total Tasks</p>
                            </div>
                            <div class="col-6">
                                <div id="bitcoin-chart-1" style="min-height: 40px;">
                                    <div id="apexchartsoqpfqgm7"
                                        class="apexcharts-canvas apexchartsoqpfqgm7 apexcharts-theme-light"
                                        style="width: 113px; height: 40px;"><svg id="SvgjsSvg15397" width="113"
                                            height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="113" height="40">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 20px;"></div>
                                            </foreignObject>
                                            <rect id="SvgjsRect15401" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG15434" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG15399" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs15398">
                                                    <clipPath id="gridRectMaskoqpfqgm7">
                                                        <rect id="SvgjsRect15403" width="119" height="50" x="-4" y="-6"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskoqpfqgm7"></clipPath>
                                                    <clipPath id="nonForecastMaskoqpfqgm7"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskoqpfqgm7">
                                                        <rect id="SvgjsRect15404" width="117" height="42" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine15402" x1="0" y1="0" x2="0" y2="38" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="38"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                                </line>
                                                <g id="SvgjsG15410" class="apexcharts-grid">
                                                    <g id="SvgjsG15411" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine15414" x1="0" y1="0" x2="113" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15415" x1="0" y1="6.333333333333333" x2="113"
                                                            y2="6.333333333333333" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15416" x1="0" y1="12.666666666666666"
                                                            x2="113" y2="12.666666666666666" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15417" x1="0" y1="19" x2="113" y2="19"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15418" x1="0" y1="25.333333333333332"
                                                            x2="113" y2="25.333333333333332" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15419" x1="0" y1="31.666666666666664"
                                                            x2="113" y2="31.666666666666664" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15420" x1="0" y1="38" x2="113" y2="38"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG15412" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine15422" x1="0" y1="38" x2="113" y2="38"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine15421" x1="0" y1="1" x2="0" y2="38"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG15413" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <g id="SvgjsG15405"
                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG15406" class="apexcharts-series" zIndex="0"
                                                        seriesName="series-1" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath15409"
                                                            d="M 0 34.833333333333336C 6.591666666666666 34.833333333333336 12.241666666666667 22.166666666666664 18.833333333333332 22.166666666666664C 25.424999999999997 22.166666666666664 31.075 36.1 37.666666666666664 36.1C 44.25833333333333 36.1 49.90833333333333 31.666666666666668 56.5 31.666666666666668C 63.09166666666667 31.666666666666668 68.74166666666666 35.46666666666667 75.33333333333333 35.46666666666667C 81.925 35.46666666666667 87.575 6.333333333333332 94.16666666666667 6.333333333333332C 100.75833333333334 6.333333333333332 106.40833333333333 38 113 38"
                                                            fill="none" fill-opacity="1" stroke="rgba(46,216,182,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-line" index="0"
                                                            clip-path="url(#gridRectMaskoqpfqgm7)"
                                                            pathTo="M 0 34.833333333333336C 6.591666666666666 34.833333333333336 12.241666666666667 22.166666666666664 18.833333333333332 22.166666666666664C 25.424999999999997 22.166666666666664 31.075 36.1 37.666666666666664 36.1C 44.25833333333333 36.1 49.90833333333333 31.666666666666668 56.5 31.666666666666668C 63.09166666666667 31.666666666666668 68.74166666666666 35.46666666666667 75.33333333333333 35.46666666666667C 81.925 35.46666666666667 87.575 6.333333333333332 94.16666666666667 6.333333333333332C 100.75833333333334 6.333333333333332 106.40833333333333 38 113 38"
                                                            pathFrom="M -1 38 L -1 38 L 18.833333333333332 38 L 37.666666666666664 38 L 56.5 38 L 75.33333333333333 38 L 94.16666666666667 38 L 113 38"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG15407"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle15438" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wlfagpal3l no-pointer-events"
                                                                    stroke="#ffffff" fill="#2ed8b6" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG15408" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine15423" x1="0" y1="0" x2="113" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine15424" x1="0" y1="0" x2="113" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG15425" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG15426" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG15435" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG15436" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG15437" class="apexcharts-point-annotations"></g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(46, 216, 182);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 my-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 me-1">Bitcoin</p>
                            <p class="mb-0 text-muted"><i class="ph ph-caret-down f-20 align-bottom text-danger"></i>
                                0.73%</p>
                        </div>
                        <div class="mt-1 row align-items-center">
                            <div class="col-6">
                                <h5 class="mb-0">£ 5678.09</h5>
                                <p class="text-muted mb-0">Total Tasks</p>
                            </div>
                            <div class="col-6">
                                <div id="bitcoin-chart-2" style="min-height: 40px;">
                                    <div id="apexchartstpwrht7q"
                                        class="apexcharts-canvas apexchartstpwrht7q apexcharts-theme-light"
                                        style="width: 113px; height: 40px;"><svg id="SvgjsSvg15440" width="113"
                                            height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="113" height="40">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 20px;"></div>
                                            </foreignObject>
                                            <rect id="SvgjsRect15444" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG15477" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG15442" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs15441">
                                                    <clipPath id="gridRectMasktpwrht7q">
                                                        <rect id="SvgjsRect15446" width="119" height="50" x="-4" y="-6"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMasktpwrht7q"></clipPath>
                                                    <clipPath id="nonForecastMasktpwrht7q"></clipPath>
                                                    <clipPath id="gridRectMarkerMasktpwrht7q">
                                                        <rect id="SvgjsRect15447" width="117" height="42" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine15445" x1="0" y1="0" x2="0" y2="38" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="38"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                                </line>
                                                <g id="SvgjsG15453" class="apexcharts-grid">
                                                    <g id="SvgjsG15454" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine15457" x1="0" y1="0" x2="113" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15458" x1="0" y1="6.333333333333333" x2="113"
                                                            y2="6.333333333333333" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15459" x1="0" y1="12.666666666666666"
                                                            x2="113" y2="12.666666666666666" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15460" x1="0" y1="19" x2="113" y2="19"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15461" x1="0" y1="25.333333333333332"
                                                            x2="113" y2="25.333333333333332" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15462" x1="0" y1="31.666666666666664"
                                                            x2="113" y2="31.666666666666664" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15463" x1="0" y1="38" x2="113" y2="38"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG15455" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine15465" x1="0" y1="38" x2="113" y2="38"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine15464" x1="0" y1="1" x2="0" y2="38"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG15456" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <g id="SvgjsG15448"
                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG15449" class="apexcharts-series" zIndex="0"
                                                        seriesName="series-1" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath15452"
                                                            d="M 0 38C 6.591666666666666 38 12.241666666666667 6.333333333333332 18.833333333333332 6.333333333333332C 25.424999999999997 6.333333333333332 31.075 35.46666666666667 37.666666666666664 35.46666666666667C 44.25833333333333 35.46666666666667 49.90833333333333 31.666666666666668 56.5 31.666666666666668C 63.09166666666667 31.666666666666668 68.74166666666666 36.1 75.33333333333333 36.1C 81.925 36.1 87.575 22.166666666666664 94.16666666666667 22.166666666666664C 100.75833333333334 22.166666666666664 106.40833333333333 34.833333333333336 113 34.833333333333336"
                                                            fill="none" fill-opacity="1" stroke="rgba(255,83,112,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-line" index="0"
                                                            clip-path="url(#gridRectMasktpwrht7q)"
                                                            pathTo="M 0 38C 6.591666666666666 38 12.241666666666667 6.333333333333332 18.833333333333332 6.333333333333332C 25.424999999999997 6.333333333333332 31.075 35.46666666666667 37.666666666666664 35.46666666666667C 44.25833333333333 35.46666666666667 49.90833333333333 31.666666666666668 56.5 31.666666666666668C 63.09166666666667 31.666666666666668 68.74166666666666 36.1 75.33333333333333 36.1C 81.925 36.1 87.575 22.166666666666664 94.16666666666667 22.166666666666664C 100.75833333333334 22.166666666666664 106.40833333333333 34.833333333333336 113 34.833333333333336"
                                                            pathFrom="M -1 38 L -1 38 L 18.833333333333332 38 L 37.666666666666664 38 L 56.5 38 L 75.33333333333333 38 L 94.16666666666667 38 L 113 38"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG15450"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle15481" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wvbuqb9de no-pointer-events"
                                                                    stroke="#ffffff" fill="#ff5370" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG15451" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine15466" x1="0" y1="0" x2="113" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine15467" x1="0" y1="0" x2="113" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG15468" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG15469" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG15478" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG15479" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG15480" class="apexcharts-point-annotations"></g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 83, 112);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 my-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 me-1">Bitcoin</p>
                            <p class="mb-0 text-muted"><i class="ph ph-caret-up f-20 align-bottom text-primary"></i>
                                0.73%</p>
                        </div>
                        <div class="mt-1 row align-items-center">
                            <div class="col-6">
                                <h5 class="mb-0">£ 5678.09</h5>
                                <p class="text-muted mb-0">Total Tasks</p>
                            </div>
                            <div class="col-6">
                                <div id="bitcoin-chart-3" style="min-height: 40px;">
                                    <div id="apexchartsfvwngtbgk"
                                        class="apexcharts-canvas apexchartsfvwngtbgk apexcharts-theme-light"
                                        style="width: 113px; height: 40px;"><svg id="SvgjsSvg15483" width="113"
                                            height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="113" height="40">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 20px;"></div>
                                            </foreignObject>
                                            <rect id="SvgjsRect15487" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG15520" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG15485" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs15484">
                                                    <clipPath id="gridRectMaskfvwngtbgk">
                                                        <rect id="SvgjsRect15489" width="119" height="50" x="-4" y="-6"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskfvwngtbgk"></clipPath>
                                                    <clipPath id="nonForecastMaskfvwngtbgk"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskfvwngtbgk">
                                                        <rect id="SvgjsRect15490" width="117" height="42" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine15488" x1="0" y1="0" x2="0" y2="38" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="38"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                                </line>
                                                <g id="SvgjsG15496" class="apexcharts-grid">
                                                    <g id="SvgjsG15497" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine15500" x1="0" y1="0" x2="113" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15501" x1="0" y1="6.333333333333333" x2="113"
                                                            y2="6.333333333333333" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15502" x1="0" y1="12.666666666666666"
                                                            x2="113" y2="12.666666666666666" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15503" x1="0" y1="19" x2="113" y2="19"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15504" x1="0" y1="25.333333333333332"
                                                            x2="113" y2="25.333333333333332" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15505" x1="0" y1="31.666666666666664"
                                                            x2="113" y2="31.666666666666664" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine15506" x1="0" y1="38" x2="113" y2="38"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG15498" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine15508" x1="0" y1="38" x2="113" y2="38"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine15507" x1="0" y1="1" x2="0" y2="38"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG15499" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <g id="SvgjsG15491"
                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG15492" class="apexcharts-series" zIndex="0"
                                                        seriesName="series-1" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath15495"
                                                            d="M 0 34.833333333333336C 6.591666666666666 34.833333333333336 12.241666666666667 22.166666666666664 18.833333333333332 22.166666666666664C 25.424999999999997 22.166666666666664 31.075 36.1 37.666666666666664 36.1C 44.25833333333333 36.1 49.90833333333333 31.666666666666668 56.5 31.666666666666668C 63.09166666666667 31.666666666666668 68.74166666666666 35.46666666666667 75.33333333333333 35.46666666666667C 81.925 35.46666666666667 87.575 6.333333333333332 94.16666666666667 6.333333333333332C 100.75833333333334 6.333333333333332 106.40833333333333 38 113 38"
                                                            fill="none" fill-opacity="1" stroke="rgba(64,153,255,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-line" index="0"
                                                            clip-path="url(#gridRectMaskfvwngtbgk)"
                                                            pathTo="M 0 34.833333333333336C 6.591666666666666 34.833333333333336 12.241666666666667 22.166666666666664 18.833333333333332 22.166666666666664C 25.424999999999997 22.166666666666664 31.075 36.1 37.666666666666664 36.1C 44.25833333333333 36.1 49.90833333333333 31.666666666666668 56.5 31.666666666666668C 63.09166666666667 31.666666666666668 68.74166666666666 35.46666666666667 75.33333333333333 35.46666666666667C 81.925 35.46666666666667 87.575 6.333333333333332 94.16666666666667 6.333333333333332C 100.75833333333334 6.333333333333332 106.40833333333333 38 113 38"
                                                            pathFrom="M -1 38 L -1 38 L 18.833333333333332 38 L 37.666666666666664 38 L 56.5 38 L 75.33333333333333 38 L 94.16666666666667 38 L 113 38"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG15493"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle15524" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wxds0qfd1g no-pointer-events"
                                                                    stroke="#ffffff" fill="#4099ff" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG15494" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine15509" x1="0" y1="0" x2="113" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine15510" x1="0" y1="0" x2="113" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG15511" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG15512" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG15521" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG15522" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG15523" class="apexcharts-point-annotations"></g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(64, 153, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>

            </div>
        </div>
    </div>



</div>

@endsection
