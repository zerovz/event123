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
<body OnLoad="document.getElementById('barcode').focus();">
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i>
            </a>

            <a class="brand" href="index.php">
                Event360
            </a>

            <div class="nav-collapse collapse navbar-inverse-collapse">

                <ul class="nav pull-right">

                    <li><a href="/">@yield('title')</a></li>

                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->



<div class="wrapper">
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</div><!--/.wrapper-->

<div class="footer">
    <div class="container">


        <b class="copyright">&copy; 2015 Event360.me</b> All rights reserved.
    </div>
</div>
<script src="/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
@include('flash')
</body>