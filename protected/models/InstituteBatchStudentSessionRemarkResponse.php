<?php

/**
 * This is the model class for table "institute_batch_student_session_remark_response".
 *
 * The followings are the available columns in table 'institute_batch_student_session_remark_response':
 * @property integer $id
 * @property integer $institute_batch_student_session_remark_id
 * @property integer $response_given_by
 * @property string $response
 *
 * The followings are the available model relations:
 * @property Users $responseGivenBy
 * @property InstituteBatchStudentSessionRemark $instituteBatchStudentSessionRemark
 */
class InstituteBatchStudentSessionRemarkResponse extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_batch_student_session_remark_response';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_batch_student_session_remark_id, response_given_by, response', 'required'),
			array('institute_batch_student_session_remark_id, response_given_by', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_batch_student_session_remark_id, response_given_by, response', 'safe', 'on'=>'search'),
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
			'responseGivenBy' => array(self::BELONGS_TO, 'Users', 'response_given_by'),
			'instituteBatchStudentSessionRemark' => array(self::BELONGS_TO, 'InstituteBatchStudentSessionRemark', 'institute_batch_student_session_remark_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institute_batch_student_session_remark_id' => 'Institute Batch Student Session Remark',
			'response_given_by' => 'Response Given By',
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
		$criteria->compare('institute_batch_student_session_remark_id',$this->institute_batch_student_session_remark_id);
		$criteria->compare('response_given_by',$this->response_given_by);
		$criteria->compare('response',$this->response,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteBatchStudentSessionRemarkResponse the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
