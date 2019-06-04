<?php

/**
 * This is the model class for table "founding_team".
 *
 * The followings are the available columns in table 'founding_team':
 * @property integer $id
 * @property string $name
 * @property string $photo_1
 * @property string $photo_2
 * @property string $desig
 * @property string $about
 * @property string $email
 * @property string $phone
 * @property string $linked_in
 * @property integer $type
 * @property integer $college
 * @property integer $batch
 */
class FoundingTeam extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'founding_team';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, photo_1, photo_2', 'required'),
			array('type', 'numerical', 'integerOnly'=>true),
			array('name, photo_1, photo_2, desig, email, phone, linked_in, college, batch', 'length', 'max'=>255),
			array('about', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, photo_1, photo_2, desig, about, email, phone, linked_in, type, college, batch', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'photo_1' => 'Photo Colored (300X300)Px' ,
			'photo_2' => 'Photo BnW (300X300)Px',
			'desig' => 'Designation',
			'about' => 'About',
			'email' => 'Email',
			'phone' => 'Phone',
			'linked_in' => 'LinkedIn(URL)',
			'type' => 'Type',
			'college' => 'College',
			'batch' => 'Batch',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('photo_1',$this->photo_1,true);
		$criteria->compare('photo_2',$this->photo_2,true);
		$criteria->compare('desig',$this->desig,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('linked_in',$this->linked_in,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('college',$this->college);
		$criteria->compare('batch',$this->batch);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FoundingTeam the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
