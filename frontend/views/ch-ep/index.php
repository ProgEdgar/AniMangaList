<?php

use common\models\ChEp;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ch Eps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-ep-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ch Ep', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdChEp',
            'Name',
            'Number',
            'Uploaded',
            'AniManga_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ChEp $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdChEp' => $model->IdChEp]);
                 }
            ],
        ],
    ]); ?>


</div>
