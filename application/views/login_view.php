<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Login</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="<?=base_url('resources/dashboard/source/dark/fonts/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?=base_url('resources/dashboard/source/assets/plugins/iconic/css/material-design-iconic-font.min.css');?>">
	<!-- bootstrap -->
	<link href="<?=base_url('resources/dashboard/source/assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="<?=base_url('resources/dashboard/source/assets/css/pages/extra_pages.css?');?>">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?=base_url('resources/dashboard/source/assets/img/favicon.ico');?>" />

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
			width: 52%;
		}

		.icon-facebook {
			background: #2E406E;
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
			width: 100%
		}

		.icon:hover .disable{
			visibility: visible;
		}
		.disable{
			visibility: hidden;
		}

	</style>
</head>

<body>

	<div class="social-bar">
		<a style="background: <?php if($this->session->userdata('site_lang') == 'spanish') echo 'red"';?>" href="<?=base_url('index.php/');?>LanguageSwitcher/switchLang/spanish" class="icon icon-facebook"><img src="<?=base_url('resources/assets/');?>images/mexico.png">&nbsp;&nbsp;<p class="disable" style="color: white;"><?=$this->lang->line('spanish');?></p></a>
		<a style="background: <?php if($this->session->userdata('site_lang') == 'english') echo 'red"'; ?>" href="<?=base_url('index.php/');?>LanguageSwitcher/switchLang/english" class="icon icon-instagram"><img src="<?=base_url('resources/assets/');?>images/bandera.png">&nbsp;&nbsp;<p class="disable" style="color: white;"><?=$this->lang->line('english');?></p></a>
	</div>

	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">


				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<a href="<?=base_url('index.php/');?>Home" data-toggle="tooltip" data-placement="top" title="Go to home">
							<img alt="" src="<?=base_url('resources/register/images/angloLogo.png');?>">
						</a>
					</span>
					
					<span class="login100-form-title p-b-34 p-t-27">
						Sign in
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" placeholder="Username" name="username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<p class="text-center font-italic" style="color: white;">Login with your social media account</p>
					<div class="row" style="margin-left: 10px;margin-right: 10px;margin-bottom: 15px;">
						<div class="col-6">
							<a href="#" class="btn btn-danger btn-block"><i class="fab fa-google"></i>&nbsp; Google</a>
						</div>
						<div class="col-6">
							<a href="#" class="btn btn-primary btn-block"><i class="fab fa-facebook-f"></i>&nbsp; Facebook</a>
						</div>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="forgot_password.html">
							Forgot Password?
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="<?=base_url('resources/dashboard/source/assets/plugins/jquery/jquery.min.js');?>"></script>
	<!-- bootstrap -->
	<script src="<?=base_url('resources/dashboard/source/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
	<script src="<?=base_url('resources/dashboard/source/assets/js/pages/extra-pages/pages.js');?>"></script>
	<!-- end js include path -->
	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});
	</script>
</body>

</html>
