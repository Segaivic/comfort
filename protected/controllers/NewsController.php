<?php

class NewsController extends Controller
{

    public $layout = '//layouts/news';

    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
             );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','view','blog'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array(),
                'users'=>array('@'),
            ),

            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Displays all published blogs
     */
    public function actionIndex()
	{
        $criteria = new CDbCriteria();
        $criteria->condition = 'is_onfrontpage = '.News::STATUS_ACTIVE.' AND is_published = '.News::STATUS_ACTIVE;
        $criteria->order = 'created DESC';

        //pager
        $count = News::model()->count($criteria);
        $pages=new CPagination($count);
        $pages->pageSize= Yii::app()->params->newsPerPage;
        $pages->applyLimit($criteria);
        //pager

        $model = News::model()->with('category')->findAll($criteria);
        $this->render('index',array(
            'model'=>$model,
            'pages'=>$pages,
            'blogs'=>$this->getActiveBlogs(),
        ));
	}

    public function actionBlog($id)
    {
        $criteria = new CDbCriteria();
        $criteria->condition = 'is_published = '.News::STATUS_ACTIVE.' AND catid = :id';
        $criteria->params = array(':id' => $id);
        $criteria->order = 'created DESC';

        //pager
        $count = News::model()->count($criteria);
        $pages=new CPagination($count);
        $pages->pageSize= Yii::app()->params->newsPerPage;
        $pages->applyLimit($criteria);
        //pager

        $model = News::model()->with('category')->findAll($criteria);
        if ($count==0){
            throw new CHttpException(404,'Извините, здесь пока нет материалов');

        }
        $this->render('blog',array(
            'model'=>$model,
            'pages'=>$pages,
            'blogs'=>$this->getActiveBlogs(),
        ));
    }

    /**
     * Displays full text.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
            'blogs'=>$this->getActiveBlogs(),
        ));
    }



    public function loadModel($id)
    {
        $model=News::model()->with('category')->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    public function getActiveBlogs() {
        return Categories::model()->findAll("is_enabled = :enabled AND is_inbloglist = :enabled", array(':enabled' => News::STATUS_ACTIVE));
    }
}