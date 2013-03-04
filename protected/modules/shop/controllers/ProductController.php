    <?php

class ProductController extends Controller
{
    public $layout = 'application.modules.shop.views.layouts.shop';


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
                'actions'=>array('index','view'),
                'users'=>array('*'),
            ),
        );
    }


    public function actionIndex()
	{
        $this->render('index');
	}

    public function actionView($id)
    {
        $model = $this->loadModel($id);
        $category = SCategories::model()->findByPk($model->category->id);
        $children = $category->children()->findAll();
        $this->render('view' , array('model' => $model , 'children' => $children));
    }

    public function loadModel($id)
    {
        $model=SProducts::model()
            ->activeOnly()
            ->with(array('category','image','gallery'))
            ->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'Извините, такой страницы не существует');
        return $model;
    }
}