<?php

/**
 * This is the model class for table "shopcustomer".
 *
 * The followings are the available columns in table 'shopcustomer':
 * @property integer $id
 * @property string $HoTen
 * @property string $SDT
 * @property string $address
 * @property string $email
 * @property string $TenSP
 * @property string $Hinh
 * @property integer $SoLuong
 */
class Shopcustomer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Shopcustomer the static model class
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
		return 'shopcustomer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HoTen, SDT, address, TenSP, Hinh, SoLuong', 'required','message'=>'Không được để trống'),
			array('SoLuong', 'numerical', 'integerOnly'=>true,'message'=>'Số lượng phải là số nguyên'),
			array('HoTen', 'length', 'max'=>40),
			array('SDT', 'length', 'max'=>12),
			array('email, TenSP', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, HoTen, SDT, address, email, TenSP, Hinh, SoLuong', 'safe', 'on'=>'search'),
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
			'HoTen' => 'Ho Ten',
			'SDT' => 'Sdt',
			'address' => 'Address',
			'email' => 'Email',
			'TenSP' => 'Ten Sp',
			'Hinh' => 'Hinh',
			'SoLuong' => 'So Luong',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('HoTen',$this->HoTen,true);
		$criteria->compare('SDT',$this->SDT,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('TenSP',$this->TenSP,true);
		$criteria->compare('Hinh',$this->Hinh,true);
		$criteria->compare('SoLuong',$this->SoLuong);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}