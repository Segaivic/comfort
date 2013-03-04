<?php

/**
 * This is the model class for table "{{shop_products}}".
 *
 * The followings are the available columns in table '{{shop_products}}':
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $characters
 * @property double $price
 * @property string $created_at
 * @property string $updated_at
 * @property integer $category_id
 */
class SProducts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 2;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function scopes(){
        return array(
            'activeOnly' => array(
              'condition' => 't.active ='.self::STATUS_ACTIVE
            ),
        );
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{shop_products}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('category_id', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('title , meta_description , meta_keywords', 'length', 'max'=>255),
            array('active', 'length', 'max'=>1),
			array('description, characters', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, description, characters, price, created_at, updated_at, category_id', 'safe', 'on'=>'search'),
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
            'category'=>array(self::BELONGS_TO, 'SCategories', 'category_id'),
            'image'=>array(self::HAS_ONE, 'SProductsimg', 'product_id'),
            'gallery'=>array(self::HAS_MANY, 'SGallery', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Наименование',
			'description' => 'Описание',
			'characters' => 'Характеристики',
			'price' => 'Цена',
			'created_at' => 'Создано',
			'updated_at' => 'Обновлено',
			'category_id' => 'Категория',
            'category' => 'Категория',
            'active' => 'Активен',
            'meta_keywords' => 'Мета: ключевые слова',
            'meta_description' => 'Мета: описание',
            'image' => 'Изображение',
		);
	}

    public function getUrl()
    {
        return Yii::app()->createUrl('/shop/product/view', array(
            'id'=>$this->id,
            'alias'=>CTranslit::translit($this->title),
        ));
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('characters',$this->characters,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('category_id',$this->category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    protected  function afterDelete() {
        parent::afterDelete();
        $image=SProductsimg::model()->find(
            'product_id = :id',
            array(
                ':id' => $this->id
            ));
        if ($image){
            CImageHandler::delete($image->image);
            CImageHandler::delete($image->thumbnail);
            $image->delete();
        }
    }
}