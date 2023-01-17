<?php

use common\models\GenAnimanga;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Gen Animangas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gen-animanga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gen Animanga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Genre_Id',
            'AniManga_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, GenAnimanga $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Genre_Id' => $model->Genre_Id, 'AniManga_Id' => $model->AniManga_Id]);
                 }
            ],
        ],
    ]); ?>


</div>
