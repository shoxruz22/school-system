<?php

use common\helpers\TeacherHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/**
* @var yii\web\View $this
* @var common\models\Teacher $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Teacher',
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

<!-- attribute full_name -->
			<?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

<!-- attribute gender -->
			<?= $form->field($model, 'gender')->dropDownList(TeacherHelper::getGenderList(),['prompt'=>Yii::t('ui','Choose...')]) ?>

<!-- attribute age -->
                <?= $form->field($model, 'age')->textInput(['type' => 'number']) ?>

<!-- attribute phone -->
			<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

<!-- attribute address -->
			<?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                <!-- attribute status -->
                <?= $form->field($model, 'status')->dropDownList(TeacherHelper::getStatusList()) ?>
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

