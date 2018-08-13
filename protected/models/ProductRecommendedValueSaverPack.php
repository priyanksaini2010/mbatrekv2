<?php

/**
 * This is the model class for table "product_recommended_value_saver_pack".
 *
 * The followings are the available columns in table 'product_recommended_value_saver_pack':
 * @property integer $id
 * @property integer $product_id
 * @property integer $recommended_product_id
 * @property string $title
 * @property string $short_description
 * @property string $icon
 *
 * The followings are the available model relations:
 * @property Products $product
 * @property Products $recommendedProduct
 */
class ProductRecommendedValueSaverPack extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_recommended_value_saver_pack';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, title, short_description, icon', 'required'),
			array('product_id, recommended_product_id', 'numerical', 'integerOnly'=>true),
			array('title, short_description', 'length', 'max'=>255),
			array('icon', 'length', 'max'=>2555),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, recommended_product_id, title, short_description, icon', 'safe', 'on'=>'search'),
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
			'product' => array(self::BELONGS_TO, 'Products', 'product_id'),
			'recommendedProduct' => array(self::BELONGS_TO, 'Products', 'recommended_product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_id' => 'Product',
			'recommended_product_id' => 'Recommended Product With This Product',
			'title' => 'Title',
			'short_description' => 'Short Description',
			'icon' => 'Icon',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('recommended_product_id',$this->recommended_product_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('icon',$this->icon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductRecommendedValueSaverPack the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
