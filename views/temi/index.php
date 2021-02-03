<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TemiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="temi-index">
    <p>
        <?= Html::a('Создать тему', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'id_sozd',
            'id_stati',
            'text:ntext',
            'data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
