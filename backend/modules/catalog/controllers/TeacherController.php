<?php

namespace backend\modules\catalog\controllers;

use common\models\search\TeacherSearch;
use common\models\Teacher;
use dmstr\bootstrap\Tabs;
use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;

/**
 * This is the class for controller "TeacherController".
 */
class TeacherController extends \backend\modules\catalog\controllers\base\TeacherController
{
    /**
     * Lists all Teacher models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeacherSearch;
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
        $model = new Teacher;

        try {
            if ($model->load($_POST)) {
                $model->photoFile = UploadedFile::getInstance($model, 'photoFile');
                if ($model->validate()) {
                    $model->uploadPhoto();
                    Yii::$app->session->setFlash('success', Yii::t('ui', "Данные созданы успешно"));
                    $model->save(false);
                    return $this->redirect(['index']);
                } elseif (!\Yii::$app->request->isPost) {
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

        if ($model->load($_POST) && $model->save()) {
            return $this->redirect(['index']);
        } else {
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
        try {
            $this->findModel($id)->delete();
            Yii::$app->session->setFlash('success', Yii::t('ui', "Данные успешно удалено"));
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2])) ? $e->errorInfo[2] : $e->getMessage();
            \Yii::$app->getSession()->addFlash('error', $msg);
            return $this->redirect(Url::previous());
        }

    }
}
