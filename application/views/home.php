<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs by jenar
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Ekschool is awesome</title>
    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
    <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
    <meta name="author" content="ThemeForces.com">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.css') ?>">

    <!-- Slider
    ================================================== -->
    <link href="<?php echo base_url('assets/css/owl.carousel.css') ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('assets/css/owl.theme.css') ?>" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css') ?>">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?php echo base_url('assets/js/modernizr.custom.js') ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url('assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js') ?>"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-about" class="page-scroll">About</a></li>
            <li><a href="#tf-team" class="page-scroll">Team</a></li>
            <li><a href="#tf-services" class="page-scroll">Services</a></li>
            <li><a href="#tf-contact" class="page-scroll">login</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Welcome on <strong><span class="color">My Exschool</span></strong></h1>
                <p class="lead">Persembahan terbaik <strong>Developer Indonesia</strong> untuk meningkatkan kualitas <strong>Dunia Pendidikan</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets/img/02.png') ?>" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4>About us</h4>
                            <h2>Some words <strong>about us</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro">My School is Awesome adalah sebuah aplikasi yang dibangun dengan tujuan yaitu dapat mempermudah pekerjaan dari sekolah serta pelatih ekstrakulikuler, selain itu juga mempermudah sosialisasi dengan antar departemen yang fungsiya. </p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>Membatu dunia pendidikan dalam mengelola ekstrakuliker</em>
                            </li>
                            
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Clients</strong> - <em>mempermudah client dalam mengelola, mengikuti dan mendapatkan informasi ekstrakulikuler</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Meet <strong>our team</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
                    <div class="item">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('assets/img/team/01.jpg') ?>" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Zardans Jenar</h3>
                                <p>Developer</p>
                                <p>Email : zardansjenar@gmail.com</p> 
                                <p>No Telp : +6285606984466</p>
                                <p>Line : zardans_jenar</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('assets/img/team/02.jpg') ?>" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Ilham Satrian</h3>
                                <p>Email : ilhamsatrian@gmail.com</p> 
                                <p>No Telp : +6285606984499</p>
                                <p>Line : zardans_jenar</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('assets/img/team/03.jpg') ?>" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Putri Cendikia</h3>
                                <p>Analysis</p>
                                <p>Email : ilhamsatrian@gmail.com</p> 
                                <p>No Telp : +6285606984499</p>
                                <p>Line : zardans_jenar</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('assets/img/team/04.jpg') ?>" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Isep Mumu</h3>
                                <p>Analysis</p>
                                 <p>Email : ilhamsatrian@gmail.com</p> 
                                <p>No Telp : +6285606984499</p>
                                <p>Line : zardans_jenar</p>
                            </div>
                        </div>
                    </div>

                    
                </div>
                
            </div>
        </div>
    </div>

    <!-- Services Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Take a look at <strong>our services</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em>Some features from this application extrakulikuler</em></small>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-desktop"></i>
                    <h4><strong>Web design</strong></h4>
                    <p>On Progress</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-mobile"></i>
                    <h4><strong>Mobile Apps</strong></h4>
                    <p>On Progress</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-camera"></i>
                    <h4><strong>Photography</strong></h4>
                    <p>Easy to get event photo</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-bullhorn"></i>
                    <h4><strong>Marketing</strong></h4>
                    <p>Easy to share school information and extrakulikuler information</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients Section
    ==========================================-->
    <div id="tf-clients" class="text-center">
        <div class="overlay">
            <div class="container">

                <div class="section-title center">
                    <h2>Some of <strong>our Ekschool</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div id="clients" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/client/01.png') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/client/02.png') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/client/03.png') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/client/04.png') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/client/05.png') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/client/06.png') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/client/07.png') ?>">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Login to <strong>User</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>My Ekschool is Awesome</em></small>            
                    </div>

                    <?php echo form_open('login/loginSiswa') ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nisn</label>
                                    <input type="text" class="form-control" id="nisn" name= "nisn" placeholder="Enter Nisn">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="password" name= "password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn tf-btn btn-default">Submit</button>
                    <?php echo form_close() ?>

                </div>
            </div>

        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2014. Designed by <a href="https://dribbble.com/shots/1817781--FREEBIE-Spirit8-Digital-agency-one-page-template">Robert Berki</a> and Coded by <a href="https://dribbble.com/jennpereira">Jenn Pereira</a></p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.1.11.1.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/SmoothScroll.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.isotope.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/owl.carousel.js') ?>"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js') ?>"></script>

  </body>
</html>