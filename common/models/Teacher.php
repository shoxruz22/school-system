<?php

namespace common\models;

use Yii;
use \common\models\base\Teacher as BaseTeacher;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * This is the model class for table "teacher".
 */
class Teacher extends BaseTeacher
{
    public $photoFile;

    const PATH_PHOTO = '/uploads/photos/teacher';

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

    public function getLastId()
    {
        $lastId = Teacher::find()->select('id')
            ->orderBy(['id' => SORT_DESC])
            ->scalar() ?: 0;
        return ++$lastId;
    }

    public function getPhotoAlias()
    {
        return Yii::getAlias('@appRoot') . self::PATH_PHOTO;
    }

    public function getPhotoSrc()
    {
        return Url::to(self::PATH_PHOTO . '/' . $this->photo);
    }

    #endregion


    public function generatePhotoName()
    {
        return 'teacher_' . $this->getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
    }

    public function uploadPhoto()
    {
        if ($this->validate()) {
            $path = $this->getPhotoAlias();
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $photoName = $this->generatePhotoName();
            $this->photoFile->saveAs($path . '/' . $photoName);
            $this->photo = $photoName;
            return true;
        } else {
            return false;
        }
    }
}
