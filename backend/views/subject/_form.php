<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\subject $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="subject-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Subject',
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

    <div class="">


        <p>
            

<!-- attribute type -->
			<?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

<!-- attribute subject_name -->
			<?= $form->field($model, 'subject_name')->textInput(['maxlength' => true]) ?>

<!-- attribute price -->
			<?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>
        </p>

        

        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? 'Create' : 'Save'),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

