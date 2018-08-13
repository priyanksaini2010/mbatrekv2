<?php

/**
 * This is the model class for table "module".
 *
 * The followings are the available columns in table 'module':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $due_month
 * @property integer $seq
 *
 * The followings are the available model relations:
 * @property InstituteBatchSession[] $instituteBatchSessions
 * @property InstituteInteractionWithPlacemnet[] $instituteInteractionWithPlacemnets
 * @property ModuleAssignment[] $moduleAssignments
 * @property ModuleCasestudy[] $moduleCasestudies
 * @property ModuleSession[] $moduleSessions
 * @property ModuleStudentRating[] $moduleStudentRatings
 * @property ModuleWebinar[] $moduleWebinars
 * @property StudentScore[] $studentScores
 * @property StudentToDo[] $studentToDos
 */
class Module extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'module';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, due_month', 'required'),
			array('seq', 'numerical', 'integerOnly'=>true),
			array('name, due_month', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, due_month, seq', 'safe', 'on'=>'search'),
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
			'instituteBatchSessions' => array(self::HAS_MANY, 'InstituteBatchSession', 'module_id'),
			'instituteInteractionWithPlacemnets' => array(self::HAS_MANY, 'InstituteInteractionWithPlacemnet', 'module_id'),
			'moduleAssignments' => array(self::HAS_MANY, 'ModuleAssignment', 'module_id'),
			'moduleCasestudies' => array(self::HAS_MANY, 'ModuleCasestudy', 'module_id'),
			'moduleSessions' => array(self::HAS_MANY, 'ModuleSession', 'module_id'),
			'moduleStudentRatings' => array(self::HAS_MANY, 'ModuleStudentRating', 'module_id'),
			'moduleWebinars' => array(self::HAS_MANY, 'ModuleWebinar', 'module_id'),
			'studentScores' => array(self::HAS_MANY, 'StudentScore', 'module_id'),
			'studentToDos' => array(self::HAS_MANY, 'StudentToDo', 'module_id'),
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
			'description' => 'Description',
			'due_month' => 'Due Month',
			'seq' => 'Seq',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('due_month',$this->due_month,true);
		$criteria->compare('seq',$this->seq);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Module the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
