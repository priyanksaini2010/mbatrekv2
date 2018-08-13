<?php

/**
 * This is the model class for table "institute_interaction_with_placemnet_attendance".
 *
 * The followings are the available columns in table 'institute_interaction_with_placemnet_attendance':
 * @property integer $id
 * @property integer $institute_interaction_with_placemnet_id
 * @property string $member_name
 *
 * The followings are the available model relations:
 * @property InstituteInteractionWithPlacemnet $instituteInteractionWithPlacemnet
 */
class InstituteInteractionWithPlacemnetAttendance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_interaction_with_placemnet_attendance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_interaction_with_placemnet_id, member_name', 'required'),
			array('institute_interaction_with_placemnet_id', 'numerical', 'integerOnly'=>true),
			array('member_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_interaction_with_placemnet_id, member_name', 'safe', 'on'=>'search'),
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
			'instituteInteractionWithPlacemnet' => array(self::BELONGS_TO, 'InstituteInteractionWithPlacemnet', 'institute_interaction_with_placemnet_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institute_interaction_with_placemnet_id' => 'Institute Interaction With Placemnet',
			'member_name' => 'Member Name',
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
		$criteria->compare('institute_interaction_with_placemnet_id',$this->institute_interaction_with_placemnet_id);
		$criteria->compare('member_name',$this->member_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteInteractionWithPlacemnetAttendance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
