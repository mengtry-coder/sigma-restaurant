<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "testimonial".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $feature_image
 * @property string|null $position
 * @property string|null $updated_date
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $created_date
 */
class Testimonial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public $file;
    public function rules()
    {
        return [
            [['updated_date', 'created_date'], 'safe'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['description', 'feature_image'], 'string', 'max' => 255],
            [['file'], 'file'],
            [['position'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'file' => 'Image',
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'feature_image' => 'Feature Image',
            'position' => 'Position',
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
