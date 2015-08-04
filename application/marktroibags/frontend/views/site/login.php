<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
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
	<section id="register" class="mapWrap">
            <div id="googleMap" style="width:100%;"></div>
            <div id="contact-area">
                <div class="container">
                    <h2 class="block_title">Login</h2>
                    <div class="row">
                        <div class="col-xs-12">
                        </div>
                       <center>
                            
							<h3>Please fill out the following fields to login:</h3>
							</br>
                            <form role="form">
                              <div class="form-group">
                                <input type="text" class="form-control" id="user_name" placeholder="Username">
                              </div>
							  <div class="form-group">
                                <input type="text" class="form-control" id="password" placeholder="Password">
                              </div>
							  </br>
                              <div class="form-group">
                                <input type="checkbox" class="form-control" id="your_email"><h4>Remember Me</h4>
                              </div>
							  <h4>If you forgot your password you can <a href="request-password-reset">reset it.</h4>
							  </br>
							  
                              <button type="submit" class="btn medium">Login</button>
                            </form>
						</center>
                    </div>
                </div><!-- container -->
            </div><!-- contact-area -->
        </section>
			 <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright">© Copyright 2015 <a href="http://wwww.technextit.com" target="_blank">Marktroi Bags</a></p>
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

</body>

</html>