<?php

/**
 * This is the model class for table "student_session_feedback".
 *
 * The followings are the available columns in table 'student_session_feedback':
 * @property integer $id
 * @property integer $student_id
 * @property integer $session_id
 * @property integer $rating
 * @property integer $rating_2
 * @property integer $rating_3
 * @property integer $rating_4
 * @property integer $rating_5
 *
 * The followings are the available model relations:
 * @property Students $student
 * @property InstituteBatchSession $session
 */
class StudentSessionFeedback extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_session_feedback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, session_id, rating', 'required'),
			array('student_id, session_id, rating, rating_2, rating_3, rating_4, rating_5', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, student_id, session_id, rating, rating_2, rating_3, rating_4, rating_5', 'safe', 'on'=>'search'),
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
			'student' => array(self::BELONGS_TO, 'Students', 'student_id'),
			'session' => array(self::BELONGS_TO, 'InstituteBatchSession', 'session_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'student_id' => 'Student',
			'session_id' => 'Session',
			'rating' => 'Rating',
			'rating_2' => 'Rating 2',
			'rating_3' => 'Rating 3',
			'rating_4' => 'Rating 4',
			'rating_5' => 'Rating 5',
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
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('session_id',$this->session_id);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('rating_2',$this->rating_2);
		$criteria->compare('rating_3',$this->rating_3);
		$criteria->compare('rating_4',$this->rating_4);
		$criteria->compare('rating_5',$this->rating_5);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentSessionFeedback the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
