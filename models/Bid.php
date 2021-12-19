<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bid".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $publish
 * @property int $id_user
 * @property int $id_category
 * @property string $image
 */
class Bid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'description', 'publish', 'id_user', 'id_category', 'image'], 'required'],
            [['id', 'id_user', 'id_category'], 'integer'],
            [['description'], 'string'],
            [['publish'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'publish' => 'Publish',
            'id_user' => 'Id User',
            'id_category' => 'Id Category',
            'image' => 'Image',
        ];
    }
}
