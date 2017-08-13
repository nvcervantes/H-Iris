<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
  <?php
    NavBar::begin([
        'brandLabel' =>'SM Hotels and Convention Corporation',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About Us', 'url' => ['/site/about']],


             ['label' => 'Room',

              'items' => [
                 ['label' => 'Overview' , 'url' => ['/email/index']],

                 '<li class="dropdown-header"> </li>',
                 '<li class="dropdown-header">Lagoon View</li>',
                
                 ['label' => 'Superior Room', 'url' => ['/activity/index']],
                 
                 ['label' => 'Deluxe Room', 'url' => ['/customer/index']],
             
                 ['label' => 'Premier Room', 'url' => ['/customer-history/index']],

                 ['label' => 'Corner Deluxe Rooms', 'url' => ['/customer/index']],
             
                 ['label' => 'Penthouse Loft Rooms', 'url' => ['/customer-history/index']],

                '<li class="dropdown-header"> </li>',
                 '<li class="dropdown-header">Mountain View</li>',

                   ['label' => 'Standard Room', 'url' => ['/customer/index']],
                
                 ['label' => 'Superior Room', 'url' => ['/activity/index']],
             
                 ['label' => 'Premier Room', 'url' => ['/customer-history/index']],

                 
                 
            ],

             ],




              ['label' => 'Dining', 'url' => ['/site/about']],
 ['label' => 'Spa', 'url' => ['/site/about']],
 ['label' => 'Offers & activities', 'url' => ['/site/about']],
 ['label' => 'Events', 'url' => ['/site/about']],
  ['label' => 'Location', 'url' => ['/site/about']],
   ['label' => 'Gallery', 'url' => ['/site/about']],


            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Email', 'url' => ['/email/index']],
            
            // Yii::$app->user->isAdmin ? (
            [
            'label' => 'Forms',
            'items' => [
                 ['label' => 'Email', 'url' => ['/email/index']],
                 '<li class="divider"></li>',
                 //'<li class="dropdown-header">Dropdown Header</li>',
                 ['label' => 'Marketeer', 'url' => ['/marketeer/index']],
                  '<li class="divider"></li>',
                 ['label' => 'Activity', 'url' => ['/activity/index']],
                 '<li class="divider"></li>',
                 ['label' => 'Customer', 'url' => ['/customer/index']],
                 '<li class="divider"></li>',
                 ['label' => 'Customer History', 'url' => ['/customer-history/index']]

                 
            ],
        ],
        //)


            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?> 

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; SM Hotels and Convention Corporation <?= date('Y') ?></p>

       
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
