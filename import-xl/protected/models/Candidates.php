<?php

/**
 * This is the model class for table "candidates".
 *
 * The followings are the available columns in table 'candidates':
 * @property integer $id
 * @property string $full_name
 * @property string $email
 * @property string $contact_details
 * @property string $gender
 * @property string $address
 * @property string $city
 */
class Candidates extends CActiveRecord
{
	public $file;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'candidates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, city', 'length', 'max'=>100),
			array('contact_details', 'length', 
			        'min'=>10
			),
			array('contact_details', 'length', 
			        'max'=>13
			),
			array('file', 'required'),
			array('file', 'file', 'types'=>'xls, xlsx' , 'maxFiles'=>'1'),           
			array('gender','match' ,'pattern'=> '/^male$|^female$/'),
			array('gender', 'length', 'max'=>7),
			array('full_name, address', 'safe'),
			array('email,contact_details,full_name','required'),
			array('email','email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, full_name, email, contact_details, gender, address, city', 'safe', 'on'=>'search'),
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
			'full_name' => 'Full Name',
			'email' => 'Email',
			'contact_details' => 'Contact Details',
			'gender' => 'Gender',
			'address' => 'Address',
			'city' => 'City',
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
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contact_details',$this->contact_details,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Candidates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
