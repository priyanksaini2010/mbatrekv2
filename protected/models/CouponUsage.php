<?php

/**
 * This is the model class for table "coupon_usage".
 *
 * The followings are the available columns in table 'coupon_usage':
 * @property integer $id
 * @property integer $coupon_id
 * @property string $email_used
 * @property integer $users_new_id
 * @property string $date_created
 * @property integer $cart_id
 *
 * The followings are the available model relations:
 * @property CouponCode $coupon
 * @property UsersNew $usersNew
 * @property Cart $cart
 */
class CouponUsage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'coupon_usage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('coupon_id, email_used, users_new_id, date_created, cart_id', 'required'),
			array('coupon_id, users_new_id, cart_id', 'numerical', 'integerOnly'=>true),
			array('email_used', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, coupon_id, email_used, users_new_id, date_created, cart_id', 'safe', 'on'=>'search'),
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
			'coupon' => array(self::BELONGS_TO, 'CouponCode', 'coupon_id'),
			'usersNew' => array(self::BELONGS_TO, 'UsersNew', 'users_new_id'),
			'cart' => array(self::BELONGS_TO, 'Cart', 'cart_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'coupon_id' => 'Coupon',
			'email_used' => 'Email Used',
			'users_new_id' => 'Users New',
			'date_created' => 'Date Created',
			'cart_id' => 'Cart',
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
		$criteria->compare('coupon_id',$this->coupon_id);
		$criteria->compare('email_used',$this->email_used,true);
		$criteria->compare('users_new_id',$this->users_new_id);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('cart_id',$this->cart_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CouponUsage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
