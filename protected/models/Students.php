<?php
/**
 * This is the model class for table "students".
 *
 * The followings are the available columns in table 'students':
 * @property integer $id
 * @property string $name
 * @property integer $institute_batch_id
 * @property string $profile_json
 * @property integer $user_id
 * @property string $function
 * @property string $work_exerience
 * @property string $academic_background
 * @property integer $industry_1
 * @property integer $industry_2
 * @property integer $industry_3
 * @property integer $industry_4
 * @property integer $industry_5
 *
 * The followings are the available model relations:
 * @property CasestudyStudentScore[] $casestudyStudentScores
 * @property InstituteBatchSectionStudent[] $instituteBatchSectionStudents
 * @property InstituteBatchSessionStudentAttendance[] $instituteBatchSessionStudentAttendances
 * @property InstituteBatchStudentSessionRemark[] $instituteBatchStudentSessionRemarks
 * @property InstituteStudentAttendance[] $instituteStudentAttendances
 * @property LibraryBookStudent[] $libraryBookStudents
 * @property ModuleAssignmentStudentScore[] $moduleAssignmentStudentScores
 * @property ModuleStudentRating[] $moduleStudentRatings
 * @property StudentResume[] $studentResumes
 * @property StudentSessionFeedback[] $studentSessionFeedbacks
 * @property IndustryOption $industry5
 * @property InstituteBatches $instituteBatch
 * @property Users $user
 * @property IndustryOption $industry1
 * @property IndustryOption $industry2
 * @property IndustryOption $industry3
 * @property IndustryOption $industry4
 */
class Students extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'students';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, institute_batch_id, profile_json, user_id', 'required'),
			array('institute_batch_id, user_id, industry_1, industry_2, industry_3, industry_4, industry_5', 'numerical', 'integerOnly'=>true),
			array('name, function, work_exerience, academic_background', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, institute_batch_id, profile_json, user_id, function, work_exerience, academic_background, industry_1, industry_2, industry_3, industry_4, industry_5', 'safe', 'on'=>'search'),
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
			'casestudyStudentScores' => array(self::HAS_MANY, 'CasestudyStudentScore', 'student_id'),
			'instituteBatchSectionStudents' => array(self::HAS_MANY, 'InstituteBatchSectionStudent', 'student_id'),
			'instituteBatchSessionStudentAttendances' => array(self::HAS_MANY, 'InstituteBatchSessionStudentAttendance', 'student_id'),
			'instituteBatchStudentSessionRemarks' => array(self::HAS_MANY, 'InstituteBatchStudentSessionRemark', 'student_Id'),
			'instituteStudentAttendances' => array(self::HAS_MANY, 'InstituteStudentAttendance', 'student_id'),
			'libraryBookStudents' => array(self::HAS_MANY, 'LibraryBookStudent', 'student_id'),
			'moduleAssignmentStudentScores' => array(self::HAS_MANY, 'ModuleAssignmentStudentScore', 'student_id'),
			'moduleStudentRatings' => array(self::HAS_MANY, 'ModuleStudentRating', 'student_id'),
			'studentResumes' => array(self::HAS_MANY, 'StudentResume', 'student_id'),
			'studentSessionFeedbacks' => array(self::HAS_MANY, 'StudentSessionFeedback', 'student_id'),
			'industry5' => array(self::BELONGS_TO, 'IndustryOption', 'industry_5'),
			'instituteBatch' => array(self::BELONGS_TO, 'InstituteBatches', 'institute_batch_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'industry1' => array(self::BELONGS_TO, 'IndustryOption', 'industry_1'),
			'industry2' => array(self::BELONGS_TO, 'IndustryOption', 'industry_2'),
			'industry3' => array(self::BELONGS_TO, 'IndustryOption', 'industry_3'),
			'industry4' => array(self::BELONGS_TO, 'IndustryOption', 'industry_4'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'institute_batch_id' => 'Institute Batch',
			'profile_json' => 'Profile Json',
			'user_id' => 'User',
			'function' => 'Function',
			'work_exerience' => 'Work Exerience',
			'academic_background' => 'Academic Background',
			'industry_1' => 'Industry 1',
			'industry_2' => 'Industry 2',
			'industry_3' => 'Industry 3',
			'industry_4' => 'Industry 4',
			'industry_5' => 'Industry 5',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('institute_batch_id',$this->institute_batch_id);
		$criteria->compare('profile_json',$this->profile_json,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('function',$this->function,true);
		$criteria->compare('work_exerience',$this->work_exerience,true);
		$criteria->compare('academic_background',$this->academic_background,true);
		$criteria->compare('industry_1',$this->industry_1);
		$criteria->compare('industry_2',$this->industry_2);
		$criteria->compare('industry_3',$this->industry_3);
		$criteria->compare('industry_4',$this->industry_4);
		$criteria->compare('industry_5',$this->industry_5);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Students the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
