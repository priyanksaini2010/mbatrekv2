<?php

/**
 * This is the model class for table "job_posting".
 *
 * The followings are the available columns in table 'job_posting':
 * @property integer $id
 * @property integer $industry_id
 * @property string $company_name
 * @property string $function
 * @property string $position
 * @property integer $number_of_opening
 * @property string $description_of_job
 * @property string $preferred_qualification
 * @property double $salary
 * @property integer $salary_anotation
 * @property string $job_location
 * @property integer $created_by
 *
 * The followings are the available model relations:
 * @property Industries $industry
 * @property Users $createdBy
 */
class JobPosting extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'job_posting';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('industry_id, function, position, number_of_opening, description_of_job, preferred_qualification, salary, job_location', 'required'),
			array('industry_id, number_of_opening, salary_anotation, created_by', 'numerical', 'integerOnly'=>true),
			array('salary', 'numerical'),
			array('company_name, function, position, description_of_job, preferred_qualification, job_location', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, industry_id, company_name, function, position, number_of_opening, description_of_job, preferred_qualification, salary, salary_anotation, job_location, created_by', 'safe', 'on'=>'search'),
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
			'industry' => array(self::BELONGS_TO, 'Industries', 'industry_id'),
			'createdBy' => array(self::BELONGS_TO, 'Users', 'created_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'industry_id' => 'Industry',
			'company_name' => 'Company Name',
			'function' => 'Function',
			'position' => 'Position',
			'number_of_opening' => 'Number Of Opening',
			'description_of_job' => 'Description Of Job',
			'preferred_qualification' => 'Preferred Qualification',
			'salary' => 'Salary',
			'salary_anotation' => 'Salary Anotation',
			'job_location' => 'Job Location',
			'created_by' => 'Created By',
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
		$criteria->compare('industry_id',$this->industry_id);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('function',$this->function,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('number_of_opening',$this->number_of_opening);
		$criteria->compare('description_of_job',$this->description_of_job,true);
		$criteria->compare('preferred_qualification',$this->preferred_qualification,true);
		$criteria->compare('salary',$this->salary);
		$criteria->compare('salary_anotation',$this->salary_anotation);
		$criteria->compare('job_location',$this->job_location,true);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JobPosting the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
