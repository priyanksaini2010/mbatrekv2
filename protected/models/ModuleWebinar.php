<?php

/**
 * This is the model class for table "module_webinar".
 *
 * The followings are the available columns in table 'module_webinar':
 * @property integer $id
 * @property integer $module_id
 * @property integer $institute_batch_id
 * @property integer $institute_course_id
 * @property string $type
 * @property string $title
 * @property string $description
 * @property string $speaker
 * @property string $about_speaker
 * @property string $file
 * @property string $date_time
 *
 * The followings are the available model relations:
 * @property Module $module
 * @property InstituteBatches $instituteBatch
 * @property InstituteCourses $instituteCourse
 */
class ModuleWebinar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'module_webinar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module_id, institute_batch_id, institute_course_id, type, title, description, speaker, about_speaker, file, date_time', 'required'),
			array('module_id, institute_batch_id, institute_course_id', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>1),
			array('title, speaker, file', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, module_id, institute_batch_id, institute_course_id, type, title, description, speaker, about_speaker, file, date_time', 'safe', 'on'=>'search'),
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
			'instituteCourse' => array(self::BELONGS_TO, 'InstituteCourses', 'institute_course_id'),
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
			'institute_course_id' => 'Institute Course',
			'type' => 'Type',
			'title' => 'Title',
			'description' => 'Description',
			'speaker' => 'Speaker',
			'about_speaker' => 'About Speaker',
			'file' => 'File',
			'date_time' => 'Date Time',
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
		$criteria->compare('institute_course_id',$this->institute_course_id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('speaker',$this->speaker,true);
		$criteria->compare('about_speaker',$this->about_speaker,true);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('date_time',$this->date_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuleWebinar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
