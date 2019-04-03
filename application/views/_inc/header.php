<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>lcc</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="<?= base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/css/theme.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/theme-red-1.css" rel="stylesheet" id="theme-config-link">
    <link href="<?= base_url(); ?>assets/css/custom.css" rel="stylesheet">

    <link type="text/css" media="screen" rel="stylesheet" href="<?= base_url(); ?>assets/css/awwwards.css" />
    <link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.css" />

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->

    <style>
        #my_osm_widget_map { /* use the same name as <div id=""> */
        width: 100%; /* important! if you need full width display */
        height: 400px;
        margin: 0;
        border-radius: 5px;
        /* ... */
}
    </style>
</head>
<body id="home" class="wide body-light">

<div id="awwwards" class="honorable black left">
<a href="http://awwwards.com/best-websites/im-event-event-landing-page/" target="_blank">Awwwards</a>
</div>

<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Wrap all content -->
<div class="wrapper">

    <!-- HEADER -->
    <header class="header fixed">
        <div class="container">
            <div class="header-wrapper clearfix">

            <!-- Logo -->
            <div class="logo">
                <a href="#home" class="scroll-to">
                    <span class="fa-stack">
                        <i class="fa logo-hex fa-stack-2x"></i>
                        <i class="fa logo-fa fa-map-marker fa-stack-1x"></i>
                    </span>
                    lcc
                </a>
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div id="mobile-menu"></div>
            <nav class="navigation closed clearfix">
                <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                <ul class="sf-menu nav">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#schedule">Schedule</a></li>
                    <li><a href="#sponsors">Sponsors</a></li>
                    <li><a href="#speakers">Speakers</a></li>
                    <li><a href="#price">Price</a></li>
                    <li><a href="#location">Localisation</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->

            </div>
        </div>
    </header>
    <!-- /HEADER -->