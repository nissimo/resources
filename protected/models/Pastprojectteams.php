<?php

/**
 * This is the model class for table "pastprojectteams".
 *
 * The followings are the available columns in table 'pastprojectteams':
 * @property string $id
 * @property string $project_id
 * @property string $percentage
 * @property string $startdate
 * @property string $enddate
 * @property string $skills_id
 * @property string $user_id
 * @property string $price_to_client
 *
 * The followings are the available model relations:
 * @property Project $project
 * @property Skills $skills
 * @property User $user
 */
class Pastprojectteams extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pastprojectteams';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_id, skills_id, user_id', 'required'),
			array('project_id, skills_id, user_id', 'length', 'max'=>10),
			array('percentage', 'length', 'max'=>45),
			array('price_to_client', 'length', 'max'=>8),
			array('startdate, enddate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, project_id, percentage, startdate, enddate, skills_id, user_id, price_to_client', 'safe', 'on'=>'search'),
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
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
			'skills' => array(self::BELONGS_TO, 'Skills', 'skills_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'project_id' => 'Project',
			'percentage' => 'Percentage',
			'startdate' => 'Startdate',
			'enddate' => 'Enddate',
			'skills_id' => 'Skills',
			'user_id' => 'User',
			'price_to_client' => 'Price To Client',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('project_id',$this->project_id,true);
		$criteria->compare('percentage',$this->percentage,true);
		$criteria->compare('startdate',$this->startdate,true);
		$criteria->compare('enddate',$this->enddate,true);
		$criteria->compare('skills_id',$this->skills_id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('price_to_client',$this->price_to_client,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pastprojectteams the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
