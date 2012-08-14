<?php

/**
 * This is the model class for table "keterangan_r704xxx".
 *
 * The followings are the available columns in table 'keterangan_r704xxx':
 * @property string $id
 * @property string $nama
 *
 * The followings are the available model relations:
 * @property MainPotensiR7[] $mainPotensiR7s
 * @property MainPotensiR7[] $mainPotensiR7s1
 * @property MainPotensiR7[] $mainPotensiR7s2
 * @property MainPotensiR7[] $mainPotensiR7s3
 * @property MainPotensiR7[] $mainPotensiR7s4
 * @property MainPotensiR7[] $mainPotensiR7s5
 * @property MainPotensiR7[] $mainPotensiR7s6
 * @property MainPotensiR7[] $mainPotensiR7s7
 * @property MainPotensiR7[] $mainPotensiR7s8
 * @property MainPotensiR7[] $mainPotensiR7s9
 * @property MainPotensiR7[] $mainPotensiR7s10
 */
class KeteranganR704xxx extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KeteranganR704xxx the static model class
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
		return 'keterangan_r704xxx';
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
			'mainPotensiR7s' => array(self::HAS_MANY, 'MainPotensiR7', 'R704AK5'),
			'mainPotensiR7s1' => array(self::HAS_MANY, 'MainPotensiR7', 'R704BK5'),
			'mainPotensiR7s2' => array(self::HAS_MANY, 'MainPotensiR7', 'R704CK5'),
			'mainPotensiR7s3' => array(self::HAS_MANY, 'MainPotensiR7', 'R704DK5'),
			'mainPotensiR7s4' => array(self::HAS_MANY, 'MainPotensiR7', 'R704EK5'),
			'mainPotensiR7s5' => array(self::HAS_MANY, 'MainPotensiR7', 'R704FK5'),
			'mainPotensiR7s6' => array(self::HAS_MANY, 'MainPotensiR7', 'R704GK5'),
			'mainPotensiR7s7' => array(self::HAS_MANY, 'MainPotensiR7', 'R704HK5'),
			'mainPotensiR7s8' => array(self::HAS_MANY, 'MainPotensiR7', 'R704IK5'),
			'mainPotensiR7s9' => array(self::HAS_MANY, 'MainPotensiR7', 'R704KK5'),
			'mainPotensiR7s10' => array(self::HAS_MANY, 'MainPotensiR7', 'R704LK5'),
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