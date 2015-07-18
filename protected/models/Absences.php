<?php

/**
 * This is the model class for table "absences".
 *
 * The followings are the available columns in table 'absences':
 * @property integer $id
 * @property string $user_id
 * @property string $type
 * @property string $start_date
 * @property string $end_date
 * @property integer $paid_percentage
 * @property integer $pm_approved
 * @property integer $admin_approved
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Absences extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'absences';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, type, start_date', 'required'),
			array('paid_percentage, pm_approved, admin_approved', 'numerical', 'integerOnly'=>true),
			array('user_id', 'length', 'max'=>10),
			array('type', 'length', 'max'=>15),
			array('end_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, type, start_date, end_date, paid_percentage, pm_approved, admin_approved', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'type' => 'Type',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'paid_percentage' => 'Paid Percentage',
			'pm_approved' => 'Pm Approved',
			'admin_approved' => 'Admin Approved',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('paid_percentage',$this->paid_percentage);
		$criteria->compare('pm_approved',$this->pm_approved);
		$criteria->compare('admin_approved',$this->admin_approved);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Absences the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
