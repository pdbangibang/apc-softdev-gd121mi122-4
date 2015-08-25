<?php

use yii\helpers\Html;
use frontend\models\Product;
use frontend\models\ProductSearch;
use kartik\detail\DetailView;

use yii\grid\GridView;
use common\models\user;

/* @var $this yii\web\View */
/* @var $model frontend\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="product-view">
    	<section id="contact" class="mapWrap">
            <div id="googleMap" style="width:100%;"></div>
            <div id="contact-area">
                <div class="container">
                       <center>
							<h2><?= $ImageName = $model->name; ?></h2>
							</br>
							<h4><?= $pname = $model->description; ?></h4>
							</br>
							<img src="uploads/<?php echo $ImageName; ?>.jpg">
							</br>
							</br>
							</br>
							<a href="/marktroibags/frontend/web/" class="button butcos">Order</a>
							
						</center>
						
                </div><!-- container -->
            </div><!-- contact-area -->
        </section>
			 

        <!-- Necessery scripts -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="assets/js/jquery.actual.min.js"></script>
        <script src="assets/js/smooth-scroll.js"></script>
        <script src="assets/js/owl.carousel.js"></script>
        <script src="assets/js/script.js"></script>

    
</div>
