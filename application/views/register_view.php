<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=base_url('resources/register/fonts/material-icon/css/material-design-iconic-font.min.css');?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url('resources/register/css/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('resources/register/Button/style.css');?>">
		
	<!-- bootstrap -->
	<link href="<?=base_url('resources/dashboard/source/assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
	
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
			width: 40%;
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

    <div class="main">

        <section class="card" style="width: 70%;margin-left: 15%">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
						<p class="text-center font-italic" style="color: black;">Create with your social media account</p>
						<div class="row" style="margin-left: 10px;margin-right: 10px;margin-bottom: 15px;">
							<div class="col-6">
								<a href="#" class="btn btn-danger btn-block"><i class="fab fa-google"></i>&nbsp; Google</a>
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-primary btn-block"><i class="fab fa-facebook-f"></i>&nbsp; Facebook</a>
							</div>
						</div>
                        <div class="form-group buttonOne" style="margin-top: 10px">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?=base_url('index.php/')?>Login" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?=base_url('resources/register/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?=base_url('resources/register/js/main.js');?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
