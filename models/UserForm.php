<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.07.15
 * Time: 0:26
 */

namespace app\models;

use yii\base\Model;

class UserForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
                [['name', 'email'], 'required'],
                ['email','email'],
                ];
    }
}