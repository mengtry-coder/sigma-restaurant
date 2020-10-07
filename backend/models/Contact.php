<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string|null $location
 * @property string|null $open_day
 * @property string|null $email
 * @property string|null $contact
 * @property string|null $short_description
 * @property string|null $description
 * @property string|null $title
 * @property string|null $open_time
 * @property string|null $updated_date
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $created_date
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['open_time', 'updated_date', 'created_date'], 'safe'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['location', 'brand_name', 'open_day', 'email', 'contact', 'title', 'twitter_url', 'facebook_url', 'instagram_url', 'skype_url', 'linkedin_url'], 'string', 'max' => 250],
            [['short_description', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'twitter_url' => 'Twitter',
            'facebook_url' => 'Facebook',
            'instagram_url' => 'Instagram',
            'skype_url' => 'Skype',
            'linkedin_url' => 'Linkedin',
            'id' => 'Unique Key',
            'brand_name' => 'Brand Name',
            'location' => 'Location',
            'open_day' => 'Open Day',
            'email' => 'Email',
            'contact' => 'Contact',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'title' => 'Title',
            'open_time' => 'Open Time',
            'updated_date' => 'Updated Date',
            'status' => 'Status',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_date' => 'Created Date',
        ];
    }
}
