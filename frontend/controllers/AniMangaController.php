<?php

namespace frontend\controllers;

use common\models\AniManga;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AniMangaController implements the CRUD actions for AniManga model.
 */
class AniMangaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all AniManga models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AniManga::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdAniManga' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AniManga model.
     * @param int $IdAniManga Id Ani Manga
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdAniManga)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdAniManga),
        ]);
    }

    /**
     * Creates a new AniManga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AniManga();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdAniManga' => $model->IdAniManga]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AniManga model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdAniManga Id Ani Manga
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdAniManga)
    {
        $model = $this->findModel($IdAniManga);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdAniManga' => $model->IdAniManga]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AniManga model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdAniManga Id Ani Manga
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdAniManga)
    {
        $this->findModel($IdAniManga)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AniManga model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdAniManga Id Ani Manga
     * @return AniManga the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdAniManga)
    {
        if (($model = AniManga::findOne(['IdAniManga' => $IdAniManga])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
