<?php

namespace common\models;

use Yii;
use \common\models\base\Pupil as BasePupil;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * This is the model class for table "_pupil".
 */
class Pupil extends BasePupil
{
<<<<<<< HEAD
    public $photoFile;

    const PATH_PHOTO = '/uploads/photos/pupil';

=======
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 0;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
<<<<<<< HEAD
=======

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

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
<<<<<<< HEAD
                [[ 'gender'], 'required'],
                [['photoFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
=======
                [['age', 'gender'], 'required'],
                [['age'], 'number', 'min' => 3]
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
            ]
        );
    }


    #region Getters
    public static function getCount()
    {
        return Pupil::find()->count();
    }

    public function getLastId()
    {
        $lastId = Pupil::find()->select('id')
            ->orderBy(['id' => SORT_DESC])
            ->scalar() ?: 0;
        return ++$lastId;
    }

    public static function getPhotoAlias()
    {
        return Yii::getAlias('@appRoot') . self::PATH_PHOTO;
    }

    public function getPhotoSrc()
    {
        return Url::to(self::PATH_PHOTO . '/' . $this->img);
    }

    #endregion

    #region Checker
    public function isPhotoExists(): bool
    {
        return file_exists(self::getPhotoAlias() . '/' . $this->img);
    }

    #endregion

    public function deletePhoto(): bool
    {
        return unlink(self::getPhotoAlias() . '/' . $this->img);
    }

    public function generatePhotoName()
    {
        if (self::getIsNewRecord()) {
            return 'pupil_' . $this->getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
        } else {
            return 'pupil_' . $this->id . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
        }
    }

    public function uploadPhoto()
    {
        if ($this->validate()) {
            $path = self::getPhotoAlias();
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $photoName = $this->generatePhotoName();
            $this->photoFile->saveAs($path . '/' . $photoName);
            $this->img = $photoName;
            return true;
        } else {
            return false;
        }
    }

    public function updatePhoto()
    {
        if ($this->isPhotoExists()) {
            $this->deletePhoto();
        }
        $this->uploadPhoto();
    }
}
