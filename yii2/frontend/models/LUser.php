<?php

namespace frontend\models;
use Yii;
use yii\captcha\Captcha;

/**
 * This is the model class for table "l_user".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_pwd
 * @property string $u_email
 * @property string $u_phone
 * @property integer $u_z_id
 * @property string $u_answer
 */
class LUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'l_user';
    }
    public $verifyCode;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_z_id'], 'integer'],
            [['u_name', 'u_pwd', 'u_email', 'u_phone', 'u_answer'], 'string', 'max' => 255],
            ['verifyCode', 'captcha','message'=>'验证码错误'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_pwd' => 'U Pwd',
            'u_email' => 'U Email',
            'u_phone' => 'U Phone',
            'u_z_id' => 'U Z ID',
            'u_answer' => 'U Answer',
        ];
    }
}
