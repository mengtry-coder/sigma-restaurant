<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $feature_image
 * @property float|null $price
 * @property string|null $updated_date
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $created_date
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public $file;
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['updated_date', 'created_date'], 'safe'],
            [['status', 'created_by', 'updated_by', 'food_type_id'], 'integer'],
            [['file'], 'file'],
            [['name', 'price'], 'required'],
            [['name'], 'unique'],
            [['name'], 'string', 'max' => 100],
            [['description', 'feature_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'food_type_id' => 'Type',
            'file' => 'Image',
            'name' => 'Name',
            'description' => 'Description',
            'feature_image' => 'Feature Image',
            'price' => 'Price',
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
    public function getFoodType()
    {
        return $this->hasOne(FoodType::className(), ['id' => 'food_type_id']);
    }
}
