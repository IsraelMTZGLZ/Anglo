<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Classic One Page Template</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?=base_url('resources/assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('resources/assets/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('resources/assets/css/icofont.css');?>">
    <link rel="stylesheet" href="<?=base_url('resources/assets/css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?=base_url('resources/assets/css/animate.css');?>">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?=base_url('resources/assets/css/normalize.css');?>">
    <link rel="stylesheet" href="<?=base_url('resources/assets/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('resources/assets/css/responsive.css');?>">
    <script src="<?=base_url('resources/assets/js/vendor/modernizr-2.8.3.min.js');?>"></script>

	<link rel="stylesheet" href="<?=base_url('resources/assets/fontawesome/css/all.min.css');?>">
	<style>
	.social-bar {
		position: fixed;
		right: 0;
		top: 35%;
		font-size: 1.5rem;
		display: flex;
		flex-direction: column;
		align-items: flex-end;
		z-index: 100;
	}

	.icon {
		color: white;
		text-decoration: none;
		padding: .7rem;
		display: flex;
		transition: all .5s;
	}

	.icon-facebook {
		background: #2E406E;
	}

	.icon-twitter {
		background: #339DC5;
	}

	.icon-youtube {
		background: #E83028;
	}

	.icon-instagram {
		background: #3CDA5B;
	}

	.icon:first-child {
		border-radius: 1rem 0 0 0;
	}

	.icon:last-child {
		border-radius: 0 0 0 1rem;
	}

	.icon:hover {
		padding-right: 3rem;
		border-radius: 1rem 0 0 1rem;
		box-shadow: 0 0 .5rem rgba(0, 0, 0, 0.42);
	}
	</style>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--Boton redes sociales-->
<div class="social-bar">
    <a href="#" class="icon icon-facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="icon icon-twitter" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="#" class="icon icon-youtube" target="_blank"><i class="fab fa-youtube"></i></a>
    <a href="#" class="icon icon-instagram" target="_blank"><i class="fab fa-whatsapp"></i></a>
  </div>
