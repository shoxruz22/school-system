<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\search\TeacherSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="teacher-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'full_name') ?>

<<<<<<< HEAD
		<?= $form->field($model, 'img') ?>

		<?= $form->field($model, 'date_birth') ?>

		<?= $form->field($model, 'gender') ?>

		<?php // echo $form->field($model, 'phone') ?>

		<?php // echo $form->field($model, 'address') ?>
=======
<<<<<<<< HEAD:backend/modules/catalog/views/teacher/_search.php
		<?= $form->field($model, 'age') ?>
========
		<?= $form->field($model, 'img') ?>

		<?= $form->field($model, 'date_birth') ?>
>>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2:backend/modules/catalog/views/pupil/_search.php

		<?= $form->field($model, 'gender') ?>

<<<<<<<< HEAD:backend/modules/catalog/views/teacher/_search.php
		<?= $form->field($model, 'address') ?>

		<?php // echo $form->field($model, 'gender') ?>
========
		<?php // echo $form->field($model, 'phone') ?>

		<?php // echo $form->field($model, 'address') ?>
>>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2:backend/modules/catalog/views/pupil/_search.php
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

		<?php // echo $form->field($model, 'status') ?>

		<?php // echo $form->field($model, 'is_deleted') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

		<?php // echo $form->field($model, 'created_by') ?>

		<?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
