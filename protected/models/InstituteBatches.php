<?php

/**
 * This is the model class for table "institute_batches".
 *
 * The followings are the available columns in table 'institute_batches':
 * @property integer $id
 * @property integer $institute_id
 * @property integer $institute_course_id
 * @property integer $university_course_batch_id
 * @property string $name
 *
 * The followings are the available model relations:
 * @property InstituteBatchNotification[] $instituteBatchNotifications
 * @property InstituteBatchSection[] $instituteBatchSections
 * @property InstituteBatchSession[] $instituteBatchSessions
 * @property Institutes $institute
 * @property InstituteCourses[] $instituteCourses
 * @property InstituteStudentAttendance[] $instituteStudentAttendances
 * @property ModuleAssignment[] $moduleAssignments
 * @property ModuleCasestudy[] $moduleCasestudies
 * @property ModuleSession[] $moduleSessions
 * @property ModuleWebinar[] $moduleWebinars
 * @property Students[] $students
 */
class InstituteBatches extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_batches';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_id, name', 'required'),
			array('institute_id, institute_course_id, university_course_batch_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_id, institute_course_id, university_course_batch_id, name', 'safe', 'on'=>'search'),
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
			'instituteBatchNotifications' => array(self::HAS_MANY, 'InstituteBatchNotification', 'institute_batch_id'),
			'instituteBatchSections' => array(self::HAS_MANY, 'InstituteBatchSection', 'institute_batch_id'),
			'instituteBatchSessions' => array(self::HAS_MANY, 'InstituteBatchSession', 'institute_batch_id'),
			'institute' => array(self::BELONGS_TO, 'Institutes', 'institute_id'),
			'instituteCourses' => array(self::HAS_MANY, 'InstituteCourses', 'institute_batch_id'),
			'instituteStudentAttendances' => array(self::HAS_MANY, 'InstituteStudentAttendance', 'institute_batch_id'),'instituteCourse' => array(self::BELONGS_TO, 'InstituteCourse', 'institute_course_id'),
		    'universityCourseBatch' => array(self::BELONGS_TO, 'UniversityCourseBatch', 'university_course_batch_id'),
			'moduleAssignments' => array(self::HAS_MANY, 'ModuleAssignment', 'institute_batch_id'),
			'moduleCasestudies' => array(self::HAS_MANY, 'ModuleCasestudy', 'institute_batch_id'),
			'moduleSessions' => array(self::HAS_MANY, 'ModuleSession', 'institute_batch_id'),
			'moduleWebinars' => array(self::HAS_MANY, 'ModuleWebinar', 'institute_batch_id'),
			'students' => array(self::HAS_MANY, 'Students', 'institute_batch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institute_id' => 'Institute',
			'institute_course_id' => 'Institute Course',
			'university_course_batch_id' => 'University Course Batch',
			'name' => 'Name',
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
		$criteria->compare('institute_id',$this->institute_id);
		$criteria->compare('institute_course_id',$this->institute_course_id);
		$criteria->compare('university_course_batch_id',$this->university_course_batch_id);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteBatches the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
