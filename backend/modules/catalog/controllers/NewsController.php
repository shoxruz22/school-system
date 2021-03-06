<?php

namespace backend\modules\catalog\controllers;

use common\models\search\NewsSearch;
use common\models\News;
use dmstr\bootstrap\Tabs;
use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;
/**
 * This is the class for controller "NewsController".
 */
class NewsController extends \backend\modules\catalog\controllers\base\NewsController
{
    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch;
        $dataProvider = $searchModel->search($_GET);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Creates a new Teacher model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News;
        try {
            if ($model->load(Yii::$app->request->post())) {
                $model->photoFile1 = UploadedFile::getInstance($model, 'photoFile1');
                if ($model->validate()) {
                    $model->uploadPhoto();
                    $model->save(false);
                    Yii::$app->session->setFlash('success', Yii::t('ui', "Данные созданы успешно"));
                    return $this->redirect(['index']);
                } elseif (!Yii::$app->request->isPost) {

                    $model->load($_GET);
                }
            }
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2])) ? $e->errorInfo[2] : $e->getMessage();
            $model->addError('_exception', $msg);
        }
        return $this->render('create', ['model' => $model]);
    }

    /**
     * Updates an existing Teacher model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->photoFile1 = UploadedFile::getInstance($model, 'photoFile1');
            if ($model->validate()) {
                $model->updatePhoto();
                $model->save(false);
                Yii::$app->session->setFlash('success', Yii::t('ui', "Данные созданы успешно"));
                return $this->redirect(['index']);
            }
        }
        else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Deletes an existing Teacher model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        try {
            $model->delete();
            $model->deletePhoto();
            Yii::$app->session->setFlash('success', Yii::t('ui', "Данные успешно удалено"));
            return $this->redirect(['index']);
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2])) ? $e->errorInfo[2] : $e->getMessage();
            \Yii::$app->getSession()->addFlash('error', $msg);
            return $this->redirect(Url::previous());
        }

    }
}
