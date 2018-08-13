<?php

/**
 * This is the model class for table "institute_batch_session".
 *
 * The followings are the available columns in table 'institute_batch_session':
 * @property integer $id
 * @property integer $institute_batch_section_id
 * @property integer $institute_batch_id
 * @property integer $module_id
 * @property string $session_name
 * @property string $session_details
 * @property string $session_date
 * @property string $session_time
 * @property string $session_plan_file
 * @property string $video
 * @property integer $type
 * @property string $estimated_duration
 * @property string $course_outline
 *
 * The followings are the available model relations:
 * @property InstituteBatchNotification[] $instituteBatchNotifications
 * @property InstituteBatches $instituteBatch
 * @property InstituteBatchSection $instituteBatchSection
 * @property Module $module
 * @property InstituteBatchSessionStudentAttendance[] $instituteBatchSessionStudentAttendances
 * @property InstituteBatchStudentSessionRemark[] $instituteBatchStudentSessionRemarks
 * @property StudentSessionFeedback[] $studentSessionFeedbacks
 */
class InstituteBatchSession extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_batch_session';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_batch_id, module_id, session_name', 'required'),
			array('institute_batch_section_id, institute_batch_id, module_id, type', 'numerical', 'integerOnly'=>true),
			array('session_name, estimated_duration', 'length', 'max'=>255),
			array('session_time', 'length', 'max'=>40),
			array('session_plan_file, video', 'length', 'max'=>500),
			array('session_details, session_date, course_outline', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_batch_section_id, institute_batch_id, module_id, session_name, session_details, session_date, session_time, session_plan_file, video, type, estimated_duration, course_outline', 'safe', 'on'=>'search'),
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
			'instituteBatchNotifications' => array(self::HAS_MANY, 'InstituteBatchNotification', 'institute_batch_session_id'),
			'instituteBatch' => array(self::BELONGS_TO, 'InstituteBatches', 'institute_batch_id'),
			'instituteBatchSection' => array(self::BELONGS_TO, 'InstituteBatchSection', 'institute_batch_section_id'),
			'module' => array(self::BELONGS_TO, 'Module', 'module_id'),
			'instituteBatchSessionStudentAttendances' => array(self::HAS_MANY, 'InstituteBatchSessionStudentAttendance', 'institute_batch_session_id'),
			'instituteBatchStudentSessionRemarks' => array(self::HAS_MANY, 'InstituteBatchStudentSessionRemark', 'institute_batch_session_id'),
			'studentSessionFeedbacks' => array(self::HAS_MANY, 'StudentSessionFeedback', 'session_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institute_batch_section_id' => 'Institute Batch Section',
			'institute_batch_id' => 'Institute Batch',
			'module_id' => 'Module',
			'session_name' => 'Session Name',
			'session_details' => 'Session Details',
			'session_date' => 'Session Date',
			'session_time' => 'Session Time',
			'session_plan_file' => 'Session Plan File',
			'video' => 'Embed Code',
			'type' => 'Registeration Plan',
			'estimated_duration' => 'Estimated Duration',
			'course_outline' => 'Course Outline',
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
		$criteria->compare('institute_batch_section_id',$this->institute_batch_section_id);
		$criteria->compare('institute_batch_id',$this->institute_batch_id);
		$criteria->compare('module_id',$this->module_id);
		$criteria->compare('session_name',$this->session_name,true);
		$criteria->compare('session_details',$this->session_details,true);
		$criteria->compare('session_date',$this->session_date,true);
		$criteria->compare('session_time',$this->session_time,true);
		$criteria->compare('session_plan_file',$this->session_plan_file,true);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('estimated_duration',$this->estimated_duration,true);
		$criteria->compare('course_outline',$this->course_outline,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteBatchSession the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
