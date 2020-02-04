<body data-spy="scroll" data-target=".mainmenu-area">
    <!--Preloader-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Mainmenu-Area -->
    <nav class="navbar mainmenu-area" data-spy="affix" data-offset-top="197">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="search-box" class="collapse">
						<script async src="https://cse.google.com/cse.js?cx=001441891157965034420:x3ebhsexy6b"></script>
						<div class="gcse-search"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="navbar-header smoth">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#home-area" style="margin-top: -30px;filter: saturate(370%);"><img src="https://www.anglolatinoedu.com/wp-content/uploads/2019/11/LOGOTIPO-AngloLatino2.png" width="100" height="100"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav navbar-right help-menu">
                            <li><a href="<?=base_url('index.php/');?>Login"><i class="icofont icofont-user-alt-4"></i></a></li>
                            <li><a href="#search-box" data-toggle="collapse"><i class="icofont icofont-search-alt-2"></i></a></li>
                            <li class="select-cuntry">
							<div class="dropdown">
								<button class="dropbtn"><img src="<?=base_url('resources/assets/');?>images/planeta-tierra.png"></button>
								<div class="dropdown-content">
									<a style="background: <?php if($this->session->userdata('site_lang') == 'english') echo 'red"'; ?>" href="<?=base_url('index.php/');?>LanguageSwitcher/switchLang/english" class="test"><img src="<?=base_url('resources/assets/');?>images/bandera.png">&nbsp;&nbsp;<?=$this->lang->line('english');?></a>
									<a style="background: <?php if($this->session->userdata('site_lang') == 'spanish') echo 'red"';?>" href="<?=base_url('index.php/');?>LanguageSwitcher/switchLang/spanish"><img src="<?=base_url('resources/assets/');?>images/mexico.png">&nbsp;&nbsp;<?=$this->lang->line('spanish');?></a>
								</div>
							</div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav primary-menu">
                            <li class="<?=@$this->session->flashdata('activo')=='home' ? 'active' : '' ?>"><a href="<?=base_url('index.php/');?>Home"><?=$this->lang->line('home');?></a></li>
                            <li class="<?=@$this->session->flashdata('activo')=='ofertaEducativa' ? 'active' : '' ?>"><a href="<?=base_url('index.php/');?>Oferta_Educativa"><?=$this->lang->line('educative_offer');?></a></li>
                            <li><a href="#portfolio-area">Becas</a></li>
                            <li><a href="<?=base_url('index.php/');?>Register">Contacto</a></li>
                            <li><a href="#blog-area">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Mainmenu-Area-/ -->
