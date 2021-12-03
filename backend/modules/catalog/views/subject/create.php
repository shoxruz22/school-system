<?php

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


    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?= Html::a(Yii::t('ui', 'Назад'), ['index'], ['class' => 'btn btn-danger']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
