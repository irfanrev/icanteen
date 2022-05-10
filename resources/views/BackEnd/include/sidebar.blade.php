<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/home') }}" class="brand-link">
        <img src="{{ asset('BackEndResourceFile') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">IcanTeen</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('BackEndResourceFile') }}/dist/img/user2-160x160.jpg"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Tambah icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Kategori
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('show_cate_table') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Ketegori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manage_cate') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kategori</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Kurir
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('show_deliveryBoy_add_table') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Kurir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('delivery_boy_manage')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kurir</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Kode Kupon
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('show_coupon_table') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Kupon</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manage_coupon_code')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kupon</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>