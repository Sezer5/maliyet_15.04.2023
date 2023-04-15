<!doctype html>
<html lang="en">

<head>
    <title>:: Iconic :: Table Normal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/sweetalert/sweetalert.css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/css/main.css">

    <style>
        td.details-control {
            background: url('<?=base_url()?>assets/yeni_tema/dist/assets/images/details_open.png') no-repeat center center;
            cursor: pointer;
        }

        tr.shown td.details-control {
            background: url('<?=base_url()?>assets/yeni_tema/dist/assets/images/details_close.png') no-repeat center center;
        }

    </style>
</head>

<body data-theme="light" class="font-nunito">

    <div id="wrapper" class="theme-cyan">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="<?=base_url()?>assets/yeni_tema/dist/assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Top navbar div start -->
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                    <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
                    <a href="index.html">ICONIC</a>
                </div>

                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>

                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification-dot"></span>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li class="header"><strong>You have 4 new Notifications</strong></li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-warning"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                    <span class="timestamp">10:00 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-like text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                    <span class="timestamp">11:30 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-pie-chart text-info"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                    <span class="timestamp">04:00 PM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-danger"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Error on website analytics configurations</p>
                                                    <span class="timestamp">Yesterday</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="page-login.html" class="icon-menu"><i class="fa fa-power-off"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- main left menu -->
        <div id="left-sidebar" class="sidebar">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <img src="<?=base_url()?>assets/yeni_tema/dist/assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pamela Petrus</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                            <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                    <hr>
                    <ul class="row list-unstyled">
                        <li class="col-4">
                            <small>Sales</small>
                            <h6>561</h6>
                        </li>
                        <li class="col-4">
                            <small>Order</small>
                            <h6>920</h6>
                        </li>
                        <li class="col-4">
                            <small>Revenue</small>
                            <h6>$23B</h6>
                        </li>
                    </ul>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content padding-0">
                    <div class="tab-pane active" id="menu">
                        <nav id="left-sidebar-nav" class="sidebar-nav">
                            <ul id="main-menu" class="metismenu li_animation_delay">
                                <li>
                                    <a href="#Dashboard" class="has-arrow"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                    <ul>
                                        <li><a href="index.html">Analytical</a></li>
                                        <li><a href="h-menu.html">Analytical H-Menu</a></li>
                                        <li><a href="index9.html">IoT Dashboard</a></li>
                                        <li><a href="index2.html">Demographic</a></li>
                                        <li><a href="index6.html">Project Board</a></li>
                                        <li><a href="index7.html">Crypto Dashboard</a></li>
                                        <li><a href="index8.html">eCommerce</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#App" class="has-arrow"><i class="fa fa-th-large"></i><span>Ready App</span></a>
                                    <ul>
                                        <li><a href="app-inbox.html">Inbox</a></li>
                                        <li><a href="app-chat.html">Chat</a></li>
                                        <li><a href="app-calendar.html">Calendar</a></li>
                                        <li><a href="app-contact.html">Contact list</a></li>
                                        <li><a href="app-contact-grid.html">Contact Card <span class="badge badge-warning float-right">New</span></a></li>
                                        <li><a href="app-taskboard.html">Taskboard</a></li>
                                        <li><a href="javascript:void(0);"><span>Blog</span></a>
                                            <ul>
                                                <li><a href="blog-dashboard.html">Dashboard</a></li>
                                                <li><a href="blog-post.html">New Post</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-details.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>File Manager</span></a>
                                            <ul>
                                                <li><a href="file-dashboard.html">Dashboard</a></li>
                                                <li><a href="file-documents.html">Documents</a></li>
                                                <li><a href="file-media.html">Media</a></li>
                                                <li><a href="file-images.html">Images</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#Widgets" class="has-arrow"><i class="fa fa-puzzle-piece"></i><span>Widgets</span></a>
                                    <ul>
                                        <li><a href="widgets-statistics.html">Statistics</a></li>
                                        <li><a href="widgets-data.html">Data</a></li>
                                        <li><a href="widgets-chart.html">Chart</a></li>
                                        <li><a href="widgets-weather.html">Weather</a></li>
                                        <li><a href="widgets-social.html">Social</a></li>
                                        <li><a href="widgets-blog.html">Blog</a></li>
                                        <li><a href="widgets-ecommerce.html">eCommerce</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>UI Elements</span></a>
                                    <ul>
                                        <li><a href="ui-typography.html">Typography</a></li>
                                        <li><a href="ui-tabs.html">Tabs</a></li>
                                        <li><a href="ui-buttons.html">Buttons</a></li>
                                        <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                        <li><a href="ui-icons.html">Icons</a></li>
                                        <li><a href="ui-notifications.html">Notifications</a></li>
                                        <li><a href="ui-colors.html">Colors</a></li>
                                        <li><a href="ui-dialogs.html">Dialogs</a></li>
                                        <li><a href="ui-list-group.html">List Group</a></li>
                                        <li><a href="ui-media-object.html">Media Object</a></li>
                                        <li><a href="ui-modals.html">Modals</a></li>
                                        <li><a href="ui-nestable.html">Nestable</a></li>
                                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                        <li><a href="ui-range-sliders.html">Range Sliders</a></li>
                                        <li><a href="ui-treeview.html">Treeview</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#charts" class="has-arrow"><i class="fa fa-area-chart"></i><span>Charts</span></a>
                                    <ul>
                                        <li><a href="chart-apex.html">Apex</a> </li>
                                        <li><a href="chart-c3.html">C3 Charts</a></li>
                                        <li><a href="chart-morris.html">Morris</a> </li>
                                        <li><a href="chart-flot.html">Flot</a> </li>
                                        <li><a href="chart-chartjs.html">ChartJS</a> </li>
                                        <li><a href="chart-jquery-knob.html">Jquery Knob</a> </li>
                                        <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                        <li><a href="chart-peity.html">Peity</a></li>
                                        <li><a href="chart-gauges.html">Gauges</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#forms" class="has-arrow"><i class="fa fa-pencil"></i><span>Forms</span></a>
                                    <ul>
                                        <li><a href="forms-validation.html">Form Validation</a></li>
                                        <li><a href="forms-advanced.html">Advanced Elements</a></li>
                                        <li><a href="forms-basic.html">Basic Elements</a></li>
                                        <li><a href="forms-wizard.html">Form Wizard</a></li>
                                        <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                                        <li><a href="forms-cropping.html">Image Cropping</a></li>
                                        <li><a href="forms-summernote.html">Summernote</a></li>
                                        <li><a href="forms-editors.html">CKEditor</a></li>
                                        <li><a href="forms-markdown.html">Markdown</a></li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="#Tables" class="has-arrow"><i class="fa fa-table"></i><span>Tables</span></a>
                                    <ul>
                                        <li><a href="table-basic.html">Tables Example<span class="badge badge-info float-right">New</span></a> </li>
                                        <li><a href="table-normal.html">Normal Tables</a> </li>
                                        <li class="active"><a href="table-jquery-datatable.html">Jquery Datatables</a> </li>
                                        <li><a href="table-editable.html">Editable Tables</a> </li>
                                        <li><a href="table-color.html">Tables Color</a> </li>
                                        <li><a href="table-filter.html">Table Filter <span class="badge badge-info float-right">New</span></a> </li>
                                        <li><a href="table-dragger.html">Table dragger <span class="badge badge-info float-right">New</span></a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#Authentication" class="has-arrow"><i class="fa fa-lock"></i><span>Authentication</span></a>
                                    <ul>
                                        <li><a href="page-login.html">Login</a></li>
                                        <li><a href="page-register.html">Register</a></li>
                                        <li><a href="page-lockscreen.html">Lockscreen</a></li>
                                        <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                        <li><a href="page-404.html">Page 404</a></li>
                                        <li><a href="page-403.html">Page 403</a></li>
                                        <li><a href="page-500.html">Page 500</a></li>
                                        <li><a href="page-503.html">Page 503</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#Pages" class="has-arrow"><i class="fa fa-file"></i><span>Extra Pages</span></a>
                                    <ul>
                                        <li><a href="page-blank.html">Blank Page</a> </li>
                                        <li><a href="page-profile.html">Profile <span class="badge badge-default float-right">v1</span></a></li>
                                        <li><a href="page-profile2.html">Profile <span class="badge badge-warning float-right">v2</span></a></li>
                                        <li><a href="page-gallery.html">Image Gallery <span class="badge badge-default float-right">v1</span></a> </li>
                                        <li><a href="page-gallery2.html">Image Gallery <span class="badge badge-warning float-right">v2</span></a> </li>
                                        <li><a href="page-timeline.html">Timeline</a></li>
                                        <li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
                                        <li><a href="page-pricing.html">Pricing</a></li>
                                        <li><a href="page-invoices.html">Invoices</a></li>
                                        <li><a href="page-invoices2.html">Invoices <span class="badge badge-warning float-right">v2</span></a></li>
                                        <li><a href="page-search-results.html">Search Results</a></li>
                                        <li><a href="page-helper-class.html">Helper Classes</a></li>
                                        <li><a href="page-teams-board.html">Teams Board</a></li>
                                        <li><a href="page-projects-list.html">Projects List</a></li>
                                        <li><a href="page-maintenance.html">Maintenance</a></li>
                                        <li><a href="page-testimonials.html">Testimonials</a></li>
                                        <li><a href="page-faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#Maps" class="has-arrow"><i class="fa fa-map"></i><span>Maps</span></a>
                                    <ul>
                                        <li><a href="map-google.html">Google Map</a></li>
                                        <li><a href="map-yandex.html">Yandex Map</a></li>
                                        <li><a href="map-jvectormap.html">jVector Map</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane" id="Chat">
                        <form>
                            <div class="input-group m-b-20">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                        <ul class="right_chat list-unstyled li_animation_delay">
                            <li>
                                <a href="javascript:void(0);" class="media">
                                    <img class="media-object" src="<?=base_url()?>assets/yeni_tema/dist/assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name d-flex justify-content-between">Chris Fox <i class="fa fa-heart-o font-12"></i></span>
                                        <span class="message">chrisfox@gmail.com</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="media">
                                    <img class="media-object" src="<?=base_url()?>assets/yeni_tema/dist/assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name d-flex justify-content-between">Joge Lucky <i class="fa fa-heart-o font-12"></i></span>
                                        <span class="message">Jogelucky@gmail.com</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="media">
                                    <img class="media-object" src="<?=base_url()?>assets/yeni_tema/dist/assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name d-flex justify-content-between">Isabella <i class="fa fa-heart-o font-12"></i></span>
                                        <span class="message">Isabella@gmail.com</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="media">
                                    <img class="media-object" src="<?=base_url()?>assets/yeni_tema/dist/assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name d-flex justify-content-between">Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                        <span class="message">FolisiseChosielie@gmail.com</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="media">
                                    <img class="media-object" src="<?=base_url()?>assets/yeni_tema/dist/assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name d-flex justify-content-between">Alexander <i class="fa fa-heart-o font-12"></i></span>
                                        <span class="message">Alexander@gmail.com</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="setting">
                        <h6>Choose Skin</h6>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan" class="active">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                            <li data-theme="red">
                                <div class="red"></div>
                            </li>
                        </ul>

                        <ul class="list-unstyled font_setting mt-3">
                            <li>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                                    <span class="custom-control-label">Nunito Google Font</span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                                    <span class="custom-control-label">Ubuntu Font</span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                                    <span class="custom-control-label">Raleway Google Font</span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                                    <span class="custom-control-label">IBM Plex Google Font</span>
                                </label>
                            </li>
                        </ul>

                        <ul class="list-unstyled mt-3">
                            <li class="d-flex align-items-center mb-2">
                                <label class="toggle-switch theme-switch">
                                    <input type="checkbox">
                                    <span class="toggle-switch-slider"></span>
                                </label>
                                <span class="ml-3">Enable Dark Mode!</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <label class="toggle-switch theme-rtl">
                                    <input type="checkbox">
                                    <span class="toggle-switch-slider"></span>
                                </label>
                                <span class="ml-3">Enable RTL Mode!</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <label class="toggle-switch theme-high-contrast">
                                    <input type="checkbox">
                                    <span class="toggle-switch-slider"></span>
                                </label>
                                <span class="ml-3">Enable High Contrast Mode!</span>
                            </li>
                        </ul>

                        <hr>
                        <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled">
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Allowed Notifications</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Offline</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Location Permission</span>
                                </label>
                            </li>
                        </ul>

                        <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a>
                        <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="btn btn-block btn-secondary">View portfolio</a>
                    </div>
                    <div class="tab-pane" id="question">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                        <ul class="list-unstyled question">
                            <li class="menu-heading">HOW-TO</li>
                            <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                            <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                            <li><a href="javascript:void(0);">Website Analytics</a></li>
                            <li class="menu-heading">ACCOUNT</li>
                            <li><a href="javascript:void(0);">Cearet New Account</a></li>
                            <li><a href="javascript:void(0);">Change Password?</a></li>
                            <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                            <li class="menu-heading">BILLING</li>
                            <li><a href="javascript:void(0);">Payment info</a></li>
                            <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                            <li class="menu-button mt-3">
                                <a href="../docs/index.html" class="btn btn-primary btn-block">Documentation</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- rightbar icon div -->
        <div class="right_icon_bar">
            <ul>
                <li><a href="app-inbox.html"><i class="fa fa-envelope"></i></a></li>
                <li><a href="app-chat.html"><i class="fa fa-comments"></i></a></li>
                <li><a href="app-calendar.html"><i class="fa fa-calendar"></i></a></li>
                <li><a href="file-dashboard.html"><i class="fa fa-folder"></i></a></li>
                <li><a href="app-contact.html"><i class="fa fa-id-card"></i></a></li>
                <li><a href="blog-list.html"><i class="fa fa-globe"></i></a></li>
                <li><a href="javascript:void(0);"><i class="fa fa-plus"></i></a></li>
                <li><a href="javascript:void(0);" class="right_icon_btn"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>

        <!-- mani page content body part -->
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Jquery Datatable</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                                <li class="breadcrumb-item">Table</li>
                                <li class="breadcrumb-item active">Jquery Datatable</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="d-flex flex-row-reverse">
                                <div class="page_action">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                                </div>
                                <div class="p-2 d-flex">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Basic Table <small>Basic example without any additional modification classes</small> </h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <!-- Javascript -->
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/libscripts.bundle.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/datatablescripts.bundle.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->



    <!-- page js file -->
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>
