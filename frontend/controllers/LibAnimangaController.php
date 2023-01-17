<?php

namespace frontend\controllers;

use frontend\models\LibAnimanga;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LibAnimangaController implements the CRUD actions for LibAnimanga model.
 */
class LibAnimangaController extends Controller
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
     * Lists all LibAnimanga models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => LibAnimanga::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'Library_Id' => SORT_DESC,
                    'AniManga_Id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LibAnimanga model.
     * @param int $Library_Id Library ID
     * @param int $AniManga_Id Ani Manga ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Library_Id, $AniManga_Id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Library_Id, $AniManga_Id),
        ]);
    }

    /**
     * Creates a new LibAnimanga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new LibAnimanga();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Library_Id' => $model->Library_Id, 'AniManga_Id' => $model->AniManga_Id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LibAnimanga model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Library_Id Library ID
     * @param int $AniManga_Id Ani Manga ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Library_Id, $AniManga_Id)
    {
        $model = $this->findModel($Library_Id, $AniManga_Id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Library_Id' => $model->Library_Id, 'AniManga_Id' => $model->AniManga_Id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LibAnimanga model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Library_Id Library ID
     * @param int $AniManga_Id Ani Manga ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Library_Id, $AniManga_Id)
    {
        $this->findModel($Library_Id, $AniManga_Id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the LibAnimanga model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Library_Id Library ID
     * @param int $AniManga_Id Ani Manga ID
     * @return LibAnimanga the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Library_Id, $AniManga_Id)
    {
        if (($model = LibAnimanga::findOne(['Library_Id' => $Library_Id, 'AniManga_Id' => $AniManga_Id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
