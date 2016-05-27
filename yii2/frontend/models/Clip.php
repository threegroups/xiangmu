<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "clip".
 *
 * @property integer $c_id
 * @property string $name
 * @property string $content
 * @property string $target
 * @property string $username
 * @property string $status
 */
class Clip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'content', 'target', 'username', 'status'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            'name' => 'Name',
            'content' => 'Content',
            'target' => 'Target',
            'username' => 'Username',
            'status' => 'Status',
        ];
    }
}
