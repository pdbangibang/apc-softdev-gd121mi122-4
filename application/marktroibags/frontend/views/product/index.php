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
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>


        <!-- google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500|Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,100|Titillium+Web:400,200,300italic,300,200italic' rel='stylesheet' type='text/css'>

        <script src="assets/js/modernizr.js"></script>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
		<section id="portfolio" class="portfolio-area">
            <div class="container fontpro">
                <h2 class="block_title">Products</h2>
				<h3><a href="#backpacks">BACKPACKS</a>|<a href="#clutch">CLUTCH</a>|<a href="#duffel">DUFFEL</a>|<a href="#laptop">LAPTOP</a>|
				<a href="#purse">PURSE</a>|<a href="#shoulderbag">SHOULDER BAG</a>|<a href="#sportstravel">SPORTS TRAVEL</a></h3>
				</br>
				<div id="backpacks">
				<h2>B A C K P A C K</h2>
				</br>
                <div class="row port cs-style-3 container" id="main-content">
				<div class="row">
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
                                <a href="view/7" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Mi-Pac Classic Backpack - Navy.jpg" alt="img02">
                            <figcaption>
                                <h3>Mi-Pac Classic Backpack - Navy</h3>
                                <a href="view/8" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Mi-Pac Native Backpack.jpg" alt="img04">
                            <figcaption>
                                <h3>Mi-Pac Native Backpack</h3>
                                <a href="view/9" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Osprey Farpoint 40 Backpack.jpg" alt="img01">
                            <figcaption>
                                <h3>Osprey Farpoint 40 Backpack</h3>
                                <a href="view/10" class="button" >Take a look</a>
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Vans Deana li Backpack.jpg" alt="img02">
                            <figcaption>
                                <h3>Vans Deana li Backpack</h3>
                                <a href="view/11" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
					</div>
                </div>
			</div>
			
			</br>
			
			<div id="clutch">
			<h2>C L U T C H</h2>
				</br>
                <div class="row port cs-style-3 container" id="main-content">
				<div class="row" id="clutch">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/French Connection Silva Bag.jpg" alt="img04">
                            <figcaption>
                                <h3>French Connection Silva Bag</h3>
								</br>
								</br>
                                <a href="view/12" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Lacoste Clutch Bag.jpg" alt="img01">
                            <figcaption>
                                <h3>Lacoste Clutch Bag</h3>
                                <a href="view/16" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Maison Scotch Batik Bag.jpg" alt="img02">
                            <figcaption>
                                <h3>Maison Scotch Batik Bag</h3>
                                <a href="view/17" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Samsoe & Samsoe Romain Clutch Pouch Bag.jpg" alt="img04">
                            <figcaption>
                                <h3>Samsoe & Samsoe Romain Clutch Pouch Bag</h3>
                                <a href="view/18" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Ted Baker Deena Bag.jpg" alt="img01">
                            <figcaption>
                                <h3>Ted Baker Deena Bag</h3>
                                <a href="view/19" class="button" >Take a look</a>
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Volcom Betty Bag.jpg" alt="img02">
                            <figcaption>
                                <h3>Volcom Betty Bag</h3>
                                <a href="view/20" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
					</div>
                </div>
			</div>
				
				</br>
				
				<div id="duffel">
				<h2>D U F F E L</h2>
				</br>
                <div class="row port cs-style-3 container" id="main-content">
				<div class="row" id="duffle">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Mi-Pac Duffel Stars Bag.jpg" alt="img04">
                            <figcaption>
                                <h3>Mi-Pac Duffel Stars Bag</h3>
								</br>
								</br>
                                <a href="view/20" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Overboard 60 Litre Pro Vis Duffel Dry Bag.jpg" alt="img01">
                            <figcaption>
                                <h3>Overboard 60 Litre Pro Vis Duffel Dry Bag</h3>
                                <a href="view/21" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Patagonia Arbor Duffel 60l Bag.jpg" alt="img02">
                            <figcaption>
                                <h3>Patagonia Arbor Duffel 60l Bag</h3>
                                <a href="view/22" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/The North Face Base Camp Duffel.jpg" alt="img04">
                            <figcaption>
                                <h3>The North Face Base Camp Duffel</h3>
                                <a href="view/23" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/The North Face Base Camp Medium Duffle Bag.jpg" alt="img01">
                            <figcaption>
                                <h3>The North Face Base Camp Medium Duffle Bag</h3>
                                <a href="view/24" class="button" >Take a look</a>
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/The North Face Masen Duffle Bag.jpg" alt="img02">
                            <figcaption>
                                <h3>The North Face Masen Duffle Bag</h3>
                                <a href="view/25" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
					</div>
                </div>
			</div>
				
				</br>
				
				<div id="laptop">
				<h2>L A P T O P</h2>
				</br>
                <div class="row port cs-style-3 container" id="main-content">
				<div class="row" id="laptop">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Adidas Originals Superstar Classic Laptop Backpack.jpg" alt="img04">
                            <figcaption>
                                <h3>Adidas Originals Superstar Classic Laptop Backpack</h3>
								</br>
								</br>
                                <a href="view/26" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Burton Prospect Laptop Backpack.jpg" alt="img01">
                            <figcaption>
                                <h3>Burton Prospect Laptop Backpack</h3>
                                <a href="view/27" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Burton Tinder Laptop Backpack.jpg" alt="img02">
                            <figcaption>
                                <h3>Burton Tinder Laptop Backpack</h3>
                                <a href="view/28" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Dakine Gemini 28l Laptop Backpack.jpg" alt="img04">
                            <figcaption>
                                <h3>Dakine Gemini 28l Laptop Backpack</h3>
                                <a href="view/29" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Herschel Post Backpack.jpg" alt="img01">
                            <figcaption>
                                <h3>Herschel Post Backpack</h3>
                                <a href="view/30" class="button" >Take a look</a>
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Oakley Halifax Pack Laptop Backpack.jpg" alt="img02">
                            <figcaption>
                                <h3>Oakley Halifax Pack Laptop Backpack</h3>
                                <a href="view/31" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
					</div>
                </div>
			</div>
				
				</br>
				
				<div id="purse">
				<h2>P U R S E</h2>
				</br>
                <div class="row port cs-style-3 container" id="main-content">
				<div class="row" id="purse">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Rip Curl Telma Wallet.jpg" alt="img04">
                            <figcaption>
                                <h3>Rip Curl Telma Wallet</h3>
								</br>
								</br>
                                <a href="view/32" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Ted Baker Anicca Wallet.jpg" alt="img01">
                            <figcaption>
                                <h3>Ted Baker Anicca Wallet/h3>
                                <a href="view/33" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Ted Baker Ashmore Wallet.jpg" alt="img02">
                            <figcaption>
                                <h3>Ted Baker Ashmore Wallet</h3>
                                <a href="view/34" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Ted Baker Darcie Wallet.jpg" alt="img04">
                            <figcaption>
                                <h3>Ted Baker Darcie Wallet</h3>
                                <a href="view/35" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Ted Baker Helan Wallet.jpg" alt="img01">
                            <figcaption>
                                <h3>Ted Baker Helan Wallet</h3>
                                <a href="view/36" class="button" >Take a look</a>
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Ted Baker Missti Wallet.jpg" alt="img02">
                            <figcaption>
                                <h3>Ted Baker Missti Wallet</h3>
                                <a href="view/37" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
					</div>
                </div>
			</div>
				
				</br>
				
				<div id="shoulderbag">
				<h2>S H O U L D E R  B A G</h2>
				</br>
                <div class="row port cs-style-3 container" id="main-content">
				<div class="row" id="shoulderbag">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Brakeburn Beach Bucket Beach Bag.jpg" alt="img04">
                            <figcaption class="wrap">
                                <h3>Brakeburn Beach Bucket Beach Bag</h3>
								</br>
								</br>
                                <a href="view/38" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Charcoal Rose Hunter Leather Satchel.jpg" alt="img01">
                            <figcaption>
                                <h3>Charcoal Rose Hunter Leather Satchel</h3>
                                <a href="view/39" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Rip Curl Paradise Shoulder Bag.jpg" alt="img02">
                            <figcaption>
                                <h3>Rip Curl Paradise Shoulder Bag</h3>
                                <a href="view/40" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Rip Curl Paradise Sports Bag.jpg" alt="img04">
                            <figcaption>
                                <h3>Rip Curl Paradise Sports Bag</h3>
                                <a href="view/41" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Seafolly Tribal Across Body Shoulder Bag.jpg" alt="img01">
                            <figcaption>
                                <h3>Seafolly Tribal Across Body Shoulder Bag</h3>
                                <a href="view/42" class="button" >Take a look</a>
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Wolf & York Hanne Bag.jpg" alt="img02">
                            <figcaption>
                                <h3>Wolf & York Hanne Bag</h3>
                                <a href="view/43" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
					</div>
                </div>
			</div>
				
				</br>
				
				<div id="sportstravel">
				<h2>S P O R T S  T R A V E L</h2>
				</br>
                <div class="row port cs-style-3 container" id="main-content">
				<div class="row" id="sportstravel">
				<div class="row" id="sportstravel">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Dakine Venture Duffle Luggage.jpg" alt="img04">
                            <figcaption>
                                <h3>Dakine Venture Duffle Luggage</h3>
								</br>
								</br>
                                <a href="view/44" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Eastpak Tranverz L Luggage.jpg" alt="img01">
                            <figcaption>
                                <h3>Eastpak Tranverz L Luggage</h3>
                                <a href="view/45" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Lowe Alpine Kit Bag 60L.jpg" alt="img02">
                            <figcaption>
                                <h3>Lowe Alpine Kit Bag 60L</h3>
                                <a href="view/46" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Oakley Factory Pilot Duffel Gym Bagjpg" alt="img04">
                            <figcaption>
                                <h3>Oakley Factory Pilot Duffel Gym Bag</h3>
                                <a href="view/47" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Osprey Meridian 75 Bag.jpg" alt="img01">
                            <figcaption>
                                <h3>Osprey Meridian 75 Bag</h3>
                                <a href="view/48" class="button" >Take a look</a>
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="view/uploads/Under Armour Undeniable Medium Duffle Bag.jpg" alt="img02">
                            <figcaption>
                                <h3>Under Armour Undeniable Medium Duffle Bag</h3>
                                <a href="view/49" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
					</div>
                </div>
			</div>
		</div>
				
				
            </div><!-- container -->
        </section>
		<span id="top-link-block" class="hidden">
    <a href="#top" class="well well-sm"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="glyphicon glyphicon-chevron-up"></i> Back to Top
    </a>
</span><!-- portfolio -->
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
			<script type="text/javascript">
				$(function() { 
					$("#main-content > .row").niceScroll();
					}
				);
				$(function() { 
					$("#main-content > .row").niceScroll();
					}
				);
				
				if ( ($(window).height() + 100) < $(document).height() ) {
					$('#top-link-block').removeClass('hidden').affix({
						// how far to scroll down before link "slides" into view
						offset: {top:100}
					});Script
				}
				
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
