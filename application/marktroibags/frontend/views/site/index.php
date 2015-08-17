<?php
/* @var $this yii\web\View */
$this->title = 'Marktroi Bags';

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use kartik\dropdown\DropdownX;
?>

<html class="no-js">
<head>
	<title>Marktroi Bags</title>
		<!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font_icon/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="assets/font_icon/css/helper.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">


        <!-- google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500|Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,100|Titillium+Web:400,200,300italic,300,200italic' rel='stylesheet' type='text/css'>

        <script src="assets/js/modernizr.js"></script>
</head>

<body>
    <div class="wrap">
       <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header area -->
        <header id="header">
            <div class="center text-center">
                <h1 class="bigheadline">Marktroi Bags</h1>
               <!-- <h4 class="subheadline">The Worst Front End Developer</h4> -->
            </div>
            
        </header>

        <!-- Navigation area -
        <section id="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="logo"><a data-scroll href="#body" class="logo-text">Marktroi Bags</a></div>
                    </div>
                    <div class="col-xs-6">
                        <div class="nav">
                            <a href="#" data-placement="bottom" title="Menu" class="menu" data-toggle="dropdown"><i class="pe-7s-menu"></i></a>
                             <div class="dropdown-menu">
                                 
                             </div>
                        </div>
                    </div>

                </div>
            </div>            
        </section>
        
        <!-- Content Area -->

       <!-- Portfolio Area 

        <section id="portfolio" class="portfolio-area">
            <div class="container">
                <h2 class="block_title">Our Products</h2>
                <div class="row port cs-style-3">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <center><img src="assets/images/p1.jpg" alt="img04"></center>
                            <figcaption>
                                <h3>Backpack</h3>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/p2.jpg" alt="img01">
                            <figcaption>
                                <h3>Backpack</h3>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/p3.jpg" alt="img02">
                            <figcaption>
                                <h3>Duffel Bag</h3>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/p4.jpg" alt="img04">
                            <figcaption>
                                <h3>Sehoulder Bag</h3>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/p5.jpg" alt="img01">
                            <figcaption>
                                <h3>Purse</h3>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/p6.jpg" alt="img02">
                            <figcaption>
                                <h3>Laptop</h3>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12">
                        <div class="btn-center"><a href="product/index" class="big button">View all</a></div>
                    </div>
                </div>
            </div><!-- container 
        </section><!-- portfolio -->

        <!-- Testimonial Area

        <section id="testimonial" class="testimonial-area">
            <div class="container">
                <h2 class="block_title">Testimonials</h2>
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                    <div id="testimonial-container" class="col-xs-12">
                        <div class="testimonila-block">
                            <img src="assets/images/testimonial.jpg" alt="clients" class="selfshot">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem sed mollitia illum! Molestiae dignissimos, hic dolorem et eius ut nobis. Corrupti totam amet aperiam aut voluptate nobis dolor at soluta.</p>
                            <strong>Monir Hossain</strong>
                            <br>
                            <small>C.E.O</small>
                        </div>
                        <div class="testimonila-block">
                            <img src="assets/images/testimonial2.jpg" alt="clients" class="selfshot">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem sed mollitia illum! Molestiae dignissimos, hic dolorem et eius ut nobis. Corrupti totam amet aperiam aut voluptate nobis dolor at soluta.</p>
                            <strong>Nur Ul Hossain</strong>
                            <br>
                            <small>Project Manager</small>
                        </div>
                        <div class="testimonila-block">
                            <img src="assets/images/testimonial3.jpg" alt="clients" class="selfshot">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem sed mollitia illum! Molestiae dignissimos, hic dolorem et eius ut nobis. Corrupti totam amet aperiam aut voluptate nobis dolor at soluta.</p>
                            <strong>Hossain Abrar</strong>
                            <br>
                            <small>Developer</small>
                        </div>
                    </div>
                </div>
            </div><!-- container
        </section> testimonial -->

        <!-- Contact Area -->

        

        <!-- Footer Area 

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright">© Copyright 2015 <a href="http://wwww.technextit.com" target="_blank">Marktroi Bags</a></p>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer Area -->

        <!-- Necessery scripts -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="assets/js/jquery.actual.min.js"></script>
        <script src="assets/js/smooth-scroll.js"></script>
        <script src="assets/js/owl.carousel.js"></script>
        <script src="assets/js/script.js"></script>
    </div>
</body>

</html>
