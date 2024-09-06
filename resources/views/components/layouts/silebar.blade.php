<!-- ======= Navigation links for sidebar ======== -->
<ul class="sidebar-nav">
    <div class="h-100">
        <div class="sidebar-logo text-center py-2">

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'ISANPALM') }}
            </a>
            <ul class="sidebar-nav mt-0">
                <li class="sidebar-header">
                    Departments
                </li>
                @can(['view dashboard GM'])
                <li class="sidebar-item font_anuphan">
                    <a href="#" class="sidebar-link collapsed d-flex align-items-center" data-bs-target="#GM"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="ph ph-presentation-chart me-2"></i>
                        <span class="">{{ __('Dashboard') }}</span>
                    </a>
                    <ul id="GM" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">

                        <li class="sidebar-item">
                            <a href="{{ route('dashboard-palm.index')}}" class="sidebar-link-li">จัดซื้อปาล์ม</a>
                        </li>

                    </ul>
                </li>
                @endcan

                @can(['view RPO'])
                <li class="sidebar-item font_anuphan">
                    <a href="#" class="sidebar-link collapsed d-flex align-items-center" data-bs-target="#ffb"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="ph ph-download-simple me-2"></i>
                        {{ __('ฝ่ายจัดซื้อปาล์ม') }}
                    </a>
                    <ul id="ffb" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('dashboard-palm-purchase.index')}}"
                                class="sidebar-link-li">รายงานการซื้อผลปาล์ม</a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can(['view IT'])
                <li class="sidebar-item font_anuphan">
                    <a href="#" class="sidebar-link collapsed d-flex align-items-center" data-bs-target="#asset"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="ph ph-cardholder me-2"></i>
                        {{ __('ทะเบียนทรัพย์สิน') }}
                    </a>
                    <ul id="asset" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('asset.index')}}" class="sidebar-link-li">รายการรับเข้า</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('computer.index')}}" class="sidebar-link-li">Computer</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('computer.windows.index')}}" class="sidebar-link-li">Windows</a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can('view SEC')
                <li class="sidebar-item font_anuphan">
                    <a href="#" class="sidebar-link collapsed d-flex align-items-center" data-bs-target="#SEC"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="ph ph-cardholder me-2"></i>
                        {{ __('ฝ่ายรักษาความปลอดภัยและยานยนต์') }}
                    </a>
                    <ul id="SEC" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('car-report.index')}}" class="sidebar-link-li">รายการรถบริษัท ฯ</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('computer.index')}}" class="sidebar-link-li">Computer</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('computer.windows.index')}}" class="sidebar-link-li">Windows</a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can('view HRE')
                <li class="sidebar-item font_anuphan">
                    <a href="#" class="sidebar-link collapsed d-flex align-items-center" data-bs-target="#hre"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="ph ph-user-list me-2"></i>
                        HRE
                    </a>
                    <ul id="hre" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('user.index')}}" class="sidebar-link-li">User</a>
                        </li>
                    </ul>
                </li>
                @endcan


                @can('view ALL')
                <li class="sidebar-item font_anuphan">
                    <a href="#" class="sidebar-link collapsed d-flex align-items-center" data-bs-target="#it"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="ph ph-wrench me-2"></i>
                        {{ __('แจ้งซ่อม') }}
                    </a>
                    <ul id="it" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('report-repair.index')}}" class="sidebar-link-li">รายงานการแจ้งซ่อม</a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can('view PRO')
                <li class="sidebar-item font_anuphan">
                    <a href="#" class="sidebar-link collapsed d-flex align-items-center" data-bs-target="#pro"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="ph ph-factory me-2"></i>
                        ฝ่ายผลิตและวิศวกรรม
                    </a>
                    <ul id="pro" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('machinery.index')}}" class="sidebar-link-li">รายการเครื่องจักร</a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can('view IT')
                <li class="sidebar-header">
                    Admin Element
                </li>
                <li class="sidebar-item">

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed d-flex align-items-center" data-bs-target="#auth"
                        data-bs-toggle="collapse" aria-expanded="false">
                        <i class="ph ph-fingerprint me-2"></i>
                        Admin
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('user.index')}}"
                                class="sidebar-link-li d-flex align-items-center text-start justify-content-start">Users</a>
                        </li>
                    </ul>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('roles.index')}}"
                                class="sidebar-link-li d-flex align-items-center text-start justify-content-start">Roles</a>
                        </li>
                    </ul>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('permissions.index')}}"
                                class="sidebar-link-li d-flex align-items-center text-start justify-content-start">Permissions</a>
                        </li>
                    </ul>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('home')}}" class="sidebar-link-li">Template</a>
                        </li>
                    </ul>

                </li>
                @endcan

            </ul>
        </div>
    </div>
</ul>
