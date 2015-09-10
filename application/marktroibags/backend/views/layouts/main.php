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
                'brandLabel' => Html::img('product/view/uploads/Untitled2.png'),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'my-navbar navbar-fixed-top',
                ],
            ]);


            if (Yii::$app->user->isGuest) {
                    $menuItems = 
                    [
                   
                    ['label' => 'About Us', 'url' => ['/site/about']],
                    ['label' => 'Contact Us', 'url' => ['/site/contact']],
                    ['label' => 'Register', 'url' => ['/site/signup']],
                    ['label' => 'Login', 'url' => ['/site/login']],
                ];

                } else {
                if(Yii::$app->user->identity->id == 1){
                    $menuItems = [
					 ['label' => 'Home', 'url' => Yii::$app->homeUrl],
					['label' => 'Products', 'url' => ['/product/index']],
					['label' => 'Orders', 'url' => ['/order/index']],
                    ['label' => 'Manage', 'url' => ['/user/index']],                    
                    ['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']]
                ];
                } else {
                    
                }
            }
            echo Nav::widget([
                'options' => ['class' => 'my-navbar navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div>         
        <?= $content ?>
		</div>
	</center>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
