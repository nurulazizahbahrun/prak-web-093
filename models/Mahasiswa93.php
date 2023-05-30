<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa93".
 *
 * @property int $id93
 * @property string $nim93
 * @property string $nama93
 * @property string $kelas93
 * @property string $status93
 */
class Mahasiswa93 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa93';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim93', 'nama93', 'kelas93', 'status93'], 'required'],
            [['nim93', 'nama93', 'kelas93', 'status93'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id93' => 'Id93',
            'nim93' => 'Nim93',
            'nama93' => 'Nama93',
            'kelas93' => 'Kelas93',
            'status93' => 'Status93',
        ];
    }
}
