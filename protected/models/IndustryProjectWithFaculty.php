<?php

/**
 * This is the model class for table "industry_project_with_faculty".
 *
 * The followings are the available columns in table 'industry_project_with_faculty':
 * @property integer $id
 * @property integer $industry_id
 * @property string $assignment_title
 * @property string $deliverable_requirement
 * @property string $desired_experience
 * @property double $budget
 * @property string $time_scedule
 * @property integer $created_by
 *
 * The followings are the available model relations:
 * @property Users $createdBy
 * @property Industries $industry
 */
class IndustryProjectWithFaculty extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'industry_project_with_faculty';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('industry_id, assignment_title, deliverable_requirement, desired_experience, budget, time_scedule', 'required'),
			array('industry_id, created_by', 'numerical', 'integerOnly'=>true),
			array('budget', 'numerical'),
			array('assignment_title, deliverable_requirement, desired_experience, time_scedule', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, industry_id, assignment_title, deliverable_requirement, desired_experience, budget, time_scedule, created_by', 'safe', 'on'=>'search'),
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
			'createdBy' => array(self::BELONGS_TO, 'Users', 'created_by'),
			'industry' => array(self::BELONGS_TO, 'Industries', 'industry_id'),
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
			'assignment_title' => 'Assignment Title',
			'deliverable_requirement' => 'Deliverable Requirement',
			'desired_experience' => 'Desired Experience',
			'budget' => 'Budget',
			'time_scedule' => 'Time Scedule',
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
		$criteria->compare('assignment_title',$this->assignment_title,true);
		$criteria->compare('deliverable_requirement',$this->deliverable_requirement,true);
		$criteria->compare('desired_experience',$this->desired_experience,true);
		$criteria->compare('budget',$this->budget);
		$criteria->compare('time_scedule',$this->time_scedule,true);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IndustryProjectWithFaculty the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
