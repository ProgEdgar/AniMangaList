<?php

use common\models\AuthAnimanga;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Auth Animangas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-animanga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Auth Animanga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Author_Id',
            'AniManga_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuthAnimanga $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Author_Id' => $model->Author_Id, 'AniManga_Id' => $model->AniManga_Id]);
                 }
            ],
        ],
    ]); ?>


</div>
