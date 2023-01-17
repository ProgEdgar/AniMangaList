<?php

use frontend\models\LibAnimanga;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Lib Animangas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lib-animanga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lib Animanga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Library_Id',
            'AniManga_Id',
            'Readed',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, LibAnimanga $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Library_Id' => $model->Library_Id, 'AniManga_Id' => $model->AniManga_Id]);
                 }
            ],
        ],
    ]); ?>


</div>
