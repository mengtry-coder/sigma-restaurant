<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "about_us".
 *
 * @property int $id
 * @property string|null $description
 * @property string|null $feature_image
 * @property string|null $title
 * @property string|null $updated_date
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $created_date
 */
class AboutUs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_us';
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
            [['description', 'feature_image'], 'string', 'max' => 255],
            [['file'], 'file'],
            [['title'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'Image',
            'description' => 'Description',
            'feature_image' => 'Feature Image',
            'title' => 'Title',
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
