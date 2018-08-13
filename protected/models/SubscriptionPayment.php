<?php

/**
 * This is the model class for table "subscription_payment".
 *
 * The followings are the available columns in table 'subscription_payment':
 * @property integer $id
 * @property string $order_id
 * @property integer $user_id
 * @property double $amount
 * @property integer $subscription
 * @property integer $status
 * @property string $response_message
 * @property string $tx_date
 * @property string $paytm_response
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class SubscriptionPayment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'subscription_payment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_id, user_id, amount, subscription, status, tx_date', 'required'),
			array('user_id, subscription, status', 'numerical', 'integerOnly'=>true),
			array('amount', 'numerical'),
			array('order_id', 'length', 'max'=>255),
			array('response_message', 'length', 'max'=>500),
			array('paytm_response', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, order_id, user_id, amount, subscription, status, response_message, tx_date, paytm_response', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'order_id' => 'Order',
			'user_id' => 'User',
			'amount' => 'Amount',
			'subscription' => 'Subscription',
			'status' => 'Status',
			'response_message' => 'Response Message',
			'tx_date' => 'Tx Date',
			'paytm_response' => 'Paytm Response',
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
		$criteria->compare('order_id',$this->order_id,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('subscription',$this->subscription);
		$criteria->compare('status',$this->status);
		$criteria->compare('response_message',$this->response_message,true);
		$criteria->compare('tx_date',$this->tx_date,true);
		$criteria->compare('paytm_response',$this->paytm_response,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SubscriptionPayment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
