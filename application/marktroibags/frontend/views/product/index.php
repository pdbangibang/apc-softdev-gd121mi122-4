<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\user;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Marktroi Bags';
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
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


        <!-- google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500|Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,100|Titillium+Web:400,200,300italic,300,200italic' rel='stylesheet' type='text/css'>

        <script src="assets/js/modernizr.js"></script>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
		<section id="portfolio" class="portfolio-area">
            <div class="container">
                <h2 class="block_title">Products</h2>
                <div class="row port cs-style-3">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Helly Hansen Dublin Backpack.jpg" alt="img04">
                            <figcaption>
                                <h3>Helly Hansen Dublin Backpack</h3>
								</br>
								</br>
                                <a href="view/6" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Herschel Retreat Backpack - Navy.jpg" alt="img01">
                            <figcaption>
                                <h3>Herschel Retreat Backpack - Navy</h3>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Mi-Pac Classic Backpack - Navy.jpg" alt="img02">
                            <figcaption>
                                <h3>Mi-Pac Classic Backpack - Navy</h3>
                                <a href="" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Mi-Pac Native Backpack.jpg" alt="img04">
                            <figcaption>
                                <h3>Mi-Pac Native Backpack</h3>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Osprey Farpoint 40 Backpack.jpg" alt="img01">
                            <figcaption>
                                <h3>Osprey Farpoint 40 Backpack</h3>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Vans Deana li Backpack.jpg" alt="img02">
                            <figcaption>
                                <h3>Vans Deana li Backpack</h3>
                                <a href="#" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    
                </div>
            </div><!-- container -->
        </section><!-- portfolio -->
		<!--
	 <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright">© Copyright 2015 <a href="http://wwww.technextit.com" target="_blank">Marktroi Bags</a></p>
                    </div>
                </div>
            </div>
        </footer> -->
		
			<script type="text/javascript">
				var buttons = $("#buttons").find("a");
				$("buttons").click(function() {
					   var id = $(this).attribute("id");
					   $("pages id").css("display", "none");
					   $("pages id:eq("+id+")").css("display", "block");
				});
			</script>

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
