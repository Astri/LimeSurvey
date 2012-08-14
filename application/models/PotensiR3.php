<?php

/**
 * This is the model class for table "main_potensi_r3".
 *
  * The followings are the available columns in table 'main_potensi_r3':
 * @property string $DESAID
 * @property string $R301
 * @property string $R302A
 * @property string $NAMA_PULAU
 * @property string $R304A
 * @property string $R305A
 * @property string $R305B
 * @property string $R305D
 * @property string $R305E1
 * @property string $R305E2A
 * @property string $R305E2B
 * @property string $R305E2C
 * @property string $R305E2D
 * @property string $R305E2E
 * @property string $R305E3
 * @property string $R306A
 * @property string $R306B
 *
 * The followings are the available model relations:
 * @property KeteranganYaTidak $r305E1
 * @property KeteranganYaTidak $r305E2A
 * @property KeteranganYaTidak $r305E2B
 * @property KeteranganYaTidak $r305E2C
 * @property KeteranganYaTidak $r305E2D
 * @property KeteranganYaTidak $r305E2E
 * @property Desa $dESA
 * @property KeteranganR306a $r306A
 * @property KeteranganR306b $r306B
 * @property KeteranganR301 $r301
 * @property KeteranganR305a $r305A
 * @property KeteranganR305b $r305B
 * @property KeteranganYaTidak $r305D
 * @property KeteranganAdaTidakada $r305E3
 * @property KeteranganR304a $r304A
 */
class PotensiR3 extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PotensiR3 the static model class
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
		return 'main_potensi_r3';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('DESAID', 'required'),
            array('DESAID', 'length', 'max'=>10),
            array('R301, R305A, R305B, R305D, R305E3', 'length', 'max'=>1),
            array('R302A, NAMA_PULAU, R304A, R305E1, R305E2A, R305E2B, R305E2C, R305E2D, R305E2E, R306A, R306B', 'length', 'max'=>255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('DESAID, R301, R302A, NAMA_PULAU, R304A, R305A, R305B, R305D, R305E1, R305E2A, R305E2B, R305E2C, R305E2D, R305E2E, R305E3, R306A, R306B', 'safe', 'on'=>'search'),
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
            'r305E1' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R305E1'),
            'r305E2A' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R305E2A'),
            'r305E2B' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R305E2B'),
            'r305E2C' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R305E2C'),
            'r305E2D' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R305E2D'),
            'r305E2E' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R305E2E'),
            'dESA' => array(self::BELONGS_TO, 'Desa', 'DESAID'),
            'r306A' => array(self::BELONGS_TO, 'KeteranganR306a', 'R306A'),
            'r306B' => array(self::BELONGS_TO, 'KeteranganR306b', 'R306B'),
            'r301' => array(self::BELONGS_TO, 'KeteranganR301', 'R301'),
            'r305A' => array(self::BELONGS_TO, 'KeteranganR305a', 'R305A'),
            'r305B' => array(self::BELONGS_TO, 'KeteranganR305b', 'R305B'),
            'r305D' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R305D'),
            'r305E3' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R305E3'),
            'r304A' => array(self::BELONGS_TO, 'KeteranganR304a', 'R304A'),
        );
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DESAID' => 'Nama Desa',
			'R301' => 'Status Pemerintahan',
			'R302A' => 'Letak desa/kelurahan',
			'NAMA_PULAU' => 'Nama Pulau',
			'R304A' => 'Satuan lingkungan Setempat (SLS) terkecil dibawah desa/kelurahan',
			'R305A' => 'Lokasi desa/kelurahan',
			'R305B' => 'Kemiringan lahan',
			'R305D' => 'Ada wilayah desa/kelurahan yang berbatasan langsung dengan laut',
			'R305E1' => 'Jika wilayah desa/kelurahan berbatasan langsung ddengan laut, apakah permu-kaan air laut mengalami kenaikan selama 5 tahun terakhir',
			'R305E2A' => 'Jika wilayah desa/kelurahan berbatasan langsung ddengan laut, pemanfaatan lahan  untuk PERIKANAN TANGKAP',
			'R305E2B' => 'Jika wilayah desa/kelurahan berbatasan langsung ddengan laut, pemanfaatan lahan  untuk PERIKANAN BUDIDAYA',
			'R305E2C' => 'Jika wilayah desa/kelurahan berbatasan langsung ddengan laut, pemanfaatan lahan  untuk TAMBAK GARAM',
			'R305E2D' => 'Jika wilayah desa/kelurahan berbatasan langsung ddengan laut, pemanfaatan lahan  untuk WISATA BAHARI',
			'R305E2E' => 'Jika wilayah desa/kelurahan berbatasan langsung ddengan laut, pemanfaatan lahan  untuk TRANSPORTASI UMUM',
			'R305E3' => 'Hutan mangrove (misalnya: bakau, api-api, pedada, tanjang, dll) di wilayah desa/kelurahan',
			'R306A' => 'Lokasi desa/kelurahan terhadap kawasan hutan',
			'R306B' => 'Fungsi kawasan hutan',
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

		$criteria->compare('DESAID',$this->DESAID,true);
		$criteria->compare('R301',$this->R301,true);
		$criteria->compare('R302A',$this->R302A,true);
		$criteria->compare('NAMA_PULAU',$this->NAMA_PULAU,true);
		$criteria->compare('R304A',$this->R304A,true);
		$criteria->compare('R305A',$this->R305A,true);
		$criteria->compare('R305B',$this->R305B,true);
		$criteria->compare('R305D',$this->R305D,true);
		$criteria->compare('R305E1',$this->R305E1,true);
		$criteria->compare('R305E2A',$this->R305E2A,true);
		$criteria->compare('R305E2B',$this->R305E2B,true);
		$criteria->compare('R305E2C',$this->R305E2C,true);
		$criteria->compare('R305E2D',$this->R305E2D,true);
		$criteria->compare('R305E2E',$this->R305E2E,true);
		$criteria->compare('R305E3',$this->R305E3,true);
		$criteria->compare('R306A',$this->R306A,true);
		$criteria->compare('R306B',$this->R306B,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}