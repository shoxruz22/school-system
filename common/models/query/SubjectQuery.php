<?php

namespace common\models\query;

<<<<<<< HEAD
/**
 * This is the ActiveQuery class for [[\common\models\Subject]].
 *
 * @see \common\models\Subject
 */
class SubjectQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\Subject[]|array
=======
use common\models\Subject;

/**
 * This is the ActiveQuery class for [[\app\models\Subject]].
 *
 * @see \app\models\Subject
 */
class SubjectQuery extends \yii\db\ActiveQuery
{
    public $tableName = '_subject';

    /**
     * @inheritdoc
     * @return \app\models\Subject[]|array
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
<<<<<<< HEAD
     * @return \common\models\Subject|array|null
=======
     * @return \app\models\Subject|array|null
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
<<<<<<< HEAD
=======

    public function active()
    {
        return $this->andWhere(["$this->tableName.status" => Subject::STATUS_ACTIVE]);
    }
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
}
