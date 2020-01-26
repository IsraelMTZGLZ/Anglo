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

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

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
                        <form action="#">
                            <input type="search" class="form-control" placeholder="What do you want to know?">
                        </form>
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
                        <a class="navbar-brand" href="#home-area"><img src="<?=base_url('resources/assets/');?>images/logo.png" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav navbar-right help-menu">
                            <li><a href=""><i class="icofont icofont-user-alt-4"></i></a></li>
                            <li><a href="#search-box" data-toggle="collapse"><i class="icofont icofont-search-alt-2"></i></a></li>
                            <li class="select-cuntry">
                                <select name="counter" id="counter">
                                    <option value="ENG">ENG</option>
                                    <option value="BEN">BEN</option>
                                    <option value="ARA">ARA</option>
                                    <option value="ARG">ARG</option>
                                    <option value="CHV">CHV</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav primary-menu">
                            <li class="active"><a href="#home-area">Home</a></li>
                            <li><a href="#service-area">Services</a></li>
                            <li><a href="#portfolio-area">Portfolio</a></li>
                            <li><a href="#team-area">Team</a></li>
                            <li><a href="#price-area">Price</a></li>
                            <li><a href="#blog-area">Blog</a></li>
                            <li><a href="#contact-area">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Mainmenu-Area-/ -->


    <!--Header-Area-->
    <header class="header-area overlay" id="home-area">
        <div class="vcenter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="header-text">
                            <h2 class="header-title wow fadeInUp">We Are Provide Creative Business <span class="dot"></span></h2>
                            <div class="wow fadeInUp" data-wow-delay="0.5s"><q>We Mak Sure Best Business Solution For Our Client</q></div>
                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                <a href="#" class="bttn bttn-lg bttn-primary">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-Area-/-->


    <!-- About-Area -->
    <section class="section-padding" id="about-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <div class="page-title">
                        <h2 class="title wow fadeInUp">We Offer Quick &amp; Powerful Business Solution</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you.</p>
                        </div>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.7s">
                        <a href="#" class="bttn bttn-primary">Learn More</a>
                    </div>
                </div>
                <div class="hidden-xs col-sm-6 col-md-offset-1">
                    <img src="<?=base_url('resources/assets/images/about-image.png');?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area / -->



    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="video-box">
                        <img src="<?=base_url('resources/assets/images/video-image.png');?>" alt="">
                        <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video-bttn"><img src="<?=base_url('resources/assets/images/video-button.png');?>" alt=""></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 wow fadeInUp">
                    <div class="page-title">
                        <h2 class="title">Why Choose Us?</h2>
                        <ul class="tabs-list">
                            <li class="active"><a data-toggle="pill" href="#our_mission">Our Mission</a></li>
                            <li><a data-toggle="pill" href="#our_vission">Our Vission</a></li>
                            <li><a data-toggle="pill" href="#our_support">Our Support</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="our_mission" class="tab-pane fade in active">
                            <h4 class="upper thing">SINCE WE HAVE 25 YEARS </h4>
                            <h3 class="upper">EXPERIENCE IN THIS PASSION</h3>
                            <p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                            <br />
                            <a href="#" class="bttn bttn-sm bttn-primary">View More</a>
                        </div>
                        <div id="our_vission" class="tab-pane fade">
                            <h4 class="upper thing">SINCE WE HAVE 25 YEARS </h4>
                            <h3 class="upper">EXPERIENCE IN THIS PASSION</h3>
                            <p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                            <br />
                            <a href="#" class="bttn bttn-sm bttn-primary">View More</a>
                        </div>
                        <div id="our_support" class="tab-pane fade">
                            <h4 class="upper thing">SINCE WE HAVE 25 YEARS </h4>
                            <h3 class="upper">EXPERIENCE IN THIS PASSION</h3>
                            <p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                            <br />
                            <a href="#" class="bttn bttn-sm bttn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-padding" id="service-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="icofont icofont-idea"></i>
                        </div>
                        <h4>Unique Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="icofont icofont-code-alt"></i>
                        </div>
                        <h4>Clean Layout</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="icofont icofont-monitor"></i>
                        </div>
                        <h4>Well Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="1.2s">
                        <div class="box-icon">
                            <i class="icofont icofont-chart-bar-graph"></i>
                        </div>
                        <h4>Pro Developing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="1s">
                        <div class="box-icon">
                            <i class="icofont icofont-files"></i>
                        </div>
                        <h4>Well Documented</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="box-icon">
                            <i class="icofont icofont-money-bag"></i>
                        </div>
                        <h4>Quick Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Skill-Area -->
    <section class="section-padding gray-bg" id="skill-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <div class="page-title">
                        <h2 class="title wow fadeInUp">Our Professional Skill</h2>
                        <div class="wow fadeInUp">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look.</p>
                        </div>
                    </div>
                    <div class="skills skills1 row">
                        <!-- main skill No. 1 -->
                        <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="chart chart1 center" data-percent="95">
                                <span class="counter">95</span>
                            </div>
                            <h6>WebDesign</h6>
                        </div>
                        <!-- main skill No. 2 -->
                        <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="chart chart1 center" data-percent="85">
                                <span class="counter">85</span>
                            </div>
                            <h6>Coding</h6>
                        </div>
                        <!-- main skill No. 3 -->
                        <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="chart chart1 center" data-percent="90">
                                <span class="counter">90</span>
                            </div>
                            <h6>Developing</h6>
                        </div>
                        <!-- main skill No. 4 -->
                        <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="1.2s">
                            <div class="chart chart1 center" data-percent="95">
                                <span class="counter">95</span>
                            </div>
                            <h6>Java Script</h6>
                        </div>
                        <!-- main skill No. 4 -->
                        <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="1s">
                            <div class="chart chart1 center" data-percent="85">
                                <span class="counter">85</span>
                            </div>
                            <h6>Apps Design</h6>
                        </div>
                        <!-- main skill No. 4 -->
                        <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="chart chart1 center" data-percent="90">
                                <span class="counter">90</span>
                            </div>
                            <h6>Graphics Script</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-offset-1">
                    <img src="<?=base_url('resources/assets/images/skill-image.png');?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Skill-Area / -->





    <!-- Portfolio-Area -->
    <section class="section-padding" id="portfolio-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 class="title">Portfolio Project</h2>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- Mixitup controls -->
                    <ul class="filter-controls text-center">
                        <li class="active filter" data-filter="all">All</li>
                        <li class="active filter" data-filter=".graphics">Graphics</li>
                        <li class="filter" data-filter=".ux_ui">UI/UX</li>
                        <li class="filter" data-filter=".web_design">Web Design</li>
                        <li class="filter" data-filter=".coding">Coding</li>
                        <li class="filter" data-filter=".developing">Developing</li>
                        <li class="filter" data-filter=".photography">Photography</li>
                    </ul>
                </div>
            </div>
            <div class="row" id="filtering">
                <div class="col-xs-6 col-sm-4 col-md-3 mix graphics developing">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="<?=base_url('resources/assets/images/work-1.jpg');?>" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Print Template</h5>
                            <a href="images/work-1.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix ux_ui ">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="<?=base_url('resources/assets/images/work-2.jpg');?>" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Graphics Template</h5>
                            <a href="<?=base_url('resources/assets/images/work-2.jpg');?>" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix graphics ">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="<?=base_url('resources/assets/images/work-3.jpg');?>" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Web Template</h5>
                            <a href="images/work-3.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix ux_ui developing">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="<?=base_url('resources/assets/images/work-4.jpg');?>" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Developing</h5>
                            <a href="<?=base_url('resources/assets/images/work-4.jpg');?>" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix web_design photography">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="<?=base_url('resources/assets/images/work-5.jpg');?>" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Photography</h5>
                            <a href="images/work-5.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix coding">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="<?=base_url('resources/assets/images/work-6.jpg');?>" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Coding</h5>
                            <a href="<?=base_url('resources/assets/images/work-6.jpg');?>" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix web_design developing">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="<?=base_url('resources/assets/images/work-7.jpg');?>" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Web Desing</h5>
                            <a href="<?=base_url('resources/assets/images/work-7.jpg');?>" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix coding photography">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="<?=base_url('resources/assets/images/work-8.jpg');?>" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Coding</h5>
                            <a href="images/work-8.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-Area / -->



    <!-- Team-Area -->
    <section class="section-padding" id="team-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="text-center">
                        <h2 class="title">Our expert team</h2>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="<?=base_url('resources/assets/images/team-1.jpg');?>" alt="">
                        </div>
                        <div class="team-hover">
                            <h5 class="t_title">Roberto Peo</h5>
                            <span class="t_sub_title">SEO Expert</span>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="90" data-tooltip="true" data-label="Phototshop" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="70" data-tooltip="true" data-label="Indesign" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="50" data-tooltip="true" data-label="Illustrator" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class="team-social-menu">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-image">
                            <img src="<?=base_url('resources/assets/images/team-2.jpg');?>" alt="">
                        </div>
                        <div class="team-hover">
                            <h5 class="t_title">Jhon Doe</h5>
                            <span class="t_sub_title">Web Developer</span>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="90" data-tooltip="true" data-label="Phototshop" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="70" data-tooltip="true" data-label="Indesign" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="50" data-tooltip="true" data-label="Illustrator" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class="team-social-menu">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-image">
                            <img src="<?=base_url('resources/assets/images/team-3.jpg');?>" alt="">
                        </div>
                        <div class="team-hover">
                            <h5 class="t_title">Jakia Khan</h5>
                            <span class="t_sub_title">UI/UX Designer</span>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="90" data-tooltip="true" data-label="Phototshop" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="70" data-tooltip="true" data-label="Indesign" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="50" data-tooltip="true" data-label="Illustrator" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class="team-social-menu">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="<?=base_url('resources/assets/images/team-4.jpg');?>" alt="">
                        </div>
                        <div class="team-hover">
                            <h5 class="t_title">Jack kalis</h5>
                            <span class="t_sub_title">Programer</span>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="90" data-tooltip="true" data-label="Phototshop" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="70" data-tooltip="true" data-label="Indesign" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class='bar_group' data-max="100">
                                <div class=" bar_group__bar thick elastic" data-value="50" data-tooltip="true" data-label="Illustrator" data-show-values="true" data-unit="%"></div>
                            </div>
                            <div class="team-social-menu">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team-Area / -->



    <!-- Price-Area -->
    <section class="section-padding gray-bg" id="price-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h2 class="title">Pricing Plan</h2>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="price-tabs">
                        <li class="active"><a data-toggle="pill" href="#monthly">Monthly</a></li>
                        <li><a data-toggle="pill" href="#yearly">Yearly</a></li>
                    </ul>
                </div>
            </div>
            <div class="row prices tab-content">
                <div id="monthly" class="tab-pane fade in active">
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="price-box">
                            <h4>Basic</h4>
                            <h3 class="amount">&#36;10 /<span>Month</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="price-box active">
                            <h4>Premium</h4>
                            <h3 class="amount">&#36;50 /<span>Month</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="price-box">
                            <h4>Business</h4>
                            <h3 class="amount">&#36;80 /<span>Month</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
                        <div class="price-box">
                            <h4>Ultimate</h4>
                            <h3 class="amount">&#36;100 /<span>Month</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div id="yearly" class="tab-pane fade">
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="price-box">
                            <h4>Basic</h4>
                            <h3 class="amount">&#36;10 /<span>Year</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="price-box active">
                            <h4>Premium</h4>
                            <h3 class="amount">&#36;50 /<span>Year</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="price-box">
                            <h4>Business</h4>
                            <h3 class="amount">&#36;80 /<span>Year</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
                        <div class="price-box">
                            <h4>Ultimate</h4>
                            <h3 class="amount">&#36;100 /<span>Year</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Price-Area -->


    <!-- Blog-area -->
    <section class="section-padding" id="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 class="title">Latest Blog</h2>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 wow fadeInUp">
                    <div class="blog-box">
                        <div class="blog-image">
                            <img src="<?=base_url('resources/assets/images/blog-md-1.jpg');?>" alt="">
                        </div>
                        <div class="blog-details">
                            <h4><a href="#">Business Consultance Meetup, 10 Jan, 2016</a></h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="blog-lists">
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-list-image">
                                <img src="<?=base_url('resources/assets/images/blog-th-1.jpg');?>" alt="">
                            </div>
                            <h5><a href="#">On Graphics Design Post</a></h5>
                            <div class="blog-list-meta"> <i class="icofont icofont-ui-calendar"></i> 16 JUNE 2016</div>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-list-image">
                                <img src="<?=base_url('resources/assets/images/blog-th-2.jpg');?>" alt="">
                            </div>
                            <h5><a href="#">On Graphics Design Post</a></h5>
                            <div class="blog-list-meta"> <i class="icofont icofont-ui-calendar"></i> 16 JUNE 2016</div>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-list-image">
                                <img src="<?=base_url('resources/assets/images/blog-th-3.jpg');?>" alt="">
                            </div>
                            <h5><a href="#">On Graphics Design Post</a></h5>
                            <div class="blog-list-meta"> <i class="icofont icofont-ui-calendar"></i> 16 JUNE 2016</div>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-area / -->


    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row counters">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="count-icon">
                            <i class="icofont icofont-bag-alt"></i>
                        </div>
                        <span class="count_title">Project Complete</span>
                        <h2 class="count">1172</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="count-icon">
                            <i class="icofont icofont-emo-simple-smile"></i>
                        </div>
                        <span class="count_title">Happy Client’S</span>
                        <h2 class="count">1000</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="count-icon">
                            <i class="icofont icofont-businessman"></i>
                        </div>
                        <span class="count_title">Total Client’s</span>
                        <h2 class="count">1200</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="count-icon">
                            <i class="icofont icofont-money"></i>
                        </div>
                        <span class="count_title">Wining Award</span>
                        <h2 class="count">1172</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact-Area -->
    <section class="section-padding" id="contact-area">
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <h3 class="bar-title">Contact Now</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="contact-form">
                            <form action="process.php" id="contact-form" method="post">
                                <div class="form-double">
                                    <input type="text" id="form-name" name="form-name" placeholder="Full Name" required="required">
                                    <input type="number" placeholder="Phone Number">
                                </div>
                                <div class="form-double">
                                    <input type="email" name="form-email" name="email" id="form-email" placeholder="Your Email" required="required">
                                    <input type="text" name="form-subject" id="form-subject" placeholder="Subject" required="required">
                                </div>
                                <textarea name="form-message" id="message" id="form-message" rows="5" required="required" placeholder="Message"></textarea>
                                <button class="bttn bttn-primary">Send Now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="contact-info">
                            <ul class="info">
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-social-google-map"></i>
                                    </span> 160 L ink Road <br /> Dhaka-1216, Bangladesh
                                </li>
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-ui-cell-phone"></i>
                                    </span> (+00) 99 33 247
                                </li>
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-envelope"></i>
                                    </span> Info@fabiocode.com
                                </li>
                            </ul>
                            <div class="social-menu-2">
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-skype"></i></a>
                                <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-Area / -->
    <div id="maps"></div>


    <!-- Footer-Area -->
    <footer class="footer-area">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <div class="footer-text">
                            <h4 class="upper">Classic</h4>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                            <div class="social-menu">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 col-md-offset-1">
                        <div class="footer-single">
                            <h4 class="upper">News</h4>
                            <ul>
                                <li><a href="#">Subsciption</a></li>
                                <li><a href="#">New Apps</a></li>
                                <li><a href="#">Download now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">Company</h4>
                            <ul>
                                <li><a href="#">Screenshot</a></li>
                                <li><a href="#">Fetures</a></li>
                                <li><a href="#">Price</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">Resources</h4>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Privacy &amp; Term</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">Solutions</h4>
                            <ul>
                                <li><a href="#">Bug Fixing</a></li>
                                <li><a href="#">Upgrade</a></li>
                                <li><a href="#">Malware Protect</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icofont icofont-heart-alt" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer-Area / -->


    <!--Vendor-JS-->
    <script src="<?=base_url('resources/assets/js/vendor/jquery-1.12.4.min.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/vendor/bootstrap.min.js');?>"></script>
    <!--Plugin-JS-->
    <script src="<?=base_url('resources/assets/js/owl.carousel.min.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/appear.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/bars.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/waypoints.min.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/counterup.min.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/easypiechart.min.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/mixitup.min.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/contact-form.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/scrollUp.min.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/magnific-popup.min.js');?>"></script>
    <script src="<?=base_url('resources/assets/js/wow.min.js');?>"></script>
    <!--Main-active-JS-->
    <script src="<?=base_url('resources/assets/js/main.js');?>"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZ3vJtdK6aKAEWBovZFe4YKj1SGo9V20&callback=initMap"></script>
    <script src="<?=base_url('resources/assets/js/maps.js');?>"></script>
</body>

</html>
