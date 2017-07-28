<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EmailActivity */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Email Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-activity-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'email_activity_status:email',
            'email_activity_date:email',
            'emai_activity_time',
            'email_id:email',
        ],
    ]) ?>

</div>