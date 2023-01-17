<?php

namespace frontend\controllers;

use common\models\GenAnimanga;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GenAnimangaController implements the CRUD actions for GenAnimanga model.
 */
class GenAnimangaController extends Controller
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
     * Lists all GenAnimanga models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => GenAnimanga::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'Genre_Id' => SORT_DESC,
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
     * Displays a single GenAnimanga model.
     * @param int $Genre_Id Genre ID
     * @param int $AniManga_Id Ani Manga ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Genre_Id, $AniManga_Id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Genre_Id, $AniManga_Id),
        ]);
    }

    /**
     * Creates a new GenAnimanga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new GenAnimanga();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Genre_Id' => $model->Genre_Id, 'AniManga_Id' => $model->AniManga_Id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GenAnimanga model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Genre_Id Genre ID
     * @param int $AniManga_Id Ani Manga ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Genre_Id, $AniManga_Id)
    {
        $model = $this->findModel($Genre_Id, $AniManga_Id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Genre_Id' => $model->Genre_Id, 'AniManga_Id' => $model->AniManga_Id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GenAnimanga model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Genre_Id Genre ID
     * @param int $AniManga_Id Ani Manga ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Genre_Id, $AniManga_Id)
    {
        $this->findModel($Genre_Id, $AniManga_Id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GenAnimanga model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Genre_Id Genre ID
     * @param int $AniManga_Id Ani Manga ID
     * @return GenAnimanga the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Genre_Id, $AniManga_Id)
    {
        if (($model = GenAnimanga::findOne(['Genre_Id' => $Genre_Id, 'AniManga_Id' => $AniManga_Id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
