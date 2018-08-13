<?php

/**
 * This is the model class for table "industries".
 *
 * The followings are the available columns in table 'industries':
 * @property integer $id
 * @property string $name
 * @property string $business_focus
 * @property string $profile
 * @property string $experience
 * @property string $skills
 * @property string $business_school_prefed
 * @property string $area_of_interest
 * @property string $address
 * @property string $mobile_number
 * @property string $office_number
 * @property string $email
 * @property string $founder_name
 * @property string $founder_image
 * @property string $live_project
 * @property string $internship
 * @property string $placement
 * @property string $designation
 *
 * The followings are the available model relations:
 * @property IndustryInternship[] $industryInternships
 * @property IndustryProjectWithFaculty[] $industryProjectWithFaculties
 * @property IndustryUser[] $industryUsers
 * @property JobPosting[] $jobPostings
 * @property LiveProjects[] $liveProjects
 */
class Industries extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'industries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name, live_project, internship, placement, designation', 'length', 'max'=>255),
			array('business_focus, profile, experience, skills, business_school_prefed, mobile_number, office_number, email, founder_name, founder_image', 'length', 'max'=>222),
			array('area_of_interest, address', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, business_focus, profile, experience, skills, business_school_prefed, area_of_interest, address, mobile_number, office_number, email, founder_name, founder_image, live_project, internship, placement, designation', 'safe', 'on'=>'search'),
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
			'industryInternships' => array(self::HAS_MANY, 'IndustryInternship', 'industry_id'),
			'industryProjectWithFaculties' => array(self::HAS_MANY, 'IndustryProjectWithFaculty', 'industry_id'),
			'industryUsers' => array(self::HAS_MANY, 'IndustryUser', 'industry_id'),
			'jobPostings' => array(self::HAS_MANY, 'JobPosting', 'industry_id'),
			'liveProjects' => array(self::HAS_MANY, 'LiveProjects', 'industry_id'),
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
			'business_focus' => 'Business Focus',
			'profile' => 'Profile',
			'experience' => 'Experience',
			'skills' => 'Skills',
			'business_school_prefed' => 'Business School Prefed',
			'area_of_interest' => 'Area Of Interest',
			'address' => 'Address',
			'mobile_number' => 'Mobile Number',
			'office_number' => 'Office Number',
			'email' => 'Email',
			'founder_name' => 'Founder Name',
			'founder_image' => 'Founder Image',
			'live_project' => 'Live Project',
			'internship' => 'Internship',
			'placement' => 'Placement',
			'designation' => 'Designation',
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
		$criteria->compare('business_focus',$this->business_focus,true);
		$criteria->compare('profile',$this->profile,true);
		$criteria->compare('experience',$this->experience,true);
		$criteria->compare('skills',$this->skills,true);
		$criteria->compare('business_school_prefed',$this->business_school_prefed,true);
		$criteria->compare('area_of_interest',$this->area_of_interest,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('mobile_number',$this->mobile_number,true);
		$criteria->compare('office_number',$this->office_number,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('founder_name',$this->founder_name,true);
		$criteria->compare('founder_image',$this->founder_image,true);
		$criteria->compare('live_project',$this->live_project,true);
		$criteria->compare('internship',$this->internship,true);
		$criteria->compare('placement',$this->placement,true);
		$criteria->compare('designation',$this->designation,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Industries the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
