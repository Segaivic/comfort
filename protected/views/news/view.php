<?php
//Скрипты для редактора
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/redactor/redactor.min.js' , CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/redactor/ru.js' , CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/clickedit.js' , CClientScript::POS_HEAD);
Yii::app()->clientScript->registerCssFile('/css/redactor.css', 'screen' , CClientScript::POS_HEAD);

//description и keywords
if (!empty($model->metakey) && !empty($model->metadesc)) {
    Yii::app()->clientScript->registerMetaTag($model->metakey, 'description');
    Yii::app()->clientScript->registerMetaTag($model->metadesc, 'keywords');
} else {
    Yii::app()->clientScript->registerMetaTag(Yii::app()->params['meta_description'], 'description');
    Yii::app()->clientScript->registerMetaTag(Yii::app()->params['meta_keywords'], 'keywords');
}
$this->breadcrumbs=array(
	'Новости'=>array('/news'),
    $model->category->title=>array('/news/blog/','id'=>$model->category->id),
	$model->title,
);

$this->pageTitle = $model->title.' - '.Yii::app()->name;
?>
<h1>
    <?php echo CHtml::encode($model->title); ?>
    <?php if (Yii::app()->getModule('user')->isAdmin()) {
    echo CHtml::link(CHtml::image('/images/icons/edit.png'),array('/admin/news/update','id' => $model->id));
} ?>
</h1>
<?php  if (Yii::app()->getModule('user')->isAdmin()) : ?>
    <p>
        <button class="btn" onclick="exampleClickToEditNews();">Быстрое редактирование</button>
        <button class="btn" onclick="exampleClickToSaveNews();">Сохранить</button>
    </p>
<?php endif; ?>
<div class="row">
    <div class="fourfifth">
        <div class="news">
            <div class="inner">
                <div class="introtext" id="introtext<?php echo $model->id; ?>">
                    <? echo $model->introtext; ?>
                </div>
                <div class="fulltext">
                    <? echo $model->fulltext; ?>
                </div>
                <div class="clear"></div>
                <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                <div class="social">
                    <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,lj,friendfeed,moikrug,gplus,pinterest,surfingbird"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="fifth">
        <div class="inner rightsidebar">
            <h6>Разделы</h6>
            <nav id="navside">
                <ul>
                    <?php foreach ($blogs as $blog) { ?>
                    <li><?php echo CHtml::link($blog->title , $blog->url) ?></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>