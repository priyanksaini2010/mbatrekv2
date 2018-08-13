<?php

/**
 * This is the model class for table "casestudy_student_score".
 *
 * The followings are the available columns in table 'casestudy_student_score':
 * @property integer $id
 * @property integer $casestudy_id
 * @property integer $student_id
 * @property integer $total_score
 * @property integer $student_score
 * @property string $completion_date
 *
 * The followings are the available model relations:
 * @property ModuleCasestudy $casestudy
 * @property Students $student
 */
class CasestudyStudentScore extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'casestudy_student_score';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('casestudy_id, student_id, total_score, student_score, completion_date', 'required'),
			array('casestudy_id, student_id, total_score, student_score', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, casestudy_id, student_id, total_score, student_score, completion_date', 'safe', 'on'=>'search'),
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
			'casestudy' => array(self::BELONGS_TO, 'ModuleCasestudy', 'casestudy_id'),
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
			'casestudy_id' => 'Casestudy',
			'student_id' => 'Student',
			'total_score' => 'Total Score',
			'student_score' => 'Student Score',
			'completion_date' => 'Completion Date',
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
		$criteria->compare('casestudy_id',$this->casestudy_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('total_score',$this->total_score);
		$criteria->compare('student_score',$this->student_score);
		$criteria->compare('completion_date',$this->completion_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CasestudyStudentScore the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
