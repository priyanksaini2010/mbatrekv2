<?php

/**
 * This is the model class for table "campus_ambassador".
 *
 * The followings are the available columns in table 'campus_ambassador':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile_number
 * @property string $email_id
 * @property integer $college_id
 * @property integer $course_id
 * @property integer $year_of_graduation_id
 * @property string $question_1
 * @property string $question_2
 * @property string $question_3
 * @property string $registeration_date
 *
 * The followings are the available model relations:
 * @property Colleges $college
 * @property Courses $course
 * @property YearOfGraduation $yearOfGraduation
 */
class CampusAmbassador extends CActiveRecord
{
        public $verifyCode;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'campus_ambassador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, mobile_number, email_id, college_id, course_id, year_of_graduation_id, question_1, question_2, registeration_date', 'required'),
			array('college_id, course_id, year_of_graduation_id', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, mobile_number, email_id,  name_of_college, name_of_course', 'length', 'max'=>255),
                        array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
                        array('question_3', 'safe'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, mobile_number, email_id, college_id, course_id, year_of_graduation_id, question_1, question_2, question_3, registeration_date', 'safe', 'on'=>'search'),
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
			'college' => array(self::BELONGS_TO, 'Colleges', 'college_id'),
			'course' => array(self::BELONGS_TO, 'Courses', 'course_id'),
			'yearOfGraduation' => array(self::BELONGS_TO, 'YearOfGraduation', 'year_of_graduation_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'mobile_number' => 'Mobile Number',
			'email_id' => 'Email',
			'college_id' => 'College',
			'course_id' => 'Course',
			'year_of_graduation_id' => 'Year Of Graduation',
			'question_1' => 'Why do you want to be a MBAtrek Campus Ambassador? ',
			'question_2' => 'Suggest two super creative ideas to share the importance of career development in your college / university',
			'question_3' => 'Any additional information you would like to provide us <span style="color:grey;">(Optional)</span>',
			'registeration_date' => 'Registeration Date',
                        'name_of_college' => 'Name Of College',
			'name_of_course' => 'Name Of Course',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('mobile_number',$this->mobile_number,true);
		$criteria->compare('email_id',$this->email_id,true);
		$criteria->compare('college_id',$this->college_id);
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('year_of_graduation_id',$this->year_of_graduation_id);
		$criteria->compare('question_1',$this->question_1,true);
		$criteria->compare('question_2',$this->question_2,true);
		$criteria->compare('question_3',$this->question_3,true);
		$criteria->compare('registeration_date',$this->registeration_date,true);
                $criteria->order = "id desc";
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CampusAmbassador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
