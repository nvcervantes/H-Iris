<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerPreferenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Preferences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-preference-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Preference', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            [  
            'attribute' => 'customer_id', 
            'value'=>'customer.name' 
             ],
            [  
            'attribute' => 'preference_id', 
            'value'=>'preference.preference' 
             ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
