<?php

/**
 * This is the model class for table "featured_assessment".
 *
 * The followings are the available columns in table 'featured_assessment':
 * @property integer $id
 * @property integer $assessment_id
 * @property string $point_1
 * @property string $point_2
 * @property string $point_3
 * @property string $point_4
 *
 * The followings are the available model relations:
 * @property Assessments $assessment
 */
class FeaturedAssessment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'featured_assessment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('assessment_id, point_1, point_2, point_3, point_4', 'required'),
			array('assessment_id', 'numerical', 'integerOnly'=>true),
			array('point_1, point_2, point_3, point_4', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, assessment_id, point_1, point_2, point_3, point_4', 'safe', 'on'=>'search'),
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
			'assessment' => array(self::BELONGS_TO, 'Assessments', 'assessment_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'assessment_id' => 'Assessment',
			'point_1' => 'Point 1',
			'point_2' => 'Point 2',
			'point_3' => 'Point 3',
			'point_4' => 'Point 4',
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
		$criteria->compare('assessment_id',$this->assessment_id);
		$criteria->compare('point_1',$this->point_1,true);
		$criteria->compare('point_2',$this->point_2,true);
		$criteria->compare('point_3',$this->point_3,true);
		$criteria->compare('point_4',$this->point_4,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FeaturedAssessment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
