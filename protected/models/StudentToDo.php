<?php

/**
 * This is the model class for table "student_to_do".
 *
 * The followings are the available columns in table 'student_to_do':
 * @property integer $id
 * @property integer $student_id
 * @property integer $module_id
 * @property string $due_date
 * @property string $open_date
 * @property string $close_date
 *
 * The followings are the available model relations:
 * @property Users $student
 * @property Module $module
 */
class StudentToDo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_to_do';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, module_id, due_date, open_date, close_date', 'required'),
			array('student_id, module_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, student_id, module_id, due_date, open_date, close_date', 'safe', 'on'=>'search'),
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
			'student' => array(self::BELONGS_TO, 'Users', 'student_id'),
			'module' => array(self::BELONGS_TO, 'Module', 'module_id'),
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
			'module_id' => 'Module',
			'due_date' => 'Due Date',
			'open_date' => 'Open Date',
			'close_date' => 'Close Date',
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
		$criteria->compare('module_id',$this->module_id);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('open_date',$this->open_date,true);
		$criteria->compare('close_date',$this->close_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentToDo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
