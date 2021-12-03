<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "_subject".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property integer $is_deleted
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
<<<<<<< HEAD
=======
 *
 * @property \common\models\RelTeacherSubject[] $relTeacherSubjects
 * @property \common\models\SubjectPrice[] $subjectPrices
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
 * @property string $aliasModel
 */
abstract class Subject extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_subject';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => BlameableBehavior::className(),
            ],
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['name'], 'required'],
            [['status', 'is_deleted'], 'integer'],
            [['name'], 'string', 'max' => 50]
=======
            [['status', 'is_deleted'], 'integer'],
            [['name'], 'string', 'max' => 255]
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
            'id' => 'ID',
            'name' => 'Name',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

=======
            'id' => Yii::t('models', 'ID'),
            'name' => Yii::t('models', 'Name'),
            'status' => Yii::t('models', 'Status'),
            'is_deleted' => Yii::t('models', 'Is Deleted'),
            'created_at' => Yii::t('models', 'Created At'),
            'updated_at' => Yii::t('models', 'Updated At'),
            'created_by' => Yii::t('models', 'Created By'),
            'updated_by' => Yii::t('models', 'Updated By'),
        ];
    }

    /**
     * @return yii\db\ActiveQuery
     */
    public function getRelTeacherSubjects()
    {
        return $this->hasMany(\common\models\RelTeacherSubject::className(), ['subject_id' => 'id']);
    }

    /**
     * @return yii\db\ActiveQuery
     */
    public function getSubjectPrices()
    {
        return $this->hasMany(\common\models\SubjectPrice::className(), ['subject_id' => 'id']);
    }

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

    
    /**
     * @inheritdoc
     * @return \common\models\query\SubjectQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SubjectQuery(get_called_class());
    }


}
