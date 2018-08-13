<?php

/**
 * This is the model class for table "module_assigjment_quiz_answer".
 *
 * The followings are the available columns in table 'module_assigjment_quiz_answer':
 * @property integer $id
 * @property integer $module_assigment_quiz_id
 * @property string $answer
 * @property integer $is_correct
 *
 * The followings are the available model relations:
 * @property ModuleAssigmentQuiz $moduleAssigmentQuiz
 */
class ModuleAssigjmentQuizAnswer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'module_assigjment_quiz_answer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module_assigment_quiz_id, answer, is_correct', 'required'),
			array('module_assigment_quiz_id, is_correct', 'numerical', 'integerOnly'=>true),
			array('answer', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, module_assigment_quiz_id, answer, is_correct', 'safe', 'on'=>'search'),
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
			'moduleAssigmentQuiz' => array(self::BELONGS_TO, 'ModuleAssigmentQuiz', 'module_assigment_quiz_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'module_assigment_quiz_id' => 'Module Assigment Quiz',
			'answer' => 'Answer',
			'is_correct' => 'Is Correct',
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
		$criteria->compare('module_assigment_quiz_id',$this->module_assigment_quiz_id);
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('is_correct',$this->is_correct);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuleAssigjmentQuizAnswer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
}
