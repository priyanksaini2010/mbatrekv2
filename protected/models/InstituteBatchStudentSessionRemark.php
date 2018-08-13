<?php

/**
 * This is the model class for table "institute_batch_student_session_remark".
 *
 * The followings are the available columns in table 'institute_batch_student_session_remark':
 * @property integer $id
 * @property string $feedback_by
 * @property integer $institute_batch_session_id
 * @property integer $student_Id
 * @property string $current_performance
 * @property string $past_performance
 * @property string $response
 *
 * The followings are the available model relations:
 * @property InstituteBatchSession $instituteBatchSession
 * @property Students $student
 * @property InstituteBatchStudentSessionRemarkResponse[] $instituteBatchStudentSessionRemarkResponses
 */
class InstituteBatchStudentSessionRemark extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_batch_student_session_remark';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_batch_session_id, student_Id, current_performance, past_performance, response', 'required'),
			array('institute_batch_session_id, student_Id', 'numerical', 'integerOnly'=>true),
			array('feedback_by', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, feedback_by, institute_batch_session_id, student_Id, current_performance, past_performance, response', 'safe', 'on'=>'search'),
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
			'instituteBatchSession' => array(self::BELONGS_TO, 'InstituteBatchSession', 'institute_batch_session_id'),
			'student' => array(self::BELONGS_TO, 'Students', 'student_Id'),
			'instituteBatchStudentSessionRemarkResponses' => array(self::HAS_MANY, 'InstituteBatchStudentSessionRemarkResponse', 'institute_batch_student_session_remark_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'feedback_by' => 'Feedback By',
			'institute_batch_session_id' => 'Institute Batch Session',
			'student_Id' => 'Student',
			'current_performance' => 'Current Performance',
			'past_performance' => 'Past Performance',
			'response' => 'Response',
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
		$criteria->compare('feedback_by',$this->feedback_by,true);
		$criteria->compare('institute_batch_session_id',$this->institute_batch_session_id);
		$criteria->compare('student_Id',$this->student_Id);
		$criteria->compare('current_performance',$this->current_performance,true);
		$criteria->compare('past_performance',$this->past_performance,true);
		$criteria->compare('response',$this->response,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteBatchStudentSessionRemark the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
