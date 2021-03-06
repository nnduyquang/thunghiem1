<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
{{--<li class="header">HEADER</li>--}}
<!-- Optionally, you can add icons to the links -->
    <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/dashboard') }}" href="{{ route('dashboard') }}"><i
                    class="fa fa-link"></i>
            <p>Dashboard</p></a>
    @if(Auth::user()->hasRole('admin')||Auth::user()->can('user-list'))
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/users') }}"
                                href="{{ route('users.index') }}"><i class="fa fa-link"></i>
                <p>Người Dùng</p></a>
        </li>
    @endif
    @if(Auth::user()->can('role-list'))
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/roles')}}" href="{{ route('roles.index') }}"><i
                        class="fa fa-link"></i>
                <p>Quyền</p></a></li>
        @endif
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/danh-muc-bai-viet') }}"
                                href="{{ route('categorypost.index') }}"><i class="fa fa-link"></i>
                <p>Chuyên Mục Bài Viết</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/page') }}" href="{{ route('page.index') }}"><i
                        class="fa fa-link"></i>
                <p>Trang</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/page_test') }}"
                                href="{{ route('page-test.index') }}"><i class="fa fa-link"></i>
                <p>Test_Trang</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/post') }}" href="{{ route('post.index') }}"><i
                        class="fa fa-link"></i>
                <p>Bài Viết</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/danh-muc-san-pham') }}"
                                href="{{ route('categoryproduct.index') }}"><i class="fa fa-link"></i>
                <p>Chuyên Mục Sản Phẩm</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/san-pham') }}"
                                href="{{ route('product.index') }}"><i class="fa fa-link"></i>
                <p>Sản Phẩm</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/menu') }}" href="{{ route('menu.index') }}"><i
                        class="fa fa-link"></i>
                <p>Menu Builder</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/config') }}"
                                href="{{ route('config.index') }}"><i class="fa fa-link"></i>
                <p>Cấu Hình Chung</p></a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-link"></i>
                <p>
                    Cấu hình hệ thống
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('components.index') }}" class="nav-link {{ set_active('sml_admin/components') }}">
                        <i class="fa fa-link nav-icon"></i>
                        <p>Components</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                        <i class="fa fa-link nav-icon"></i>
                        <p>Flot</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/inline.html" class="nav-link">
                        <i class="fa fa-link nav-icon"></i>
                        <p>Inline</p>
                    </a>
                </li>
            </ul>
        </li>
        <hr style="background-color: #4f5962">
        <div class="sign-out" style="text-align: center">
            <a href="{{URL::to('admin/sml_logout')}}" class="btn btn-default nav-link" style="color: #5a3c3c"><p>Sign
                    out</p></a>
        </div>

</ul>