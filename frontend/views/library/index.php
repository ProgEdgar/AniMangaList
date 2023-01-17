<?php

use frontend\models\Library;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Libraries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="library-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Library', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdLibrary',
            'Name',
            'User_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Library $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdLibrary' => $model->IdLibrary]);
                 }
            ],
        ],
    ]); ?>


</div>
