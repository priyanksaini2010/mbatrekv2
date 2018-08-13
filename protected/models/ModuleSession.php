<?php

/**
 * This is the model class for table "module_session".
 *
 * The followings are the available columns in table 'module_session':
 * @property integer $id
 * @property integer $module_id
 * @property integer $institute_batch_id
 * @property string $agenda
 * @property string $session_plan
 * @property string $date
 * @property string $venue_type
 *
 * The followings are the available model relations:
 * @property Module $module
 * @property InstituteBatches $instituteBatch
 * @property ModuleSessionAttendance[] $moduleSessionAttendances
 */
class ModuleSession extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'module_session';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module_id, institute_batch_id, agenda, session_plan, date, venue_type', 'required'),
			array('module_id, institute_batch_id', 'numerical', 'integerOnly'=>true),
			array('agenda', 'length', 'max'=>255),
			array('venue_type', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, module_id, institute_batch_id, agenda, session_plan, date, venue_type', 'safe', 'on'=>'search'),
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
			'module' => array(self::BELONGS_TO, 'Module', 'module_id'),
			'instituteBatch' => array(self::BELONGS_TO, 'InstituteBatches', 'institute_batch_id'),
			'moduleSessionAttendances' => array(self::HAS_MANY, 'ModuleSessionAttendance', 'module_session_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'module_id' => 'Module',
			'institute_batch_id' => 'Institute Batch',
			'agenda' => 'Agenda',
			'session_plan' => 'Session Plan',
			'date' => 'Date',
			'venue_type' => 'Venue Type',
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
		$criteria->compare('module_id',$this->module_id);
		$criteria->compare('institute_batch_id',$this->institute_batch_id);
		$criteria->compare('agenda',$this->agenda,true);
		$criteria->compare('session_plan',$this->session_plan,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('venue_type',$this->venue_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuleSession the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
