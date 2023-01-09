<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADMIN</title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('assets/shared/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('assets/shared/fonts/font-awesome.min.css') }}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{URL::asset('assets/backend/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet"/>
    <!--   Datetime -->
    <link rel="stylesheet" href="{{URL::asset('assets/backend/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{URL::asset('assets/shared/css/jquery-ui-1.12.1.css') }}">
    <link rel="stylesheet" href="{{URL::asset('assets/backend/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{URL::asset('assets/backend/js/select2/select2.min.css') }}">

    <!-- Custom Theme Style -->
    <link href="{{URL::asset('assets/backend/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset('assets/backend/css/style.css?v=') }}<?php echo time(); ?>" rel="stylesheet">
    <link href="{{URL::asset('assets/backend/css/typeaheadjs.css?v=') }}<?php echo time(); ?>" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets//backend/css/intlTelInput.min.css') }}">
    <!-- jQuery -->
    <script src="{{URL::asset('assets/backend/js/jquery.min.js') }}"></script>
    <script src="{{URL::asset('assets/backend/fckeditor/fckeditor.js') }}"></script>
    <script src="{{URL::asset('assets/backend/js/intlTelInput.min.js') }}"></script>
    <script src="{{URL::asset('assets/shared/js/jquery.validate.js') }}"></script>
    <script src="{{URL::asset('assets/shared/js/jquery-ui-1.12.1.min.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/backend/js/select2/select2.min.js') }}"></script>

</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <?php
                                // $auth = $this->session->get('auth');
                                // echo $auth["role"];
                                ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li>
                                    <a href="<?php
                                // echo $this->url->get("/logout");
                                ?>">
                                <i
                                                class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        @include('shared.left')

        @yield('content')

        <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-red">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Warning!</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" name="id"/>
                <p class="content-warning"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                <a class="btn btn-primary delete-all">Yes</a>
            </div>
        </div>
    </div>
</div>
<!-- footer content -->
<div id="loading" hidden style="position: fixed;z-index: 10000;top: 0px;left: 0px;width: 100%;height: 100%;background: #fff;filter: alpha(opacity=85);opacity: 1;background: rgba(255, 255,255,0);text-align: center; color:#f00;">
    <div style="background-color: #FDF7CC;border: 1px solid #FDC86C;border-radius: 4px;padding: 1px;margin: 20px auto;width: 50%;">
        <img src="{{URL::asset('assets/backend/img/waiting.gif') }}"
             alt='Processing'
             title='Processing'
             style="vertical-align:middle;position: relative;z-index: 10001;"/>. Please waiting for the system to run!
    </div>
</div>
<footer>
    <div class="pull-right">
        Copyright ©1997 - <?php echo date("Y", time()); ?> India
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>


<!-- Bootstrap -->
<script src="{{URL::asset('assets/shared/js/bootstrap.min.js') }}"></script>
<!--Datetime-->

<script type="text/javascript" src="{{URL::asset('assets/backend/js/jquery.timepicker.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{URL::asset('assets/backend/js/custom.min.js') }}"></script>
<script src="{{URL::asset('assets/backend/js/utils.js') }}?v=<?php echo time(); ?>"></script>
<script src="{{URL::asset('assets/backend/js/typeahead.bundle.js') }}"></script>
</body>
</html>
