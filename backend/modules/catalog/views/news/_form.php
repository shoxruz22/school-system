<?php

use common\helpers\SubjectHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\News $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="news-form">

    <?php $form = ActiveForm::begin([
    'id' => 'News',
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

<!-- attribute title -->
			<?= $form->field($model, 'title')->textInput() ?>

<!-- attribute date -->
			<?= $form->field($model, 'date')->textInput() ?>

            <!-- attribute img -->
            <?= $form->field($model, 'photoFile1')->fileInput([
                'accept' => "image/png , image/jpeg"
            ]) ?>

<!-- attribute text -->
			<?= $form->field($model, 'text')->textarea() ?>

            <!-- attribute status -->
            <?= $form->field($model, 'status')->dropDownList(SubjectHelper::getStatusList()) ?>


<!-- attribute photoFile -->
        </div>

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

    </section>

</div>

