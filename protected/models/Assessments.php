<?php

/**
 * This is the model class for table "assessments".
 *
 * The followings are the available columns in table 'assessments':
 * @property integer $id
 * @property string $image
 * @property string $headline
 * @property string $sub_heading_text
 * @property double $price
 * @property double $rating
 * @property integer $time
 * @property integer $questions
 * @property string $degree
 * @property string $small_description
 * @property string $bullet_points
 * @property string $zoho_html_code
 * @property string $zoho_iframe_code
 * @property string $zoho_javascript_code
 * @property string $zoho_popup_html_code
 * @property string $category
 * @property integer $user_type
 * @property integer $status
 * @property string $date_created
 * @property string $date_updated
 */
class Assessments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'assessments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('image, headline, sub_heading_text, price, rating, time, questions, degree, small_description, bullet_points, zoho_html_code, zoho_iframe_code, zoho_javascript_code, zoho_popup_html_code, category, user_type, status, date_created', 'required'),
			array('time, questions, user_type, status', 'numerical', 'integerOnly'=>true),
			array('price, rating', 'numerical'),
			array('image, headline, sub_heading_text, degree, small_description, category', 'length', 'max'=>255),
			array('date_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, image, headline, sub_heading_text, price, rating, time, questions, degree, small_description, bullet_points, zoho_html_code, zoho_iframe_code, zoho_javascript_code, zoho_popup_html_code, category, user_type, status, date_created, date_updated', 'safe', 'on'=>'search'),
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
			'image' => 'Image',
			'headline' => 'Headline',
			'sub_heading_text' => 'Sub Heading Text',
			'price' => 'Price',
			'rating' => 'Rating',
			'time' => 'Time',
			'questions' => 'Questions',
			'degree' => 'Degree',
			'small_description' => 'Small Description',
			'bullet_points' => 'Bullet Points',
			'zoho_html_code' => 'Zoho Html Code',
			'zoho_iframe_code' => 'Zoho Iframe Code',
			'zoho_javascript_code' => 'Zoho Javascript Code',
			'zoho_popup_html_code' => 'Zoho Popup Html Code',
			'category' => 'Category',
			'user_type' => 'User Type',
			'status' => 'Status',
			'date_created' => 'Date Created',
			'date_updated' => 'Date Updated',
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
		$criteria->compare('image',$this->image,true);
		$criteria->compare('headline',$this->headline,true);
		$criteria->compare('sub_heading_text',$this->sub_heading_text,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('time',$this->time);
		$criteria->compare('questions',$this->questions);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('small_description',$this->small_description,true);
		$criteria->compare('bullet_points',$this->bullet_points,true);
		$criteria->compare('zoho_html_code',$this->zoho_html_code,true);
		$criteria->compare('zoho_iframe_code',$this->zoho_iframe_code,true);
		$criteria->compare('zoho_javascript_code',$this->zoho_javascript_code,true);
		$criteria->compare('zoho_popup_html_code',$this->zoho_popup_html_code,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('user_type',$this->user_type);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('date_updated',$this->date_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Assessments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
