<?php

/**
 * This is the model class for table "module_assignment".
 *
 * The followings are the available columns in table 'module_assignment':
 * @property integer $id
 * @property integer $module_id
 * @property integer $institute_batch_id
 * @property string $title
 * @property string $due_date
 * @property string $close_date
 * @property string $open_date
 * @property string $content
 *
 * The followings are the available model relations:
 * @property Module $module
 * @property InstituteBatches $instituteBatch
 * @property ModuleAssignmentStudentScore[] $moduleAssignmentStudentScores
 */
class ModuleAssignment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'module_assignment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module_id, institute_batch_id, title, due_date, close_date, open_date, content', 'required'),
			array('module_id, institute_batch_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, module_id, institute_batch_id, title, due_date, close_date, open_date, content', 'safe', 'on'=>'search'),
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
			'module' => array(self::BELONGS_TO, 'Module', 'module_id'),
			'instituteBatch' => array(self::BELONGS_TO, 'InstituteBatches', 'institute_batch_id'),
			'moduleAssignmentStudentScores' => array(self::HAS_MANY, 'ModuleAssignmentStudentScore', 'module_assignment_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'module_id' => 'Module',
			'institute_batch_id' => 'Institute Batch',
			'title' => 'Title',
			'due_date' => 'Due Date',
			'close_date' => 'Close Date',
			'open_date' => 'Open Date',
			'content' => 'Content',
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
		$criteria->compare('module_id',$this->module_id);
		$criteria->compare('institute_batch_id',$this->institute_batch_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('close_date',$this->close_date,true);
		$criteria->compare('open_date',$this->open_date,true);
		$criteria->compare('content',$this->content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuleAssignment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
