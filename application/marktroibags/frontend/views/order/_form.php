<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use backend\models\Product;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model frontend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_id')->textInput(array('readonly' => true, 'value' => Yii::$app->user->identity->id)) ?>
    <?= $form->field($model, 'username')->textInput(array('readonly' => true, 'value' => Yii::$app->user->identity->username)) ?>
 


    <?php 
        $products=Product::find()->all();

        $listData=ArrayHelper::map($products,'id','name');

        echo $form->field($model, 'product_id')->dropDownList(
                                $listData, 
                                ['prompt'=>'Select Product...']);
    ?>

    <?= $form->field($model, 'qty')->textInput(['maxlength' => 45]) ?>

    <?php 
		echo 'Birth Date';
		echo DatePicker::widget([
		'name' => 'dp_1',
		'type' => DatePicker::TYPE_INPUT,
		'value' => '23-Feb-1982',
		'pluginOptions' => [
			'autoclose'=>true,
			'format' => 'dd-M-yyyy'
			]
		]);
	?>

    <?= $form->field($model, 'Status')->textInput(array('readonly' => true, 'value' => 'Pending')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
