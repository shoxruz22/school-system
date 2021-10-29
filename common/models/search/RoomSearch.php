<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Room;

/**
* RoomSearch represents the model behind the search form about `common\models\Room`.
*/
class RoomSearch extends Room
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'name', 'number_of_students', 'status', 'is_deleted', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['type'], 'safe'],
];
}

/**
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = Room::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'name' => $this->name,
            'number_of_students' => $this->number_of_students,
            'status' => $this->status,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type]);

return $dataProvider;
}
}