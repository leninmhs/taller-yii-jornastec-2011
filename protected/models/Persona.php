<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property integer $id_persona
 * @property string $nombre
 * @property string $apellido
 * @property string $cedula
 * @property string $sexo
 * @property string $fecha_nacimiento
 * @property string $foto
 * @property integer $id_ocupacion
 * @property integer $id_estado
 *
 * The followings are the available model relations:
 * @property Estado $idEstado
 * @property Ocupacion $idOcupacion
 */
class Persona extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, cedula, sexo, fecha_nacimiento, id_ocupacion, id_estado', 'required'),
			array('id_ocupacion, id_estado', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido', 'length', 'max'=>100),
			array('cedula', 'length', 'max'=>10),
			array('sexo', 'length', 'max'=>1),
			array('foto', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_persona, nombre, apellido, cedula, sexo, fecha_nacimiento, foto, id_ocupacion, id_estado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idEstado' => array(self::BELONGS_TO, 'Estado', 'id_estado'),
			'idOcupacion' => array(self::BELONGS_TO, 'Ocupacion', 'id_ocupacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_persona' => 'Id Persona',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'cedula' => 'Cedula',
			'sexo' => 'Sexo',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'foto' => 'Foto',
			'id_ocupacion' => 'Id Ocupacion',
			'id_estado' => 'Id Estado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_persona',$this->id_persona);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('id_ocupacion',$this->id_ocupacion);
		$criteria->compare('id_estado',$this->id_estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}