<?php

/**
 * This is the model class for table "present_monthly".
 *
 * The followings are the available columns in table 'present_monthly':
 * @property string $total_present
 * @property string $date
 * @property integer $institute_batch_id
 */
class PresentMonthly extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'present_monthly';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_batch_id', 'required'),
			array('institute_batch_id', 'numerical', 'integerOnly'=>true),
			array('total_present', 'length', 'max'=>21),
			array('date', 'length', 'max'=>7),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('total_present, date, institute_batch_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'total_present' => 'Total Present',
			'date' => 'Date',
			'institute_batch_id' => 'Institute Batch',
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

		$criteria->compare('total_present',$this->total_present,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('institute_batch_id',$this->institute_batch_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PresentMonthly the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
