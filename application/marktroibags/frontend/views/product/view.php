<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Product;
use frontend\models\ProductSearch;

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
                    <div class="row">
                        <div class="col-xs-12">
                        </div>
                       <center>
                            <?= DetailView::widget([
								'model' => $model,
								'attributes' => [
            
				
								'name',
								'description',
           
							],
        
							]) ?>
							<?= $ImageName = $model->name; ?>
							<img src="uploads/<?php echo $ImageName; ?>.jpg">
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

    
</div>
