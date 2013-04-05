<?php

class AttributesController extends Controller
{
    public $layout = 'application.modules.admin.layouts.admin';

    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index' , 'create','titles','updateattribute','deletetitle','UpdatePositions'),
                'users'=>Yii::app()->getModule('user')->getAdmins(),
            ),

            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }


    public function actionIndex($id)
	{
      $model = SProducts::model()->findByPk($id);
      $attributes = SAttributeTitles::model()->with('attrs')->findAll(array(
        'condition' => 'category_id = :category_id',
        'order' => 'pos ASC',
        'params' => array(':category_id'=>$model->category_id),
        ));

      $this->render('index', array(
                    'model' => $model,
                    'attributes' => $attributes,
      ));
	}

    public function actionTitles($id){
        $model = SAttributeTitles::itemsList($id);
        $category = SCategories::model()->findByPk($id);

        $attr = new SAttributeTitles();
        if(isset($_POST['SAttributeTitles']))
        {
            $attr->attributes=$_POST['SAttributeTitles'];
            $attr->category_id = $id;
            $attr->pos = SAttributeTitles::maxPosition() + 1;

            if($attr->save())
                Yii::app()->user->setFlash('success', "Успешно добавлено");
            $this->redirect($id);
        }
        $this->render('titles' , array(
                                    'model' => $model ,
                                    'category' => $category ,
                                    'attr' => $attr)
        );
    }

    public function actionUpdateAttribute($id) {

        $attr = SAttributeTitles::model()->with('category')->findByPk($id);


        if(isset($_POST['SAttributeTitles']))
        {

            $attr->attributes=$_POST['SAttributeTitles'];
            if($attr->save())
                Yii::app()->user->setFlash('success', "Успешно отредактировано");
            $this->redirect($id);
        }

        $this->render('updateattribute' , array('attr' => $attr));

    }

    public function actionDeleteTitle(){
        if(!Yii::app()->request->isAjaxRequest) throw new CHttpException(404,'Такой страницы не существует!');

        $id = CHtml::encode($_POST['id']);
        $model = SAttributeTitles::model()->findByPk($id);

//        удалим атрибут у всех продуктов
        SAttrs::model()->deleteAll('attribute_id = :id' , array(':id' => $id));
        SAttrvalue::model()->deleteAll('attr_id = :id' , array(':id' => $id));

//      расставим позиции
        $positions_over = SAttributeTitles::model()->findAll(array(
            'condition'=>'category_id = :category_id AND pos > :pos',
            'params' => array(
                ':category_id' => $model->category_id,
                ':pos' => $model->pos,
            ),
        ));
        if($positions_over !== null) {
            foreach($positions_over as $po){
                $po->pos = $po->pos - 1;
                $po->save();
            }
        }

//      удаление записи
        $model->delete();
    }

    public function actionUpdatePositions(){
        if(!Yii::app()->request->isAjaxRequest) throw new CHttpException(404,'Такой страницы не существует!');
        $positions = array();
        parse_str(Yii::app()->request->getPost('positions'),$positions);
        foreach ($positions['item'] as $key => $value){
            $model = SAttributeTitles::model()->findByPk(intval($value));
            if($model!==null){
                $model->pos = $key;
                $model->save();
            }
        }
    }


    public function loadTitlesModel($id)
    {
        $model=SAttributeTitles::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'Извините, такой страницы не существует');
        return $model;
    }
}