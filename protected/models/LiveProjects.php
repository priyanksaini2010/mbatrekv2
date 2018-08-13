<?php

/**
 * This is the model class for table "live_projects".
 *
 * The followings are the available columns in table 'live_projects':
 * @property integer $id
 * @property integer $industry_id
 * @property string $campus
 * @property string $city
 * @property string $company_name
 * @property integer $number_of_students
 * @property string $project_deliverables
 * @property double $stipend
 * @property integer $stipent_anotation
 * @property string $function
 * @property string $start_date
 * @property string $end_date
 * @property integer $created_by
 * @property string $file
 *
 * The followings are the available model relations:
 * @property Industries $industry
 * @property Users $createdBy
 * @property StudentLiveProject[] $studentLiveProjects
 */
class LiveProjects extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'live_projects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('industry_id, campus, city, number_of_students, project_deliverables, stipend, function, start_date, end_date', 'required'),
			array('industry_id, number_of_students, stipent_anotation, created_by', 'numerical', 'integerOnly'=>true),
			array('stipend', 'numerical'),
			array('campus, city, company_name, project_deliverables, function, file', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, industry_id, campus, city, company_name, number_of_students, project_deliverables, stipend, stipent_anotation, function, start_date, end_date, created_by, file', 'safe', 'on'=>'search'),
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
			'studentLiveProjects' => array(self::HAS_MANY, 'StudentLiveProject', 'live_project_id'),
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
			'campus' => 'Campus',
			'city' => 'City',
			'company_name' => 'Company Name',
			'number_of_students' => 'Number Of Students',
			'project_deliverables' => 'Project Deliverables',
			'stipend' => 'Stipend',
			'stipent_anotation' => 'Stipent Anotation',
			'function' => 'Function',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
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
		$criteria->compare('campus',$this->campus,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('number_of_students',$this->number_of_students);
		$criteria->compare('project_deliverables',$this->project_deliverables,true);
		$criteria->compare('stipend',$this->stipend);
		$criteria->compare('stipent_anotation',$this->stipent_anotation);
		$criteria->compare('function',$this->function,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
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
	 * @return LiveProjects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
