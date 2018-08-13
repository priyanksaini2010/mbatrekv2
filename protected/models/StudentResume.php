<?php

/**
 * This is the model class for table "student_resume".
 *
 * The followings are the available columns in table 'student_resume':
 * @property integer $id
 * @property integer $student_id
 * @property string $educational_qualification
 * @property string $project_undertaken
 * @property string $achievement_and_key_skills
 * @property string $hobbies
 * @property string $personal_details
 * @property string $header
 * @property string $objective
 *
 * The followings are the available model relations:
 * @property Students $student
 */
class StudentResume extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_resume';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, educational_qualification, project_undertaken, achievement_and_key_skills, hobbies, personal_details, header, objective', 'required'),
			array('student_id', 'numerical', 'integerOnly'=>true),
			array('project_undertaken, achievement_and_key_skills, hobbies, personal_details, header, objective', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, student_id, educational_qualification, project_undertaken, achievement_and_key_skills, hobbies, personal_details, header, objective', 'safe', 'on'=>'search'),
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
			'student_id' => 'Student',
			'educational_qualification' => 'Educational Qualification',
			'project_undertaken' => 'Project Undertaken',
			'achievement_and_key_skills' => 'Achievement And Key Skills',
			'hobbies' => 'Hobbies',
			'personal_details' => 'Personal Details',
			'header' => 'Header',
			'objective' => 'Objective',
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
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('educational_qualification',$this->educational_qualification,true);
		$criteria->compare('project_undertaken',$this->project_undertaken,true);
		$criteria->compare('achievement_and_key_skills',$this->achievement_and_key_skills,true);
		$criteria->compare('hobbies',$this->hobbies,true);
		$criteria->compare('personal_details',$this->personal_details,true);
		$criteria->compare('header',$this->header,true);
		$criteria->compare('objective',$this->objective,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentResume the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
