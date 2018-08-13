<?php

/**
 * This is the model class for table "casestudy_quiz".
 *
 * The followings are the available columns in table 'casestudy_quiz':
 * @property integer $id
 * @property integer $casestudy_id
 * @property string $question
 * @property integer $question_score
 *
 * The followings are the available model relations:
 * @property ModuleCasestudy $casestudy
 * @property CasestudyQuizAnwers[] $casestudyQuizAnwers
 */
class CasestudyQuiz extends CActiveRecord
{
        public $total_score;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'casestudy_quiz';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('casestudy_id, question, question_score', 'required'),
			array('casestudy_id, question_score', 'numerical', 'integerOnly'=>true),
			array('question', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, casestudy_id, question, question_score', 'safe', 'on'=>'search'),
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
			'casestudy' => array(self::BELONGS_TO, 'ModuleCasestudy', 'casestudy_id'),
			'casestudyQuizAnwers' => array(self::HAS_MANY, 'CasestudyQuizAnwers', 'casestudy_quiz_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'casestudy_id' => 'Casestudy',
			'question' => 'Question',
			'question_score' => 'Question Score',
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
		$criteria->compare('casestudy_id',$this->casestudy_id);
		$criteria->compare('question',$this->question,true);
		$criteria->compare('question_score',$this->question_score);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CasestudyQuiz the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
