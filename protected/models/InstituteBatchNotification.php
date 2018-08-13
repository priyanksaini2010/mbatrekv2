<?php

/**
 * This is the model class for table "institute_batch_notification".
 *
 * The followings are the available columns in table 'institute_batch_notification':
 * @property integer $id
 * @property integer $institute_batch_id
 * @property integer $institute_batch_session_id
 * @property integer $type
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property InstituteBatches $instituteBatch
 * @property InstituteBatchSession $instituteBatchSession
 * @property InstituteBatchNotificationStudent[] $instituteBatchNotificationStudents
 * @property InstituteBatchNotificationStudentPost[] $instituteBatchNotificationStudentPosts
 */
class InstituteBatchNotification extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_batch_notification';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_batch_id, institute_batch_session_id, type', 'required'),
			array('institute_batch_id, institute_batch_session_id, type, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_batch_id, institute_batch_session_id, type, status', 'safe', 'on'=>'search'),
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
			'instituteBatch' => array(self::BELONGS_TO, 'InstituteBatches', 'institute_batch_id'),
			'instituteBatchSession' => array(self::BELONGS_TO, 'InstituteBatchSession', 'institute_batch_session_id'),
			'instituteBatchNotificationStudents' => array(self::HAS_MANY, 'InstituteBatchNotificationStudent', 'institute_batch_notification_id'),
			'instituteBatchNotificationStudentPosts' => array(self::HAS_MANY, 'InstituteBatchNotificationStudentPost', 'institute_batch_notification_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institute_batch_id' => 'Institute Batch',
			'institute_batch_session_id' => 'Institute Batch Session',
			'type' => 'Type',
			'status' => 'Status',
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
		$criteria->compare('institute_batch_id',$this->institute_batch_id);
		$criteria->compare('institute_batch_session_id',$this->institute_batch_session_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteBatchNotification the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
