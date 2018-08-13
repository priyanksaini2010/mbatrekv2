<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $username
 * @property string $date_registered
 * @property integer $role
 * @property string $institute_industry_name
 * @property string $fname
 * @property string $lname
 * @property string $phone_number
 * @property string $dob
 * @property string $institute_email_address
 * @property string $institute
 * @property string $city
 * @property string $program
 * @property string $batch
 * @property integer $is_approve
 * @property integer $is_verified
 * @property string $last_login
 *
 * The followings are the available model relations:
 * @property IndustryInternship[] $industryInternships
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password, username, date_registered, role, fname, lname', 'required'),
			array('role, is_approve, is_verified', 'numerical', 'integerOnly'=>true),
			array('email, password, username, institute_industry_name, fname, lname, phone_number, institute_email_address, institute, city, program, batch', 'length', 'max'=>255),
			array('dob, last_login', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, password, username, date_registered, role, institute_industry_name, fname, lname, phone_number, dob, institute_email_address, institute, city, program, batch, is_approve, is_verified, last_login', 'safe', 'on'=>'search'),
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
			'industryInternships' => array(self::HAS_MANY, 'IndustryInternship', 'industry_id'),
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
			'username' => 'Username',
			'date_registered' => 'Date Registered',
			'role' => 'Role',
			'institute_industry_name' => 'Institute Industry Name',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'phone_number' => 'Phone Number',
			'dob' => 'Dob',
			'institute_email_address' => 'Institute Email Address',
			'institute' => 'Institute',
			'city' => 'City',
			'program' => 'Program',
			'batch' => 'Batch',
			'is_approve' => 'Is Approve',
			'is_verified' => 'Is Verified',
			'last_login' => 'Last Login',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('date_registered',$this->date_registered,true);
		$criteria->compare('role',$this->role);
		$criteria->compare('institute_industry_name',$this->institute_industry_name,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('institute_email_address',$this->institute_email_address,true);
		$criteria->compare('institute',$this->institute,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('program',$this->program,true);
		$criteria->compare('batch',$this->batch,true);
		$criteria->compare('is_approve',$this->is_approve);
		$criteria->compare('is_verified',$this->is_verified);
		$criteria->compare('last_login',$this->last_login,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
