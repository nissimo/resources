<?php

/**
 * This is the model class for table "ratedquestions".
 *
 * The followings are the available columns in table 'ratedquestions':
 * @property integer $id
 * @property string $rating_id
 * @property integer $questions_id
 * @property integer $rate
 *
 * The followings are the available model relations:
 * @property Questions $questions
 * @property Rating $rating
 */
class Ratedquestions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ratedquestions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, rating_id, questions_id', 'required'),
			array('id, questions_id, rate', 'numerical', 'integerOnly'=>true),
			array('rating_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, rating_id, questions_id, rate', 'safe', 'on'=>'search'),
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
			'questions' => array(self::BELONGS_TO, 'Questions', 'questions_id'),
			'rating' => array(self::BELONGS_TO, 'Rating', 'rating_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rating_id' => 'Rating',
			'questions_id' => 'Questions',
			'rate' => 'Rate',
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
		$criteria->compare('rating_id',$this->rating_id,true);
		$criteria->compare('questions_id',$this->questions_id);
		$criteria->compare('rate',$this->rate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ratedquestions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
