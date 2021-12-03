<?php

namespace common\models;

use Yii;
use \common\models\base\Teacher as BaseTeacher;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
<<<<<<< HEAD
 * This is the model class for table "_teacher".
 */
class Teacher extends BaseTeacher
{
    public $photoFile;

=======
 * This is the model class for table "teacher".
 * @property \common\models\Subject[] $subjects
 */
class Teacher extends BaseTeacher
{
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
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
<<<<<<< HEAD
                [[ 'gender'], 'required'],
                [['photoFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
=======
                [['age', 'gender'], 'required'],
                [['age'], 'number', 'min' => 18],
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
            ]
        );
    }

<<<<<<< HEAD

    #region Getters
=======
    public function getSubjects()
    {
        return $this->hasMany(Subject::class, ['id' => 'subject_id'])
            ->via('relTeacherSubjects');
    }

    #region Getters
    public function getSubjectsText()
    {
        $result = '';
        foreach ($this->subjects as $subject) {
            $result .= $subject->name . '; ';
        }
        return $result;
    }

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
    public static function getCount()
    {
        return Teacher::find()->count();
    }

<<<<<<< HEAD
    public function getLastId()
=======
    public static function getLastId()
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
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
<<<<<<< HEAD
        return Url::to(self::PATH_PHOTO . '/' . $this->img);
=======
        return Url::to(self::PATH_PHOTO . '/' . $this->photo);
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
    }

    #endregion

    #region Checker
    public function isPhotoExists(): bool
    {
<<<<<<< HEAD
        return file_exists(self::getPhotoAlias() . '/' . $this->img);
=======
        return file_exists(self::getPhotoAlias() . '/' . $this->photo);
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
    }

    #endregion

    public function deletePhoto(): bool
    {
<<<<<<< HEAD
        return unlink(self::getPhotoAlias() . '/' . $this->img);
=======
        return unlink(self::getPhotoAlias() . '/' . $this->photo);
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
    }

    public function generatePhotoName()
    {
        if (self::getIsNewRecord()) {
<<<<<<< HEAD
            return 'teacher_' . $this->getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
=======
            return 'teacher_' . self::getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
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
<<<<<<< HEAD
            $this->img = $photoName;
=======
            $this->photo = $photoName;
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
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
<<<<<<< HEAD
=======

    #region iSOLID
    public function addSubjects(array $subject_list)
    {
        foreach ($subject_list as $subject_id) {
            $subjectModel = Subject::findOne($subject_id);
            $this->link('subjects', $subjectModel);
        }
    }

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

    public function editData(
        $full_name,
        $gender,
        $age,
        $phone,
        $photo_db,
        $address,
        $status
    )
    {
        $this->full_name = $full_name;
        $this->gender = $gender;
        $this->age = $age;
        $this->phone = $phone;
        $this->photo = $photo_db;
        $this->address = $address;
        $this->status = $status;
    }
    #endregion
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
}
