
    <!-- ======= Navigation links for sidebar ======== -->
    <ul class="sidebar-nav">
        <div class="h-100">
            <div class="sidebar-logo text-center">
                {{-- <img src="../img/logo/logoISP.PNG" class="avatar img-fluid rounded" alt=""> --}}
                {{-- <a href="">{{ config('app.name', 'ISANPALM') }}</a> --}}
                <ul class="sidebar-nav mt-0">
                    <li class="sidebar-header">
                        Departments
                    </li>
                    <li class="sidebar-item font_anuphan">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#ffb" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            ฝ่ายจัดซื้อปาล์ม
                        </a>
                        <ul id="ffb" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('home')}}" class="sidebar-link-li">Home</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link-li">บันทึกการขายสินค้า</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#hre" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fa-solid fa-users"></i>
                            HRE
                        </a>
                        <ul id="hre" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('user.index')}}" class="sidebar-link-li">User</a>
                            </li>
                        </ul>
                        <ul id="hre" class="sidebar-dropdown list-unstyled collapse active" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('product.index')}}" class="sidebar-link-li">Products</a>
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
                            <i class="fa-regular fa-user pe-2"></i>
                            Admin
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </ul>


