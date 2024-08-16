<html lang="en" style="transform: none;">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reports Page</title>

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="assets/css/lnr-icon.css">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/select2.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
    <style id="theia-sticky-sidebar-stylesheet-TSS">
        .theiaStickySidebar:after {
            content: "";
            display: table;
            clear: both;
        }

    </style>
</head>

<body style="transform: none; overflow: visible;">

    <div class="inner-wrapper" style="transform: none;">

        <div id="loader-wrapper" style="display: none;">
            <div class="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

        <header class="header">

            <div class="top-header-section">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                            <div class="logo my-3 my-sm-0">
                                <a href="index.html">
                                    <img src="assets/img/logo.png" alt="logo image" class="img-fluid" width="100">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-6 text-right">
                            <div class="user-block d-none d-lg-block">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="user-notification-block align-right d-inline-block">
                                            <div class="top-nav-search item-animated">
                                                <form>
                                                    <input type="text" class="form-control" placeholder="Search here">
                                                    <button class="btn" type="submit"><i
                                                            class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="user-notification-block align-right d-inline-block">
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item item-animated" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Apply Leave">
                                                    <a href="leave.html"
                                                        class="font-23 menu-style text-white align-middle">
                                                        <span class="lnr lnr-briefcase position-relative"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="user-info align-right dropdown d-inline-block header-dropdown">
                                            <a href="javascript:void(0)" data-toggle="dropdown"
                                                class=" menu-style dropdown-toggle">
                                                <div class="user-avatar d-inline-block">
                                                    <img src="assets/img/profiles/img-6.jpg" alt="user avatar"
                                                        class="rounded-circle img-fluid" width="55">
                                                </div>
                                            </a>

                                            <div
                                                class="dropdown-menu notification-dropdown-menu shadow-lg border-0 p-3 m-0 dropdown-menu-right">
                                                <a class="dropdown-item p-2" href="employment.html">
                                                    <span class="media align-items-center">
                                                        <span class="lnr lnr-user mr-3"></span>
                                                        <span class="media-body text-truncate">
                                                            <span class="text-truncate">Profile</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a class="dropdown-item p-2" href="profile-settings.html">
                                                    <span class="media align-items-center">
                                                        <span class="lnr lnr-cog mr-3"></span>
                                                        <span class="media-body text-truncate">
                                                            <span class="text-truncate">Settings</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a class="dropdown-item p-2" href="login.html">
                                                    <span class="media align-items-center">
                                                        <span class="lnr lnr-power-switch mr-3"></span>
                                                        <span class="media-body text-truncate">
                                                            <span class="text-truncate">Logout</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="d-block d-lg-none">
                                <a href="javascript:void(0)">
                                    <span class="lnr lnr-user d-block display-5 text-white" id="open_navSidebar"></span>
                                </a>

                                <div class="offcanvas-menu" id="offcanvas_menu">
                                    <span
                                        class="lnr lnr-cross float-left display-6 position-absolute t-1 l-1 text-white"
                                        id="close_navSidebar"></span>
                                    <div class="user-info align-center bg-theme text-center">
                                        <a href="javascript:void(0)" class="d-block menu-style text-white">
                                            <div class="user-avatar d-inline-block mr-3">
                                                <img src="assets/img/profiles/img-6.jpg" alt="user avatar"
                                                    class="rounded-circle" width="50">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="user-notification-block align-center">
                                        <div class="top-nav-search item-animated">
                                            <form>
                                                <input type="text" class="form-control" placeholder="Search here">
                                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="user-menu-items px-3 m-0">
                                        <a class="px-0 pb-2 pt-0" href="index.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-home mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Dashboard</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="p-2" href="employees.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-users mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Employees</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="p-2" href="company.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-apartment mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Company</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="p-2" href="calendar.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-calendar-full mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Calendar</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="p-2" href="leave.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-briefcase mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Leave</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="p-2" href="reviews.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-star mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Reviews</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="p-2" href="reports.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-rocket mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Reports</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="p-2" href="manage.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-sync mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Manage</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="p-2" href="settings.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-cog mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Settings</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="p-2" href="employment.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-user mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Profile</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="p-2" href="login.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-power-switch mr-3"></span>
                                                <span class="media-body text-truncate text-left">
                                                    <span class="text-truncate text-left">Logout</span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="header-wrapper d-none d-sm-none d-md-none d-lg-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-menu-list d-flex bg-white rt_nav_header horizontal-layout nav-bottom">
                                <div class="append mr-auto my-0 my-md-0 mr-auto">
                                    <ul class="list-group list-group-horizontal-md mr-auto">
                                        <li class="mr-1"><a href="index.html" class="text-dark btn-ctm-space"><span
                                                    class="lnr lnr-home pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Dashboard</span></a></li>
                                        <li class="mr-1"><a class="text-dark btn-ctm-space" href="employees.html"><span
                                                    class="lnr lnr-users pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Employees</span></a></li>
                                        <li class="mr-1"><a class="text-dark btn-ctm-space" href="company.html"><span
                                                    class="lnr lnr-apartment pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Company</span></a></li>
                                        <li class="mr-1"><a class="text-dark btn-ctm-space" href="calendar.html"><span
                                                    class="lnr lnr-calendar-full pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Calendar</span></a></li>
                                        <li class="mr-1"><a class="text-dark btn-ctm-space" href="leave.html"><span
                                                    class="lnr lnr-briefcase pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Leave</span></a></li>
                                        <li class="mr-1"><a class="text-dark btn-ctm-space" href="reviews.html"><span
                                                    class="lnr lnr-star pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Reviews</span></a></li>
                                        <li class="mr-1 active"><a class="text-white btn-ctm-space"
                                                href="reports.html"><span
                                                    class="lnr lnr-rocket pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Reports</span></a></li>
                                        <li class="mr-1"><a class="text-dark btn-ctm-space" href="manage.html"><span
                                                    class="lnr lnr-sync pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Manage</span></a></li>
                                        <li class="mr-1"><a class="text-dark btn-ctm-space" href="settings.html"><span
                                                    class="lnr lnr-cog pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Settings</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>


        <div class="page-wrapper" style="transform: none;">
            <div class="container-fluid" style="transform: none;">
                <div class="row" style="transform: none;">
                    <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar"
                        style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                        <div class="theiaStickySidebar"
                            style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                            <aside class="sidebar sidebar-user">
                                <div class="card ctm-border-radius shadow-sm">
                                    <div class="card-body py-4">
                                        <div class="row">
                                            <div class="col-md-12 mr-auto text-left">
                                                <div class="custom-search input-group">
                                                    <div class="custom-breadcrumb">
                                                        <ol class="breadcrumb no-bg-color d-inline-block p-0 m-0 mb-2">
                                                            <li class="breadcrumb-item d-inline-block"><a
                                                                    href="index.html" class="text-dark">Home</a></li>
                                                            <li class="breadcrumb-item d-inline-block active">Reports
                                                            </li>
                                                        </ol>
                                                        <h4 class="text-dark">Reports</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card ctm-border-radius shadow-sm">
                                    <div class="card-body">
                                        <a href="javascript:void(0)"
                                            class="btn btn-theme button-1 ctm-border-radius text-white btn-block"
                                            data-toggle="modal" data-target="#add_report"><span><i
                                                    class="fe fe-plus"></i></span> Create Reports</a>
                                    </div>
                                </div>
                                <div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item text-center active"><a href="reports.html"
                                                    class="text-white">Team Member Data</a></li>
                                            <li class="list-group-item text-center"><a class="text-dark"
                                                    href="leave-reports.html">Leave Data</a></li>
                                            <li class="list-group-item text-center"><a class="text-dark"
                                                    href="payroll-reports.html">Payroll Data</a></li>
                                            <li class="list-group-item text-center"><a class="text-dark"
                                                    href="contact-reports.html">Contact reports</a></li>
                                            <li class="list-group-item text-center"><a class="text-dark"
                                                    href="email-reports.html">Email Reports</a></li>
                                            <li class="list-group-item text-center"><a class="text-dark"
                                                    href="security-reports.html">Security Reports</a></li>
                                            <li class="list-group-item text-center"><a class="text-dark"
                                                    href="work-from-home-reports.html">Working From Home Reports</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            <div class="resize-sensor"
                                style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div class="resize-sensor-expand"
                                    style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div
                                        style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 483px; height: 938px;">
                                    </div>
                                </div>
                                <div class="resize-sensor-shrink"
                                    style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div
                                        style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8  col-md-12">
                        <div class="card shadow-sm ctm-border-radius">
                            <div class="card-body align-center">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item mr-md-1">
                                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                            role="tab" aria-controls="pills-home" aria-selected="false">Team Member
                                            Official Reports</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-profile-tab" data-toggle="pill"
                                            href="#pills-profile" role="tab" aria-controls="pills-profile"
                                            aria-selected="true">Team Member Personal reports</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card shadow-sm ctm-border-radius">
                            <div class="card-body align-center">
                                <div class="row filter-row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                        <div class="form-group mb-xl-0 mb-md-2 mb-sm-2">
                                            <select class="form-control select select2-hidden-accessible" tabindex="-1"
                                                aria-hidden="true">
                                                <option selected="">Start Date</option>
                                                <option>Date Of Birth</option>
                                                <option>Created At</option>
                                                <option>Leaving Date</option>
                                                <option>Visa Expiry Date</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                dir="ltr" style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-labelledby="select2-wht8-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-wht8-container" title="Start Date">Start
                                                            Date</span><span class="select2-selection__arrow"
                                                            role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                        <div class="form-group mb-lg-0 mb-md-2 mb-sm-2">
                                            <input type="text" class="form-control datetimepicker" placeholder="From">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                        <div class="form-group mb-lg-0 mb-md-0 mb-sm-0">
                                            <input type="text" class="form-control datetimepicker" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                        <a href="#"
                                            class="btn btn-theme button-1 text-white btn-block p-2 mb-md-0 mb-sm-0 mb-lg-0 mb-0">
                                            Apply Filter </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-sm ctm-border-radius">
                            <div class="card-body align-center">
                                <div class="tab-content" id="pills-tabContent">

                                    <div class="tab-pane fade" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div class="employee-office-table">
                                            <div class="table-responsive">
                                                <table class="table custom-table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Active</th>
                                                            <th>Employment</th>
                                                            <th>Email</th>
                                                            <th>Job title</th>
                                                            <th>Line Manager</th>
                                                            <th>Team name</th>
                                                            <th>Start Date</th>
                                                            <th>Company Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        alt="avatar image"
                                                                        src="assets/img/profiles/img-5.jpg"
                                                                        class="img-fluid"></a>
                                                                <h2><a href="employment.html">Danny Ward</a></h2>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown action-label drop-active">
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-white btn-sm dropdown-toggle"
                                                                        data-toggle="dropdown"> Active <i
                                                                            class="caret"></i></a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Active</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Inactive</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Invited</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Permanent</td>
                                                            <td>danyward@example.com</td>
                                                            <td>Team Lead</td>
                                                            <td><span
                                                                    class="btn btn-outline-success text-dark btn-sm">Richard
                                                                    Wilson</span></td>
                                                            <td><span
                                                                    class="btn btn-outline-warning text-dark btn-sm">Designing</span>
                                                            </td>
                                                            <td>05 Jan 2019</td>
                                                            <td>Focus Technologies</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        class="img-fluid" alt="avatar image"
                                                                        src="assets/img/profiles/img-4.jpg"></a>
                                                                <h2><a href="employment.html"> Linda Craver</a></h2>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown action-label drop-active">
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-white btn-sm dropdown-toggle"
                                                                        data-toggle="dropdown"> Active <i
                                                                            class="caret"></i></a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Active</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Inactive</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Invited</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Permanent</td>
                                                            <td>lindacraver@example.com</td>
                                                            <td>Team Lead</td>
                                                            <td><span
                                                                    class="btn btn-outline-success text-dark btn-sm">Richard
                                                                    Wilson</span></td>
                                                            <td><span
                                                                    class="btn btn-outline-warning text-dark btn-sm">IOS</span>
                                                            </td>
                                                            <td>07 Jun 2019</td>
                                                            <td>Focus Technologies</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        class="img-fluid" alt="avatar image"
                                                                        src="assets/img/profiles/img-3.jpg"></a>
                                                                <h2><a href="employment.html">Jenni Sims</a></h2>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown action-label drop-active">
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-white btn-sm dropdown-toggle"
                                                                        data-toggle="dropdown"> Active <i
                                                                            class="caret"></i></a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Active</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Inactive</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Invited</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Permanent</td>
                                                            <td>jennisims@example.com</td>
                                                            <td>Team Lead</td>
                                                            <td><span
                                                                    class="btn btn-outline-success text-dark btn-sm">Richard
                                                                    Wilson</span></td>
                                                            <td><span
                                                                    class="btn btn-outline-warning text-dark btn-sm">Android</span>
                                                            </td>
                                                            <td>05 Apr 2019</td>
                                                            <td>Focus Technologies</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        alt="avatar image"
                                                                        src="assets/img/profiles/img-6.jpg"
                                                                        class="img-fluid"></a>
                                                                <h2><a href="employment.html"> Maria Cotton</a></h2>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown action-label drop-active">
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-white btn-sm dropdown-toggle"
                                                                        data-toggle="dropdown"> Active <i
                                                                            class="caret"></i></a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Active</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Inactive</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Invited</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Permanent</td>
                                                            <td>mariacotton@example.com</td>
                                                            <td>Team Lead</td>
                                                            <td><span
                                                                    class="btn btn-outline-success text-dark btn-sm">Richard
                                                                    Wilson</span></td>
                                                            <td><span
                                                                    class="btn btn-outline-warning text-dark btn-sm">PHP
                                                                </span></td>
                                                            <td>05 Jan 2019</td>
                                                            <td>Focus Technologies</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        class="img-fluid" alt="avatar image"
                                                                        src="assets/img/profiles/img-2.jpg"></a>
                                                                <h2><a href="employment.html"> John Gibbs</a></h2>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown action-label drop-active">
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-white btn-sm dropdown-toggle"
                                                                        data-toggle="dropdown"> Active <i
                                                                            class="caret"></i></a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Active</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Inactive</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Invited</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Permanent</td>
                                                            <td>johndrysdale@example.com</td>
                                                            <td>Team Lead</td>
                                                            <td><span
                                                                    class="btn btn-outline-success text-dark btn-sm">Richard
                                                                    Wilson</span></td>
                                                            <td><span
                                                                    class="btn btn-outline-warning text-dark btn-sm">Business</span>
                                                            </td>
                                                            <td>12 Feb 2019</td>
                                                            <td>Focus Technologies</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        class="img-fluid" alt="avatar image"
                                                                        src="assets/img/profiles/img-10.jpg"></a>
                                                                <h2><a href="employment.html"> Richard Wilson</a></h2>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown action-label drop-active">
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-white btn-sm dropdown-toggle"
                                                                        data-toggle="dropdown"> Active <i
                                                                            class="caret"></i></a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Active</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Inactive</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Invited</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Permanent</td>
                                                            <td>richardwilson@example.com</td>
                                                            <td>Team Lead</td>
                                                            <td><span
                                                                    class="btn btn-outline-danger text-dark btn-sm">No</span>
                                                            </td>
                                                            <td><span
                                                                    class="btn btn-outline-warning text-dark btn-sm">Admin</span>
                                                            </td>
                                                            <td>05 Jan 2019</td>
                                                            <td>Focus Technologies</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        class="img-fluid" alt="avatar image"
                                                                        src="assets/img/profiles/img-8.jpg"></a>
                                                                <h2><a href="employment.html"> Stacey Linville</a></h2>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown action-label drop-active">
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-white btn-sm dropdown-toggle"
                                                                        data-toggle="dropdown"> Active <i
                                                                            class="caret"></i></a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Active</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Inactive</a>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0)"> Invited</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Permanent</td>
                                                            <td>staceylinville@example.com</td>
                                                            <td>Team Lead</td>
                                                            <td><span
                                                                    class="btn btn-outline-success text-dark btn-sm">Richard
                                                                    Wilson</span></td>
                                                            <td><span
                                                                    class="btn btn-outline-warning text-dark btn-sm">Testing</span>
                                                            </td>
                                                            <td>05 Jan 2019</td>
                                                            <td>Focus Technologies</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <div class="employee-office-table">
                                            <div class="table-responsive">
                                                <table class="table custom-table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Gender</th>
                                                            <th>Salary Current</th>
                                                            <th>Date Of Birth</th>
                                                            <th>Phone Number</th>
                                                            <th>Address</th>
                                                            <th>Bank Name</th>
                                                            <th>Account Number</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        alt="avatar image"
                                                                        src="assets/img/profiles/img-5.jpg"
                                                                        class="img-fluid"></a>
                                                                <h2><a href="employment.html">Danny Ward</a></h2>
                                                            </td>
                                                            <td>
                                                                Male
                                                            </td>
                                                            <td>$3000</td>
                                                            <td>25 Jun 1984</td>
                                                            <td>9876543231</td>
                                                            <td>201 Lunetta Street,Plant City,<br> Florida(FL), 33566
                                                            </td>
                                                            <td>Life Essence Banks, Inc.</td>
                                                            <td>112300987652</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        class="img-fluid" alt="avatar image"
                                                                        src="assets/img/profiles/img-4.jpg"></a>
                                                                <h2><a href="employment.html"> Linda Craver</a></h2>
                                                            </td>
                                                            <td>
                                                                Female
                                                            </td>
                                                            <td>$2000</td>
                                                            <td>14 Feb 1984</td>
                                                            <td>9876543221</td>
                                                            <td>683 Longview Avenue,New York, <br> New York(NY), 10011
                                                            </td>
                                                            <td>Life Essence Banks, Inc.</td>
                                                            <td>112300987662</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        class="img-fluid" alt="avatar image"
                                                                        src="assets/img/profiles/img-3.jpg"></a>
                                                                <h2><a href="employment.html">Jenni Sims</a></h2>
                                                            </td>
                                                            <td>
                                                                Female
                                                            </td>
                                                            <td>$4000</td>
                                                            <td>20 Jan 1984</td>
                                                            <td>9876534214</td>
                                                            <td> 4923 Front Street,Detroit,<br> Michigan(MI), 48226</td>
                                                            <td>Life Essence Banks, Inc.</td>
                                                            <td>112300987653</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        alt="avatar image"
                                                                        src="assets/img/profiles/img-6.jpg"
                                                                        class="img-fluid"></a>
                                                                <h2><a href="employment.html"> Maria Cotton</a></h2>
                                                            </td>
                                                            <td>
                                                                Female
                                                            </td>
                                                            <td>$5000</td>
                                                            <td>15 Jul 1984</td>
                                                            <td>9876541123</td>
                                                            <td>1246 Parkway Street, Brawley, <br>California(CA), 92227
                                                            </td>
                                                            <td>Life Essence Banks, Inc.</td>
                                                            <td>112300987654</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        class="img-fluid" alt="avatar image"
                                                                        src="assets/img/profiles/img-2.jpg"></a>
                                                                <h2><a href="employment.html"> John Gibbs</a></h2>
                                                            </td>
                                                            <td>
                                                                Male
                                                            </td>
                                                            <td>$4500</td>
                                                            <td>05 Dec 1984</td>
                                                            <td>9876541132</td>
                                                            <td>4604 Fairfax Drive,Rochelle Park,<br> New Jersey(NJ),
                                                                07662</td>
                                                            <td>Life Essence Banks, Inc.</td>
                                                            <td>112300987655</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        class="img-fluid" alt="avatar image"
                                                                        src="assets/img/profiles/img-10.jpg"></a>
                                                                <h2><a href="employment.html"> Richard Wilson</a></h2>
                                                            </td>
                                                            <td>
                                                                Male
                                                            </td>
                                                            <td>$4600</td>
                                                            <td>25 Apr 1984</td>
                                                            <td>9876541321</td>
                                                            <td>3088 Gordon Street, Los Angeles,<br> California(CA),
                                                                90017</td>
                                                            <td>Life Essence Banks, Inc.</td>
                                                            <td>112300987656</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="employment.html" class="avatar"><img
                                                                        class="img-fluid" alt="avatar image"
                                                                        src="assets/img/profiles/img-8.jpg"></a>
                                                                <h2><a href="employment.html">Stacey Linville</a></h2>
                                                            </td>
                                                            <td>
                                                                Female
                                                            </td>
                                                            <td>$4700</td>
                                                            <td>23 Jan 1984</td>
                                                            <td>9876542312</td>
                                                            <td>835 Sarah Drive,Lafayette,<br> Louisiana(LA), 70506</td>
                                                            <td>Life Essence Banks, Inc.</td>
                                                            <td>112300987657</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-center mt-3">
                                    <a href="javascript:void(0)"
                                        class="btn btn-theme button-1 ctm-border-radius text-white">Download Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="add_report">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title mb-3">Create Report</h4>
                    <form>
                        <p class="mb-2">Select Report Type</p>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio" name="example"
                                value="customEx">
                            <label class="custom-control-label" for="customRadio">Team Member</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="example"
                                value="customEx">
                            <label class="custom-control-label" for="customRadio2">Time Off</label>
                        </div>
                        <div class="form-group">
                            <label class="mt-3">What data would you like to include?</label>

                            <select multiple="" class="select w-100 form-control select2-hidden-accessible"
                                tabindex="-1" aria-hidden="true">
                                <option>Full Name</option>
                                <option>Working Days Off</option>
                                <option>Booked By</option>
                                <option>Start Date</option>
                                <option>End Date</option>
                                <option>Team Name</option>
                                <option>First Name</option>
                                <option>Last Name</option>
                                <option>Email</option>
                                <option>Date Of Birth</option>
                                <option>Phone Number</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--multiple" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                        <ul class="select2-selection__rendered">
                                            <li class="select2-search select2-search--inline"><input
                                                    class="select2-search__field" type="search" tabindex="0"
                                                    autocomplete="off" autocorrect="off" autocapitalize="off"
                                                    spellcheck="false" role="textbox" aria-autocomplete="list"
                                                    placeholder="" style="width: 0.75em;"></li>
                                        </ul>
                                    </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </form>
                    <button type="button" class="btn btn-danger text-white ctm-border-radius float-right ml-3"
                        data-dismiss="modal">Cancel</button>
                    <button type="button"
                        class="btn btn-theme button-1 text-white ctm-border-radius float-right">Add</button>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" id="sidebar_overlay" style="display: none;"></div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/plugins/select2/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <script src="assets/plugins/select2/select2.min.js"></script>

    <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script>
        $(function() {
            $('.selectpicker').selectpicker();
        });
    </script>

</body>

</html>
