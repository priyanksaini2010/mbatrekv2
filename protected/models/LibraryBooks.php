<?php

/**
 * This is the model class for table "library_books".
 *
 * The followings are the available columns in table 'library_books':
 * @property integer $id
 * @property integer $library_subject_id
 * @property integer $institute_batch_id
 * @property integer $added_by
 * @property string $name
 * @property string $author
 * @property string $file
 *
 * The followings are the available model relations:
 * @property LibraryBookStudent[] $libraryBookStudents
 * @property InstituteBatches $instituteBatch
 */
class LibraryBooks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'library_books';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('library_subject_id, institute_batch_id, added_by, name, author', 'required'),
			array('library_subject_id, institute_batch_id, added_by', 'numerical', 'integerOnly'=>true),
			array('name, author, file', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, library_subject_id, institute_batch_id, added_by, name, author, file', 'safe', 'on'=>'search'),
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
			'libraryBookStudents' => array(self::HAS_MANY, 'LibraryBookStudent', 'book_id'),
                        'librarySubject' => array(self::BELONGS_TO, 'LibrarySubjects', 'library_subject_id'),
			'instituteBatch' => array(self::BELONGS_TO, 'InstituteBatches', 'institute_batch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'library_subject_id' => 'Library Subject',
			'institute_batch_id' => 'Institute Batch',
			'added_by' => 'Added By',
			'name' => 'Name',
			'author' => 'Author',
			'file' => 'File',
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
		$criteria->compare('library_subject_id',$this->library_subject_id);
		$criteria->compare('institute_batch_id',$this->institute_batch_id);
		$criteria->compare('added_by',$this->added_by);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('file',$this->file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LibraryBooks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
