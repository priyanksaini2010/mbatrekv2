<?php

/**
 * This is the model class for table "university_course_batch".
 *
 * The followings are the available columns in table 'university_course_batch':
 * @property integer $id
 * @property integer $university_id
 * @property string $courser_name
 * @property string $courser_batch
 *
 * The followings are the available model relations:
 * @property Universities $university
 */
class UniversityCourseBatch extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'university_course_batch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('university_id, courser_name, courser_batch', 'required'),
			array('university_id', 'numerical', 'integerOnly'=>true),
			array('courser_name, courser_batch', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, university_id, courser_name, courser_batch', 'safe', 'on'=>'search'),
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
			'university' => array(self::BELONGS_TO, 'Universities', 'university_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'university_id' => 'University',
			'courser_name' => 'Courser Name',
			'courser_batch' => 'Courser Batch',
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
		$criteria->compare('university_id',$this->university_id);
		$criteria->compare('courser_name',$this->courser_name,true);
		$criteria->compare('courser_batch',$this->courser_batch,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UniversityCourseBatch the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
