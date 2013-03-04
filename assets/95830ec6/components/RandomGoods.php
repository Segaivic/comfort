<?php

class RandomGoods extends CWidget
{
	public function run()
	{
        Yii::import('application.modules.shop.models.*');
        $models = SProducts::model()->with('image')->cache(1000)->findAll(array(
            'select'=>'id, title, description, rand() as rand',
            'condition'=>'active = '.SProducts::STATUS_ACTIVE,
            'limit'=> 3,
            'order'=>'rand',
        ));

    	$this->render('randomGoods', array('models'=>$models ));
  	}
}