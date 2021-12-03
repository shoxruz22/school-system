<?php

use common\helpers\PupilHelper;
<<<<<<< HEAD
use yii\helpers\Html;
=======
use common\models\Pupil;
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Pupil $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="pupil-form">

    <?php $form = ActiveForm::begin([
            'id' => 'Pupil',
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

<<<<<<< HEAD
    <section >

        <div>
            

<!-- attribute full_name -->
			<?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

<!-- attribute img -->
            <?= $form->field($model, 'photoFile')->fileInput([
                'accept' => "image/png , image/jpeg"
            ]) ?>

<!-- attribute date_birth -->
			<?= $form->field($model, 'date_birth')->textInput() ?>

<!-- attribute gender -->
            <?= $form->field($model, 'gender')->dropDownList(PupilHelper::getGenderList(), ['prompt' => Yii::t('ui', 'Choose...')]) ?>

<!-- attribute status -->
            <?= $form->field($model, 'status')->dropDownList(PupilHelper::getStatusList()) ?>


<!-- attribute phone -->
			<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

=======
    <section>

        <div>
            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'age')->textInput(['type' => 'number']) ?>

            <?= $form->field($model, 'gender')->dropDownList(PupilHelper::getGenderList(), [
                'prompt' => Yii::t('ui', 'Select')
            ]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'address')->textarea([
                'rows' => 4
            ]) ?>

            <?= $form->field($model, 'status')->dropDownList(PupilHelper::getStatusList()) ?>

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
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
<<<<<<< HEAD
=======

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
        <?php ActiveForm::end(); ?>

    </section>

</div>
