
    <!-- ======= Navigation links for sidebar ======== -->
    <ul class="sidebar-nav">
        <div class="h-100">
            <div class="sidebar-logo text-center py-0">
                {{-- <img src="../img/logo/logoISP.PNG" class="avatar img-fluid rounded" alt=""> --}}
                {{-- <a href="">{{ config('app.name', 'ISANPALM') }}</a> --}}
                <ul class="sidebar-nav mt-0">
                    <li class="sidebar-header">
                        Departments
                    </li>
                    <li class="sidebar-item font_anuphan">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#GM" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="bi bi-columns-gap"></i>
                              Dashboard
                        </a>
                        <ul id="GM" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('view dashboard GM')
                            <li class="sidebar-item">
                                <a href="{{ route('dashboard-palm.index')}}" class="sidebar-link-li">จัดซื้อปาล์ม</a>
                            </li>
                            @endcan
                        </ul>
                    </li>

                    <li class="sidebar-item font_anuphan">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#ffb" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="bi bi-cart-plus"></i>
                             ฝ่ายจัดซื้อปาล์ม
                        </a>
                        <ul id="ffb" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('view user')
                            <li class="sidebar-item">
                                <a href="{{ route('dashboard-palm-purchase.index')}}" class="sidebar-link-li">รายงานการซื้อผลปาล์ม</a>
                            </li>
                            @endcan
                        </ul>
                    </li>

                    <li class="sidebar-item font_anuphan">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#asset" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="bi bi-stack-overflow"></i>
                             ทะเบียนทรัพย์สิน
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

                    <li class="sidebar-item font_anuphan">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#hre" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="bi bi-person-lines-fill"></i>
                             HRE
                        </a>
                        <ul id="hre" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('user.index')}}" class="sidebar-link-li">User</a>
                            </li>
                        </ul>
                    </li>

                    @can('view user')
                    <li class="sidebar-item font_anuphan">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#it" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="bi bi-person-lines-fill"></i>
                             IT
                        </a>
                        <ul id="it" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('report-repair.index')}}" class="sidebar-link-li">รายงานการแจ้งซ่อม</a>
                            </li>
                        </ul>
                    </li>
                    @endcan


                    <li class="sidebar-item font_anuphan">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pro" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="bi bi-boxes"></i>
                             ฝ่ายผลิตและวิศวกรรม
                        </a>
                        <ul id="pro" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('machinery.index')}}" class="sidebar-link-li">รายการเครื่องจักร</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-header">
                        Admin Element
                    </li>
                    <li class="sidebar-item">

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="bi bi-person-bounding-box"></i>
                             Admin
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('user.index')}}" class="sidebar-link-li">Users</a>
                            </li>
                        </ul>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('roles.index')}}" class="sidebar-link-li">Roles</a>
                            </li>
                        </ul>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('permissions.index')}}" class="sidebar-link-li">Permissions</a>
                            </li>
                        </ul>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('home')}}" class="sidebar-link-li">Template</a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </ul>


