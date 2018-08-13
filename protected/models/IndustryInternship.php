<?php

/**
 * This is the model class for table "industry_internship".
 *
 * The followings are the available columns in table 'industry_internship':
 * @property integer $id
 * @property integer $industry_id
 * @property string $company_name
 * @property string $project_title
 * @property string $function
 * @property string $start_date
 * @property string $end_date
 * @property string $location
 * @property double $stipend
 * @property integer $stipend_anotation
 * @property integer $number_of_openings
 * @property string $description_of_project
 * @property integer $created_by
 * @property string $file
 *
 * The followings are the available model relations:
 * @property Industries $industry
 * @property Users $createdBy
 * @property StudentInternship[] $studentInternships
 */
class IndustryInternship extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'industry_internship';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('industry_id, project_title, function, start_date, end_date, location, stipend, number_of_openings, description_of_project', 'required'),
			array('industry_id, stipend_anotation, number_of_openings, created_by', 'numerical', 'integerOnly'=>true),
			array('stipend', 'numerical'),
			array('company_name, project_title, function, location', 'length', 'max'=>255),
			array('file', 'length', 'max'=>400),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, industry_id, company_name, project_title, function, start_date, end_date, location, stipend, stipend_anotation, number_of_openings, description_of_project, created_by, file', 'safe', 'on'=>'search'),
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
			'studentInternships' => array(self::HAS_MANY, 'StudentInternship', 'internship_id'),
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
			'project_title' => 'Project Title',
			'function' => 'Function',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'location' => 'Location',
			'stipend' => 'Stipend',
			'stipend_anotation' => 'Stipend Anotation',
			'number_of_openings' => 'Number Of Openings',
			'description_of_project' => 'Description Of Project',
			'created_by' => 'Created By',
			'file' => 'File',
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
		$criteria->compare('project_title',$this->project_title,true);
		$criteria->compare('function',$this->function,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('stipend',$this->stipend);
		$criteria->compare('stipend_anotation',$this->stipend_anotation);
		$criteria->compare('number_of_openings',$this->number_of_openings);
		$criteria->compare('description_of_project',$this->description_of_project,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('file',$this->file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IndustryInternship the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
