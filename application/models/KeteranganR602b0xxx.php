<?php

/**
 * This is the model class for table "keterangan_r602b0xxx".
 *
 * The followings are the available columns in table 'keterangan_r602b0xxx':
 * @property string $id
 * @property string $nama
 *
 * The followings are the available model relations:
 * @property MainPotensiR6[] $mainPotensiR6s
 * @property MainPotensiR6[] $mainPotensiR6s1
 * @property MainPotensiR6[] $mainPotensiR6s2
 * @property MainPotensiR6[] $mainPotensiR6s3
 * @property MainPotensiR6[] $mainPotensiR6s4
 * @property MainPotensiR6[] $mainPotensiR6s5
 * @property MainPotensiR6[] $mainPotensiR6s6
 * @property MainPotensiR6[] $mainPotensiR6s7
 * @property MainPotensiR6[] $mainPotensiR6s8
 * @property MainPotensiR6[] $mainPotensiR6s9
 * @property MainPotensiR6[] $mainPotensiR6s10
 * @property MainPotensiR6[] $mainPotensiR6s11
 * @property MainPotensiR6[] $mainPotensiR6s12
 */
class KeteranganR602b0xxx extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KeteranganR602b0xxx the static model class
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
		return 'keterangan_r602b0xxx';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, nama', 'required'),
			array('id', 'length', 'max'=>1),
			array('nama', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama', 'safe', 'on'=>'search'),
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
			'mainPotensiR6s' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B01K3'),
			'mainPotensiR6s1' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B02K3'),
			'mainPotensiR6s2' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B03K3'),
			'mainPotensiR6s3' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B04K3'),
			'mainPotensiR6s4' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B05K3'),
			'mainPotensiR6s5' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B06K3'),
			'mainPotensiR6s6' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B07K3'),
			'mainPotensiR6s7' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B08K3'),
			'mainPotensiR6s8' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B09K3'),
			'mainPotensiR6s9' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B10K3'),
			'mainPotensiR6s10' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B11K3'),
			'mainPotensiR6s11' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B12K3'),
			'mainPotensiR6s12' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B13K3'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nama',$this->nama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}