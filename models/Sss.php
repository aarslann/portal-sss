<?php

namespace kouosl\sss\models;

use Yii;

/**
 * This is the model class for table "sss".
 *
 * @property int $id
 * @property string $category
 * @property string $question
 * @property string $answer
 */
class Sss extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category', 'question', 'answer'], 'required'],
            [['id'], 'integer'],
            [['question', 'answer'], 'string'],
            [['category'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'question' => 'Question',
            'answer' => 'Answer',
        ];
    }
}
