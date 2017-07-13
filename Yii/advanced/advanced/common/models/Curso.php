<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property integer $id
 * @property string $nome
 * @property string $sigla
 * @property string $descricao
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'sigla', 'descricao'], 'required', 'message'=>'Este campo é obrigatório'],
            [['nome'], 'string', 'max' => 45],
            [['sigla'], 'string', 'max' => 4],
            [['descricao'], 'string', 'max' => 255],
            [['nome'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'sigla' => 'Sigla',
            'descricao' => 'Descricao',
        ];
    }
}
