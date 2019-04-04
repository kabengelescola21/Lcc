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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

    <script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = -11.6908;
			var lon = 27.5046;
			var macarte = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
	</script>
	<style type="text/css">
		#map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
			height:100%;
		}
	</style>
    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
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
                    <li class="active"><a href="#home">Acceuil</a></li>
                    <li><a href="#about">A propos</a></li>
                    <li><a href="#schedule">Horraires</a></li>
                    <li><a href="#sponsors">Sponsors</a></li>
                    <li><a href="#speakers">Comédiens</a></li>
                    <li><a href="#price">Prix</a></li>
                    <li><a href="#location">Localisation</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
            </div>
        </div>
    </header>
    <!-- /HEADER -->