<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 10:18:21 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Disilab - Social Questions and Answers HTML Template</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset('assets/front/images/favicon.png') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/jquery-te-1.4.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/selectize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-area bg-white border-bottom border-bottom-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo-box">
                    <a href="index.html" class="logo"><img src="{{ asset('assets/front/images/logo-black.png') }}"
                                                           alt="logo"></a>
                    <div class="user-action">
                        <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1"
                             data-toggle="tooltip" data-placement="top" title="Search">
                            <i class="la la-search"></i>
                        </div>
                        <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm mr-1"
                             data-toggle="tooltip" data-placement="top" title="Main menu">
                            <i class="la la-bars"></i>
                        </div>
                        <div class="user-off-canvas-menu-toggle icon-element icon-element-xs shadow-sm"
                             data-toggle="tooltip" data-placement="top" title="User menu">
                            <i class="la la-user"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-2 -->
            <div class="col-lg-10">
                <div class="menu-wrapper border-left border-left-gray pl-4">
                    <nav class="menu-bar mr-auto">
                        <ul>
                            <li>
                                <a href="#">Home <i class="la la-angle-down fs-11"></i></a>
                            </li>
                            <li class="is-mega-menu">
                                <a href="#">pages <i class="la la-angle-down fs-11"></i></a>
                            </li>
                            <li>
                                <a href="#">blog <i class="la la-angle-down fs-11"></i></a>
                            </li>
                        </ul><!-- end ul -->
                    </nav><!-- end main-menu -->
                    <form method="post" class="mr-2">
                        <div class="form-group mb-0">
                            <input class="form-control form--control form--control-bg-gray" type="text" name="search"
                                   placeholder="Type your search words...">
                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                        </div>
                    </form>
                    <div class="nav-right-button">
                        <ul class="user-action-wrap d-flex align-items-center">
                            <li class="dropdown">
                                <span class="ball red ball-lg noti-dot"></span>
                                <a class="nav-link dropdown-toggle dropdown--toggle" href="#" id="notificationDropdown"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown--menu dropdown-menu-right mt-3 keep-open"
                                     aria-labelledby="notificationDropdown">
                                    <h6 class="dropdown-header"><i class="la la-bell pr-1 fs-16"></i>Notifications</h6>
                                    <div class="dropdown-divider border-top-gray mb-0"></div>
                                    <div class="dropdown-item-list">
                                        <a class="dropdown-item" href="notifications.html">
                                            <div
                                                class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                                <div class="media-img media-img-sm flex-shrink-0">
                                                    <img src="images/img3.jpg" alt="avatar">
                                                </div>
                                                <div class="media-body p-0 border-left-0">
                                                    <h5 class="fs-14 fw-regular">John Doe following your post</h5>
                                                    <small class="meta d-block lh-24">
                                                        <span>45 secs ago</span>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="notifications.html">
                                            <div
                                                class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                                <div class="media-img media-img-sm flex-shrink-0">
                                                    <img src="images/img4.jpg" alt="avatar">
                                                </div>
                                                <div class="media-body p-0 border-left-0">
                                                    <h5 class="fs-14 fw-regular">Arnold Smith answered on your post</h5>
                                                    <small class="meta d-block lh-24">
                                                        <span>5 mins ago</span>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="notifications.html">
                                            <div
                                                class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                                <div class="media-img media-img-sm flex-shrink-0">
                                                    <img src="images/img4.jpg" alt="avatar">
                                                </div>
                                                <div class="media-body p-0 border-left-0">
                                                    <h5 class="fs-14 fw-regular">Saeed bookmarked your post</h5>
                                                    <small class="meta d-block lh-24">
                                                        <span>1 hour ago</span>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a class="dropdown-item pb-1 border-bottom-0 text-center btn-text fw-regular"
                                       href="notifications.html">View All Notifications <i
                                            class="la la-arrow-right icon ml-1"></i></a>
                                </div>
                            </li>
                            <li class="dropdown user-dropdown">
                                <a class="nav-link dropdown-toggle dropdown--toggle pl-2" href="#" id="userMenuDropdown"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div
                                        class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                        <div class="media-img media-img-xs flex-shrink-0 rounded-full mr-2">
                                            <img src="images/img4.jpg" alt="avatar" class="rounded-full">
                                        </div>
                                        <div class="media-body p-0 border-left-0">
                                            <h5 class="fs-14">{{ $user->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown--menu dropdown-menu-right mt-3 keep-open"
                                     aria-labelledby="userMenuDropdown">
                                    <h6 class="dropdown-header">Hi, Arden Smith</h6>
                                    <div class="dropdown-divider border-top-gray mb-0"></div>
                                    <div class="dropdown-item-list">
                                        <a class="dropdown-item" href="user-profile.html"><i
                                                class="la la-user mr-2"></i>Profile</a>
                                        <a class="dropdown-item" href="notifications.html"><i
                                                class="la la-bell mr-2"></i>Notifications</a>
                                        <a class="dropdown-item" href="referrals.html"><i
                                                class="la la-user-plus mr-2"></i>Referrals</a>
                                        <a class="dropdown-item" href="setting.html"><i class="la la-gear mr-2"></i>Settings</a>
                                        <a class="dropdown-item" href="index.html"><i class="la la-power-off mr-2"></i>Log
                                            out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- end nav-right-button -->
                </div><!-- end menu-wrapper -->
            </div><!-- end col-lg-10 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="off-canvas-menu custom-scrollbar-styled">
        <div class="off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip"
             data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->

    </div><!-- end off-canvas-menu -->
    <div class="user-off-canvas-menu custom-scrollbar-styled">
        <div class="user-off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip"
             data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end user-off-canvas-menu-close -->
        <ul class="nav nav-tabs generic-tabs generic--tabs pt-90px pl-4 shadow-sm" id="myTab2" role="tablist">
            <li class="nav-item">
                <div class="anim-bar"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="user-notification-menu-tab" data-toggle="tab"
                   href="#user-notification-menu" role="tab" aria-controls="user-notification-menu"
                   aria-selected="true">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="user-profile-menu-tab" data-toggle="tab" href="#user-profile-menu" role="tab"
                   aria-controls="user-profile-menu" aria-selected="false">Profile</a>
            </li>
        </ul>
        <div class="tab-content pt-3" id="myTabContent2">
            <div class="tab-pane fade show active" id="user-notification-menu" role="tabpanel"
                 aria-labelledby="user-notification-menu-tab">
                <div class="dropdown--menu shadow-none w-auto rounded-0">
                    <div class="dropdown-item-list">
                        <a class="dropdown-item" href="notifications.html">
                            <div
                                class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                <div class="media-img media-img-sm flex-shrink-0">
                                    <img src="images/img3.jpg" alt="avatar">
                                </div>
                                <div class="media-body p-0 border-left-0">
                                    <h5 class="fs-14 fw-regular">John Doe following your post</h5>
                                    <small class="meta d-block lh-24">
                                        <span>45 secs ago</span>
                                    </small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="notifications.html">
                            <div
                                class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                <div class="media-img media-img-sm flex-shrink-0">
                                    <img src="images/img4.jpg" alt="avatar">
                                </div>
                                <div class="media-body p-0 border-left-0">
                                    <h5 class="fs-14 fw-regular">Arnold Smith answered on your post</h5>
                                    <small class="meta d-block lh-24">
                                        <span>5 mins ago</span>
                                    </small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="notifications.html">
                            <div
                                class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                <div class="media-img media-img-sm flex-shrink-0">
                                    <img src="images/img4.jpg" alt="avatar">
                                </div>
                                <div class="media-body p-0 border-left-0">
                                    <h5 class="fs-14 fw-regular">Saeed bookmarked your post</h5>
                                    <small class="meta d-block lh-24">
                                        <span>1 hour ago</span>
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a class="dropdown-item border-bottom-0 text-center btn-text fw-regular" href="notifications.html">View
                        All Notifications <i class="la la-arrow-right icon ml-1"></i></a>
                </div>
            </div><!-- end tab-pane -->
            <div class="tab-pane fade" id="user-profile-menu" role="tabpanel" aria-labelledby="user-profile-menu-tab">
                <div class="dropdown--menu shadow-none w-auto rounded-0">
                    <div class="dropdown-item-list">
                        <a class="dropdown-item" href="user-profile.html"><i class="la la-user mr-2"></i>Profile</a>
                        <a class="dropdown-item" href="notifications.html"><i class="la la-bell mr-2"></i>Notifications</a>
                        <a class="dropdown-item" href="referrals.html"><i class="la la-user-plus mr-2"></i>Referrals</a>
                        <a class="dropdown-item" href="setting.html"><i class="la la-gear mr-2"></i>Settings</a>
                        <a class="dropdown-item" href="index.html"><i class="la la-power-off mr-2"></i>Log out</a>
                    </div>
                </div>
            </div><!-- end tab-pane -->
        </div>
    </div><!-- end user-off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-40px" type="text" name="search"
                           placeholder="Type your search words...">
                    <span class="la la-search input-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header><!-- end header-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!--======================================
        START HERO AREA
======================================-->
<!--======================================
        END HERO AREA
======================================-->
<section class="user-details-area pt-40px pb-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content mb-50px" id="myTabContent">
                    <div class="tab-pane fade show active" id="edit-profile" role="tabpanel"
                         aria-labelledby="edit-profile-tab">
                        <div class="user-panel-main-bar">
                            <div class="user-panel">
                                <div class="bg-gray p-3 rounded-rounded">
                                    <h3 class="fs-17">Edit your profile</h3>
                                </div>
                                <form method="POST" action="{{ route('profile.store') }}" class="pt-35px">
                                    @csrf
                                    <div class="settings-item mb-10px">
                                        <h4 class="fs-14 pb-2 text-gray text-uppercase">Public information</h4>
                                        <div class="divider"><span></span></div>
                                        <div class="row pt-4 align-items-center">
                                            <div class="col-lg-6">
                                                <div class="edit-profile-photo d-flex flex-wrap align-items-center">
                                                    <img src="images/team.jpg" alt="user avatar"
                                                         class="profile-img mr-4">
                                                    <div>
                                                        <div class="file-upload-wrap file--upload-wrap">
                                                            <input type="file" name="files[]"
                                                                   class="multi file-upload-input" multiple>
                                                            <span class="file-upload-text"><i
                                                                    class="la la-photo mr-2"></i>Upload Photo</span>
                                                        </div>
                                                        <p class="fs-14">Maximum file size: 10 MB.</p>
                                                    </div>
                                                </div><!-- end edit-profile-photo -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20 fw-medium">Display name</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control" type="text"
                                                               name="name" value={{ $user->name }}>
                                                    </div>
                                                    @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20 fw-medium">Location</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control" type="text"
                                                               name="location"
                                                               value="">
                                                    </div>
                                                    @error('location')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                        </div><!-- end row -->
                                    </div><!-- end settings-item -->
                                    <div class="settings-item">
                                        <div class="row pt-4">
                                            <div class="col-lg-12">
                                                <div class="submit-btn-box pt-3">
                                                    <button class="btn theme-btn" type="submit">Save changes</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </div><!-- end settings-item -->
                                </form>
                            </div><!-- end user-panel -->
                        </div><!-- end user-panel-main-bar -->
                    </div><!-- end tab-pane -->
                </div>
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end user-details-area -->

<!-- template js files -->
<script src="{{ asset('assets/front/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery-te-1.4.0.min.js') }}"></script>
<script src="{{ asset('assets/front/js/selectize.min.js') }}"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 10:18:22 GMT -->
</html>
