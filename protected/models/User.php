<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $username
 * @property string $type
 * @property string $email
 * @property string $password
 * @property string $create_time
 * @property string $modified_time
 * @property string $start_date
 * @property string $end_date
 * @property string $cost
 * @property integer $perhour
 * @property string $taxes
 * @property string $gender
 * @property string $merital_status
 * @property string $birthday
 * @property integer $age
 * @property string $FBlogin
 * @property string $FBlink
 *
 * The followings are the available model relations:
 * @property Projectteams[] $projectteams
 * @property Usersskills[] $usersskills
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, type, password, create_time, modified_time, age', 'required'),
			array('perhour, age', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>16),
			array('type, taxes, gender', 'length', 'max'=>6),
			array('email, FBlink', 'length', 'max'=>255),
			array('password', 'length', 'max'=>32),
			array('cost, merital_status', 'length', 'max'=>8),
			array('FBlogin', 'length', 'max'=>45),
			array('start_date, end_date, birthday', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, type, email, password, create_time, modified_time, start_date, end_date, cost, perhour, taxes, gender, merital_status, birthday, age, FBlogin, FBlink', 'safe', 'on'=>'search'),
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
			'projectteams' => array(self::HAS_MANY, 'Projectteams', 'user_id'),
			'usersskills' => array(self::HAS_MANY, 'Usersskills', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'type' => 'Type',
			'email' => 'Email',
			'password' => 'Password',
			'create_time' => 'Create Time',
			'modified_time' => 'Modified Time',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'cost' => 'Cost',
			'perhour' => 'Perhour',
			'taxes' => 'Taxes',
			'gender' => 'Gender',
			'merital_status' => 'Merital Status',
			'birthday' => 'Birthday',
			'age' => 'Age',
			'FBlogin' => 'Fblogin',
			'FBlink' => 'Fblink',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('modified_time',$this->modified_time,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('cost',$this->cost,true);
		$criteria->compare('perhour',$this->perhour);
		$criteria->compare('taxes',$this->taxes,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('merital_status',$this->merital_status,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('FBlogin',$this->FBlogin,true);
		$criteria->compare('FBlink',$this->FBlink,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
