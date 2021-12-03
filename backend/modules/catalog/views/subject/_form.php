<?php

use common\helpers\SubjectHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
<<<<<<< HEAD
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\Subject $model
* @var yii\widgets\ActiveForm $form
*/
=======


/**
 * @var yii\web\View $this
 * @var common\models\Subject $model
 * @var yii\widgets\ActiveForm $form
 */
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

?>

<div class="subject-form">

    <?php $form = ActiveForm::begin([
<<<<<<< HEAD
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

    <section>

        <div>
            

<!-- attribute name -->
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <!-- attribute status -->
            <?= $form->field($model, 'status')->dropDownList(SubjectHelper::getStatusList()) ?>

        </div>
=======
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


            <!-- attribute name -->
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>



            <?= $form->field($model, 'status')->dropDownList(SubjectHelper::getStatusList()) ?>
        </p>

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

        <hr/>

        <?php echo $form->errorSummary($model); ?>

<<<<<<< HEAD
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
=======
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
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

</div>

