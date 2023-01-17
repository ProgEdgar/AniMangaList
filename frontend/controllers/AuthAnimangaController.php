<?php

namespace frontend\controllers;

use common\models\AuthAnimanga;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AuthAnimangaController implements the CRUD actions for AuthAnimanga model.
 */
class AuthAnimangaController extends Controller
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
     * Lists all AuthAnimanga models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AuthAnimanga::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'Author_Id' => SORT_DESC,
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
     * Displays a single AuthAnimanga model.
     * @param int $Author_Id Author ID
     * @param int $AniManga_Id Ani Manga ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Author_Id, $AniManga_Id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Author_Id, $AniManga_Id),
        ]);
    }

    /**
     * Creates a new AuthAnimanga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AuthAnimanga();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Author_Id' => $model->Author_Id, 'AniManga_Id' => $model->AniManga_Id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AuthAnimanga model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Author_Id Author ID
     * @param int $AniManga_Id Ani Manga ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Author_Id, $AniManga_Id)
    {
        $model = $this->findModel($Author_Id, $AniManga_Id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Author_Id' => $model->Author_Id, 'AniManga_Id' => $model->AniManga_Id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AuthAnimanga model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Author_Id Author ID
     * @param int $AniManga_Id Ani Manga ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Author_Id, $AniManga_Id)
    {
        $this->findModel($Author_Id, $AniManga_Id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AuthAnimanga model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Author_Id Author ID
     * @param int $AniManga_Id Ani Manga ID
     * @return AuthAnimanga the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Author_Id, $AniManga_Id)
    {
        if (($model = AuthAnimanga::findOne(['Author_Id' => $Author_Id, 'AniManga_Id' => $AniManga_Id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
