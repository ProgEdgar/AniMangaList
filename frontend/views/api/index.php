<?php

use common\models\Api;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Apis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="api-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Api', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdAPI',
            'Name',
            'Link',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Api $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdAPI' => $model->IdAPI]);
                 }
            ],
        ],
    ]); ?>


</div>
