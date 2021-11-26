<?php

namespace backend\modules\catalog\controllers;

use common\models\Payment;
use Yii;

/**
 * This is the class for controller "PaymentController".
 */
class PaymentController extends \backend\modules\catalog\controllers\base\PaymentController
{

    /**
     * Creates a new Payment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Payment;
        $model->date = date('Y-m-d H:i:s');

        try {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } elseif (!Yii::$app->request->isPost) {
                $model->load(Yii::$app->request->post());
            }
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2])) ? $e->errorInfo[2] : $e->getMessage();
            $model->addError('_exception', $msg);
        }
        return $this->render('create', ['model' => $model]);
    }
}
