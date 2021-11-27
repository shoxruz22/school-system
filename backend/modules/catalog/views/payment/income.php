<?php

use common\helpers\PaymentHelper;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Payment $model
 * @var \yii\widgets\ActiveForm $form
 */

?>

<div class="payment-form">

    <?php $form = ActiveForm::begin([
            'id' => 'Payment',
            'layout' => 'horizontal',
            'enableClientValidation' => true,
            'errorSummaryCssClass' => 'error-summary alert alert-danger',
            'fieldConfig' => [
                'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    #'offset' => 'col-sm-offset-4',
                    'wrapper' => 'col-sm-8',
                    'error' => '',
                    'hint' => '',
                ],
            ],
        ]
    );
    ?>

    <section>
        <div>
            <!-- attribute type -->
            <?= $form->field($model, 'type')->dropDownList(PaymentHelper::getTypeList(),['prompt'=>'Choose type...']) ?>
        </div>


        <hr/>

        <?php echo $form->errorSummary($model); ?>
        <div class="text-center">
            <?= Html::submitButton(
                '<span class="glyphicon glyphicon-check"></span> ' .
                ($model->isNewRecord ? 'Create' : 'Save'),
                [
                    'id' => 'save-' . $model->formName(),
                    'class' => 'btn btn-success'
                ]
            );
            ?>
        </div>
        <?php ActiveForm::end(); ?>

    </section>

</div>

