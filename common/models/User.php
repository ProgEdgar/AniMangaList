<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $IdUser
 * @property string $Username
 * @property string $Email
 * @property string $Gender
 * @property string|null $Image
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $verification_token
 *
 * @property Library[] $libraries
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Username', 'Email', 'Gender', 'auth_key', 'password_hash'], 'required'],
            [['Gender'], 'string'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['Username', 'Email', 'password_hash', 'password_reset_token', 'verification_token'], 'string', 'max' => 255],
            [['Image'], 'string', 'max' => 50],
            [['auth_key'], 'string', 'max' => 100],
            [['Username'], 'unique'],
            [['Email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdUser' => 'Id User',
            'Username' => 'Username',
            'Email' => 'Email',
            'Gender' => 'Gender',
            'Image' => 'Image',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
        ];
    }

    /**
     * Gets query for [[Libraries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLibraries()
    {
        return $this->hasMany(Library::class, ['User_Id' => 'IdUser']);
    }
}
