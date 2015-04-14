<?php

/**
 * This is the model class for table "tbl_nilai".
 *
 * The followings are the available columns in table 'tbl_nilai':
 * @property integer $id
 * @property integer $nilai_1
 * @property integer $nilai_2
 * @property integer $nilai_3
 * @property integer $nilai_4
 */
class Nilai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nilai_1, nilai_2, nilai_3, nilai_4', 'required'),
			array('nilai_1, nilai_2, nilai_3, nilai_4', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nilai_1, nilai_2, nilai_3, nilai_4', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nilai_1' => 'Nilai 1',
			'nilai_2' => 'Nilai 2',
			'nilai_3' => 'Nilai 3',
			'nilai_4' => 'Nilai 4',
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
		$criteria->compare('nilai_1',$this->nilai_1);
		$criteria->compare('nilai_2',$this->nilai_2);
		$criteria->compare('nilai_3',$this->nilai_3);
		$criteria->compare('nilai_4',$this->nilai_4);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Nilai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
