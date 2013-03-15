<?php

/**
 * This is the model class for table "{{orders}}".
 *
 * The followings are the available columns in table '{{orders}}':
 * @property string $id
 * @property integer $user_id
 * @property string $product_id
 * @property string $quantity
 * @property string $price
 * @property integer $sum
 * @property string $name
 * @property string $address
 * @property string $contacts
 * @property string $comments
 * @property string $created
 * @property string $active
 * @property string $visited
 * @property string $email
 * @property string $shipping_date
 * @property integer $phone
 */
class SOrders extends CActiveRecord
{

    const STATUS_ACTIVE=1;
    const STATUS_DISABLED=2;
    public $verifyCode;
    /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SOrders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{shop_orders}}';
	}



	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('verifyCode', 'captcha', 'captchaAction'=>'/site/captcha' ,'allowEmpty'=>!Yii::app()->user->isGuest || !CCaptcha::checkRequirements()),
			array('product_id, quantity, price, sum, name, address, email', 'required'),
			array('user_id, sum, phone', 'numerical', 'integerOnly'=>true),
			array('product_id, quantity', 'length', 'max'=>50),
			array('price', 'length', 'max'=>500),
			array('name, email', 'length', 'max'=>100),
			array('address, comments', 'length', 'max'=>1000),
			array('active, visited', 'length', 'max'=>1),
			array('created, shipping_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, product_id, quantity, price, sum, name, address, contacts, comments, created, active, visited, email, shipping_date, phone', 'safe', 'on'=>'search'),
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
			'user_id' => 'Id пользователя',
			'product_id' => 'Product',
			'quantity' => 'Количество',
			'price' => 'Цена',
			'sum' => 'Сумма',
			'name' => 'Имя',
			'address' => 'Адрес',
			'comments' => 'Примечание',
			'created' => 'Создано',
			'active' => 'Опубликовано',
			'visited' => 'Visited',
			'email' => 'Email',
			'shipping_date' => 'Когда доставить',
			'phone' => '№ телефона',
            'verifyCode' => 'Код проверки',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('product_id',$this->product_id,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('sum',$this->sum);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('active',self::STATUS_ACTIVE);
		$criteria->compare('visited',$this->visited,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('shipping_date',$this->shipping_date,true);
		$criteria->compare('phone',$this->phone);

        $sort = new CSort();
        $sort->defaultOrder = 'visited DESC , created DESC';
        $sort->attributes = array(

            'name',
            'sum',
            'order_id',
            'name',
            'created',

        );
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort' =>$sort,
            'pagination'=>array(
                'pageSize'=>'50',)
        ));
	}


    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function archive()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id,true);
        $criteria->compare('user_id',$this->user_id);
        $criteria->compare('product_id',$this->product_id,true);
        $criteria->compare('quantity',$this->quantity,true);
        $criteria->compare('price',$this->price,true);
        $criteria->compare('sum',$this->sum);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('address',$this->address,true);
        $criteria->compare('comments',$this->comments,true);
        $criteria->compare('created',$this->created,true);
        $criteria->compare('active',0);
        $criteria->compare('visited',$this->visited,true);
        $criteria->compare('email',$this->email,true);
        $criteria->compare('shipping_date',$this->shipping_date,true);
        $criteria->compare('phone',$this->phone);

        $sort = new CSort();
        $sort->defaultOrder = 'visited DESC , created DESC';
        $sort->attributes = array(
            'name',
            'sum',
            'order_id',
            'name',
            'created',
        );
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort' =>$sort,
            'pagination'=>array(
                'pageSize'=>'50',)
        ));
    }

    protected function beforeSave() {
        if(parent::beforeSave()) {
            $this->shipping_date = date('Y-m-d', strtotime($this->shipping_date));
            if(!Yii::app()->user->isGuest){
               $this->user_id = Yii::app()->getModule('user')->user()->id;
            }
            return true;
        } else {
            return false;
        }
    }
}