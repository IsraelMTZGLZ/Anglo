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
    <title>Register</title>
    <!-- Place favicon.ico in the root directory -->


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
    <!-- <section class="section-padding" id="about-area" >
        <div class="container" >
            <div class="row">

                <div class="hidden-xs col-sm-6 col-md-offset-1" align="center">
                    <img src="<?=base_url('resources/assets/images/about-image.png');?>" alt="">
                </div>
        </div>
    </section> -->


    <section class="section-padding" id="about-area">
      <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <div class="page-title">
                      <h3 class="bar-title">Contact Now</h3>
                  </div>
              </div>
          </div>
          <div class="row">  
              <div class="col-xs-12 col-md-12">
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
                          <div class="form-double">
                              <input type="email" name="form-email" name="email" id="form-email" placeholder="Your Email" required="required">
                              <input type="text" name="form-subject" id="form-subject" placeholder="Subject" required="required">
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
              <!-- <div class="col-xs-12 col-md-4">
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
              </div> -->
          </div>
      </div>
    </section>

<hr>

</body>

</html>
