<?php

/**
 * This is the model class for table "event_gallery".
 *
 * The followings are the available columns in table 'event_gallery':
 * @property integer $id
 * @property integer $event_category_id
 * @property string $image_1
 * @property string $image_2
 * @property string $image_3
 * @property string $name
 * @property string $description
 */
class EventGallery extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event_gallery';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_category_id, image_1, image_2, image_3, name, description', 'required'),
			array('event_category_id', 'numerical', 'integerOnly'=>true),
			array('image_1', 'length', 'max'=>1555),
			array('image_2, image_3, name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, event_category_id, image_1, image_2, image_3, name, description', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'event_category_id' => 'Event Category',
			'image_1' => 'Image 1',
			'image_2' => 'Image 2',
			'image_3' => 'Image 3',
			'name' => 'Name',
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
		$criteria->compare('event_category_id',$this->event_category_id);
		$criteria->compare('image_1',$this->image_1,true);
		$criteria->compare('image_2',$this->image_2,true);
		$criteria->compare('image_3',$this->image_3,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EventGallery the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
