<?php

/**
 * This is the model class for table "blog_comments".
 *
 * The followings are the available columns in table 'blog_comments':
 * @property integer $id
 * @property integer $blog_id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property integer $is_approved
 * @property integer $reply_to
 * @property string $date_created
 *
 * The followings are the available model relations:
 * @property Blogs $blog
 * @property BlogComments $replyTo
 * @property BlogComments[] $blogComments
 */
class BlogComments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'blog_comments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('blog_id, name, email, comment, is_approved, date_created', 'required'),
			array('blog_id, is_approved, reply_to', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, blog_id, name, email, comment, is_approved, reply_to, date_created', 'safe', 'on'=>'search'),
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
			'blog' => array(self::BELONGS_TO, 'Blogs', 'blog_id'),
			'replyTo' => array(self::BELONGS_TO, 'BlogComments', 'reply_to'),
			'blogComments' => array(self::HAS_MANY, 'BlogComments', 'reply_to'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'blog_id' => 'Blog',
			'name' => 'Name',
			'email' => 'Email',
			'comment' => 'Comment',
			'is_approved' => 'Is Approved',
			'reply_to' => 'Reply To',
			'date_created' => 'Date Created',
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
		$criteria->compare('blog_id',$this->blog_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('is_approved',$this->is_approved);
		$criteria->compare('reply_to',$this->reply_to);
		$criteria->compare('date_created',$this->date_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BlogComments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
