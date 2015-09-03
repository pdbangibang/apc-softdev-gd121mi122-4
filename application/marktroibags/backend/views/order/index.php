<?php
use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Product;
use backend\models\Order;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Marktroi Bags - Orders';
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
<div class="order-index">
	<br>
	<br>
	<br>
	<br>
   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<br>
	<div class="container wrapme">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'username',
            [
                'attribute' => 'username',
                'filter' => Order::getUsername(),
            ],

            //'product_id',
            [
            'label' => 'Product Name', 'attribute' => 'product_id', 'value' => 'product.name',
            'filter' => Order::getProductName(),
            ],

            //'qty',
            ['label' => 'Quantity', 'attribute' => 'qty'],
            ['label' => 'Order ID', 'attribute' => 'id'],
            'date',
            'Status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	</div>

</div>
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
