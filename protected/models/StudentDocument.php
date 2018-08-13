<?php

/**
 * This is the model class for table "student_document".
 *
 * The followings are the available columns in table 'student_document':
 * @property integer $id
 * @property integer $institute_batch_id
 * @property integer $student_id
 * @property string $document
 *
 * The followings are the available model relations:
 * @property Students $student
 * @property InstituteBatches $instituteBatch
 */
class StudentDocument extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_document';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_batch_id, student_id, document', 'required'),
			array('institute_batch_id, student_id', 'numerical', 'integerOnly'=>true),
			array('document', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_batch_id, student_id, document', 'safe', 'on'=>'search'),
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
			'student' => array(self::BELONGS_TO, 'Students', 'student_id'),
			'instituteBatch' => array(self::BELONGS_TO, 'InstituteBatches', 'institute_batch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institute_batch_id' => 'Institute Batch',
			'student_id' => 'Student',
			'document' => 'Document',
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
		$criteria->compare('institute_batch_id',$this->institute_batch_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('document',$this->document,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentDocument the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
