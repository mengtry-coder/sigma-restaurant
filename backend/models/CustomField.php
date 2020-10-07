<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "custom_field".
 *
 * @property int $id
 * @property string|null $feature_image
 * @property string|null $key
 */
class CustomField extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'custom_field';
    }

    /**
     * {@inheritdoc}
     */
    public $file;
    public function rules()
    {
        return [
            [['feature_image'], 'string', 'max' => 255],
            [['file'], 'file'],
            [['key'], 'string', 'max' => 250],
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
            'feature_image' => 'Feature Image',
            'key' => 'Key',
        ];
    }
}
