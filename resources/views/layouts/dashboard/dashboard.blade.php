<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ui/assets/img/favicon.png') }}">
    <link rel="manifest" href="{{ asset('dashboard/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('dashboard/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('dashboard/vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/config.js') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('dashboard/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard/asset/css/line.css') }}">
    <link href="{{ asset('dashboard/assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('dashboard/assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('dashboard/assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet"
        id="user-style-rtl">
    <link href="{{ asset('dashboard/assets/css/user.min.css') }}" type="text/css" rel="stylesheet"
        id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <link href="{{ asset('dashboard/vendors/leaflet/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/vendors/leaflet.markercluster/MarkerCluster.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/vendors/leaflet.markercluster/MarkerCluster.Default.css') }}" rel="stylesheet">
</head>

<body>
    <main class="main" id="top">
        <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                <!-- scrollbar removed-->
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                        <li class="nav-item">
                            <!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-Profile" role="button" data-bs-toggle="collapse" aria-expanded="true"
                                    aria-controls="nv-Profile">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon-wrapper"><span
                                                class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                            class="nav-link-icon"><span data-feather="pie-chart"></span></span><span
                                            class="nav-link-text">Profile</span><span
                                            class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                            style="font-size: 6px"></span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-Profile">
                                        <li class="collapsed-nav-item-title d-none">Profile</li>
                                        <li class="nav-item"><a class="nav-link active" href="view_profile.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">View
                                                        Profile
                                                    </span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="edit_profile.html">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">Edit
                                                        Profile</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-Events"
                                role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-Events">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon-wrapper"><span
                                            class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                        class="nav-link-icon"><span data-feather="phone"></span></span><span
                                        class="nav-link-text">Events</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-Events">
                                    <li class="collapsed-nav-item-title d-none">Events</li>
                                    <li class="nav-item"><a class="nav-link" href="view_registered_events.html">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">View
                                                    Registered Events</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="register_events.html">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Register
                                                    Events</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-Activity"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="nv-Activity">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon-wrapper"><span
                                            class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                        class="nav-link-icon"><span data-feather="phone"></span></span><span
                                        class="nav-link-text">Activity</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="nv-Activity">
                                    <li class="collapsed-nav-item-title d-none">Activity</li>
                                    <li class="nav-item"><a class="nav-link" href="view_activity.html">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">View
                                                    Activity</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="add_activity.html">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Add
                                                    Activity</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="edit_activity.html">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Edit
                                                    Activity</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#nv-Testimonial" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="nv-Testimonial">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon-wrapper"><span
                                            class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                        class="nav-link-icon"><span data-feather="phone"></span></span><span
                                        class="nav-link-text">Testimonial</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="nv-Testimonial">
                                    <li class="collapsed-nav-item-title d-none">Testimonial</li>
                                    <li class="nav-item"><a class="nav-link" href="my_testimonial.html">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">My
                                                    Testimonial</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="add_testimonial.html">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Add
                                                    Testimonial</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>
            <div class="navbar-vertical-footer"><button
                    class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span
                        class="uil uil-left-arrow-to-left fs-8"></span><span
                        class="uil uil-arrow-from-right fs-8"></span><span
                        class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
        </nav>
        <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="navbar-logo">
                    <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="{{ route('home') }}">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center"><img src="{{ asset('ui/assets/img/logo/logo-dark.png') }}"
                                    alt="phoenix" width="170" />
                                {{-- <h5 class="logo-text ms-2 d-none d-sm-block">Manthan</h5> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
                    style="width:25rem;">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                            class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search"
                            placeholder="Search..." aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>
                    </form>
                    <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                        data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
                    <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                        <div class="scrollbar-overlay" style="max-height: 30rem;">
                            {{-- <div class="list pb-3">
                                <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span
                                        class="text-body-quaternary">results</span></h6>
                                <hr class="my-0" />
                                <h6
                                    class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                    Recently Searched </h6>
                                <div class="py-2"><a class="dropdown-item"
                                        href="apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-body-highlight title"><span
                                                    class="fa-solid fa-clock-rotate-left"
                                                    data-fa-transform="shrink-2"></span> Store Macbook</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-body-highlight title"> <span
                                                    class="fa-solid fa-clock-rotate-left"
                                                    data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                        </div>
                                    </a>
                                </div>
                                <hr class="my-0" />
                                <h6
                                    class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                    Products</h6>
                                <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                        href="apps/e-commerce/landing/product-details.html">
                                        <div class="file-thumbnail me-2"><img
                                                class="h-100 w-100 object-fit-cover rounded-3"
                                                src="dashboard/assets/img/products/60x60/3.png" alt="" /></div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                                                    class="fw-medium text-body-tertiary text-opactity-85">8GB Memory -
                                                    1.6GHz - 128GB Storage</span></p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item py-2 d-flex align-items-center"
                                        href="apps/e-commerce/landing/product-details.html">
                                        <div class="file-thumbnail me-2"><img class="img-fluid"
                                                src="dashboard/assets/img/products/60x60/3.png" alt="" /></div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                                                    class="fw-medium text-body-tertiary text-opactity-85">30 Sep at
                                                    12:30 PM</span></p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="my-0" />
                                <h6
                                    class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                    Quick Links</h6>
                                <div class="py-2"><a class="dropdown-item"
                                        href="apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-body-highlight title"><span
                                                    class="fa-solid fa-link text-body"
                                                    data-fa-transform="shrink-2"></span> Support MacBook House</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-body-highlight title"> <span
                                                    class="fa-solid fa-link text-body"
                                                    data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                        </div>
                                    </a>
                                </div>
                                <hr class="my-0" />
                                <h6
                                    class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                    Files</h6>
                                <div class="py-2"><a class="dropdown-item"
                                        href="apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-body-highlight title"><span
                                                    class="fa-solid fa-file-zipper text-body"
                                                    data-fa-transform="shrink-2"></span> Library MacBook folder.rar
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-body-highlight title"> <span
                                                    class="fa-solid fa-file-lines text-body"
                                                    data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-body-highlight title"> <span
                                                    class="fa-solid fa-image text-body"
                                                    data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                                        </div>
                                    </a>
                                </div>
                                <hr class="my-0" />
                                <h6
                                    class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                    Members</h6>
                                <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                        href="pages/members.html">
                                        <div class="avatar avatar-l status-online  me-2 text-body">
                                            <img class="rounded-circle " src="dashboard/assets/img/team/40x40/10.webp"
                                                alt="" />
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                                            <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                                        <div class="avatar avatar-l  me-2 text-body">
                                            <img class="rounded-circle " src="dashboard/assets/img/team/40x40/12.webp"
                                                alt="" />
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                                            <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="my-0" />
                                <h6
                                    class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                    Related Searches</h6>
                                <div class="py-2"><a class="dropdown-item"
                                        href="apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-body-highlight title"><span
                                                    class="fa-brands fa-firefox-browser text-body"
                                                    data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-body-highlight title"> <span
                                                    class="fa-brands fa-chrome text-body"
                                                    data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                        </div>
                                    </a>
                                </div>
                            </div> --}}
                            <div class="text-center">
                                <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                            </div>
                        </div>  
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-icons flex-row">
                    <li class="nav-item">
                        <div class="theme-control-toggle fa-icon-wait px-2"><input
                                class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon"
                                    data-feather="moon"></span></label><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon"
                                    data-feather="sun"></span></label></div>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span
                                class="d-block" style="height:20px;width:20px;"><span data-feather="bell"
                                    style="height:20px;width:20px;"></span></span></a>
                        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
                            id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                            <div class="card position-relative border-0">
                                <div class="card-header p-2">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-body-emphasis mb-0">Notifications</h5><button
                                            class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as
                                            read</button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="scrollbar-overlay" style="height: 27rem;">
                                        <div
                                            class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="dashboard/assets/img/team/40x40/30.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>💬</span>Mentioned you in a
                                                            comment.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3">
                                                        <div class="avatar-name rounded-circle"><span>J</span></div>
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>📅</span>Created an event.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle avatar-placeholder"
                                                            src="dashboard/assets/img/team/40x40/avatar.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="dashboard/assets/img/team/40x40/57.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>💬</span>Mentioned you in a
                                                            comment.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="dashboard/assets/img/team/40x40/59.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>👤</span>Tagged you in a
                                                            comment.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="dashboard/assets/img/team/40x40/58.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                                                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs-10'>👍</span>Liked your comment.<span
                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                        </p>
                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown notification-dropdown"><button
                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                    <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                            href="#!">Mark as unread</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-top border-translucent border-0">
                                    <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a
                                            class="fw-bolder" href="pages/notifications.html">Notification history</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                            aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                            </svg></a>
                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
                            aria-labelledby="navbarDropdownNindeDots">
                            <div class="card bg-body-emphasis position-relative border-0">
                                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                    <div class="row text-center align-items-center gx-0 gy-0">
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/behance.webp" alt=""
                                                    width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/google-cloud.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/slack.webp" alt=""
                                                    width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/gitlab.webp" alt=""
                                                    width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/bitbucket.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                    BitBucket</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/google-drive.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/trello.webp" alt=""
                                                    width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/figma.webp" alt=""
                                                    width="20" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/twitter.webp" alt=""
                                                    width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/pinterest.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                    Pinterest</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/ln.webp" alt=""
                                                    width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">
                                                    Linkedin</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/google-maps.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/google-photos.webp"
                                                    alt="" width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                                href="#!"><img src="dashboard/assets/img/nav-icons/spotify.webp" alt=""
                                                    width="30" />
                                                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify
                                                </p>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                            role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="avatar avatar-l ">
                                <img class="rounded-circle " src="dashboard/assets/img/team/40x40/57.webp" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                            aria-labelledby="navbarDropdownUser">
                            <div class="card position-relative border-0">
                                <div class="card-body p-0">
                                    <div class="text-center pt-4 pb-3">
                                        <div class="avatar avatar-xl ">
                                            <img class="rounded-circle " src="dashboard/assets/img/team/72x72/57.webp"
                                                alt="" />
                                        </div>
                                        <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                                    </div>
                                    <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                            id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                                </div>
                                <div class="overflow-auto scrollbar" style="height: 10rem;">
                                    <ul class="nav d-flex flex-column mb-2 pb-1">
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="user"></span><span>Profile</span></a></li>
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="pie-chart"></span>Dashboard</a></li>
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom" data-feather="lock"></span>Posts
                                                &amp; Activity</a></li>
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="help-circle"></span>Help Center</a></li>
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="globe"></span>Language</a></li>
                                    </ul>
                                </div>
                                <div class="card-footer p-0 border-top border-translucent">
                                    <ul class="nav d-flex flex-column my-3">
                                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                                    class="me-2 text-body align-bottom"
                                                    data-feather="user-plus"></span>Add another account</a></li>
                                    </ul>
                                    <hr />
                                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                            href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a>
                                    </div>
                                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                            class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a
                                            class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                                            class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <script>
            var navbarTopShape = window.config.config.phoenixNavbarTopShape;
            var navbarPosition = window.config.config.phoenixNavbarPosition;
            var body = document.querySelector('body');
            var navbarDefault = document.querySelector('#navbarDefault');
            var navbarTop = document.querySelector('#navbarTop');
            var topNavSlim = document.querySelector('#topNavSlim');
            var navbarTopSlim = document.querySelector('#navbarTopSlim');
            var navbarCombo = document.querySelector('#navbarCombo');
            var navbarComboSlim = document.querySelector('#navbarComboSlim');
            var dualNav = document.querySelector('#dualNav');

            var documentElement = document.documentElement;
            var navbarVertical = document.querySelector('.navbar-vertical');

            if (navbarPosition === 'dual-nav') {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                navbarDefault?.remove();
                navbarVertical?.remove();
                dualNav.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'dual');

            } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                navbarDefault?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                topNavSlim.style.display = 'block';
                navbarVertical.style.display = 'inline-block';
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

            } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                navbarDefault?.remove();
                navbarVertical?.remove();
                navbarTop?.remove();
                topNavSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarTopSlim.removeAttribute('style');
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                navbarDefault?.remove();
                navbarTop?.remove();
                topNavSlim?.remove();
                navbarCombo?.remove();
                navbarTopSlim?.remove();
                dualNav?.remove();
                navbarComboSlim.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
            } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                navbarDefault?.remove();
                topNavSlim?.remove();
                navbarVertical?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarTop.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'horizontal');
            } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarDefault?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarCombo.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'combo');
            } else {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarDefault.removeAttribute('style');
                navbarVertical.removeAttribute('style');
            }

            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.setAttribute('data-navbar-appearance', 'darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.setAttribute('data-navbar-appearance', 'darker');
            }
        </script>
        <div class="content">
            <div class="pb-5">
                <div class="row g-4">
                    <div class="col-12 col-xxl-6">
                        <div class="mb-8">
                            <h2 class="mb-2">Ecommerce Dashboard</h2>
                            <h5 class="text-body-tertiary fw-semibold">Here's what's going on at your business right now
                            </h5>
                        </div>
                        <div class="row align-items-center g-4">
                            <div class="col-12 col-md-auto">
                                <div class="d-flex align-items-center"><span class="fa-stack"
                                        style="min-height: 46px;min-width: 46px;"><span
                                            class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-success-light"
                                            data-fa-transform="down-4 rotate--10 left-4"></span><span
                                            class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-success"
                                            data-fa-transform="up-4 right-3 grow-2"></span><span
                                            class="fa-stack-1x fa-solid fa-star text-success "
                                            data-fa-transform="shrink-2 up-8 right-6"></span></span>
                                    <div class="ms-3">
                                        <h4 class="mb-0">57 new orders</h4>
                                        <p class="text-body-secondary fs-9 mb-0">Awating processing</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <div class="d-flex align-items-center"><span class="fa-stack"
                                        style="min-height: 46px;min-width: 46px;"><span
                                            class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-warning-light"
                                            data-fa-transform="down-4 rotate--10 left-4"></span><span
                                            class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-warning"
                                            data-fa-transform="up-4 right-3 grow-2"></span><span
                                            class="fa-stack-1x fa-solid fa-pause text-warning "
                                            data-fa-transform="shrink-2 up-8 right-6"></span></span>
                                    <div class="ms-3">
                                        <h4 class="mb-0">5 orders</h4>
                                        <p class="text-body-secondary fs-9 mb-0">On hold</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <div class="d-flex align-items-center"><span class="fa-stack"
                                        style="min-height: 46px;min-width: 46px;"><span
                                            class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-danger-light"
                                            data-fa-transform="down-4 rotate--10 left-4"></span><span
                                            class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-danger"
                                            data-fa-transform="up-4 right-3 grow-2"></span><span
                                            class="fa-stack-1x fa-solid fa-xmark text-danger "
                                            data-fa-transform="shrink-2 up-8 right-6"></span></span>
                                    <div class="ms-3">
                                        <h4 class="mb-0">15 products</h4>
                                        <p class="text-body-secondary fs-9 mb-0">Out of stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-body-secondary mb-6 mt-4" />
                        <div class="row flex-between-center mb-4 g-3">
                            <div class="col-auto">
                                <h3>Total sells</h3>
                                <p class="text-body-tertiary lh-sm mb-0">Payment received across all channels</p>
                            </div>
                            <div class="col-8 col-sm-4"><select class="form-select form-select-sm"
                                    id="select-gross-revenue-month">
                                    <option>Mar 1 - 31, 2022</option>
                                    <option>April 1 - 30, 2022</option>
                                    <option>May 1 - 31, 2022</option>
                                </select></div>
                        </div>
                        <div class="echart-total-sales-chart" style="min-height:320px;width:100%"></div>
                    </div>
                    <div class="col-12 col-xxl-6">
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="mb-1">Total orders<span
                                                        class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"><span
                                                            class="badge-label">-6.8%</span></span></h5>
                                                <h6 class="text-body-tertiary">Last 7 days</h6>
                                            </div>
                                            <h4>16,247</h4>
                                        </div>
                                        <div class="d-flex justify-content-center px-4 py-6">
                                            <div class="echart-total-orders" style="height:85px;width:115px"></div>
                                        </div>
                                        <div class="mt-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bullet-item bg-primary me-2"></div>
                                                <h6 class="text-body fw-semibold flex-1 mb-0">Completed</h6>
                                                <h6 class="text-body fw-semibold mb-0">52%</h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="bullet-item bg-primary-subtle me-2"></div>
                                                <h6 class="text-body fw-semibold flex-1 mb-0">Pending payment</h6>
                                                <h6 class="text-body fw-semibold mb-0">48%</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="mb-1">New customers<span
                                                        class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2">
                                                        <span class="badge-label">+26.5%</span></span></h5>
                                                <h6 class="text-body-tertiary">Last 7 days</h6>
                                            </div>
                                            <h4>356</h4>
                                        </div>
                                        <div class="pb-0 pt-4">
                                            <div class="echarts-new-customers" style="height:180px;width:100%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="mb-2">Top coupons</h5>
                                                <h6 class="text-body-tertiary">Last 7 days</h6>
                                            </div>
                                        </div>
                                        <div class="pb-4 pt-3">
                                            <div class="echart-top-coupons" style="height:115px;width:100%;"></div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bullet-item bg-primary me-2"></div>
                                                <h6 class="text-body fw-semibold flex-1 mb-0">Percentage discount</h6>
                                                <h6 class="text-body fw-semibold mb-0">72%</h6>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bullet-item bg-primary-lighter me-2"></div>
                                                <h6 class="text-body fw-semibold flex-1 mb-0">Fixed card discount</h6>
                                                <h6 class="text-body fw-semibold mb-0">18%</h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="bullet-item bg-info-dark me-2"></div>
                                                <h6 class="text-body fw-semibold flex-1 mb-0">Fixed product discount
                                                </h6>
                                                <h6 class="text-body fw-semibold mb-0">10%</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="mb-2">Paying vs non paying</h5>
                                                <h6 class="text-body-tertiary">Last 7 days</h6>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center pt-3 flex-1">
                                            <div class="echarts-paying-customer-chart" style="height:100%;width:100%;">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bullet-item bg-primary me-2"></div>
                                                <h6 class="text-body fw-semibold flex-1 mb-0">Paying customer</h6>
                                                <h6 class="text-body fw-semibold mb-0">30%</h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="bullet-item bg-primary-subtle me-2"></div>
                                                <h6 class="text-body fw-semibold flex-1 mb-0">Non-paying customer</h6>
                                                <h6 class="text-body fw-semibold mb-0">70%</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute">
                <div class="row g-0 justify-content-between align-items-center h-100">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 mt-2 mt-sm-0 text-body">Copyright © 2024 Manthan. All Rights Reserved.<span
                                class="d-none d-sm-inline-block"></span><span
                                class="d-none d-sm-inline-block mx-1">|</span><a
                                class="mx-1" href="{{ route('user.dashboard') }}">{{ Auth::user()->name }}'s Dashboard</a></p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-body-tertiary text-opacity-85">v1.7.3</p>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <script src="{{ asset('dashboard/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/leaflet.markercluster/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/phoenix.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/ecommerce-dashboard.js') }}"></script>
</body>

</html>