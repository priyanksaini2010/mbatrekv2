<?php

/**
 * This is the model class for table "coupon_code".
 *
 * The followings are the available columns in table 'coupon_code':
 * @property integer $id
 * @property integer $discount_type
 * @property string $domain
 * @property integer $discount
 * @property integer $min_value
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property CouponUsage[] $couponUsages
 */
class CouponCode extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'coupon_code';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('discount_type,coupon_type, domain, discount, min_value, is_active', 'required'),
			array('discount_type,coupon_type, discount, min_value, is_active', 'numerical', 'integerOnly'=>true),
			array('domain', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, discount_type,coupon_type, domain, discount, min_value, is_active', 'safe', 'on'=>'search'),
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
			'couponUsages' => array(self::HAS_MANY, 'CouponUsage', 'coupon_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'discount_type' => 'Discount Type',
			'domain' => 'Domain / Code',
			'coupon_type' => 'Coupon Type',
			'discount' => 'Discount',
			'min_value' => 'Min Value',
			'is_active' => 'Is Active',
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
		$criteria->compare('discount_type',$this->discount_type);
		$criteria->compare('domain',$this->domain,true);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('min_value',$this->min_value);
		$criteria->compare('is_active',$this->is_active);
        $criteria->compare('coupon_type',$this->coupon_type);
                $criteria->order = "id desc";
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CouponCode the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
