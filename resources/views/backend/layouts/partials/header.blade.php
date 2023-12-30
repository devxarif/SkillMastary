@php
    $auth_user = authUser('admin');
@endphp

<header class="app-header rt-sticky">
    <div class="navbar align-items-center">
        <div class="container-fluid">
            <div class="left-content">
                <div class="logo-segment">
                    <div class="all-logo">
                        <a href="index.html" class="brand-logo">
                            <img src="{{ asset('backend') }}/images/logo/logo.svg" alt="" draggable="false"
                                class="logo-black" />
                            <img src="{{ asset('backend') }}/images/logo/logo-white.svg" alt=""
                                draggable="false" class="logo-white" />
                            <img src="{{ asset('backend') }}/images/logo/logo-icon.svg" alt="" draggable="false"
                                class="logo-icon rt-mr-10" />
                            <img src="{{ asset('backend') }}/images/logo/logo-white.svg" alt=""
                                draggable="false" class="logo-full-white rt-mr-10" />
                        </a>
                        <a href="index.html" class="brand-logo white">
                            <img src="{{ asset('backend') }}/images/logo/logo-white.svg" alt=""
                                draggable="false" />
                        </a>
                        <a href="index.html" class="collapse-in-logo">
                            <img src="{{ asset('backend') }}/images/logo/logo-icon.svg" alt="" draggable="false"
                                class="logo-icon-blue" />
                            <img src="{{ asset('backend') }}/images/logo/logo-icon-white.svg" alt=""
                                draggable="false" class="logo-icon-white" />
                        </a>
                    </div>
                    <div class="opener_sidebar">
                        <span class="icon-bar-open" id="opener_icon"></span>
                    </div>
                    <div class="opener_horizentalmenu" id="mainmenuOpen">
                        <span class="icon-bar-open2" id="opener_icon2"></span>
                    </div>
                </div>
                <div class="dashboard-message position-relative">
                    <span class="back_sidebar_icon">
                        <i class="ph-arrow-right"></i>
                    </span>
                </div>
            </div>
            <div class="app-mian-serach">
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="Search" />
                        <button type="submit">
                            <img src="{{ asset('backend') }}/images/svg/search.svg" alt="" draggable="false" />
                        </button>
                    </div>
                </form>
            </div>
            <div class="ms-auto">
                <div class="rt-nav-tolls d-flex align-items-center">
                    <ul>
                        <li class="d-inline-block d-md-none">
                            <div class="iconBox open-mbl-search pointer">
                                <img src="{{ asset('backend') }}/images/svg/search.svg" alt="" />
                            </div>
                        </li>
                        <li class="d-none d-lg-block">
                            <div class="language-picker js-language-picker desktop-show">
                                <form action="" class="language-picker__form">
                                    <label for="language-picker-select"></label>
                                    <select name="language-picker-select" id="language-picker-select">
                                        <option lang="en" value="english" selected>English</option>
                                        <option lang="de" value="deutsch">germany</option>
                                        <option lang="sp" value="spanish">spanish</option>
                                    </select>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="iconBox page-setting pointer" id="layout">
                                <img src="{{ asset('backend') }}/images/svg/grid.svg" alt="" draggable="false"
                                    class="for-v" />
                                <img src="{{ asset('backend') }}/images/svg/grid2.svg" alt="" draggable="false"
                                    class="for-h" />
                            </div>
                        </li>
                        <li>
                            <div class="iconBox notifications pointer waves-effect primary-light">
                                <img src="{{ asset('backend') }}/images/svg/bell.svg" alt="" draggable="false"
                                    class="for-v" />
                                <img src="{{ asset('backend') }}/images/svg/bell2.svg" alt="" draggable="false"
                                    class="for-h" />
                            </div>
                        </li>
                        <li>
                            <div class="userProfileBox openaccount pointer">
                                <img src="{{ $auth_user?->avatar_url }}" alt="avatar" class="rounded avatar" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="rt-mobile-menu-overlay"></div>
<!-- /.rt-mobile-menu-overlay -->
<div id="template2" style="display: none">
    <div class="PopoverParent">
        <div class="Popover-header">
            <a class="rt-single-icon-box user-profile-icon-big rt-align-center" href="#">
                <div class="icon-thumb">
                    <div class="innerImage">
                        <img src="{{ $auth_user?->avatar_url }}" alt="profile_image" />
                    </div>
                </div>
                <div class="iconbox-content">
                    <h4>{{ $auth_user?->name }}</h4>
                    <span>{{ $auth_user?->email }}</span>
                </div>
            </a>
        </div>
        <div class="PopoverContent">
            <div class="popoverInnerContent">
                <ul class="user_menu">
                    <li>
                        <a href="profile.html">
                            <span class="icon-i">
                                <i class="ph-user"></i>
                            </span>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="invoice.html">
                            <span class="icon-i">
                                <i class="ph-chart-bar"></i>
                            </span>
                            Reports
                        </a>
                    </li>
                    <li>
                        <a href="setting.html">
                            <span class="icon-i">
                                <i class="ph-gear"></i>
                            </span>
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="faq.html">
                            <span class="icon-i">
                                <i class="ph-question"></i>
                            </span>
                            Get Help
                        </a>
                    </li>
                </ul>
            </div>
            <div class="popOverFooter">
                <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('admin-logout-form').submit();" >
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17.3" height="17.3" viewBox="0 0 17.3 17.3">
                            <g id="log-out" transform="translate(-2.35 -2.35)">
                                <path id="Path_2782" data-name="Path 2782"
                                    d="M8.333,19H4.778A1.778,1.778,0,0,1,3,17.222V4.778A1.778,1.778,0,0,1,4.778,3H8.333"
                                    transform="translate(0 0)" fill="none" stroke="#4d5afb" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.3" />
                                <path id="Path_2783" data-name="Path 2783" d="M16,15.889l4.444-4.444L16,7"
                                    transform="translate(-1.444 -0.444)" fill="none" stroke="#4d5afb"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" />
                                <line id="Line_11" data-name="Line 11" x1="10.667" transform="translate(8.333 11)"
                                    fill="none" stroke="#4d5afb" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.3" />
                            </g>
                        </svg>
                    </span>
                    Log Out
                </a>
                <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden invisible">
                    @csrf
                </form>

            </div>
        </div>
    </div>
</div>

<div id="template" style="display: none">
    <div class="PopoverParent min-372">
        <div class="Popover-header d-flex justify-content-between">
            <div class="d-blok f-size-14 line-height-20 text-gray-900 font-medium">
                Notification
            </div>
            <div class="d-blok f-size-14 text-gray-700 pointer">Clear All</div>
        </div>
        <div class="PopoverContent">
            <div class="popoverInnerContent">
                <div class="notifybox">
                    <ul class="notify-lists rt-list">


                        <li>
                            <a class="rt-single-icon-box" href="#">
                                <div class="icon-thumb rt-mr-12">
                                    <img src="{{ asset('backend') }}/images/notification/check.svg" alt="">
                                </div>
                                <div class="iconbox-content">
                                    <div class="title body-font-4 text-gray-900  mb-1">This is a success
                                        notification.</div>
                                    <div class=" body-fonty-4 text-gray-500">5 min ago</div>
                                </div>
                            </a>

                        </li>

                        <li>
                            <a class="rt-single-icon-box" href="#">
                                <div class="icon-thumb rt-mr-12">
                                    <img src="{{ asset('backend') }}/images/all-img/user_1.png" alt="">
                                </div>
                                <div class="iconbox-content">
                                    <div class="title body-font-4 text-gray-900  mb-1">Kevin Mention you in “UX
                                        Design Proc...”</div>
                                    <div class=" body-fonty-4 text-gray-500">5 min ago</div>
                                </div>
                            </a>

                        </li>

                        <li>
                            <a class="rt-single-icon-box" href="#">
                                <div class="icon-thumb rt-mr-12">
                                    <img src="{{ asset('backend') }}/images/notification/alert.svg" alt="">
                                </div>
                                <div class="iconbox-content">
                                    <div class="title body-font-4 text-gray-900  mb-1">This is you lasst waring
                                    </div>
                                    <div class=" body-fonty-4 text-gray-500">5 min ago</div>
                                </div>
                            </a>

                        </li>

                        <li>
                            <a class="rt-single-icon-box" href="#">
                                <div class="icon-thumb rt-mr-12">
                                    <img src="{{ asset('backend') }}/images/all-img/user_2.png" alt="">
                                </div>
                                <div class="iconbox-content">
                                    <div class="title body-font-4 text-gray-900  mb-1">Janny invited you in events
                                        in calender</div>
                                    <div class=" body-fonty-4 text-gray-500">5 min ago</div>
                                </div>
                            </a>

                        </li>

                        <li>
                            <a class="rt-single-icon-box" href="#">
                                <div class="icon-thumb rt-mr-12">
                                    <img src="{{ asset('backend') }}/images/notification/file.svg" alt="">
                                </div>
                                <div class="iconbox-content">
                                    <div class="title body-font-4 text-gray-900  mb-1">Your pricing plan is updated
                                    </div>
                                    <div class=" body-fonty-4 text-gray-500">5 min ago</div>
                                </div>
                            </a>

                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="app-settings" id="appSettings">
    <div class="settings-header d-flex justify-content-between">
        <div class="text-gray-900 body-font-3 font-medium ">Settings</div>
        <div class="pointer" id="closesetting">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.5 3.5L3.5 12.5" stroke="#959FA3" stroke-width="1.25" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M12.5 12.5L3.5 3.5" stroke="#959FA3" stroke-width="1.25" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>

        </div>
    </div>
    <div class="cal-h-70" data-simplebar>
        <div class="inner-content">
            <div class="setting-title">Layout</div>
            <div class="settings-images row ">
                <div class="col-lg-6 rt-mb-32">
                    <div class="form-check p-0">
                        <label class="d-block pointer" for="vertical_lable">
                            <img src="{{ asset('backend') }}/images/all-img/d-1.png" alt="" class="w-100" />
                            <div class="bottom-content">
                                <input class="form-check-input  pointer" type="radio" name="layoutbox"
                                    id="vertical_lable" value="vertical" checked />
                                <span> Vertical</span>
                            </div>
                        </label>

                    </div>
                </div>
                <div class="col-lg-6 rt-mb-32">
                    <div class="form-check p-0">
                        <label class="form-check-label d-block pointer" for="horizental_label">
                            <img src="{{ asset('backend') }}/images/all-img/d-2.png" alt="" />
                            <div class="bottom-content">
                                <input class="form-check-input d-block pointer" type="radio" name="layoutbox"
                                    id="horizental_label" value="horizental" />
                                <span>Horizontal</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="setting-title rt-pt-30">Theme</div>
            <ul class="rt-mb-32">
                <li class="block rt-mb-12">
                    <div class="form-check p-0 no-shadow">
                        <input class="form-check-input  pointer" type="radio" name="sidebar" id="seibar_white"
                            value="white" checked />
                        <label class="form-check-label rt-ml-8 pointer" for="seibar_white">
                            White
                        </label>
                    </div>
                </li>
                <li class="block rt-mb-12">
                    <div class="form-check p-0 no-shadow">
                        <input class="form-check-input  pointer" type="radio" name="sidebar" id="seibar_black"
                            value="black" />
                        <label class="form-check-label rt-ml-8 pointer" for="seibar_black">
                            Black
                        </label>
                    </div>
                </li>
                <li class="block rt-mb-12">
                    <div class="form-check p-0 no-shadow">
                        <input class="form-check-input  pointer" type="radio" name="sidebar" id="seibar_navy"
                            value="blue" />
                        <label class="form-check-label rt-ml-8 pointer" for="seibar_navy">
                            Navy Blue
                        </label>
                    </div>
                </li>
            </ul>
            <div class="row smallgap">
                <div class="col-md-6">
                    <button class="btn btn-primary2 pill block w-100 rt-mb-10">Reset to default</button>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary pill btn-icon block w-100  rt-mb-10">
                        <span class="button-content-wrapper">
                            <span class="button-text">
                                Purchase now
                            </span>
                            <span class="button-icon align-icon-right">
                                <i class="ph-arrow-right"></i>

                            </span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="settings-overlay"></div>
