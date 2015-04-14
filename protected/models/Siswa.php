<?php

/**
 * This is the model class for table "tbl_siswa".
 *
 * The followings are the available columns in table 'tbl_siswa':
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $tgl_lahir
 * @property string $nis
 * @property integer $id_agama
 * @property integer $id_jenis_kelamin
 *
 * The followings are the available model relations:
 * @property Agama $idAgama
 * @property JenisKelamin $idJenisKelamin
 */
class Siswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_siswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, id_agama, id_jenis_kelamin', 'required'),
			array('id_agama, id_jenis_kelamin', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>100),
			array('alamat, nis', 'length', 'max'=>45),
			array('tgl_lahir', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, alamat, tgl_lahir, nis, id_agama, id_jenis_kelamin', 'safe', 'on'=>'search'),
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
			'idAgama' => array(self::BELONGS_TO, 'Agama', 'id_agama'),
			'idJenisKelamin' => array(self::BELONGS_TO, 'JenisKelamin', 'id_jenis_kelamin'),
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
			'alamat' => 'Alamat',
			'tgl_lahir' => 'Tgl Lahir',
			'nis' => 'Nis',
			'id_agama' => 'Agama',
			'id_jenis_kelamin' => 'Jenis Kelamin',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('nis',$this->nis,true);
		$criteria->compare('id_agama',$this->id_agama);
		$criteria->compare('id_jenis_kelamin',$this->id_jenis_kelamin);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Siswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
