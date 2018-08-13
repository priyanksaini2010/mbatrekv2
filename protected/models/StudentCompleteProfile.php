<?php

/**
 * This is the model class for table "student_complete_profile".
 *
 * The followings are the available columns in table 'student_complete_profile':
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $phone_number
 * @property string $city
 * @property string $dob
 * @property string $program
 * @property string $last_login
 * @property string $name
 * @property integer $institute_batch_id
 * @property string $profile_json
 * @property integer $user_id
 */
class StudentCompleteProfile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_complete_profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password, name, institute_batch_id, profile_json, user_id', 'required'),
			array('id, institute_batch_id, user_id', 'numerical', 'integerOnly'=>true),
			array('email, password, phone_number, city, program, name', 'length', 'max'=>255),
			array('dob, last_login', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, password, phone_number, city, dob, program, last_login, name, institute_batch_id, profile_json, user_id', 'safe', 'on'=>'search'),
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
			'email' => 'Email',
			'password' => 'Password',
			'phone_number' => 'Phone Number',
			'city' => 'City',
			'dob' => 'Dob',
			'program' => 'Program',
			'last_login' => 'Last Login',
			'name' => 'Name',
			'institute_batch_id' => 'Institute Batch',
			'profile_json' => 'Profile Json',
			'user_id' => 'User',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('program',$this->program,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('institute_batch_id',$this->institute_batch_id);
		$criteria->compare('profile_json',$this->profile_json,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentCompleteProfile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
