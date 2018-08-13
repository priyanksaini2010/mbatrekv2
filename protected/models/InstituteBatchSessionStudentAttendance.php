<?php

/**
 * This is the model class for table "institute_batch_session_student_attendance".
 *
 * The followings are the available columns in table 'institute_batch_session_student_attendance':
 * @property integer $id
 * @property integer $institute_batch_session_id
 * @property integer $student_id
 * @property integer $section_id
 * @property integer $is_present
 * @property string $session_date
 *
 * The followings are the available model relations:
 * @property InstituteBatchSection $section
 * @property InstituteBatchSession $instituteBatchSession
 * @property Students $student
 */
class InstituteBatchSessionStudentAttendance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_batch_session_student_attendance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_batch_session_id, student_id, section_id, is_present, session_date', 'required'),
			array('institute_batch_session_id, student_id, section_id, is_present', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_batch_session_id, student_id, section_id, is_present, session_date', 'safe', 'on'=>'search'),
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
			'section' => array(self::BELONGS_TO, 'InstituteBatchSection', 'section_id'),
			'instituteBatchSession' => array(self::BELONGS_TO, 'InstituteBatchSession', 'institute_batch_session_id'),
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
			'institute_batch_session_id' => 'Institute Batch Session',
			'student_id' => 'Student',
			'section_id' => 'Section',
			'is_present' => 'Is Present',
			'session_date' => 'Session Date',
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
		$criteria->compare('institute_batch_session_id',$this->institute_batch_session_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('section_id',$this->section_id);
		$criteria->compare('is_present',$this->is_present);
		$criteria->compare('session_date',$this->session_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteBatchSessionStudentAttendance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
