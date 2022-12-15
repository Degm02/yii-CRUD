<?php

namespace app\models;

use Yii;

/**
 * this is the model class for table "oned".
 * 
 * @property int $id
 * @property string $nombre
 * @property string $nacionalidad
 * @property int $edad
 */
class Miembro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'miembros';
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'nacionalidad', 'edad'],'required'],
            [['nombre'], 'string', 'max'=>255],
            [['nacionalidad'],'string','max'=>255],
            [['edad'],'integer'],
        ];
}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'nacionalidad' => 'Nacionalidad',
            'edad' => 'Edad',
        ];
    }
}