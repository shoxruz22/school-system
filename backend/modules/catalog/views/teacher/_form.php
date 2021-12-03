<?php

use common\helpers\TeacherHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
<<<<<<< HEAD
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;
=======

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

/**
 * @var yii\web\View $this
 * @var common\models\Teacher $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<<<<<<< HEAD
<div class="pupil-form">

    <?php $form = ActiveForm::begin([
            'id' => 'Teacher',
=======
<div class="teacher-form">

    <?php $form = ActiveForm::begin([
            'id' => 'Teacher',
            'options' => ['enctype' => 'multipart/form-data'],
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
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
=======
    <section>

        <div>

            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'gender')->dropDownList(TeacherHelper::getGenderList(), ['prompt' => Yii::t('ui', 'Choose...')]) ?>

            <?= $form->field($model, 'age')->textInput(['type' => 'number']) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
            <?= $form->field($model, 'photoFile')->fileInput([
                'accept' => "image/png , image/jpeg"
            ]) ?>

<<<<<<< HEAD
            <!-- attribute date_birth -->
            <?= $form->field($model, 'date_birth')->textInput() ?>

            <!-- attribute gender -->
            <?= $form->field($model, 'gender')->dropDownList(TeacherHelper::getGenderList(), ['prompt' => Yii::t('ui', 'Choose...')]) ?>

            <!-- attribute status -->
            <?= $form->field($model, 'status')->dropDownList(TeacherHelper::getStatusList()) ?>


            <!-- attribute phone -->
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

        </div>

        <hr/>

        <?php echo $form->errorSummary($model); ?>

=======
            <!-- attribute address -->
            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
            <!-- attribute status -->
            <?= $form->field($model, 'status')->dropDownList(TeacherHelper::getStatusList()) ?>
        </div>


        <hr/>

        <?php echo $form->errorSummary($model); ?>
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
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

