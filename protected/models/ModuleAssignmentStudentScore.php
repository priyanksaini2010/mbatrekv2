<?php

/**
 * This is the model class for table "module_assignment_student_score".
 *
 * The followings are the available columns in table 'module_assignment_student_score':
 * @property integer $id
 * @property integer $module_assignment_id
 * @property integer $student_id
 * @property integer $total_score
 * @property integer $student_score
 * @property string $status
 * @property string $complete_date
 * @property string $close_date
 *
 * The followings are the available model relations:
 * @property ModuleAssignment $moduleAssignment
 * @property Students $student
 */
class ModuleAssignmentStudentScore extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'module_assignment_student_score';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module_assignment_id, student_id, total_score, student_score, status, complete_date, close_date', 'required'),
			array('module_assignment_id, student_id, total_score, student_score', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, module_assignment_id, student_id, total_score, student_score, status, complete_date, close_date', 'safe', 'on'=>'search'),
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
			'moduleAssignment' => array(self::BELONGS_TO, 'ModuleAssignment', 'module_assignment_id'),
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
			'module_assignment_id' => 'Module Assignment',
			'student_id' => 'Student',
			'total_score' => 'Total Score',
			'student_score' => 'Student Score',
			'status' => 'Status',
			'complete_date' => 'Complete Date',
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
		$criteria->compare('module_assignment_id',$this->module_assignment_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('total_score',$this->total_score);
		$criteria->compare('student_score',$this->student_score);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('complete_date',$this->complete_date,true);
		$criteria->compare('close_date',$this->close_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuleAssignmentStudentScore the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
