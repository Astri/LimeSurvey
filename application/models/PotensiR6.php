<?php

/**
 * This is the model class for table "main_potensi_r6".
 *
 * The followings are the available columns in table 'main_potensi_r6':
 * @property string $DESAID
 * @property string $R60101K2
 * @property integer $R60101K3
 * @property integer $R60101K4
 * @property string $R60101K5
 * @property string $R60102K2
 * @property integer $R60102K3
 * @property integer $R60102K4
 * @property string $R60102K5
 * @property string $R60103K2
 * @property integer $R60103K3
 * @property integer $R60103K4
 * @property string $R60103K5
 * @property string $R60104K2
 * @property integer $R60104K3
 * @property integer $R60104K4
 * @property string $R60104K5
 * @property string $R60105K2
 * @property integer $R60105K3
 * @property integer $R60105K4
 * @property string $R60105K5
 * @property string $R60106K2
 * @property integer $R60106K3
 * @property integer $R60106K4
 * @property string $R60106K5
 * @property string $R60107K2
 * @property integer $R60107K3
 * @property integer $R60107K4
 * @property string $R60107K5
 * @property string $R60108K2
 * @property integer $R60108K3
 * @property integer $R60108K4
 * @property string $R60108K5
 * @property string $R60109K2
 * @property integer $R60109K3
 * @property integer $R60109K4
 * @property string $R60109K5
 * @property string $R60110K2
 * @property integer $R60110K3
 * @property integer $R60110K4
 * @property string $R60110K5
 * @property string $R602A
 * @property string $R602B01K2
 * @property string $R602B01K3
 * @property string $R602B02K2
 * @property string $R602B02K3
 * @property string $R602B03K2
 * @property string $R602B03K3
 * @property string $R602B04K2
 * @property string $R602B04K3
 * @property string $R602B05K2
 * @property string $R602B05K3
 * @property string $R602B06K2
 * @property string $R602B06K3
 * @property string $R602B07K2
 * @property string $R602B07K3
 * @property string $R602B08K2
 * @property string $R602B08K3
 * @property string $R602B09K2
 * @property string $R602B09K3
 * @property string $R602B10K2
 * @property string $R602B10K3
 * @property string $R602B11K2
 * @property string $R602B11K3
 * @property string $R602B12K2
 * @property string $R602B12K3
 * @property string $R602B13K2
 * @property string $R602B13K3
 * @property string $R602BK4
 * @property string $R603A1
 * @property string $R603A2
 * @property string $R603A3
 * @property string $R603A4
 * @property string $R603A5
 * @property string $R603B1
 * @property string $R603B2
 * @property string $R603B3
 * @property string $R603B4
 * @property string $R603B5
 * @property string $R603B6
 * @property string $R603B7
 * @property string $R603B8
 * @property string $R603B9
 * @property string $R603B10
 * @property string $R603B11
 * @property string $R603B12
 * @property string $R603B13
 *
 * The followings are the available model relations:
 * @property KeteranganYaTidak $r60101K2
 * @property KeteranganYaTidak $r60102K2
 * @property KeteranganYaTidak $r60103K2
 * @property KeteranganYaTidak $r60104K2
 * @property KeteranganYaTidak $r60105K2
 * @property KeteranganYaTidak $r60106K2
 * @property KeteranganYaTidak $r60107K2
 * @property KeteranganYaTidak $r60108K2
 * @property KeteranganYaTidak $r60109K2
 * @property KeteranganYaTidak $r60110K2
 * @property Desa $dESA
 * @property KeteranganYaTidak $r60108K2
 * @property KeteranganYaTidak $r60109K2
 * @property KeteranganYaTidak $r60110K2
 * @property KeteranganYaTidak $r602B01K2
 * @property KeteranganR602b0xxx $r602B01K3
 * @property KeteranganYaTidak $r602B02K2
 * @property KeteranganR602b0xxx $r602B02K3
 * @property KeteranganYaTidak $r602B03K2
 * @property KeteranganR602b0xxx $r602B03K3
 * @property KeteranganYaTidak $r602B04K2
 * @property KeteranganR602a $r602A
 * @property KeteranganR602b0xxx $r602B04K3
 * @property KeteranganYaTidak $r602B05K2
 * @property KeteranganR602b0xxx $r602B05K3
 * @property KeteranganYaTidak $r602B06K2
 * @property KeteranganYaTidak $r602B07K2
 * @property KeteranganYaTidak $r602B08K2
 * @property KeteranganYaTidak $r602B09K2
 * @property KeteranganYaTidak $r602B10K2
 * @property KeteranganYaTidak $r602B11K2
 * @property KeteranganYaTidak $r602B12K2
 * @property KeteranganR603a1 $r603A1
 * @property KeteranganYaTidak $r602B13K2
 * @property KeteranganR602b0xxx $r602B06K3
 * @property KeteranganR602b0xxx $r602B07K3
 * @property KeteranganR602b0xxx $r602B08K3
 * @property KeteranganR602b0xxx $r602B09K3
 * @property KeteranganR602b0xxx $r602B10K3
 * @property KeteranganR602b0xxx $r602B11K3
 * @property KeteranganR602b0xxx $r602B12K3
 * @property KeteranganR602b0xxx $r602B13K3
 * @property KeteranganR602bk4 $r602BK4
 * @property KeteranganR603a2 $r603A2
 * @property KeteranganAdaTidakada $r603A5
 * @property KeteranganAdaTidakada $r603B1
 * @property KeteranganAdaTidakada $r603B2
 * @property KeteranganAdaTidakada $r603B3
 * @property KeteranganAdaTidakada $r603B4
 * @property KeteranganAdaTidakada $r603B5
 * @property KeteranganAdaTidakada $r603B6
 * @property KeteranganAdaTidakada $r603B7
 * @property KeteranganAdaTidakada $r603B8
 * @property KeteranganAdaTidakada $r603B9
 * @property KeteranganR603a3 $r603A3
 * @property KeteranganAdaTidakada $r603B10
 * @property KeteranganAdaTidakada $r603B11
 * @property KeteranganAdaTidakada $r603B12
 * @property KeteranganAdaTidakada $r603B13
 * @property KeteranganR603a4 $r603A4
 * @property KeteranganYaTidak $r60105K2
 * @property KeteranganYaTidak $r60106K2
 * @property KeteranganYaTidak $r60107K2
 */
class PotensiR6 extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PotensiR6 the static model class
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
		return 'main_potensi_r6';
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
			array('R60101K3, R60101K4, R60102K3, R60102K4, R60103K3, R60103K4, R60104K3, R60104K4, R60105K3, R60105K4, R60106K3, R60106K4, R60107K3, R60107K4, R60108K3, R60108K4, R60109K3, R60109K4, R60110K3, R60110K4', 'numerical', 'integerOnly'=>true),
			array('DESAID', 'length', 'max'=>10),
			array('R60101K2, R60101K5, R60102K2, R60102K5, R60103K2, R60103K5, R60104K2, R60104K5, R60105K2, R60105K5, R60106K2, R60106K5, R60107K2, R60107K5, R60108K2, R60108K5, R60109K2, R60109K5, R60110K2, R60110K5, R602B01K2, R602B01K3, R602B02K2, R602B02K3, R602B03K2, R602B03K3, R602B04K2, R602B04K3, R602B05K2, R602B05K3, R602B06K2, R602B06K3, R602B07K2, R602B07K3, R602B08K2, R602B08K3, R602B09K2, R602B09K3, R602B10K2, R602B10K3, R602B11K2, R602B11K3, R602B12K2, R602B12K3, R602B13K2, R602B13K3, R602BK4, R603A5, R603B1, R603B2, R603B3, R603B4, R603B5, R603B6, R603B7, R603B8, R603B9, R603B10, R603B11, R603B12, R603B13', 'length', 'max'=>255),
			array('R602A', 'length', 'max'=>2),
			array('R603A1, R603A2, R603A3, R603A4', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DESAID, R60101K2, R60101K3, R60101K4, R60101K5, R60102K2, R60102K3, R60102K4, R60102K5, R60103K2, R60103K3, R60103K4, R60103K5, R60104K2, R60104K3, R60104K4, R60104K5, R60105K2, R60105K3, R60105K4, R60105K5, R60106K2, R60106K3, R60106K4, R60106K5, R60107K2, R60107K3, R60107K4, R60107K5, R60108K2, R60108K3, R60108K4, R60108K5, R60109K2, R60109K3, R60109K4, R60109K5, R60110K2, R60110K3, R60110K4, R60110K5, R602A, R602B01K2, R602B01K3, R602B02K2, R602B02K3, R602B03K2, R602B03K3, R602B04K2, R602B04K3, R602B05K2, R602B05K3, R602B06K2, R602B06K3, R602B07K2, R602B07K3, R602B08K2, R602B08K3, R602B09K2, R602B09K3, R602B10K2, R602B10K3, R602B11K2, R602B11K3, R602B12K2, R602B12K3, R602B13K2, R602B13K3, R602BK4, R603A1, R603A2, R603A3, R603A4, R603A5, R603B1, R603B2, R603B3, R603B4, R603B5, R603B6, R603B7, R603B8, R603B9, R603B10, R603B11, R603B12, R603B13', 'safe', 'on'=>'search'),
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
            'r60101K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60101K2'),
            'r60102K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60102K2'),
            'r60103K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60103K2'),
            'r60104K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60104K2'),
            'r60105K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60105K2'),
            'r60106K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60106K2'),
            'r60107K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60107K2'),
            'r60108K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60108K2'),
            'r60109K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60109K2'),
            'r60110K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60110K2'),
            'dESA' => array(self::BELONGS_TO, 'Desa', 'DESAID'),
            'r60108K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60108K2'),
            'r60109K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60109K2'),
            'r60110K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60110K2'),
            'r602B01K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B01K2'),
            'r602B01K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B01K3'),
            'r602B02K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B02K2'),
            'r602B02K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B02K3'),
            'r602B03K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B03K2'),
            'r602B03K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B03K3'),
            'r602B04K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B04K2'),
            'r602A' => array(self::BELONGS_TO, 'KeteranganR602a', 'R602A'),
            'r602B04K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B04K3'),
            'r602B05K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B05K2'),
            'r602B05K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B05K3'),
            'r602B06K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B06K2'),
            'r602B07K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B07K2'),
            'r602B08K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B08K2'),
            'r602B09K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B09K2'),
            'r602B10K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B10K2'),
            'r602B11K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B11K2'),
            'r602B12K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B12K2'),
            'r603A1' => array(self::BELONGS_TO, 'KeteranganR603a1', 'R603A1'),
            'r602B13K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R602B13K2'),
            'r602B06K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B06K3'),
            'r602B07K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B07K3'),
            'r602B08K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B08K3'),
            'r602B09K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B09K3'),
            'r602B10K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B10K3'),
            'r602B11K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B11K3'),
            'r602B12K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B12K3'),
            'r602B13K3' => array(self::BELONGS_TO, 'KeteranganR602b0xxx', 'R602B13K3'),
            'r602BK4' => array(self::BELONGS_TO, 'KeteranganR602bk4', 'R602BK4'),
            'r603A2' => array(self::BELONGS_TO, 'KeteranganR603a2', 'R603A2'),
            'r603A5' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603A5'),
            'r603B1' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B1'),
            'r603B2' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B2'),
            'r603B3' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B3'),
            'r603B4' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B4'),
            'r603B5' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B5'),
            'r603B6' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B6'),
            'r603B7' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B7'),
            'r603B8' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B8'),
            'r603B9' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B9'),
            'r603A3' => array(self::BELONGS_TO, 'KeteranganR603a3', 'R603A3'),
            'r603B10' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B10'),
            'r603B11' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B11'),
            'r603B12' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B12'),
            'r603B13' => array(self::BELONGS_TO, 'KeteranganAdaTidakada', 'R603B13'),
            'r603A4' => array(self::BELONGS_TO, 'KeteranganR603a4', 'R603A4'),
            'r60105K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60105K2'),
            'r60106K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60106K2'),
            'r60107K2' => array(self::BELONGS_TO, 'KeteranganYaTidak', 'R60107K2'),
        );
    }	

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DESAID' => 'Nama Desa',
			'R60101K2' => 'Apakah pernah kejadian TANAH LONGSOR',
			'R60101K3' => 'Banyaknya kejadian TANAH LONGSOR',
			'R60101K4' => 'Banyaknya korban jiwa akibat TANAH LONGSOR',
			'R60101K5' => 'Kerugian materi (Rp) akibat TANAH LONGSOR',
			'R60102K2' => 'Apakah pernah kejadian BANJIR',
			'R60102K3' => 'Banyaknya kejadian BANJIR',
			'R60102K4' => 'Banyaknya korban jiwa akibat BANJIR',
			'R60102K5' => 'Kerugian materi (Rp) akibat BANJIR',
			'R60103K2' => 'Apakah pernah kejadian BANJIR BANDANG',
			'R60103K3' => 'Banyaknya kejadian BANJIR BANDANG',
			'R60103K4' => 'Banyaknya korban jiwa akibat BANJIR BANDANG',
			'R60103K5' => 'Kerugian materi (Rp) akibat BANJIR BANDANG',
			'R60104K2' => 'Apakah pernah kejadian GEMPA BUMI',
			'R60104K3' => 'Banyaknya kejadian GEMPA BUMI',
			'R60104K4' => 'Banyaknya korban jiwa akibat GEMPA BUMI',
			'R60104K5' => 'Kerugian materi (Rp) akibat GEMPA BUMI',
			'R60105K2' => 'Apakah pernah kejadian TSUNAMI',
			'R60105K3' => 'Banyaknya kejadian TSUNAMI',
			'R60105K4' => 'Banyaknya korban jiwa akibat TSUNAMI',
			'R60105K5' => 'Kerugian materi (Rp) akibat TSUNAMI',
			'R60106K2' => 'Apakah pernah kejadian GELOMBANG PASANG LAUT',
			'R60106K3' => 'Banyaknya kejadian GELOMBANG PASANG LAUT',
			'R60106K4' => 'Banyaknya korban jiwa akibat GELOMBANG PASANG LAUT',
			'R60106K5' => 'Kerugian materi (Rp) akibat GELOMBANG PASANG LAUT',
			'R60107K2' => 'Apakah pernah kejadian PUTTING BELIUNG',
			'R60107K3' => 'Banyaknya kejadian PUTING BELIUNG',
			'R60107K4' => 'Banyaknya korban jiwa akibat PUTING BELIUNG',
			'R60107K5' => 'Kerugian materi (Rp) akibat PUTTING BELIUNG',
			'R60108K2' => 'Apakah pernah kejadian GUNUNG MELETUS',
			'R60108K3' => 'Banyaknya kejadian GUNUNG MELETUS',
			'R60108K4' => 'Banyaknya korban jiwa akibat GUNUNG MELETUS',
			'R60108K5' => 'Kerugian materi (Rp) akibat GUNUNG MELETUS',
			'R60109K2' => 'Apakah pernah kejadian KEBAKARAN HUTAN',
			'R60109K3' => 'Banyaknya kejadian KEBAKARAN HUTAN',
			'R60109K4' => 'Banyaknya korban jiwa akibat KEBAKARAN HUTAN',
			'R60109K5' => 'Kerugian materi (Rp) akibat KEBAKARAN HUTAN',
			'R60110K2' => 'Apakah pernah kejadian KEKERINGAN',
			'R60110K3' => 'Banyaknya kejadian KEKERINGAN',
			'R60110K4' => 'Banyaknya korban jiwa akibat KEKERINGAN',
			'R60110K5' => 'Kerugian materi (Rp) akibat KEKERINGAN',
			'R602A' => 'Jenis bencana alam apakah yang paling berdampak paling buruk (korban jiwa dan materi terbanyak)',
			'R602B01K2' => 'Apakah ada bantuan dari Warga desa/kelurahan ini',
			'R602B01K3' => 'Jenis bantuan yang utama dari Warga desa/kelurahan ini',
			'R602B02K2' => 'Apakah ada bantuan dari Pemerintah Desa/Kelurahan',
			'R602B02K3' => 'Jenis bantuan yang utama dari Pemerintah Desa/Kelurahan',
			'R602B03K2' => 'Apakah ada bantuan dari Pemerintah Kabupaten/Kota',
			'R602B03K3' => 'Jenis bantuan yang utama dari Pemerintah Kabupaten/Kota',
			'R602B04K2' => 'Apakah ada bantuan dari Pemerintah Provinsi',
			'R602B04K3' => 'Jenis bantuan yang utama dari Pemerintah Provinsi',
			'R602B05K2' => 'Apakah ada bantuan dari Pemerintah Pusat',
			'R602B05K3' => 'Jenis bantuan yang utama dari Pemerintah Pusat',
			'R602B06K2' => 'Apakah ada bantuan dari Partai Politik',
			'R602B06K3' => 'Jenis bantuan yang utama dari Partai Politik',
			'R602B07K2' => 'Apakah ada bantuan dari LSM (dalam negeri)',
			'R602B07K3' => 'Jenis bantuan yang utama dari LSM (dalam negeri)',
			'R602B08K2' => 'Apakah ada bantuan dari dompet bencana dari masyarakat',
			'R602B08K3' => 'Jenis bantuan yang utama dari dompet bencana dari masyarakat',
			'R602B09K2' => 'Apakah ada bantuan dari perusahaan swasta',
			'R602B09K3' => 'Jenis bantuan yang utama dari perusahaan swasta',
			'R602B10K2' => 'Apakah ada bantuan dari lembaga kemasyarakatan/kelompok masyarakat/kelompok keagamaan',
			'R602B10K3' => 'Jenis bantuan yang utama dari lembaga kemasyarakatan/kelompok masyarakat/kelompok keagamaan',
			'R602B11K2' => 'Apakah ada bantuan dari bantuan asing',
			'R602B11K3' => 'Jenis bantuan yang utama dari bantuan asing',
			'R602B12K2' => 'Apakah ada bantuan dari TNI/Polri',
			'R602B12K3' => 'Jenis bantuan yang utama dari TNI/Polri',
			'R602B13K2' => 'Apakah ada bantuan dari lainnya',
			'R602B13K3' => 'Jenis bantuan yang utama dari lainnya',
			'R602BK4' => 'Pembari bantuan yang paling banyak berperan',
			'R603A1' => 'Apakah ada Sistem peringatan dini tsunami',
			'R603A2' => 'Apakah ada Perlengkapan keselamatan (perahu karet, tenda, masker, dsb)',
			'R603A3' => 'Apakah ada Gotong royong warga untuk antisipasi bencana',
			'R603A4' => 'Apakah ada Penyuluhan keselamatan (termasuk simulasi bencana)',
			'R603A5' => 'Lainnya ',
			'R603B1' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengan-tisipasi bencana alam berasal dari Warga desa/kelurahan ini',
			'R603B2' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengan-tisipasi bencana alam berasal dari Pemerintah Desa/Kelurahan',
			'R603B3' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengan-tisipasi bencana alam berasal dari Pemerintah Kabupaten/Kota',
			'R603B4' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengan-tisipasi bencana alam berasal dariPemerintah Provinsi',
			'R603B5' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengan-tisipasi bencana alam berasal dari Pemerintah Pusat',
			'R603B6' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengan-tisipasi bencana alam berasal dari Partai politik',
			'R603B7' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengan-tisipasi bencana alam berasal dari LSM (dalam negeri)',
			'R603B8' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengantisipasi bencana alam berasal dari Dompet bencana dari masyarakat',
			'R603B9' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengantisipasi bencana alam berasal dari Perusahaan swasta',
			'R603B10' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengantisipasi bencana alam berasal dari Lembaga kemasyarakatan/kelompok masyarakat/kelompok keagamaan',
			'R603B11' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengan-tisipasi bencana alam berasal dari Bantuan asing',
			'R603B12' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengan-tisipasi bencana alam berasal dari TNI/POLRI',
			'R603B13' => 'Jika ada fasilitas antisipasi bencana, apakah ada sumber bantuan untuk mengantisipasi bencana alam berasal dari Lainnya',
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
		$criteria->compare('R60101K2',$this->R60101K2,true);
		$criteria->compare('R60101K3',$this->R60101K3);
		$criteria->compare('R60101K4',$this->R60101K4);
		$criteria->compare('R60101K5',$this->R60101K5,true);
		$criteria->compare('R60102K2',$this->R60102K2,true);
		$criteria->compare('R60102K3',$this->R60102K3);
		$criteria->compare('R60102K4',$this->R60102K4);
		$criteria->compare('R60102K5',$this->R60102K5,true);
		$criteria->compare('R60103K2',$this->R60103K2,true);
		$criteria->compare('R60103K3',$this->R60103K3);
		$criteria->compare('R60103K4',$this->R60103K4);
		$criteria->compare('R60103K5',$this->R60103K5,true);
		$criteria->compare('R60104K2',$this->R60104K2,true);
		$criteria->compare('R60104K3',$this->R60104K3);
		$criteria->compare('R60104K4',$this->R60104K4);
		$criteria->compare('R60104K5',$this->R60104K5,true);
		$criteria->compare('R60105K2',$this->R60105K2,true);
		$criteria->compare('R60105K3',$this->R60105K3);
		$criteria->compare('R60105K4',$this->R60105K4);
		$criteria->compare('R60105K5',$this->R60105K5,true);
		$criteria->compare('R60106K2',$this->R60106K2,true);
		$criteria->compare('R60106K3',$this->R60106K3);
		$criteria->compare('R60106K4',$this->R60106K4);
		$criteria->compare('R60106K5',$this->R60106K5,true);
		$criteria->compare('R60107K2',$this->R60107K2,true);
		$criteria->compare('R60107K3',$this->R60107K3);
		$criteria->compare('R60107K4',$this->R60107K4);
		$criteria->compare('R60107K5',$this->R60107K5,true);
		$criteria->compare('R60108K2',$this->R60108K2,true);
		$criteria->compare('R60108K3',$this->R60108K3);
		$criteria->compare('R60108K4',$this->R60108K4);
		$criteria->compare('R60108K5',$this->R60108K5,true);
		$criteria->compare('R60109K2',$this->R60109K2,true);
		$criteria->compare('R60109K3',$this->R60109K3);
		$criteria->compare('R60109K4',$this->R60109K4);
		$criteria->compare('R60109K5',$this->R60109K5,true);
		$criteria->compare('R60110K2',$this->R60110K2,true);
		$criteria->compare('R60110K3',$this->R60110K3);
		$criteria->compare('R60110K4',$this->R60110K4);
		$criteria->compare('R60110K5',$this->R60110K5,true);
		$criteria->compare('R602A',$this->R602A,true);
		$criteria->compare('R602B01K2',$this->R602B01K2,true);
		$criteria->compare('R602B01K3',$this->R602B01K3,true);
		$criteria->compare('R602B02K2',$this->R602B02K2,true);
		$criteria->compare('R602B02K3',$this->R602B02K3,true);
		$criteria->compare('R602B03K2',$this->R602B03K2,true);
		$criteria->compare('R602B03K3',$this->R602B03K3,true);
		$criteria->compare('R602B04K2',$this->R602B04K2,true);
		$criteria->compare('R602B04K3',$this->R602B04K3,true);
		$criteria->compare('R602B05K2',$this->R602B05K2,true);
		$criteria->compare('R602B05K3',$this->R602B05K3,true);
		$criteria->compare('R602B06K2',$this->R602B06K2,true);
		$criteria->compare('R602B06K3',$this->R602B06K3,true);
		$criteria->compare('R602B07K2',$this->R602B07K2,true);
		$criteria->compare('R602B07K3',$this->R602B07K3,true);
		$criteria->compare('R602B08K2',$this->R602B08K2,true);
		$criteria->compare('R602B08K3',$this->R602B08K3,true);
		$criteria->compare('R602B09K2',$this->R602B09K2,true);
		$criteria->compare('R602B09K3',$this->R602B09K3,true);
		$criteria->compare('R602B10K2',$this->R602B10K2,true);
		$criteria->compare('R602B10K3',$this->R602B10K3,true);
		$criteria->compare('R602B11K2',$this->R602B11K2,true);
		$criteria->compare('R602B11K3',$this->R602B11K3,true);
		$criteria->compare('R602B12K2',$this->R602B12K2,true);
		$criteria->compare('R602B12K3',$this->R602B12K3,true);
		$criteria->compare('R602B13K2',$this->R602B13K2,true);
		$criteria->compare('R602B13K3',$this->R602B13K3,true);
		$criteria->compare('R602BK4',$this->R602BK4,true);
		$criteria->compare('R603A1',$this->R603A1,true);
		$criteria->compare('R603A2',$this->R603A2,true);
		$criteria->compare('R603A3',$this->R603A3,true);
		$criteria->compare('R603A4',$this->R603A4,true);
		$criteria->compare('R603A5',$this->R603A5,true);
		$criteria->compare('R603B1',$this->R603B1,true);
		$criteria->compare('R603B2',$this->R603B2,true);
		$criteria->compare('R603B3',$this->R603B3,true);
		$criteria->compare('R603B4',$this->R603B4,true);
		$criteria->compare('R603B5',$this->R603B5,true);
		$criteria->compare('R603B6',$this->R603B6,true);
		$criteria->compare('R603B7',$this->R603B7,true);
		$criteria->compare('R603B8',$this->R603B8,true);
		$criteria->compare('R603B9',$this->R603B9,true);
		$criteria->compare('R603B10',$this->R603B10,true);
		$criteria->compare('R603B11',$this->R603B11,true);
		$criteria->compare('R603B12',$this->R603B12,true);
		$criteria->compare('R603B13',$this->R603B13,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}