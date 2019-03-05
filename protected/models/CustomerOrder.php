<?php

/**
 * This is the model class for table "customer_order".
 *
 * The followings are the available columns in table 'customer_order':
 * @property integer $id
 * @property string $ordfer_hash
 * @property integer $user_id
 * @property double $order_amount
 * @property integer $payment_gateway
 * @property integer $status
 * @property string $date_created
 *
 * The followings are the available model relations:
 * @property Cart[] $carts
 * @property UsersNew $user
 * @property PayuResponse[] $payuResponses
 */
class CustomerOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customer_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, order_amount, payment_gateway, status, date_created', 'required'),
			array('user_id, payment_gateway, status', 'numerical', 'integerOnly'=>true),
			array('order_amount', 'numerical'),
			array('ordfer_hash', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ordfer_hash, user_id, order_amount, payment_gateway, status, date_created', 'safe', 'on'=>'search'),
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
			'carts' => array(self::HAS_MANY, 'Cart', 'order_id'),
			'user' => array(self::BELONGS_TO, 'UsersNew', 'user_id'),
			'payuResponses' => array(self::HAS_MANY, 'PayuResponse', 'order_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ordfer_hash' => 'Order Id',
			'user_id' => 'Username',
			'order_amount' => 'Order Amount',
			'payment_gateway' => 'Payment Gateway',
			'status' => 'Status',
			'date_created' => 'Date Created',
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
		$criteria->compare('ordfer_hash',$this->ordfer_hash,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('order_amount',$this->order_amount);
		$criteria->compare('payment_gateway',$this->payment_gateway);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_created',$this->date_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CustomerOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
