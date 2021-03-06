<?php

/**
 * This is the model class for table "{{info}}".
 *
 * The followings are the available columns in table '{{info}}':
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $metakey
 * @property string $metadesc
 * @property string $updated_at
 * @property string $is_published
 */
class Page extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Info the static model class
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
		return '{{page}}';
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
			array('title, metakey, metadesc', 'length', 'max'=>300),
			array('is_published', 'length', 'max'=>1),
			array('content, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, content, metakey, metadesc, updated_at, is_published', 'safe', 'on'=>'search'),
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
			'title' => 'Заголовок',
			'content' => 'Текст',
			'metakey' => 'Ключевые слова',
			'metadesc' => 'Описание',
			'updated_at' => 'Обновлено',
			'is_published' => 'Опубликовано',
		);
	}

    public function getUrl()
    {
        return Yii::app()->createUrl('page/view', array(
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('metakey',$this->metakey,true);
		$criteria->compare('metadesc',$this->metadesc,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('is_published',$this->is_published,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination' => array(
                                'pageSize' => 100
                            )
		));
	}
}