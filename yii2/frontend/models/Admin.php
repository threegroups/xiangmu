<?php

namespace frontend\models;
//use yii\web\UploadedFile;
use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $a_id
 * @property string $a_name
 * @property string $a_pwd
 * @property string $a_email
 * @property string $a_phone
 * @property integer $a_state
 * @property string $a_place
 * @property string $a_time
 * @property string $a_del
 * @property string $a_sex
 * @property string $a_img
 */
class Admin extends \yii\db\ActiveRecord
{
    public $a_img;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_state'], 'integer'],
            [['a_time'], 'safe'],
            [['a_name', 'a_pwd', 'a_email', 'a_phone', 'a_place', 'a_del', 'a_sex', 'a_img'], 'string', 'max' => 255],
            [['a_img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,bmp,jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'a_name' => 'A Name',
            'a_pwd' => 'A Pwd',
            'a_email' => 'A Email',
            'a_phone' => 'A Phone',
            'a_state' => 'A State',
            'a_place' => 'A Place',
            'a_time' => 'A Time',
            'a_del' => 'A Del',
            'a_sex' => 'A Sex',
            'a_img' => 'A Img',
        ];
    }
    public function upload()
    {
        return $this->a_img->saveAs('uploads/' . $this->a_img->baseName . '.' . $this->a_img->extension);

    }

}
