<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Trang chủ</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link href="{{ asset('vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico"/>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">
                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="index-Copy.html" class="m-brand__logo-wrapper">
                                <img alt="" src="img/logo_default_dark.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                    <!-- BEGIN: Horizontal Menu -->
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark "
                            id="m_aside_header_menu_mobile_close_btn">
                        <i class="la la-close"></i>
                    </button>
                    <div id="m_header_menu"
                         class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                        <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
                                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-add"></i>
                                    <span class="m-menu__link-text">Actions</span>
                                    <i class="m-menu__hor-arrow la la-angle-down"></i>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                    <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item " aria-haspopup="true">
                                            <a href="header/actions.html" class="m-menu__link ">
                                                <i class="m-menu__link-icon flaticon-file"></i>
                                                <span class="m-menu__link-text">Create New Post</span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true">
                                            <a href="header/actions.html" class="m-menu__link ">
                                                <i class="m-menu__link-icon flaticon-diagram"></i>
                                                <span class="m-menu__link-title">
															<span class="m-menu__link-wrap">
																<span class="m-menu__link-text">Generate Reports</span>
																<span class="m-menu__link-badge">
																	<span class="m-badge m-badge--success">2</span>
																</span>
															</span>
														</span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover"
                                            m-menu-link-redirect="1" aria-haspopup="true">
                                            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-icon flaticon-business"></i>
                                                <span class="m-menu__link-text">Manage Orders</span>
                                                <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                                <span class="m-menu__arrow "></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Latest Orders</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Pending Orders</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Processed Orders</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Delivery Reports</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Payments</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Customers</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover"
                                            m-menu-link-redirect="1" aria-haspopup="true">
                                            <a href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-icon flaticon-chat-1"></i>
                                                <span class="m-menu__link-text">Customer Feedbacks</span>
                                                <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                                <span class="m-menu__arrow "></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Customer Feedbacks</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Supplier Feedbacks</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Reviewed Feedbacks</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Resolved Feedbacks</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1"
                                                        aria-haspopup="true">
                                                        <a href="header/actions.html" class="m-menu__link ">
                                                            <span class="m-menu__link-text">Feedback Reports</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true">
                                            <a href="header/actions.html" class="m-menu__link ">
                                                <i class="m-menu__link-icon flaticon-users"></i>
                                                <span class="m-menu__link-text">Register Member</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- END: Horizontal Menu -->

                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-topbar__userpic">
                                            <img src="img/users/user4.jpg"
                                                 class="m--img-rounded m--marginless" alt=""/>
                                        </span>
                                        <span class="m-topbar__username m--hide">Nick</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center"
                                                 style="background: url(img/nen.jpg); background-size: cover;">
                                                <div class="m-card-user m-card-user--skin-dark">
                                                    <div class="m-card-user__pic">
                                                        <img src="img/users/user4.jpg"
                                                             class="m--img-rounded m--marginless" alt=""/>

                                                        <!--
                                                        <span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
                                                        -->
                                                    </div>
                                                    <div class="m-card-user__details">
                                                        <span class="m-card-user__name m--font-weight-500">@if (Session::has('taikhoan')) {{ Session::get('taikhoan')->hoten }}@endif</span>
                                                        <a href="" class="m-card-user__email m--font-weight-300 m-link">@if (Session::has('taikhoan')) {{ Session::get('taikhoan')->email }}@endif</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">Section</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="{{ route('get_contact') }}" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
                                                                    <span class="m-nav__link-wrap">
                                                                        <span class="m-nav__link-text">Thiết lập cá nhân</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Đổi mật khẩu</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <form action="{{ route('logout')}}" method="post">
                                                            @csrf
                                                            <li class="m-nav__item">
                                                                <button class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Đăng xuất</button>
                                                            </li>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>

    <!-- END: Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- show message-->
        @if (isset($success))
            <div class="m-section__content" id="message">
                <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show">
                    <strong style="margin-right: 20px">{{ $success }}. </strong>&#09;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
        @endif
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
                 m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
                        <a href="index.html" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-line-graph"></i>
                            <span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Dashboard</span>
										</span>
									</span>
                        </a>
                    </li>
                    <li class="m-menu__section ">
                        <h4 class="m-menu__section-text">Components</h4>
                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-layers"></i>
                            <span class="m-menu__link-text">Base</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Base</span>
											</span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true">
                                    <a href="components/base/state.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">State Colors</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true">
                                    <a href="components/base/typography.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Typography</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-share"></i>
                            <span class="m-menu__link-text">Icons</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true">
                                    <a href="components/icons/flaticon.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Flaticon</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true">
                                    <a href="components/icons/fontawesome5.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Fontawesome 5</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-multimedia-1"></i>
                            <span class="m-menu__link-text">Buttons</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Buttons</span>
											</span>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover">
                                    <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Button Base</span>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu ">
                                        <span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="components/buttons/base/default.html" class="m-menu__link ">
                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="m-menu__link-text">Default Style</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="components/buttons/base/square.html" class="m-menu__link ">
                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="m-menu__link-text">Square Style</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="components/buttons/base/pill.html" class="m-menu__link ">
                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="m-menu__link-text">Pill Style</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="components/buttons/base/air.html" class="m-menu__link ">
                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="m-menu__link-text">Air Style</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            @yield('body')
            <!-- END: Subheader -->
        </div>
    </div>
    <!-- end:: Body -->
</div>

<!-- end:: Page -->

<!-- begin::Footer -->
<footer class="m-grid__item		m-footer ">
    <div class="m-container m-container--fluid m-container--full-height m-page__container">
        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2019 -2020 &copy; Khoa CNTT - Trường Đại Học Mở Hà Nội
							</span>
            </div>
        </div>
    </div>
</footer>

<!-- end::Footer -->


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<script src="{{ asset('vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src=" {{ asset('demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<script src=" {{ asset('app/js/dashboard.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        $('#message')
            .fadeIn()
            .animate({opacity: '+=0'}, 3000)
            .fadeOut('fast');
    });
</script>
@yield('script')
<script src="{{ asset('js/jquery/jquery-3.2.1.min.js') }}"/>
</body>

</html>