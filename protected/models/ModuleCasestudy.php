<?php

/**
 * This is the model class for table "module_casestudy".
 *
 * The followings are the available columns in table 'module_casestudy':
 * @property integer $id
 * @property integer $module_id
 * @property integer $institute_batch_id
 * @property integer $function_id
 * @property string $title
 * @property string $background_image
 * @property string $file
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Module $module
 * @property InstituteBatches $instituteBatch
 * @property CasestudyFunctions $function
 */
class ModuleCasestudy extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'module_casestudy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module_id, institute_batch_id, function_id, title, background_image, file, description', 'required'),
			array('module_id, institute_batch_id, function_id', 'numerical', 'integerOnly'=>true),
			array('title, background_image, file', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, module_id, institute_batch_id, function_id, title, background_image, file, description', 'safe', 'on'=>'search'),
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
			'function' => array(self::BELONGS_TO, 'CasestudyFunctions', 'function_id'),
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
			'function_id' => 'Function',
			'title' => 'Title',
			'background_image' => 'Background Image',
			'file' => 'File',
			'description' => 'Description',
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
		$criteria->compare('function_id',$this->function_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('background_image',$this->background_image,true);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuleCasestudy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
