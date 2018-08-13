<?php

/**
 * This is the model class for table "institute_batch_notification_student".
 *
 * The followings are the available columns in table 'institute_batch_notification_student':
 * @property integer $id
 * @property integer $institute_batch_notification_id
 * @property integer $student_id
 * @property integer $is_shown
 * @property string $mentor
 * @property string $prior_understanding
 * @property string $prior_experience
 * @property string $expectation
 * @property string $current_status
 *
 * The followings are the available model relations:
 * @property InstituteBatchNotification $instituteBatchNotification
 * @property Students $student
 */
class InstituteBatchNotificationStudent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_batch_notification_student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_batch_notification_id, student_id, is_shown, mentor, prior_understanding, prior_experience, expectation, current_status', 'required'),
			array('institute_batch_notification_id, student_id, is_shown', 'numerical', 'integerOnly'=>true),
			array('mentor', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_batch_notification_id, student_id, is_shown, mentor, prior_understanding, prior_experience, expectation, current_status', 'safe', 'on'=>'search'),
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
			'instituteBatchNotification' => array(self::BELONGS_TO, 'InstituteBatchNotification', 'institute_batch_notification_id'),
			'student' => array(self::BELONGS_TO, 'Students', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institute_batch_notification_id' => 'Institute Batch Notification',
			'student_id' => 'Student',
			'is_shown' => 'Is Shown',
			'mentor' => 'Mentor',
			'prior_understanding' => 'Prior Understanding',
			'prior_experience' => 'Prior Experience',
			'expectation' => 'Expectation',
			'current_status' => 'Current Status',
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
		$criteria->compare('institute_batch_notification_id',$this->institute_batch_notification_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('is_shown',$this->is_shown);
		$criteria->compare('mentor',$this->mentor,true);
		$criteria->compare('prior_understanding',$this->prior_understanding,true);
		$criteria->compare('prior_experience',$this->prior_experience,true);
		$criteria->compare('expectation',$this->expectation,true);
		$criteria->compare('current_status',$this->current_status,true);
                if(isset($_GET['institute_batch_id'])) {
                    $attributes = array("institute_batch_id"=>$_GET['institute_batch_id']);
                    $models = Students::model()->findAllByAttributes($attributes);
                    $students = CHtml::listData($models, 'id', 'id');
                    if(!empty($students)) {
                        $criteria->addInCondition("student_id",$students);
                    }
                }
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteBatchNotificationStudent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
