<?php

/**
 * This is the model class for table "shopproducts".
 *
 * The followings are the available columns in table 'shopproducts':
 * @property integer $product_id
 * @property integer $category_id
 * @property string $Ten
 * @property string $MoTa
 * @property string $GiaTien
 * @property string $Mau
 * @property string $ChatLieu
 * @property string $KichCo
 * @property string $DonVi
 * @property string $Image
 */
class Shopproducts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Shopproducts the static model class
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
		return 'shopproducts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, Ten,MoTa', 'required','message'=>'Không được để trống'),
			array('category_id', 'numerical', 'integerOnly'=>true),
			array('Ten, GiaTien, Mau, ChatLieu, KichCo, DonVi','length', 'max'=>45),
			array('Image', 'length', 'max'=>100),
			array('MoTa', 'safe'),
			array('DonVi','in','range'=>array('VND','DOLA'),'allowEmpty'=>false,'message'=>'Phải nhập là VND hoặc DOLA'),
			array('Image', 'file', 'types'=>'jpg, gif, png','message'=>'Không được để trống'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('product_id, category_id, Ten, MoTa, GiaTien, Mau, ChatLieu, KichCo, DonVi, Image', 'safe', 'on'=>'search'),
		
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
			'product_id' => 'Product',
			'category_id' => 'Category',
			'Ten' => 'Ten',
			'MoTa' => 'Mo Ta',
			'GiaTien' => 'Gia Tien',
			'Mau' => 'Mau',
			'ChatLieu' => 'Chat Lieu',
			'KichCo' => 'Kich Co',
			'DonVi' => 'Don Vi',
			'Image' => 'Image',
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

		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('Ten',$this->Ten,true);
		$criteria->compare('MoTa',$this->MoTa,true);
		$criteria->compare('GiaTien',$this->GiaTien,true);
		$criteria->compare('Mau',$this->Mau,true);
		$criteria->compare('ChatLieu',$this->ChatLieu,true);
		$criteria->compare('KichCo',$this->KichCo,true);
		$criteria->compare('DonVi',$this->DonVi,true);
		$criteria->compare('Image',$this->Image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
}