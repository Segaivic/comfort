<?php $this->pageTitle = "Главная - ".Yii::app()->name; ?>
<?php Yii::app()->clientScript->registerCssFile('/css/slider.css', 'screen' , CClientScript::POS_HEAD); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.gallery.js' , CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/modernizr.custom.53451.js' , CClientScript::POS_HEAD); ?>
<!--slider-->
<div class="slider_box">
    <div id="slider">
        <div class="slider" style="position: relative; z-index: 1;">
            <section id="dg-container" class="dg-container">
                <div class="dg-wrapper">
                    <a href="#"><img src="/images/slider/1.jpg" alt="image01"><div>http://www.colazionedamichy.it/</div></a>
                    <a href="#"><img src="/images/slider/2.jpg" alt="image02"><div>http://www.percivalclo.com/</div></a>
                    <a href="#"><img src="/images/slider/3.jpg" alt="image03"><div>http://www.wanda.net/fr</div></a>
                    <a href="#"><img src="/images/slider/4.jpg" alt="image04"><div>http://lifeingreenville.com/</div></a>
                    <a href="#"><img src="/images/slider/5.jpg" alt="image04"><div>http://lifeingreenville.com/</div></a>
                    <a href="#"><img src="/images/slider/6.jpg" alt="image04"><div>http://lifeingreenville.com/</div></a>
                    <a href="#"><img src="/images/slider/7.jpg" alt="image04"><div>http://lifeingreenville.com/</div></a>
                    <a href="#"><img src="/images/slider/8.jpg" alt="image04"><div>http://lifeingreenville.com/</div></a>
                </div>
                <nav>
                    <span class="dg-prev">&lt;</span>
                    <span class="dg-next">&gt;</span>
                </nav>
            </section>
        </div>
    </div>
</div>

<section id="content" class="cont_pad">
    <div class="container_24">
        <div class="wrapper offer_box">
            <div class="grid_6">
                <div class="box1">
                    <img src="/images/template/offer1.png" alt="">
                    <div class="title">Дизайнерские идеи</div>
                    <div class="text">
                        Пригласите нашего дизайнера для разработки эскиза и выбора материалов, чтобы мебель идеально сочеталась с вашей обстановкой!
                    </div>
                    <a href="more.html" class="button">Подробнее</a>
                </div>
            </div>
            <div class="grid_6">
                <div class="box1">
                    <img src="/images/template/offer2.png" alt="">
                    <div class="title">Производство мебели</div>
                    <div class="text">
                        Огромный ассортимент продукции содержит в себе широкую модельную линейку различных предметов
                    </div>
                    <a href="more.html" class="button">Подробнее</a>
                </div>
            </div>
            <div class="grid_6">
                <div class="box1">
                    <img src="/images/template/offer3.png" alt="">
                    <div class="title">Доставка</div>
                    <div class="text">
                        Наша компания осуществляет доставку всей изготавливаемой продукции по всем малым городам                    </div>
                    <a href="more.html" class="button">Подробнее</a>
                </div>
            </div>
            <div class="grid_6">
                <div class="box1">
                    <img src="/images/template/offer4.png" alt="">
                    <div class="title">Гарантия качества</div>
                    <div class="text">
                        Компания сотрудничает с надежными поставщиками, поэтому наши клиенты могут быть полностью уверены в приобретаемой ими продукции
                    </div>
                    <a href="more.html" class="button">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="stripe"></div>
        <div class="wrapper">
            <article class="grid_13">
                <h2 class="h2 ind">О компании</h2>
                <p style="text-align: center;">
                    <img src="/images/logo.png" style="float: left; padding:0 3px 3px 0;"/>
                </p>
                <p>
                    Мебельная компания “КОМФОРТ” предлагает разнообразную корпусную мебель, которая изготавливается индивидуально по вашему заказу.
                    Заказывая изготовление корпусной мебели в нашей компании, вы получаете результат, полностью оправдывающий ваши ожидания. Это становится возможным, благодаря квалифицированому выполнению каждого этапа работ.
                </p>

            </article>

            <?php $this->widget('application.modules.shop.components.RandomGoods'); ?>

        </div>
    </div>
</section>

    <script type="text/javascript">
        $(function() {
            $('#dg-container').gallery();
        });
    </script/>