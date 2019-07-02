<?php

/**
 * This is the model class for table "success_story".
 *
 * The followings are the available columns in table 'success_story':
 * @property integer $id
 * @property integer $type
 * @property integer $sub_type
 * @property string $college_or_company
 * @property string $author
 * @property string $course
 * @property string $video_url
 */
class SuccessStory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'success_story';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, sub_type, college_or_company, author, course, video_url', 'required'),
			array('type, sub_type', 'numerical', 'integerOnly'=>true),
			array('college_or_company, author, course, video_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, sub_type, college_or_company, author, course, video_url', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'sub_type' => 'Sub Type',
			'college_or_company' => 'College Or Company',
			'author' => 'Author',
			'course' => 'Course',
			'video_url' => 'Video Url',
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
		$criteria->compare('type',$this->type);
		$criteria->compare('sub_type',$this->sub_type);
		$criteria->compare('college_or_company',$this->college_or_company,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('course',$this->course,true);
		$criteria->compare('video_url',$this->video_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SuccessStory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
