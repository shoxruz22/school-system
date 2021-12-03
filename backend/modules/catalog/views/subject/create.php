<?php

<<<<<<< HEAD
use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Subject $model
*/

$this->title = Yii::t('models', 'Subjects');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Subjects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-create">


=======
use common\helpers\SubjectHelper;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Subject $model
 * @var \backend\modules\catalog\forms\SubjectCreateForm $createForm
 */
$this->title = Yii::t('models', 'Subject');
?>
<div class="subject-create">

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?= Html::a(Yii::t('ui', 'Назад'), ['index'], ['class' => 'btn btn-danger']) ?>
        </div>
    </div>

<<<<<<< HEAD
    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>
=======
    <hr/>

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
        ]); ?>

        <section>
            <div>
                <?= $form->field($createForm, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($createForm, 'price')->textInput() ?>

                <?= $form->field($createForm, 'status')->dropDownList(SubjectHelper::getStatusList()) ?>
            </div>

            <hr/>

            <?php echo $form->errorSummary($createForm); ?>

            <div class="form-group  text-center">
                <?= Html::submitButton(
                    '<span class="glyphicon glyphicon-check"></span> ' .
                    Yii::t('ui', "Добавить"),
                    [
                        'id' => 'save-' . $createForm->formName(),
                        'class' => 'btn btn-success'
                    ]
                ); ?>
            </div>


        </section>

        <?php ActiveForm::end(); ?>

    </div>
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

</div>