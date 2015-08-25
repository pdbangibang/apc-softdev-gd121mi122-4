<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use kartik\nav\NavX;


/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
	<center>
	
                                 <?php
            NavBar::begin([
                
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'my-navbar navbar-fixed-top nav nav-pills',
                ],
            ]);


            if (Yii::$app->user->isGuest) {
                    $menuItems = 
                    [
                    ['label' => 'Home', 'url' => Yii::$app->homeUrl],
                    ['label' => 'Products', 'active' =>true, 'items' => [
						['label' => 'Backpacks', 'url' => ['/product/index#backpacks']],
						['label' => 'Clutch', 'url' => ['/product/index#clutch']],
						['label' => 'Duffel', 'url' => ['/product/index#duffel']],
						['label' => 'Laptop', 'url' => ['/product/index#laptop']],
						['label' => 'Purse', 'url' => ['/product/index#purse']],
						['label' => 'Shoulder Bag', 'url' => ['/product/index#shoulderbag']],
						['label' => 'Sports Travel', 'url' => ['/product/index#sportstravel']],
					]],
                    ['label' => 'About Us', 'url' => ['/site/about']],
                    ['label' => 'Contact Us', 'url' => ['/site/contact']],
                    ['label' => 'Register', 'url' => ['/site/signup']],
                    ['label' => 'Login', 'url' => ['/site/login']],
                ];

                } else {
                if(Yii::$app->user->identity->id == 1){
                    $menuItems[] = ['label' => '', 'items' => [
                    ['label' => 'Manage', 'url' => [Yii::$app->homeUrl.'../']],                    
                    ['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']]
                ]];
                } else {
                    $menuItems = 
                    [
                    ['label' => 'Home', 'url' => Yii::$app->homeUrl],
                    ['label' => 'Products', 'active' =>true, 'items' => [
						['label' => 'Backpacks', 'url' => ['/product/index#backpacks']],
						['label' => 'Clutch', 'url' => ['/product/index#clutch']],
						['label' => 'Duffel', 'url' => ['/product/index#duffel']],
						['label' => 'Laptop', 'url' => ['/product/index#laptop']],
						['label' => 'Purse', 'url' => ['/product/index#purse']],
						['label' => 'Shoulder Bag', 'url' => ['/product/index#shoulderbag']],
						['label' => 'Sports Travel', 'url' => ['/product/index#sportstravel']],
					]],
                    ['label' => 'My Orders', 'url' => ['/order/index']],
                    ['label' => 'About Us', 'url' => ['/site/about']],
                    ['label' => 'Contact Us', 'url' => ['/site/contact']],
                    ['label' => 'My Account', 'url' => ['/user/view/'.Yii::$app->user->identity->id]],                    
                    ['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']],
                ];    
                }
            }
            echo NavX::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => $menuItems,
				'activateParents' => true,
				'encodeLabels' => false
            ]);
            NavBar::end();
        ?>

                 
        <?= $content ?>



<!-- Footer Area 
    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; Marktroi Bags Online <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
	<!-- Footer Area -->
	</center>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
