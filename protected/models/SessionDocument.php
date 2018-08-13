<?php

/**
 * This is the model class for table "session_document".
 *
 * The followings are the available columns in table 'session_document':
 * @property integer $id
 * @property string $session_name
 * @property integer $institute_batch_session_id
 * @property integer $batch_id
 * @property string $task_assigned
 * @property string $link_of_assignment
 * @property string $your_document
 *
 * The followings are the available model relations:
 * @property InstituteBatches $batch
 * @property Students $instituteBatchSession
 */
class SessionDocument extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'session_document';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_batch_session_id, batch_id', 'numerical', 'integerOnly'=>true),
			array('session_name', 'length', 'max'=>255),
			array('task_assigned, link_of_assignment, your_document', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, session_name, institute_batch_session_id, batch_id, task_assigned, link_of_assignment, your_document', 'safe', 'on'=>'search'),
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
			'batch' => array(self::BELONGS_TO, 'InstituteBatches', 'batch_id'),
			'instituteBatchSession' => array(self::BELONGS_TO, 'Students', 'institute_batch_session_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'session_name' => 'Session Name',
			'institute_batch_session_id' => 'Institute Batch Session',
			'batch_id' => 'Batch',
			'task_assigned' => 'Task Assigned',
			'link_of_assignment' => 'Link Of Assignment',
			'your_document' => 'Your Document',
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
		$criteria->compare('session_name',$this->session_name,true);
		$criteria->compare('institute_batch_session_id',$this->institute_batch_session_id);
		$criteria->compare('batch_id',$this->batch_id);
		$criteria->compare('task_assigned',$this->task_assigned,true);
		$criteria->compare('link_of_assignment',$this->link_of_assignment,true);
		$criteria->compare('your_document',$this->your_document,true);
		$criteria->order = 'id DESC';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SessionDocument the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
