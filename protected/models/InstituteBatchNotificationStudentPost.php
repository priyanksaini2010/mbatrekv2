<?php

/**
 * This is the model class for table "institute_batch_notification_student_post".
 *
 * The followings are the available columns in table 'institute_batch_notification_student_post':
 * @property integer $id
 * @property integer $institute_batch_notification_id
 * @property integer $student_id
 * @property integer $is_shown
 * @property string $mentor
 * @property string $Agreement_with_session_and_mentor
 * @property string $Expectations_met
 * @property string $Learning_from_colleagues
 * @property string $Real_situation_applicability
 * @property integer $rating
 *
 * The followings are the available model relations:
 * @property Students $student
 * @property InstituteBatchNotification $instituteBatchNotification
 */
class InstituteBatchNotificationStudentPost extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_batch_notification_student_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_batch_notification_id, student_id, is_shown, mentor, Agreement_with_session_and_mentor, Expectations_met, Learning_from_colleagues, Real_situation_applicability, rating', 'required'),
			array('institute_batch_notification_id, student_id, is_shown, rating', 'numerical', 'integerOnly'=>true),
			array('mentor', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_batch_notification_id, student_id, is_shown, mentor, Agreement_with_session_and_mentor, Expectations_met, Learning_from_colleagues, Real_situation_applicability, rating', 'safe', 'on'=>'search'),
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
			'instituteBatchNotification' => array(self::BELONGS_TO, 'InstituteBatchNotification', 'institute_batch_notification_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institute_batch_notification_id' => 'Institute Batch Notification',
			'student_id' => 'Student',
			'is_shown' => 'Is Shown',
			'mentor' => 'Mentor',
			'Agreement_with_session_and_mentor' => 'Agreement With Session And Mentor',
			'Expectations_met' => 'Expectations Met',
			'Learning_from_colleagues' => 'Learning From Colleagues',
			'Real_situation_applicability' => 'Real Situation Applicability',
			'rating' => 'Rating',
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
		$criteria->compare('institute_batch_notification_id',$this->institute_batch_notification_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('is_shown',$this->is_shown);
		$criteria->compare('mentor',$this->mentor,true);
		$criteria->compare('Agreement_with_session_and_mentor',$this->Agreement_with_session_and_mentor,true);
		$criteria->compare('Expectations_met',$this->Expectations_met,true);
		$criteria->compare('Learning_from_colleagues',$this->Learning_from_colleagues,true);
		$criteria->compare('Real_situation_applicability',$this->Real_situation_applicability,true);
		$criteria->compare('rating',$this->rating);
                if(isset($_GET['institute_batch_id'])) {
                    $attributes = array("institute_batch_id"=>$_GET['institute_batch_id']);
                    $models = Students::model()->findAllByAttributes($attributes);
                    $students = CHtml::listData($models, 'id', 'id');
                    if(!empty($students)) {
                        $criteria->addInCondition("student_id",$students);
                    }
                }
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteBatchNotificationStudentPost the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
