<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "food_type".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $updated_date
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $created_date
 */
class FoodType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['updated_date', 'created_date'], 'safe'],
            [['name'], 'required'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'updated_date' => 'Updated Date',
            'status' => 'Status',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_date' => 'Created Date',
        ];
    }
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
