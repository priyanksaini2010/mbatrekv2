<?php

/**
 * This is the model class for table "institute_user".
 *
 * The followings are the available columns in table 'institute_user':
 * @property integer $id
 * @property integer $institute_id
 * @property integer $user_id
 * @property string $designation
 * @property string $profile_pic
 * @property string $prog_1
 * @property string $prog_2
 * @property string $prog_3
 * @property string $live_1
 * @property string $live_2
 * @property string $live_3
 * @property string $int_1
 * @property string $int_2
 * @property string $int_3
 * @property integer $mobile
 *
 * The followings are the available model relations:
 * @property Institutes $institute
 * @property Users $user
 */
class InstituteUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institute_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institute_id, user_id', 'required'),
			array('institute_id, user_id, mobile', 'numerical', 'integerOnly'=>true),
			array('designation, profile_pic, prog_1, prog_2, prog_3, live_1, live_2, live_3, int_1, int_2, int_3', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_id, user_id, designation, profile_pic, prog_1, prog_2, prog_3, live_1, live_2, live_3, int_1, int_2, int_3, mobile', 'safe', 'on'=>'search'),
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
			'institute' => array(self::BELONGS_TO, 'Institutes', 'institute_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institute_id' => 'Institute',
			'user_id' => 'User',
			'designation' => 'Designation',
			'profile_pic' => 'Profile Pic',
			'prog_1' => 'Prog 1',
			'prog_2' => 'Prog 2',
			'prog_3' => 'Prog 3',
			'live_1' => 'Live 1',
			'live_2' => 'Live 2',
			'live_3' => 'Live 3',
			'int_1' => 'Int 1',
			'int_2' => 'Int 2',
			'int_3' => 'Int 3',
			'mobile' => 'Mobile',
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
		$criteria->compare('institute_id',$this->institute_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('designation',$this->designation,true);
		$criteria->compare('profile_pic',$this->profile_pic,true);
		$criteria->compare('prog_1',$this->prog_1,true);
		$criteria->compare('prog_2',$this->prog_2,true);
		$criteria->compare('prog_3',$this->prog_3,true);
		$criteria->compare('live_1',$this->live_1,true);
		$criteria->compare('live_2',$this->live_2,true);
		$criteria->compare('live_3',$this->live_3,true);
		$criteria->compare('int_1',$this->int_1,true);
		$criteria->compare('int_2',$this->int_2,true);
		$criteria->compare('int_3',$this->int_3,true);
		$criteria->compare('mobile',$this->mobile);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InstituteUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
