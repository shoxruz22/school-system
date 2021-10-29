<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\Room $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="room-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Room',
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
            

<!-- attribute number_rooms -->
			<?= $form->field($model, 'number_rooms')->textInput() ?>

<!-- attribute number_of_students -->
			<?= $form->field($model, 'number_of_students')->textInput() ?>

<!-- attribute room_type -->
			<?= $form->field($model, 'room_type')->textInput(['maxlength' => true]) ?>

<!-- attribute status -->
			<?= $form->field($model, 'status')->textInput() ?>

        </p>

        

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

    </div>

</div>

