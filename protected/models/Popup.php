<?php

/**
 * This is the model class for table "popup".
 *
 * The followings are the available columns in table 'popup':
 * @property integer $id
 * @property string $url
 * @property string $for_user
 * @property string $header_text
 * @property string $sub_heading_text
 * @property string $button_text
 * @property string $cancellation_text
 */
class Popup extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'popup';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url, for_user, header_text, sub_heading_text, button_text, cancellation_text', 'required'),
			array('url, for_user, header_text, sub_heading_text, button_text, cancellation_text', 'length', 'max'=>255),
            array('status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, url, for_user, header_text, sub_heading_text, button_text, cancellation_text', 'safe', 'on'=>'search'),
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
			'url' => 'Page',
			'for_user' => 'Target Users',
			'header_text' => 'Header Text',
			'sub_heading_text' => 'Sub Heading Text',
			'button_text' => 'Button Text',
			'cancellation_text' => 'Cancellation Text',
            'status' => 'Status',
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
		$criteria->compare('url',$this->url,true);
		$criteria->compare('for_user',$this->for_user,true);
		$criteria->compare('header_text',$this->header_text,true);
		$criteria->compare('sub_heading_text',$this->sub_heading_text,true);
		$criteria->compare('button_text',$this->button_text,true);
		$criteria->compare('cancellation_text',$this->cancellation_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Popup the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
