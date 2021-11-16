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
            ]
        );
    }

    #region Getters
    public static function getCount()
    {
        return Teacher::find()->count();
    }

    public static function getLastId()
    {
        $lastId = Teacher::find()->select('id')
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
        return Url::to(self::PATH_PHOTO . '/' . $this->photo);
    }

    #endregion

    #region Checker
    public function isPhotoExists(): bool
    {
        return file_exists(self::getPhotoAlias() . '/' . $this->photo);
    }

    #endregion

    public function deletePhoto(): bool
    {
        return unlink(self::getPhotoAlias() . '/' . $this->photo);
    }

    public function generatePhotoName()
    {
        if (self::getIsNewRecord()) {
            return 'teacher_' . self::getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
        } else {
            return 'teacher_' . $this->id . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
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
            $this->photo = $photoName;
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

    #region iSOLID
    public static function create(
        $full_name,
        $gender,
        $age,
        $phone,
        $photo_db,
        $address,
        $status
    )
    {
        $newModel = new Teacher;

        $newModel->full_name = $full_name;
        $newModel->gender = $gender;
        $newModel->age = $age;
        $newModel->phone = $phone;
        $newModel->photo = $photo_db;
        $newModel->address = $address;
        $newModel->status = $status;

        return $newModel;
    }
    #endregion
}
