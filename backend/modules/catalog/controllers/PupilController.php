<?php

namespace backend\modules\catalog\controllers;

<<<<<<< HEAD
use common\models\search\PupilSearch;
use common\models\Pupil;
use dmstr\bootstrap\Tabs;
use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;
/**
 * This is the class for controller "TeacherController".
=======
use common\models\Pupil;
use common\models\search\PupilSearch;
use Yii;
use yii\helpers\Url;

/**
 * This is the class for controller "PupilController".
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
 */
class PupilController extends \backend\modules\catalog\controllers\base\PupilController
{
    /**
<<<<<<< HEAD
     * Lists all Teacher models.
=======
     * Lists all Pupil models.
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PupilSearch;
        $dataProvider = $searchModel->search($_GET);
<<<<<<< HEAD

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
        $model = new Pupil;

        try {
            if ($model->load(Yii::$app->request->post())) {
                $model->photoFile = UploadedFile::getInstance($model, 'photoFile');
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
            $model->photoFile = UploadedFile::getInstance($model, 'photoFile');
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
=======

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Creates a new Pupil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pupil;

        try {
            if ($model->load($_POST) && $model->save()) {
                Yii::$app->session->setFlash('success', Yii::t('ui', "Данные созданы успешно"));
                return $this->redirect(['index']);
            } elseif (!\Yii::$app->request->isPost) {
                $model->load($_GET);
            }
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2])) ? $e->errorInfo[2] : $e->getMessage();
            $model->addError('_exception', $msg);
        }
        return $this->render('create', ['model' => $model]);
    }

    /**
     * Updates an existing Pupil model.
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
     * Deletes an existing Pupil model.
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
<<<<<<< HEAD
        $model = $this->findModel($id);
        try {
            $model->delete();
            $model->deletePhoto();
=======
        try {
            $this->findModel($id)->delete();
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
            Yii::$app->session->setFlash('success', Yii::t('ui', "Данные успешно удалено"));
            return $this->redirect(['index']);
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2])) ? $e->errorInfo[2] : $e->getMessage();
            \Yii::$app->getSession()->addFlash('error', $msg);
<<<<<<< HEAD
            return $this->redirect(Url::previous());
        }

=======
            return $this->redirect(['index']);
        }
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
    }
}
