<div>
    <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
        <i class="la la-close"></i>
    </button>
    <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">

        <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light position-static" m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500">
            <ul class="m-menu__nav ">
                <li class="m-menu__item {{ Request::is('admin/dashboard*') ? 'm-menu__item--active ' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.dashboard')}}" class="m-menu__link ">
                        <span class="m-menu__item-here"></span>
                        <i class="m-menu__link-icon">
                            <img src="{{asset('assets/img/dashboard.svg')}}" alt="dashboard">
                        </i>
                        <span class="m-menu__link-text">Dashboard</span>
                    </a>
                </li>
                <li class="m-menu__item {{ Request::is('admin/blog/*') ? 'm-menu__item--active m-menu__item--open' : '' }} m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
                    <a href="javascript:;" class="m-menu__link m-menu__toggle">
                        <span class="m-menu__item-here"></span>
                        <i class="m-menu__link-icon flaticon-layers"></i>
                        <span class="m-menu__link-text">Blog</span>
                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="m-menu__submenu ">
                        <span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                            <li class="m-menu__item {{ Request::is('admin/blog/setting*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                                <a href="" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">Setting</span>
                                </a>
                            </li>
                            <li class="m-menu__item {{ Request::is('admin/blog/package*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                                <a href="" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">Packages</span>
                                </a>
                            </li>
                            <li class="m-menu__item {{ Request::is('admin/blog/category*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                                <a href="" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">Categories</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="m-menu__item" aria-haspopup="true">
                    <a href="javascript:void(0);" class="m-menu__link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="m-menu__link-icon fa fa-sign-out-alt"></i>
                        <span class="m-menu__link-text">Log out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- END: Aside Menu -->
    </div>
</div>
<!-- END: Left Aside -->
