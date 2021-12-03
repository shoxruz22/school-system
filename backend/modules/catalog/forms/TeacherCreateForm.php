<?php

namespace backend\modules\catalog\forms;

use common\models\Teacher;
use Yii;
use yii\base\Model;

class TeacherCreateForm extends Model
{
    public $full_name;
    public $gender;
    public $age;
    public $phone;
    public $address;
    public $status;
    public $subject_list;
    public $photo_db;

    public $photoFile;

    public function rules()
    {
        return [
            [['full_name', 'gender', 'age', 'phone', 'address', 'status'], 'required'],
            [['age', 'gender', 'status'], 'integer'],
            ['subject_list', 'safe'],
            [['full_name', 'phone', 'address', 'photo_db'], 'string', 'max' => 255],
            [['photoFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function generatePhotoName()
    {
        return 'teacher_' . Teacher::getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile->extension;
    }


    public function uploadPhoto()
    {
        if ($this->validate()) {
            $path = Teacher::getPhotoAlias();
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $photoName = $this->generatePhotoName();
            $this->photoFile->saveAs($path . '/' . $photoName);
            $this->photo_db = $photoName;
            return true;
        } else {
            return false;
        }
    }

    public function saveData()
    {
        $teacherModel = Teacher::create(
            $this->full_name,
            $this->gender,
            $this->age,
            $this->phone,
            $this->photo_db,
            $this->address,
            $this->status
        );

        $transaction = Yii::$app->db->beginTransaction();
        try {
            if (!$teacherModel->save()) {
                throw new \Exception('Произошла ошибка при сохранении данных.');
            }
            $teacherModel->addSubjects($this->subject_list);
            Yii::$app->session->setFlash('success', Yii::t('ui', "Данные созданы успешно"));
            $transaction->commit();
        } catch (\Exception $e) {
            Yii::$app->session->setFlash('error', Yii::t('ui', "Произошла ошибка. Пожалуйста, попробуйте еще раз") . $e->getMessage());
            $transaction->rollBack();
            throw $e;
        }
    }
}
