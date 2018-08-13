<?php

/**
 * This is the model class for table "institute_interaction_with_placemnet".
 *
 * The followings are the available columns in table 'institute_interaction_with_placemnet':
 * @property integer $id
 * @property integer $institute_id
 * @property integer $module_id
 * @property string $date_time
 * @property string $topic
 * @property string $stream
 * @property string $venue
 * @property string $agenda
 * @property string $type
 * @property string $duration
 * @property string $open_time
 * @property string $close_time
 * @property string $summary
 * @property string $attendace
 *
 * The followings are the available model relations:
 * @property Institutes $institute
 * @property Module $module
 * @property InstituteInteractionWithPlacemnetAttendance[] $instituteInteractionWithPlacemnetAttendances
 * @property InstituteInteractionWithPlacemnetPlanOfAction[] $instituteInteractionWithPlacemnetPlanOfActions
 */
class InstituteInteractionWithPlacemnet extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_interaction_with_placemnet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_id, module_id, date_time, topic, stream, venue, agenda, type, duration, open_time, close_time, summary', 'required'),
			array('institute_id, module_id', 'numerical', 'integerOnly'=>true),
			array('topic, stream, venue, agenda, duration, attendace', 'length', 'max'=>255),
			array('type', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_id, module_id, date_time, topic, stream, venue, agenda, type, duration, open_time, close_time, summary, attendace', 'safe', 'on'=>'search'),
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
			'institute' => array(self::BELONGS_TO, 'Institutes', 'institute_id'),
			'module' => array(self::BELONGS_TO, 'Module', 'module_id'),
			'instituteInteractionWithPlacemnetAttendances' => array(self::HAS_MANY, 'InstituteInteractionWithPlacemnetAttendance', 'institute_interaction_with_placemnet_id'),
			'instituteInteractionWithPlacemnetPlanOfActions' => array(self::HAS_MANY, 'InstituteInteractionWithPlacemnetPlanOfAction', 'institute_interaction_with_placemnet_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institute_id' => 'Institute',
			'module_id' => 'Module',
			'date_time' => 'Date Time',
			'topic' => 'Topic',
			'stream' => 'Stream',
			'venue' => 'Venue',
			'agenda' => 'Agenda',
			'type' => 'Type',
			'duration' => 'Duration',
			'open_time' => 'Open Time',
			'close_time' => 'Close Time',
			'summary' => 'Summary',
			'attendace' => 'Attendace',
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
		$criteria->compare('institute_id',$this->institute_id);
		$criteria->compare('module_id',$this->module_id);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('topic',$this->topic,true);
		$criteria->compare('stream',$this->stream,true);
		$criteria->compare('venue',$this->venue,true);
		$criteria->compare('agenda',$this->agenda,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('open_time',$this->open_time,true);
		$criteria->compare('close_time',$this->close_time,true);
		$criteria->compare('summary',$this->summary,true);
		$criteria->compare('attendace',$this->attendace,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteInteractionWithPlacemnet the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
