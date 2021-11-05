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
    public $photoFile;

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
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
                [['age', 'gender'], 'required'],
                [['age'], 'number', 'min' => 18],
                [['photoFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            ]
        );
    }

    #region Getters
    public static function getCount()
    {
        return Teacher::find()->count();
    }

    #endregion


    public function upload()
    {
        if ($this->validate()) {
            $photoName = $this->photoFile->baseName . '.' . $this->photoFile->extension;
            $this->photoFile->saveAs('uploads/' . $photoName);
            $this->photo = $photoName;
            return true;
        } else {
            return false;
        }
    }
}
