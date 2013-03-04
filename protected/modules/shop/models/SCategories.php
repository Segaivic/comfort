<?php

/**
 * This is the model class for table "{{shop_categories}}".
 *
 * The followings are the available columns in table '{{shop_categories}}':
 * @property string $id
 * @property string $lft
 * @property string $rgt
 * @property integer $level
 * @property string $title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $description
 * @property string $active
 */
class SCategories extends CActiveRecord
{

    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 2;
    const TMP_PATH = '/uploads/shop/tmp/';
    /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Categories the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function scopes(){
        return array(
            'activeProductsOnly'=> array(
                'condition' => 'products.active = '.SProducts::STATUS_ACTIVE,
        ));
    }

    public function behaviors()
    {
        return array(
            'nestedSetBehavior'=>array(
                'class'=>'ext.yiiext.behaviors.model.trees.NestedSetBehavior',
                'leftAttribute'=>'lft',
                'rightAttribute'=>'rgt',
                'levelAttribute'=>'level',
            ),
        );
    }

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{shop_categories}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('title' , 'required'),
            array('thumbnail', 'file', 'types'=>'jpg, gif, png' , 'allowEmpty' => true),
			array('title, meta_description, meta_keywords', 'length', 'max'=>255),
			array('active', 'length', 'max'=>1),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lft, rgt, level, title, meta_description, meta_keywords, description, active', 'safe', 'on'=>'search'),
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
            'products'=>array(self::HAS_MANY, 'SProducts', 'category_id'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'lft' => 'Lft',
			'rgt' => 'Rgt',
			'level' => 'Level',
			'title' => 'Заголовок',
			'meta_description' => 'Мета: описание',
			'meta_keywords' => 'Мета: ключевые слова',
			'description' => 'Описание',
			'active' => 'Опубликовано',
            'thumbnail' => 'Изображение',
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
		$criteria->compare('lft',$this->lft,true);
		$criteria->compare('rgt',$this->rgt,true);
		$criteria->compare('level',$this->level);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('active',$this->active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /*
    * Check if previous or next node exists
    * @return boolean
    */
    public static function checkNeighborNode($id , $node) {
        $category=self::model()->findByPk($id);
        switch ($node) {
            case 'prev':
                $model = $category->prev()->find();
                break;
            case 'next':
                $model = $category->next()->find();
                break;
        }

        if($model === null) { return false;} else {return true;}
    }

    public static function rootItems($id = null) {
        $category=SCategories::model()->findByPk(1);
        $model = $category->descendants()->findAll();
        $items = array();
        $items[1] = 'Корень';
        foreach ($model as $m) {
            if($m->id !== $id){
                $items[$m->id] = $m->title;
            }
        }

        return $items;
    }

    public function getUrl()
    {
        return Yii::app()->createUrl('shop/category/view', array(
            'id'=>$this->id,
            'alias'=>CTranslit::translit($this->title),
        ));
    }

    protected  function afterDelete() {
        parent::afterDelete();
        CImageHandler::delete($this->thumbnail);
        $products=SProducts::model()->deleteAll(
            'category_id = :id',
            array(
                ':id' => $this->id
            ));

//        $model =Galleryphotos::model()->findAll(
//            'gallery_id = :id', array(':id' => $this->id)
//        );
//
//        foreach($model as $m) {
//            CImageHandler::delete($m->thumb);
//            CImageHandler::delete($m->image);
//            $m->delete();
//        }
    }
}