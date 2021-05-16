<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from laravel.spruko.com/flaira/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 17:12:41 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <!-- META DATA -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Flaira - Laravel Admin & Dashboard Template" />
    <meta name="author" content="Spruko Technologies Private Limited" />
    <meta name="keywords" content="admin template, bootstrap admin template, bootstrap dashboard, admin panel template, laravel dashboard template, laravel admin dashboard, dashboard laravel, laravel admin panel template, blade template laravel, best laravel admin panel, php blade template, blade in laravel, bootstrap laravel template, laravel admin dashboard template, laravel template blade"
    />

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/brand/favicon.ico')}}" />

    <!-- TITLE -->
    <title>Flaira - Laravel Admin & Dashboard Template</title>

    <!-- BOOTSTRAP CSS -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/skin-modes.css')}}" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="{{asset('css/sidemenu.css')}}" rel="stylesheet" />

    <!--C3 CHARTS CSS -->
    <link href="{{asset('plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="{{asset('plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />

    <!-- SELECT2 CSS -->
    <link href="{{asset('plugins/select2/select2.min.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('plugins/icons/icons.css')}}" rel="stylesheet" />

    <!-- Switcher css -->
    <link href="{{asset('switcher/css/switcher.css')}}" rel="stylesheet" id="switcher-css" type="text/css" media="all" />
    <link href="{{asset('switcher/css/demo.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('colors/color1.css')}}" />
</head>

<body class="app sidebar-mini Left-menu-Default Sidemenu-left-icons">
    <!-- Start Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="demo-icon bg_dark">
                <i class="fa fa-cog fa-spin text_primary"></i>
            </div>
            <div class="form_holder right-sidebar">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="skin-theme-switcher">
                            <div class="swichermainleft mt-2 text-center">
                                <div class="p-3">
                                    <a href="index.html" class="btn btn-primary btn-block mt-0">LTR Version</a
                                        >
                                        <a
                                            href="https://laravel.spruko.com/flaira/rtl/index"
                                            class="btn btn-secondary btn-block"
                                            >RTL Version</a
                                        >
                                    </div>
                                </div>
                                <div class="swichermainleft">
                                    <h4>Versions</h4>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Light Mode</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="radio"
                                                    name="onoffswitch4"
                                                    id="myonoffswitch7"
                                                    class="onoffswitch2-checkbox"
                                                    checked
                                                />
                                                <label
                                                    for="myonoffswitch7"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Dark Mode</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="radio"
                                                    name="onoffswitch4"
                                                    id="myonoffswitch8"
                                                    class="onoffswitch2-checkbox"
                                                />
                                                <label
                                                    for="myonoffswitch8"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swichermainleft">
                                    <h4>Sidemenu Icon Styles</h4>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex mt-3">
                                            <span class="mr-auto"
                                                >Slidmenu Icons Left</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="radio"
                                                    name="onoffswitch2"
                                                    id="myonoffswitch"
                                                    class="onoffswitch2-checkbox"
                                                    checked
                                                />
                                                <label
                                                    for="myonoffswitch"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Slidmenu Icons Right</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="radio"
                                                    name="onoffswitch2"
                                                    id="myonoffswitch2"
                                                    class="onoffswitch2-checkbox"
                                                />
                                                <label
                                                    for="myonoffswitch2"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Slidmenu Icons None</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="radio"
                                                    name="onoffswitch2"
                                                    id="myonoffswitch1"
                                                    class="onoffswitch2-checkbox"
                                                />
                                                <label
                                                    for="myonoffswitch1"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swichermainleft">
                                    <h4>Left Menu Styles</h4>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Left Menu Light</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="radio"
                                                    name="onoffswitch5"
                                                    id="myonoffswitch6"
                                                    class="onoffswitch2-checkbox"
                                                />
                                                <label
                                                    for="myonoffswitch6"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Left Menu Default</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="radio"
                                                    name="onoffswitch5"
                                                    id="myonoffswitch10"
                                                    class="onoffswitch2-checkbox"
                                                    checked
                                                />
                                                <label
                                                    for="myonoffswitch10"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Left Menu Dark</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="radio"
                                                    name="onoffswitch5"
                                                    id="myonoffswitch11"
                                                    class="onoffswitch2-checkbox"
                                                />
                                                <label
                                                    for="myonoffswitch11"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Left Menu User Hide</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="checkbox"
                                                    name="onoffswitch3"
                                                    id="myonoffswitch9"
                                                    class="onoffswitch2-checkbox"
                                                />
                                                <label
                                                    for="myonoffswitch9"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swichermainleft">
                                    <h4>Body Skins</h4>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Body Light</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="checkbox"
                                                    name="onoffswitch3"
                                                    id="myonoffswitch3"
                                                    class="onoffswitch2-checkbox"
                                                />
                                                <label
                                                    for="myonoffswitch3"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Card Shadow None</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="checkbox"
                                                    name="onoffswitch3"
                                                    id="myonoffswitch4"
                                                    class="onoffswitch2-checkbox"
                                                />
                                                <label
                                                    for="myonoffswitch4"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="mr-auto"
                                                >Card Light</span
                                            >
                                            <div class="onoffswitch2">
                                                <input
                                                    type="checkbox"
                                                    name="onoffswitch3"
                                                    id="myonoffswitch5"
                                                    class="onoffswitch2-checkbox"
                                                />
                                                <label
                                                    for="myonoffswitch5"
                                                    class="onoffswitch2-label"
                                                ></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div
                                    class="swichermainleft border-top mt-2 text-center"
                                >
                                    <div class="p-3">
                                        <a
                                            href="https://laravel.spruko.com/flaira/"
                                            class="btn btn-primary btn-block mt-0"
                                            >View Demo</a
                                        >
                                        <a
                                            href="https://themeforest.net/item/flaira-bootstrap-html-admin-template/25365076?s_rank=1"
                                            class="btn btn-secondary btn-block"
                                            >Buy Now</a
                                        >
                                        <a
                                            href="https://themeforest.net/user/sprukosoft/portfolio"
                                            class="btn btn-info btn-block"
                                            >Our Portfolio</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Switcher -->

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img
                src="{{asset('images/loader.svg')}}"
                class="loader-img"
                alt="Loader"
            />
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">
                <!--APP-SIDEBAR-->
                @include('pages.admin.header')
                <!--APP-SIDEBAR-->

                <!--APP-SIDEBAR-->
                @include('pages.admin.left-menu')
                <!--/APP-SIDEBAR-->
             
                <!-- MobileHeader -->
                @include('pages.admin.mobile-header')
                <!-- /Mobile Header -->
                <!--app-content open-->
                
                <!-- CONTAINER END -->
            </div>

           
            <!-- FOOTER -->
            @include('pages.admin.footer')
            <!-- FOOTER END -->
        </div>

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JQUERY JS -->
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap/js/popper.min.js')}}"></script>

        <!-- SPARKLINE JS-->
        <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- CHART-CIRCLE JS-->
        <script src="{{asset('plugins/circle-progress/circle-progress.min.js')}}"></script>

        <!-- RATING STARJS -->
        <script src="{{asset('plugins/rating/jquery.rating-stars.js')}}"></script>

        <!-- SIDE-MENU JS-->
        <script src="{{asset('plugins/sidemenu/sidemenu.js')}}"></script>

        <!-- CUSTOM SCROLLBAR JS-->
        <script src="{{asset('plugins/p-scroll/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('plugins/p-scroll/p-scroll.js')}}"></script>
        <script src="{{asset('plugins/p-scroll/p-scroll-1.js')}}"></script>

        <!-- SIDEBAR JS -->
        <script src="{{asset('plugins/sidebar/sidebar.js')}}"></script>

        <!-- SELECT2 JS -->
        <script src="{{asset('plugins/select2/select2.full.min.js')}}"></script>

        <!-- Moment js-->
        <script src="{{asset('plugins/moment/moment.min.js')}}"></script>

        <!-- FLOT CHART JS -->
        <script src="{{asset('plugins/jquery.flot/jquery.flot.js')}}"></script>
        <script src="{{asset('plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('js/chart.flot.sampledata.js')}}"></script>

        <!-- PIETY CHART JS-->
        <script src="{{asset('plugins/peitychart/jquery.peity.min.js')}}"></script>
        <script src="{{asset('plugins/peitychart/peitychart.init.js')}}"></script>

        <!-- ECHART JS-->
        <script src="{{asset('plugins/echarts/echarts.js')}}"></script>

        <!-- CHARTJS CHART JS-->
        <script src="{{asset('plugins/chart/Chart.bundle.js')}}"></script>
        <script src="{{asset('plugins/chart/utils.js')}}"></script>

        <!-- DATEPICKER JS -->
        <script src="{{asset('plugins/date-picker/spectrum.js')}}"></script>
        <script src="{{asset('plugins/date-picker/jquery-ui.js')}}"></script>

        <!-- APEXCHART JS -->
        <script src="{{asset('js/apexcharts.js')}}"></script>

        <!-- INDEX JS -->
        <script src="{{asset('js/index1.js')}}"></script>

        <!-- Switcher js -->
        <script src="{{asset('switcher/js/switcher.js')}}"></script>

        <!-- CUSTOM JS -->
        <script src="{{asset('js/custom.js')}}"></script>
    </body>

    <!-- Mirrored from laravel.spruko.com/flaira/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 17:13:47 GMT -->
</html>