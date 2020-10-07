<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "chef".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $feature_image
 * @property string|null $description
 * @property string|null $position
 * @property string|null $facebook_link
 * @property string|null $instagram_link
 * @property string|null $linkedin_link
 * @property string|null $twitter_link
 * @property string|null $updated_date
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $created_date
 */
class Chef extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chef';
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
            [['file'], 'file'],
            [['name', 'instagram_link', 'linkedin_link', 'twitter_link'], 'string', 'max' => 100],
            [['feature_image', 'description', 'facebook_link'], 'string', 'max' => 255],
            [['position'], 'string', 'max' => 250],
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
            'name' => 'Name',
            'feature_image' => 'Feature Image',
            'description' => 'Description',
            'position' => 'Position',
            'facebook_link' => 'Facebook Link',
            'instagram_link' => 'Instagram Link',
            'linkedin_link' => 'Linkedin Link',
            'twitter_link' => 'Twitter Link',
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
