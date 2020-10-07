<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "why_us".
 *
 * @property int $id
 * @property string|null $short_description
 * @property string|null $description
 * @property string|null $title
 * @property string|null $sub_title
 * @property string|null $updated_date
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $created_date
 */
class WhyUs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'why_us';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['updated_date', 'created_date'], 'safe'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['short_description', 'description'], 'string', 'max' => 255],
            [['title', 'sub_title'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'updated_date' => 'Updated Date',
            'status' => 'Status',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_date' => 'Created Date',
        ];
    }
}
