    <?php

class ProductController extends Controller
{
    public $layout = 'application.modules.shop.views.layouts.shop';


    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'ajaxOnly + AddToCart',
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
                'actions'=>array('index','view' ,'addToCart' , 'cart'),
                'users'=>array('*'),
            ),


            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array(''),
                'users'=>Yii::app()->getModule('user')->getAdmins(),
            ),

            array('deny',  // deny all users
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

    public function actionAddToCart($id) {

        if(!Yii::app()->request->isAjaxRequest) throw new CHttpException(404,'Такой страницы не существует!');
        $product = SProducts::model()->findByPk($id);
        Yii::app()->shoppingCart->put($product);
    }
}