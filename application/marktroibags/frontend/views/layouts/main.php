<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\DashboardAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
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

        <!-- google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500|Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,100|Titillium+Web:400,200,300italic,300,200italic' rel='stylesheet' type='text/css'>

        <script src="assets/js/modernizr.js"></script>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
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
            <div class="bottom">
                <a data-scroll href="#navigation" class="scrollDown animated pulse" id="scrollToContent"><i class="pe-7s-angle-down-circle pe-va"></i></a>
            </div>
        </header>

        <!-- Navigation area -->
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
                                 <div class="arrow-up"></div>
                                 <ul>
                                     <li><a data-scroll href="#body">Home <i class="pe-7s-home"></i></a><span class="menu-effect"></span></li>
                                     <li><a data-scroll href="#services">Service <i class="pe-7s-config"></i></a><span class="menu-effect"></span></li>
                                     <li><a data-scroll href="#portfolio">Portfolio <i class="pe-7s-glasses"></i></a><span class="menu-effect"></span></li>
                                     <li><a data-scroll href="#testimonial">Testimonial <i class="pe-7s-comment"></i><span class="menu-effect"></span></a></li>
                                     <li><a data-scroll href="#contact">Contact <i class="pe-7s-help1"></i></a><span class="menu-effect"></span></li>
                                 </ul>
                             </div>
                        </div>
                    </div>

                </div>
            </div>            
        </section>
        
        <!-- Content Area -->

       <!-- Portfolio Area -->

        <section id="portfolio" class="portfolio-area">
            <div class="container">
                <h2 class="block_title">Our Products</h2>
                <div class="row port cs-style-3">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <center><img src="assets/images/p1.jpg" alt="img04"></center>
                            <figcaption>
                                <h3>Settings</h3>
                                <span>Jacob Cummings</span>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/p2.jpg" alt="img01">
                            <figcaption>
                                <h3>Camera</h3>
                                <span>Jacob Cummings</span>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/p3.jpg" alt="img02">
                            <figcaption>
                                <h3>Music</h3>
                                <span>Jacob Cummings</span>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/p4.jpg" alt="img04">
                            <figcaption>
                                <h3>Settings</h3>
                                <span>Jacob Cummings</span>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/p5.jpg" alt="img01">
                            <figcaption>
                                <h3>Camera</h3>
                                <span>Jacob Cummings</span>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/p6.jpg" alt="img02">
                            <figcaption>
                                <h3>Music</h3>
                                <span>Jacob Cummings</span>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12">
                        <div class="btn-center"><a href="#" class="big button">View all</a></div>
                    </div>
                </div>
            </div><!-- container -->
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

        <section id="contact" class="mapWrap">
            <div id="googleMap" style="width:100%;"></div>
            <div id="contact-area">
                <div class="container">
                    <h2 class="block_title">Hey !!!</h2>
                    <div class="row">
                        <div class="col-xs-12">
                        </div>
                        <div class="col-sm-6">
                            <div class="moreDetails">
                                <h2 class="con-title">More About me</h2>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum animi repudiandae nihil aspernatur repellat temporibus doloremque sint ea laboriosam, excepturi iure inventore rerum voluptatibus, suscipit totam, sit necessitatibus. Rerum, blanditiis. </p>
                                <ul class="address">
                                    <li><i class="pe-7s-map-marker"></i><span>1600 Pennsylvania Ave NW,<br>Washington, DC 20500,<br>United States</span></li>
                                    <li><i class="pe-7s-mail"></i><span>example@gmail.com</span></li>
                                    <li><i class="pe-7s-phone"></i><span>+1-202-555-0144</span></li>
                                    <li><i class="pe-7s-global"></i><span><a href="#">www.themewagon.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="con-title">Drop us a line</h2>
                            <form role="form">
                              <div class="form-group">
                                <input type="text" class="form-control" id="user_name" placeholder="Enter your name">
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control" id="your_email" placeholder="Enter your email">
                              </div>
                              <div class="form-group">
                                <textarea name="InputMessage" id="user_message" class="form-control" rows="5" required></textarea>
                              </div>

                              <button type="submit" class="btn medium">Let us know</button>
                            </form>   
                        </div>
                    </div>
                </div><!-- container -->
            </div><!-- contact-area -->
            <div id="social">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="scoialinks">
                                <li class="normal-txt">Find me on</li>
                                <li class="social-icons"><a class="facebook" href="#"></a></li>
                                <li class="social-icons"><a class="twitter" href="#"></a></li>
                                <li class="social-icons"><a class="linkedin" href="#"></a></li>
                                <li class="social-icons"><a class="google-plus" href="#"></a></li>
                                <li class="social-icons"><a class="wordpress" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- social -->
        </section><!-- contact -->

        <!-- Footer Area -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright">� Copyright 2014 <a href="http://wwww.technextit.com" target="_blank">Technext</a></p>
                    </div>
                    <div class="col-sm-6">
                        <p class="designed">Designed and Developed by <a href="http://themewagon.com" target="_blank">Themewagon</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Necessery scripts -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="assets/js/jquery.actual.min.js"></script>
        <script src="assets/js/smooth-scroll.js"></script>
        <script src="assets/js/owl.carousel.js"></script>
        <script src="assets/js/script.js"></script>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
