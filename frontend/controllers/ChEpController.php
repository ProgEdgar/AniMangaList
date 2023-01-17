<?php

namespace frontend\controllers;

use common\models\ChEp;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChEpController implements the CRUD actions for ChEp model.
 */
class ChEpController extends Controller
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
     * Lists all ChEp models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ChEp::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IdChEp' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ChEp model.
     * @param int $IdChEp Id Ch Ep
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdChEp)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdChEp),
        ]);
    }

    /**
     * Creates a new ChEp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ChEp();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdChEp' => $model->IdChEp]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ChEp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IdChEp Id Ch Ep
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdChEp)
    {
        $model = $this->findModel($IdChEp);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdChEp' => $model->IdChEp]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ChEp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IdChEp Id Ch Ep
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdChEp)
    {
        $this->findModel($IdChEp)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ChEp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IdChEp Id Ch Ep
     * @return ChEp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdChEp)
    {
        if (($model = ChEp::findOne(['IdChEp' => $IdChEp])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
