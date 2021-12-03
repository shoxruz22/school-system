<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\search\SubjectSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="subject-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'name') ?>

<<<<<<< HEAD
		<?= $form->field($model, 'status') ?>

		<?= $form->field($model, 'is_deleted') ?>

		<?= $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

		<?php // echo $form->field($model, 'created_by') ?>

		<?php // echo $form->field($model, 'updated_by') ?>
=======
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
