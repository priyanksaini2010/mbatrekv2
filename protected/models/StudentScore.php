<?php

/**
 * This is the model class for table "student_score".
 *
 * The followings are the available columns in table 'student_score':
 * @property integer $id
 * @property integer $student_id
 * @property integer $module_id
 * @property double $student_score
 * @property double $college_score
 * @property double $university_score
 *
 * The followings are the available model relations:
 * @property Users $student
 * @property Module $module
 */
class StudentScore extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_score';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, module_id, student_score, college_score, university_score', 'required'),
			array('student_id, module_id', 'numerical', 'integerOnly'=>true),
			array('student_score, college_score, university_score', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, student_id, module_id, student_score, college_score, university_score', 'safe', 'on'=>'search'),
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
			'student_score' => 'Student Score',
			'college_score' => 'College Score',
			'university_score' => 'University Score',
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
		$criteria->compare('student_score',$this->student_score);
		$criteria->compare('college_score',$this->college_score);
		$criteria->compare('university_score',$this->university_score);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentScore the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
