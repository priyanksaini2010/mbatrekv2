<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $id
 * @property string $title
 * @property string $logo
 * @property double $actuall_price
 * @property string $description
 * @property string $description1
 * @property double $price
 * @property integer $type
 * @property integer $is_saver
 * @property integer $product_sub_category_id
 * @property string $home_page_icon
 * @property integer $home_page_bucket
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Cart[] $carts
 * @property CartIp[] $cartIps
 * @property ProductEngage[] $productEngages
 * @property ProductInclude[] $productIncludes
 * @property ProductKeyOutcome[] $productKeyOutcomes
 * @property ProductKeyPoints[] $productKeyPoints
 * @property ProductRecommendedValueSaverPack[] $productRecommendedValueSaverPacks
 * @property ProductSubCategory $productSubCategory
 */
class Products extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, logo, actuall_price, description, description1, price, type, is_saver, product_sub_category_id, status', 'required'),
			array('type, is_saver, product_sub_category_id, home_page_bucket, status,sortOrder', 'numerical', 'integerOnly'=>true),
			array('actuall_price, price', 'numerical'),
			array('title, logo, description1', 'length', 'max'=>255),
			array('home_page_icon', 'length', 'max'=>250),
            array('sample_1, sample_2', 'length', 'max'=>500),
            array('sample_3', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, logo, actuall_price, description, description1, price, type, is_saver, product_sub_category_id, home_page_icon, home_page_bucket, status', 'safe', 'on'=>'search'),
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
			'carts' => array(self::HAS_MANY, 'Cart', 'product_id'),
			'cartIps' => array(self::HAS_MANY, 'CartIp', 'product_id'),
			'productEngages' => array(self::HAS_MANY, 'ProductEngage', 'product_id'),
			'productIncludes' => array(self::HAS_MANY, 'ProductInclude', 'product_id'),
			'productKeyOutcomes' => array(self::HAS_MANY, 'ProductKeyOutcome', 'product_id'),
			'productKeyPoints' => array(self::HAS_MANY, 'ProductKeyPoints', 'product_id'),
			'productRecommendedValueSaverPacks' => array(self::HAS_MANY, 'ProductRecommendedValueSaverPack', 'product_id'),
			'productSubCategory' => array(self::BELONGS_TO, 'ProductSubCategory', 'product_sub_category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'logo' => 'Logo',
			'actuall_price' => 'Actuall Price',
			'description' => 'Description(On Product Description Page)',
			'description1' => 'Description(On Product Listing Page)',
			'price' => 'Price',
			'type' => 'Type',
			'is_saver' => 'Is Saver',
			'product_sub_category_id' => 'Product Sub Category',
			'home_page_icon' => 'Home Page Icon',
			'home_page_bucket' => 'Home Page Bucket',
            'sample_1' => 'Sample 1',
            'sample_2' => 'Sample 2',
            'sample_3' => 'Sample 3',
			'status' => 'Status',
                        'sortOrder' => 'Sort Order',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('actuall_price',$this->actuall_price);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('description1',$this->description1,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('type',$this->type);
		$criteria->compare('is_saver',$this->is_saver);
		$criteria->compare('product_sub_category_id',$this->product_sub_category_id);
		$criteria->compare('home_page_icon',$this->home_page_icon,true);
		$criteria->compare('home_page_bucket',$this->home_page_bucket);
        $criteria->compare('sample_1',$this->sample_1,true);
        $criteria->compare('sample_2',$this->sample_2,true);
        $criteria->compare('sample_3',$this->sample_3,true);
		$criteria->compare('status',$this->status);
                $criteria->order = "id desc";
                $criteria->order = "sortOrder asc";
                $criteria->limit = 100;
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination' => array(
                                            'pageSize' => 100,
                                        ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
