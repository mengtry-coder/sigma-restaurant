<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "custom_content".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $key
 */
class CustomContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'custom_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
            [['key'], 'string', 'max' => 250],
            [['name'], 'required'],
            [['name'], 'unique'],
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
            'key' => 'Key',
        ];
    }
}
