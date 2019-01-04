<?php

namespace kouosl\sss\models;

use Yii;

/**
 * This is the model class for table "usersss".
 *
 * @property int $id
 * @property string $question
 * @property string $email
 */
class Usersss extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usersss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question', 'email'], 'required'],
            [['question', 'email'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'email' => 'Email',
        ];
    }
}
