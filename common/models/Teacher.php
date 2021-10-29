<?php

namespace common\models;

use Yii;
use \common\models\base\Teacher as BaseTeacher;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "teacher".
 */
class Teacher extends BaseTeacher
{
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 0;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
                [['age', 'gender'], 'required'],
                [['age'], 'number', 'min' => 18]
            ]
        );
    }

    #region Getters
    public static function getCount()
    {
        return Teacher::find()->count();
    }
    #endregion
}
