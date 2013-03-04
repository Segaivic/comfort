<?php
//title
$this->pageTitle = $model->title." - ".Yii::app()->name;
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
    $model->title,
);
?>

<div class="row">
    <div class="grid_24">
        <div class="hr">
            <div class="hrCnt">
                <div class="hrLeft">
                </div>
                <div class="hrRight">
                </div>
                    <h2>
                        <?php echo $model->title; ?>
                        <?php  if (Yii::app()->getModule('user')->isAdmin()) {
                        echo CHtml::link(CHtml::image('/images/icons/edit.png'),array('/admin/page/update','id'=>$model->id));
                    }
                        ?>
                    </h2>
            </div>
        </div>
    </div>
    <div class="clear"></div>

    <?php  if (Yii::app()->getModule('user')->isAdmin()) : ?>
        <p>
            <button class="btn" onclick="exampleClickToEditPage();">Быстрое редактирование</button>
            <button class="btn" onclick="exampleClickToSavePage();">Сохранить</button>
        </p>
    <?php endif; ?>
  <div class="grid_24">
      <div class="news">
          <div class="inner">
              <div class="content" id="content<?php echo $model->id; ?>">
                  <?php echo $model->content; ?>
              </div>
              <!--            яндекс закладки-->
              <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
              <div class="social">
                  <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,lj,friendfeed,moikrug,gplus,pinterest,surfingbird"></div>
              </div>
          </div>
      </div>
  </div>
  <div class="clear"></div>
</div>

