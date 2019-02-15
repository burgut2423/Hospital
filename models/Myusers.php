<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $age
 * @property string $gender
 * @property string $username
 * @property string $password
 * @property string $authkey
 * @property integer $role
 */
class Myusers extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'gender', 'username', 'password', 'authkey', 'role'], 'required'],
            [['role'], 'integer'],
            [['name', 'age', 'gender', 'username', 'password', 'authkey'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'gender' => 'Gender',
            'username' => 'Username',
            'password' => 'Password',
            'authkey' => 'Authkey',
            'role' => 'Role',
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException("find null");
    }

    public function getId()
    {
        return $this->id;
    }


    public function getAuthKey()
    {
        return $this->authkey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function validatePassword($password)
    {
        return ($password === $this->password);
    }
     public  static function  getRole($role){
        return static ::findOne(['role'=>$role]);
     }
}