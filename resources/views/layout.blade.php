<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event360</title>
    <link type="text/css" href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="/css/theme.css" rel="stylesheet">
    <link type="text/css" href="/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <script src="/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/dist/sweetalert.css">
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i>
            </a>

            <a class="brand" href="index.html">
                Event360
            </a>

            <div class="nav-collapse collapse navbar-inverse-collapse">
                <ul class="nav nav-icons">
                    <li class="active"><a href="#">
                            <i class="icon-envelope"></i>
                        </a></li>
                    <li><a href="#">
                            <i class="icon-eye-open"></i>
                        </a></li>
                    <li><a href="#">
                            <i class="icon-bar-chart"></i>
                        </a></li>
                </ul>

                <form class="navbar-search pull-left input-append" action="#">
                    <input type="text" class="span3">
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                </form>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->



<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">

                    <ul class="widget widget-menu unstyled">
                        <li class="active">
                            <a href="/">
                                <i class="menu-icon icon-dashboard"></i>
                                Kontrolna ploca
                            </a>
                        </li>
                        @if (Auth::check())
                        <li>
                            <a href="/events/create">
                                <i class="menu-icon icon-file"></i>
                                Kreiraj dogadaj
                            </a>
                        </li>
                        <li>
                            <a href="/events/">
                                <i class="menu-icon icon-inbox"></i>
                                Popis dogadaja
                            </a>
                        </li>

                        <li>
                            <a href="prodaja/statistike">
                                <i class="menu-icon icon-tasks"></i>
                                Statistike
                            </a>
                        </li>
                        @endif (Auth::check())
                    </ul><!--/.widget-nav-->
                    @if (Auth::check())
                        <ul class="widget widget-menu unstyled">
                            <li><a href="/ticket"><i class="menu-icon icon-barcode"></i> Provjera ulaznica </a></li>
                        </ul><!--/.widget-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li><a href="/auth/logout"><i class="menu-icon icon-signout"></i> Odjava </a></li>
                    </ul><!--/.widget-nav-->

                    @endif (Auth::check())


                    @unless (Auth::check())
                        <ul class="widget widget-menu unstyled">
                            <li><a href="/auth/register"><i class="menu-icon icon-user"></i> Register </a></li>
                            <li><a href="/auth/login"><i class="menu-icon icon-lock"></i> Login </a></li>
                        </ul><!--/.widget-nav-->
                        @endunless


                </div><!--/.sidebar-->
            </div><!--/.span3-->


            <div class="span9">
                @yield('above')

                <div class="content">

                    @yield('above')

                    <div class="module">
                        <div class="module-head">
                            <h3>@yield('title')</h3>
                        </div>
                        <div class="module-body">

                            @yield('content')

                        </div>


                    </div>

                    @yield('below')

                </div><!--/.content-->
            </div><!--/.span9-->
        </div>
    </div><!--/.container-->
</div><!--/.wrapper-->

<div class="footer">
    <div class="container">


        <b class="copyright">&copy; 2015 ToniDalic.com // Event360.me </b> All rights reserved.
    </div>
</div>

<script src="/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/scripts/flot/jquery.flot.js" type="text/javascript"></script>

@include('flash')


</body>