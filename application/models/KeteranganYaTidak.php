<?php

/**
 * This is the model class for table "keterangan_ya_tidak".
 *
 * The followings are the available columns in table 'keterangan_ya_tidak':
 * @property string $id
 * @property string $nama
 *
 * The followings are the available model relations:
 * @property MainPotensiR3[] $mainPotensiR3s
 * @property MainPotensiR3[] $mainPotensiR3s1
 * @property MainPotensiR3[] $mainPotensiR3s2
 * @property MainPotensiR3[] $mainPotensiR3s3
 * @property MainPotensiR3[] $mainPotensiR3s4
 * @property MainPotensiR3[] $mainPotensiR3s5
 * @property MainPotensiR3[] $mainPotensiR3s6
 * @property MainPotensiR5[] $mainPotensiR5s
 * @property MainPotensiR5[] $mainPotensiR5s1
 * @property MainPotensiR5[] $mainPotensiR5s2
 * @property MainPotensiR5[] $mainPotensiR5s3
 * @property MainPotensiR5[] $mainPotensiR5s4
 * @property MainPotensiR5[] $mainPotensiR5s5
 * @property MainPotensiR5[] $mainPotensiR5s6
 * @property MainPotensiR5[] $mainPotensiR5s7
 * @property MainPotensiR5[] $mainPotensiR5s8
 * @property MainPotensiR5[] $mainPotensiR5s9
 * @property MainPotensiR5[] $mainPotensiR5s10
 * @property MainPotensiR5[] $mainPotensiR5s11
 * @property MainPotensiR5[] $mainPotensiR5s12
 * @property MainPotensiR5[] $mainPotensiR5s13
 * @property MainPotensiR5[] $mainPotensiR5s14
 * @property MainPotensiR5[] $mainPotensiR5s15
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
 * @property MainPotensiR6[] $mainPotensiR6s13
 * @property MainPotensiR6[] $mainPotensiR6s14
 * @property MainPotensiR6[] $mainPotensiR6s15
 * @property MainPotensiR6[] $mainPotensiR6s16
 * @property MainPotensiR6[] $mainPotensiR6s17
 * @property MainPotensiR6[] $mainPotensiR6s18
 * @property MainPotensiR6[] $mainPotensiR6s19
 */
class KeteranganYaTidak extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KeteranganYaTidak the static model class
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
		return 'keterangan_ya_tidak';
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
			'mainPotensiR3s' => array(self::HAS_MANY, 'MainPotensiR3', 'R305E1'),
			'mainPotensiR3s1' => array(self::HAS_MANY, 'MainPotensiR3', 'R305E2A'),
			'mainPotensiR3s2' => array(self::HAS_MANY, 'MainPotensiR3', 'R305E2B'),
			'mainPotensiR3s3' => array(self::HAS_MANY, 'MainPotensiR3', 'R305E2C'),
			'mainPotensiR3s4' => array(self::HAS_MANY, 'MainPotensiR3', 'R305E2D'),
			'mainPotensiR3s5' => array(self::HAS_MANY, 'MainPotensiR3', 'R305E2E'),
			'mainPotensiR3s6' => array(self::HAS_MANY, 'MainPotensiR3', 'R305D'),
			'mainPotensiR5s' => array(self::HAS_MANY, 'MainPotensiR5', 'R511BK4'),
			'mainPotensiR5s1' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B2K2'),
			'mainPotensiR5s2' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B1K3'),
			'mainPotensiR5s3' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B2K3'),
			'mainPotensiR5s4' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B1K4'),
			'mainPotensiR5s5' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B2K4'),
			'mainPotensiR5s6' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B3K2'),
			'mainPotensiR5s7' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B4K2'),
			'mainPotensiR5s8' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B5K2'),
			'mainPotensiR5s9' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B3K3'),
			'mainPotensiR5s10' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B3K4'),
			'mainPotensiR5s11' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B4K3'),
			'mainPotensiR5s12' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B4K4'),
			'mainPotensiR5s13' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B5K4'),
			'mainPotensiR5s14' => array(self::HAS_MANY, 'MainPotensiR5', 'R511AK4'),
			'mainPotensiR5s15' => array(self::HAS_MANY, 'MainPotensiR5', 'R506B1K2'),
			'mainPotensiR6s' => array(self::HAS_MANY, 'MainPotensiR6', 'R60101K2'),
			'mainPotensiR6s1' => array(self::HAS_MANY, 'MainPotensiR6', 'R60108K2'),
			'mainPotensiR6s2' => array(self::HAS_MANY, 'MainPotensiR6', 'R60109K2'),
			'mainPotensiR6s3' => array(self::HAS_MANY, 'MainPotensiR6', 'R60110K2'),
			'mainPotensiR6s4' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B01K2'),
			'mainPotensiR6s5' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B02K2'),
			'mainPotensiR6s6' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B03K2'),
			'mainPotensiR6s7' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B04K2'),
			'mainPotensiR6s8' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B05K2'),
			'mainPotensiR6s9' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B06K2'),
			'mainPotensiR6s10' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B07K2'),
			'mainPotensiR6s11' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B08K2'),
			'mainPotensiR6s12' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B09K2'),
			'mainPotensiR6s13' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B10K2'),
			'mainPotensiR6s14' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B11K2'),
			'mainPotensiR6s15' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B12K2'),
			'mainPotensiR6s16' => array(self::HAS_MANY, 'MainPotensiR6', 'R602B13K2'),
			'mainPotensiR6s17' => array(self::HAS_MANY, 'MainPotensiR6', 'R60105K2'),
			'mainPotensiR6s18' => array(self::HAS_MANY, 'MainPotensiR6', 'R60106K2'),
			'mainPotensiR6s19' => array(self::HAS_MANY, 'MainPotensiR6', 'R60107K2'),
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