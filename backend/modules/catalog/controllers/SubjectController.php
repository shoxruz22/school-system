<?php

namespace backend\modules\catalog\controllers;

<<<<<<< HEAD
use common\models\search\SubjectSearch;
use common\models\Subject;
use dmstr\bootstrap\Tabs;
use \yii\widgets\Pjax;
use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;
/**
 * This is the class for controller "NewsController".
=======
use backend\modules\catalog\forms\SubjectCreateForm;
use backend\modules\catalog\forms\SubjectUpdateForm;
use Yii;
use yii\helpers\Url;

/**
 * This is the class for controller "SubjectController".
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
 */
class SubjectController extends \backend\modules\catalog\controllers\base\SubjectController
{
    /**
<<<<<<< HEAD
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SubjectSearch();
        $dataProvider = $searchModel->search($_GET);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Creates a new Teacher model.
=======
     * Creates a new Subject model.
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
<<<<<<< HEAD
        $model = new Subject;

        try {
            if ($model->load(Yii::$app->request->post())) {
                if ($model->validate()) {

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
=======
        $form = new SubjectCreateForm;

        try {
            if ($form->load(Yii::$app->request->post()) && $form->validate()) {
                $form->saveData();
                Yii::$app->session->setFlash('success', Yii::t('ui', "Данные созданы успешно"));
                return $this->redirect(['index']);
            }
        } catch (\Exception $e) {
            $msg = $e->errorInfo[2] ?? $e->getMessage();
            $form->addError('_exception', $msg);
        }
        return $this->render('create', [
            'createForm' => $form
        ]);
    }

    /**
     * Updates an existing Subject model.
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
<<<<<<< HEAD

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
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
        $form = new SubjectUpdateForm($model);

        try {
            if ($form->load(Yii::$app->request->post()) && $form->validate()) {
                $form->saveData();
                Yii::$app->session->setFlash('success', Yii::t('ui', "Данные успешно обновлены"));
                return $this->redirect(['index']);
            }
        } catch (\Exception $e) {
            $msg = $e->errorInfo[2] ?? $e->getMessage();
            $form->addError('_exception', $msg);
        }

        return $this->render('update', [
            'updateForm' => $form,
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Subject model.
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

            Yii::$app->session->setFlash('success', Yii::t('ui', "Данные успешно удалено"));
            return $this->redirect(['index']);
=======
        try {
            Yii::$app->session->setFlash('success', Yii::t('ui', "Данные успешно удалено"));

            $this->findModel($id)->delete();
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2])) ? $e->errorInfo[2] : $e->getMessage();
            \Yii::$app->getSession()->addFlash('error', $msg);
            return $this->redirect(Url::previous());
        }

<<<<<<< HEAD
    }
=======
// TODO: improve detection
        $isPivot = strstr('$id', ',');
        if ($isPivot == true) {
            return $this->redirect(Url::previous());
        } elseif (isset(\Yii::$app->session['__crudReturnUrl']) && \Yii::$app->session['__crudReturnUrl'] != '/') {
            Url::remember(null);
            $url = \Yii::$app->session['__crudReturnUrl'];
            \Yii::$app->session['__crudReturnUrl'] = null;

            return $this->redirect($url);
        } else {
            return $this->redirect(['index']);
        }
    }

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
}
