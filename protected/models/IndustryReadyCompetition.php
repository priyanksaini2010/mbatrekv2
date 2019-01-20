<?php

/**
 * This is the model class for table "industry_ready_competition".
 *
 * The followings are the available columns in table 'industry_ready_competition':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile_number
 * @property string $email_id
 * @property string $team_name
 * @property string $first_name_1
 * @property string $last_name_1
 * @property string $mobile_number_1
 * @property string $email_Id_1
 * @property string $first_name_2
 * @property string $last_name_2
 * @property string $mobile_number_2
 * @property string $email_Id_2
 * @property integer $mba_batch
 * @property integer $college
 * @property string $name_of_college
 * @property string $question_1
 * @property string $question_2
 * @property string $question_3
 * @property string $registeration_date
 */
class IndustryReadyCompetition extends CActiveRecord
{
    public $verifyCode;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'industry_ready_competition';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, mobile_number, email_id, team_name, first_name_1, last_name_1, mobile_number_1, email_Id_1, first_name_2, last_name_2, mobile_number_2, email_Id_2, mba_batch, college, registeration_date', 'required'),
			array('mba_batch, college', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, mobile_number, email_id, team_name, first_name_1, last_name_1, mobile_number_1, email_Id_1, first_name_2, last_name_2, mobile_number_2, email_Id_2, name_of_college', 'length', 'max'=>255),
			array('question_1, question_2, question_3', 'safe'),
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, mobile_number, email_id, team_name, first_name_1, last_name_1, mobile_number_1, email_Id_1, first_name_2, last_name_2, mobile_number_2, email_Id_2, mba_batch, college, name_of_college, question_1, question_2, question_3, registeration_date', 'safe', 'on'=>'search'),
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
            'mbaBatch' => array(self::BELONGS_TO, 'YearOfGraduation', 'mba_batch'),
            'college0' => array(self::BELONGS_TO, 'Colleges', 'college'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name *',
			'last_name' => 'Last Name *',
			'mobile_number' => 'Mobile Number *',
			'email_id' => 'Email Id *',
			'team_name' => 'Name of Your Team *',
			'first_name_1' => 'First Name *',
			'last_name_1' => 'Last Name *',
			'mobile_number_1' => 'Mobile Number *',
			'email_Id_1' => 'Email Id *',
			'first_name_2' => 'First Name *',
			'last_name_2' => 'Last Name *',
			'mobile_number_2' => 'Mobile Number *',
			'email_Id_2' => 'Email Id *',
			'mba_batch' => 'Mba Batch',
			'college' => 'College',
			'name_of_college' => 'Name Of College',
			'question_1' => 'Name of your Student Placement Coordinator / Student Committee Member',
			'question_2' => 'Email of your Student Placement Coordinator / Student Committee Member * ',
			'question_3' => 'Mobile No of your Student Placement Coordinator / Student Committee Member',
			'registeration_date' => 'Registration Date',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('mobile_number',$this->mobile_number,true);
		$criteria->compare('email_id',$this->email_id,true);
		$criteria->compare('team_name',$this->team_name,true);
		$criteria->compare('first_name_1',$this->first_name_1,true);
		$criteria->compare('last_name_1',$this->last_name_1,true);
		$criteria->compare('mobile_number_1',$this->mobile_number_1,true);
		$criteria->compare('email_Id_1',$this->email_Id_1,true);
		$criteria->compare('first_name_2',$this->first_name_2,true);
		$criteria->compare('last_name_2',$this->last_name_2,true);
		$criteria->compare('mobile_number_2',$this->mobile_number_2,true);
		$criteria->compare('email_Id_2',$this->email_Id_2,true);
		$criteria->compare('mba_batch',$this->mba_batch);
		$criteria->compare('college',$this->college);
		$criteria->compare('name_of_college',$this->name_of_college,true);
		$criteria->compare('question_1',$this->question_1,true);
		$criteria->compare('question_2',$this->question_2,true);
		$criteria->compare('question_3',$this->question_3,true);
		$criteria->compare('registeration_date',$this->registeration_date,true);
        $criteria->order = "id desc";
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IndustryReadyCompetition the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
