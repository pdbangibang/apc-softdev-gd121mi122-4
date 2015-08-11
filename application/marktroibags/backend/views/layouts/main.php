<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

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
<<<<<<< HEAD
    
        
=======
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Marktroi Bags Online',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                
                ['label' => 'Products', 'url' => ['/product/index']],
               //['label' => 'Promotion', 'url' => ['/promotion/index']],
                ['label' => 'Report', 'url' => ['/report/index']],
               // ['label' => 'Order Status', 'url' => ['/order/index']],
               // ['label' => 'About', 'url' => ['/site/about']],
               // ['label' => 'Contact', 'url' => ['/site/contact']],
                
                
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Home', 'url' => Yii::$app->homeUrl];
                //$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                if(Yii::$app->user->identity->id == 1){
                   
                    $menuItems[] = ['label' => 'Orders List', 'url' => ['/order/index']];   
                    $menuItems[] = ['label' => 'Manage Users', 'url' => ['/user/index']];                    
                    $menuItems[] = ['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']];
                } else {                 
                    $menuItems[] = ['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']];    
                }
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>
>>>>>>> f7726b7b0b2b13daed37e2ad6c8f0e03f5b94708

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; Marktroi Bags Online <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
