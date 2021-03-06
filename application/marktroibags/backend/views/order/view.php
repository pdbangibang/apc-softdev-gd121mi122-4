<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Order */

$this->title = 'Order Details';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
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
<div class="order-view">
	<br>
	<br>
	<br>
	
    <h1>Order: #<?= Html::encode($model->id) ?></h1>
	
	<div class="container">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
	<br>
	
	<table class="flat-table flat-table-1">
	<tr>
	<td>Username:</td>
	<td><?= Html::encode($model->username)?></td>
	</tr>
	<tr>
	<td>Order:</td>
	<td><?= Html::encode($model->id)?></td>
	</tr>
	<tr>
	<td>Product:</td>
	<td>#<?= Html::encode($model->product_id)?></td>
	</tr>
	<tr>
	<td>Quantity:</td>
	<td><?= Html::encode($model->qty)?></td>
	</tr>
	<tr>
	<td>Date (MM-DD-YYYY):</td>
	<td><?= Html::encode($model->date)?></td>
	</tr>
	</table>
</div>
</div>
<script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="assets/js/jquery.actual.min.js"></script>
        <script src="assets/js/smooth-scroll.js"></script>
        <script src="assets/js/owl.carousel.js"></script>
        <script src="assets/js/script.js"></script>
</body>
</html>

