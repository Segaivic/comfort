# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.5.8
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2013-04-17 15:22:07
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping structure for table comfort.tbl_categories
CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) DEFAULT NULL,
  `is_enabled` enum('1','0') DEFAULT '1',
  `is_inbloglist` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `title` (`title`(255))
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_categories: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_categories` DISABLE KEYS */;
INSERT INTO `tbl_categories` (`id`, `title`, `is_enabled`, `is_inbloglist`) VALUES
	(1, 'Новости компании', '1', '1'),
	(2, 'Хз', '1', '1');
/*!40000 ALTER TABLE `tbl_categories` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_gallery
CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_gallery: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_gallery` DISABLE KEYS */;
INSERT INTO `tbl_gallery` (`id`, `thumbnail`, `title`, `is_published`, `created`) VALUES
	(11, '/uploads/gallery/title/5128c6aed5c14a_d756d98c.jpg', 'Хз', '1', '2013-02-22 10:51:40'),
	(16, '/uploads/gallery/title/5128c4afde4e5916500537.jpg', 'Джессика Альба', '1', '2013-02-23 15:27:49');
/*!40000 ALTER TABLE `tbl_gallery` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_galleryphotos
CREATE TABLE IF NOT EXISTS `tbl_galleryphotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(255) DEFAULT NULL,
  `thumb` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `gallery_id` int(10) unsigned NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `gallery_id` (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_galleryphotos: ~17 rows (approximately)
/*!40000 ALTER TABLE `tbl_galleryphotos` DISABLE KEYS */;
INSERT INTO `tbl_galleryphotos` (`id`, `title`, `thumb`, `image`, `gallery_id`, `created`) VALUES
	(161, 'Джессика Альба 111', '/uploads/gallery/thumb/5128cf45751f6jessica_alba_in_conf.jpg', '/uploads/gallery/original/5128cf45751f6jessica_alba_in_conf.jpg', 16, '2013-02-23 20:16:37'),
	(162, 'ываываыва АВАВЫАЫВ ыва', '/uploads/gallery/thumb/5128cf45b4156jessica_alba_main.jpg', '/uploads/gallery/original/5128cf45b4156jessica_alba_main.jpg', 16, '2013-02-23 20:16:37'),
	(163, 'ВВЛВОЫЗЩВШо щшыва ыв9щашг д', '/uploads/gallery/thumb/5128cf45e61b0jessica-alba-4.jpg', '/uploads/gallery/original/5128cf45e61b0jessica-alba-4.jpg', 16, '2013-02-23 20:16:37'),
	(164, NULL, '/uploads/gallery/thumb/5128cf461e657jessica-alba-011-1920x1200.jpg', '/uploads/gallery/original/5128cf461e657jessica-alba-011-1920x1200.jpg', 16, '2013-02-23 20:16:38'),
	(165, NULL, '/uploads/gallery/thumb/5128cf464e96fjessica-alba11.jpg', '/uploads/gallery/original/5128cf464e96fjessica-alba11.jpg', 16, '2013-02-23 20:16:38'),
	(166, NULL, '/uploads/gallery/thumb/5128cf467f3c0jessica-alba-im-alltags-look-600x900-615109.jpg', '/uploads/gallery/original/5128cf467f3c0jessica-alba-im-alltags-look-600x900-615109.jpg', 16, '2013-02-23 20:16:38'),
	(167, NULL, '/uploads/gallery/thumb/5128cf46b4958l-actrice-jessica-alba-arrive-en-8eme-position-image-342062-article-ajust_930.jpg', '/uploads/gallery/original/5128cf46b4958l-actrice-jessica-alba-arrive-en-8eme-position-image-342062-article-ajust_930.jpg', 16, '2013-02-23 20:16:38'),
	(168, NULL, '/uploads/gallery/thumb/5128cf4702c72xr_ykg8ktbel.jpg', '/uploads/gallery/original/5128cf4702c72xr_ykg8ktbel.jpg', 16, '2013-02-23 20:16:39'),
	(169, NULL, '/uploads/gallery/thumb/5129d6462c2093.jpg', '/uploads/gallery/original/5129d6462c2093.jpg', 11, '2013-02-24 14:58:46'),
	(170, NULL, '/uploads/gallery/thumb/5129d6469369404-04-06_1557.jpg', '/uploads/gallery/original/5129d6469369404-04-06_1557.jpg', 11, '2013-02-24 14:58:46'),
	(171, NULL, '/uploads/gallery/thumb/5129d646bbb374.jpg', '/uploads/gallery/original/5129d646bbb374.jpg', 11, '2013-02-24 14:58:46'),
	(172, NULL, '/uploads/gallery/thumb/5129d647097ed05uv2.jpg', '/uploads/gallery/original/5129d647097ed05uv2.jpg', 11, '2013-02-24 14:58:47'),
	(173, 'Сальников', '/uploads/gallery/thumb/5129d647466995.jpg', '/uploads/gallery/original/5129d647466995.jpg', 11, '2013-02-24 14:58:47'),
	(174, NULL, '/uploads/gallery/thumb/5129d6476c1ec6ef61ab53d06.jpg', '/uploads/gallery/original/5129d6476c1ec6ef61ab53d06.jpg', 11, '2013-02-24 14:58:47'),
	(175, NULL, '/uploads/gallery/thumb/5129d6479e7cf07_pics_30446.jpg', '/uploads/gallery/original/5129d6479e7cf07_pics_30446.jpg', 11, '2013-02-24 14:58:47'),
	(176, NULL, '/uploads/gallery/thumb/5129d647c936011_sychev.jpg', '/uploads/gallery/original/5129d647c936011_sychev.jpg', 11, '2013-02-24 14:58:47'),
	(178, NULL, '/uploads/gallery/thumb/5129d6481c54e03_159.jpg', '/uploads/gallery/original/5129d6481c54e03_159.jpg', 11, '2013-02-24 14:58:48');
/*!40000 ALTER TABLE `tbl_galleryphotos` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_menu
CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL,
  `rgt` int(10) unsigned NOT NULL,
  `access` enum('1','2','3') NOT NULL DEFAULT '1',
  `root` int(10) DEFAULT NULL,
  `level` smallint(5) unsigned NOT NULL,
  `title` char(100) DEFAULT NULL,
  `link` varchar(400) DEFAULT '#',
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`),
  KEY `level` (`level`),
  KEY `root` (`root`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_menu: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_menu` DISABLE KEYS */;
INSERT INTO `tbl_menu` (`id`, `lft`, `rgt`, `access`, `root`, `level`, `title`, `link`) VALUES
	(1, 1, 12, '3', 1, 1, 'Корень', '#'),
	(21, 2, 3, '1', NULL, 2, 'Главная', '/'),
	(22, 6, 7, '1', NULL, 2, 'Каталог', '/shop'),
	(24, 8, 9, '1', NULL, 2, 'О компании', '/page/1/o-kompanii'),
	(25, 4, 5, '1', NULL, 2, 'Новости', '/news'),
	(26, 10, 11, '1', NULL, 2, 'Фото', '/gallery');
/*!40000 ALTER TABLE `tbl_menu` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_migration
CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_migration: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_migration` DISABLE KEYS */;
INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1360126042),
	('m110805_153437_installYiiUser', 1360126058),
	('m110810_162301_userTimestampFix', 1360126058);
/*!40000 ALTER TABLE `tbl_migration` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_news
CREATE TABLE IF NOT EXISTS `tbl_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) NOT NULL DEFAULT '',
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_onfrontpage` enum('1','0') NOT NULL DEFAULT '1',
  `user_id` int(11) DEFAULT NULL,
  `catid` int(11) unsigned NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `metakey` text,
  `metadesc` text,
  `alias_url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_news: ~17 rows (approximately)
/*!40000 ALTER TABLE `tbl_news` DISABLE KEYS */;
INSERT INTO `tbl_news` (`id`, `title`, `alias`, `introtext`, `fulltext`, `is_published`, `is_onfrontpage`, `user_id`, `catid`, `created`, `modified`, `metakey`, `metadesc`, `alias_url`) VALUES
	(1, 'Заголовок 1', 'test', '<img alt="" src="/images/demo/demonews.jpg" style="padding: 4px; border: 1px solid rgb(206, 205, 205); margin: 0px 10px 8px 0px; float: left;" width:150px;="">\n<p>Сочетание киноа с творогом и фруктами бесподобно. Полезное и вкусное блюдо подойдет и детям и взрослым. Этот вкусный десерт посвящаю всем женщинам связавшим свою жизнь с армией и боевым подругам. Так случилось, что сегодня год с момента моей регистрации на сайте, угощайтесь! r</p>\n<div class="clear"></div>', '<p><br></p>', '1', '1', 1, 1, '2012-12-12 12:12:12', '2013-02-24 10:00:20', '', '', 'zagolovok'),
	(2, 'Заголовок 2', 'test2', '<p><span>Делать этот&nbsp;</span>плов<span>&nbsp;надо на природе, на даче или где имеется «очаг», так называют&nbsp;</span>узбеки<span>&nbsp;кухню, приспособленную для готовки&nbsp;</span>плова<span>. Но этот плов можно готовить и в домашних условиях, лучше на газе, но и на электричестве он так же не становится хуже.</span><br><span>Вы просто соотносите технологию варения в <span style="color: #0099ff;"><a title="казаны и печи под казаны" href="http://metallpark96.ru/shop/16/kazany-chugunnaya-i-alyuminievaya-posuda?sort=title-asc"><span style="color: #0099ff;">казане</span></a></span> на открытом огне к домашним источникам приготовления пищи. Какая разница, каким образом увеличить или же уменьшить огонь. Под казаном надо убрать или добавить дровишки, а на кухне легким поворотом регулятора пламени газа или силы тока делается то же - верно же ?!!!!</span></p>', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://lh5.googleusercontent.com/-UJNW5bjCt6c/UC3K0DlvOoI/AAAAAAAAAwM/BlvgBy0KBk8/s800/26_04_2011_9.jpg" alt="" width="451" height="338"></p>\r\n<p>Для начала, обмойте мясо проточной водой и высушите его салфеточным полотенцем. Кто его знает, как и кто его лапал до вас, а влага в мариновке не нужна, абсолютно. Если мясо купите на базаре рано утром, замариновав по этому рецепту сразу, то вечером можете смело уже вертеть его на мангале!</p>\r\n<p>С мясом мы разобрались, кстати, еще вкуснее будет барашек, и я не раз в этом убеждался и, всегда, буду это утверждать. Довелось как-то готовить шашлык для чисто турецкого общества, мясо они купили мне сами. Каково было мо. удивление, что они выхватывали куски мяса чуть ли не изо рта даже у других! Баранина была маринована именно, по этому рецепту! Поэтому, дорогих и уважаемых гостей я, все-таки, стараюсь угощать свежей бараниной!</p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://lh3.googleusercontent.com/-Zu6nz6Uo0Xc/UC3KyGvBGJI/AAAAAAAAAvg/1DsgGXbisr4/s800/26_04_2011_10.jpg" alt="" width="476" height="357"></p>\r\n<p>Таким методом, разрезаем мясо на поперечные шайбы по 3-4 см. шириной, потом на одинаковые кусочки, удаляя планку и сухожилия. Сильно не увлекайтесь удалением сала, это придаст некую сочность. После хорошей тренировки у вас может получиться также как у меня, где каждая полочка с мясом выходит с разницей от двух- до пяти граммов!!! При нежирной баранине рекомендуют надевать между мясом еще и курдючный жир. Оставим эту тему для любителей баранины.</p>\r\n<p>Теперь ингредиенты для мариновки и весь секрет моего блюда. Берем с расчета, скажем так, на 3-4 килограмма. Главная система для мариновки мяса не в том, какие ингредиенты туда положить, очень важно даже - в какой последовательности!</p>\r\n<p>1. Соль (примерно 4-5 ч.л.). Вкусы, скажу сразу, у всех разные, я лично ничего на столе не досаливаю, даже яйца или помидоры никогда не солю. Два химических состава, натрий и хлор, составляющие соль, хорошего для организма ничего не дают, а косточки до артрозов подпортят. Не будем говорить о том, что соль просто необходима, без нее никак нельзя и т. д. А вот недосоленный шашлык будет очень некстати, поэтому его нужно хорошо и правильно посолить.</p>\r\n<p>2. Перец черный и, особо подчеркну, КРУПНО молотый, как на картинке. Никакой «пыли» из перечницы! А еще лучше, раздавить горошины плоскостью ножа и потом, порезать немного острием. Когда Вы будете мясо жевать, то эти крупинки будут давать Вам приятные вкусовые ощущения. Сколько? 15 – 20 горошин!!! Хотите больше, на любителя! Кстати, черный перец очень полезен для организма!!! Вам знакома водка с перцем от простуды? Так вот, выздоровительную реакцию дает, в первую очередь, не водка, а сам черный перец!</p>\r\n<p>3. Кориандр. Она же и – кинза. Думаю, знакомо Вам это название. Опять же вопрос – сколько? Считаю, что тоже 15-20 горошин будет достаточно. Их нужно растолочь в ступе, сначала слегка прожарив. Может уже продаваться и молотый. Но, ни в коем случае, может быть я, и повторюсь, перебарщивать с приправами – НЕЛЬЗЯ! Иначе настоящего вкуса мяса не получите. Если кориандр уже молотый: чуть больше половины ч.л. А точнее будет как на фотографии. Я видел, как маринуют шашлык с зеленой кинзой, но чтобы такое вам посоветовать, необходимо самому на этом проверить. Не пробовал – не знаю, хотя обязательно, как только появится возможность, попробую так замариновать.</p>\r\n<p>4. Базилик. У меня он в баночке, сухой. Продается почти во всех магазинах. Берите столько же сколько и молотого кориандра. В чайно-ложечном размере это 1/2 , можно чуть больше! Эта трава не имеет такого резкого и острого вкуса.</p>\r\n<p>5. Тимьян. Он же Чабрец. Одна из азиатских приправ, от которого применяется зелень тимьяна в засушенном виде. В небольших количествах хорошо дополняет овощные и мясные блюда, а также различные салаты. Использование тимьяна восходит к древней Греции, где он символизировал смелость. Римские солдаты купались в воде, настоянной на тимьяне, чтобы набраться сил, энергии и смелости. В Средних веках девушки вышивали веточку тимьяна на шарфах рыцарей для отваги. Сколько? На килограмм – одну, две щепотки, перетирая слегка пальцами.</p>\r\n<p>6. Зира, она же Зра, она же Кумин. Не спутайте с тмином или укропом. Такие вещи в шашлык не идут вообще. Ищите в магазинах, у друзей и вам это окупится! В магазинах Германии я его не видел, а вот в русских магазинах есть точно! Количество? Очень специфическая приправа, будет достаточно чуть меньше половины ч.л. Зира, очень специфическая на вкус, поэтому будьте осторожны в ее количестве. Зира очень похожа на укроп, не спутайте!</p>\r\n<p>7. Лавровый лист, пару штук. Пусть он там даже разломается на мелкие кусочки при перемешивании. Когда будете надевать мясо на шампуры, заметив его, просто уберите в сторону. Его не кушают!!!</p>\r\n<p>8. Красный перец, паприка. Молотый, сладкий. Можно чайную ложку без «горки». Он даст немного нужный аромат и красивый цвет при жарке. Хотите добавить остроту? Один зубок раздавленного чеснока, добавьте острый, стручковый перец, но я предупреждаю, что вкус мяса может сильно перебиться, я думаю, что вам это не надо, ведь вы хотели настоящий шашлык, не так ли?</p>\r\n<p>9. Лук репчатый. Готовим двумя способами: луковицы, что помельче – в мясо, покрупнее луковицы – на закуску. Сначала режем крупные луковицы и только кольцами. Кольца нужно отделить друг от друга. Перебираем аккуратненько и отдельно в дозу складываем колечки, а все остальное перемешиваем с мясом. Закусывайте шашлык кольцами! А не какими-нибудь отходами или хвостиками, нарезанными, как попало. Эстетическая культура и аккуратность должна присутствовать в первую очередь! Примерно 5-6 луковиц хватит. Как пишут некоторые, что лука 1:1, мне кажется, будет много, просто режьте правильно, чтоб он сок отдал. Для удобства, вторым способом, можно лук пропустить через мясорубку, а потом отжать полученную массу через марлю. Этим я и пользуюсь, очень удобно и не нужно возиться с отходами от лука. Еще проще пропустить через соковыжималку, будет практичней, но хлопот с мытьем аппарата будет больше. На следующий день кольца лука можно сбрызнуть уксусом, разведенным с водой и посыпать красным или черным перцем, кому как нравится!</p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://lh4.googleusercontent.com/-f2rh7mXPDzQ/UC3KyTcFPYI/AAAAAAAAAvk/AcDBhMRS1k0/s800/26_04_2011_13.jpg" alt=""></p>\r\n<p>10. Масло подсолнечное, не спутайте с оливковым маслом, 5-6 столовых ложек. Да-да, Вы, абсолютно не ослышались, именно подсолнечное масло! Представьте сами, что Вы бросили мясо на сковородку, без масла. И, какой бы непригораемой сковородка она у вас не была, любое мясо просто начнет гореть. Вот это и получается на картинках у других шашлычников, где торчат обугленные краешки, а тебе нужно их жевать, потому что выплюнуть некрасиво, да и просто неудобно. Масло добавлять после всех добавленных, перемешанных припав, именно в такой последовательности, как написано.</p>\r\n<p style="text-align: center;"><img src="https://lh4.googleusercontent.com/-ytqiweTOcCk/UC3KyKOG6CI/AAAAAAAAAv0/WnIOPeZXdhY/s800/26_04_2011_14.jpg" alt="" width="460" height="345"></p>\r\n<p>Так выглядит, кем-то, жареное, на картинке, мясо: а. маринованное без масла;<br>б. слишком мелко нарезанный лук и его весь не убрали;<br>в. это и есть то мясо, которое идет по шейному обрезку,<br>слегка розового цвета, не меняет своей формы после мариновки и не имеет настоящего, сочного вкуса. А сгорел-то как? Разве можно такое назвать шашлыком?</p>\r\n<p>11. И вот теперь, положив в мясо все, что написано выше, пропуская между пальцами, начинаем все хорошенько перемешивать, добавляя не менее важный и, даже скажу, эффективный продукт, это – ЛИМОН. Хорошего размера лимона хватит и половины. Только будьте осторожны, выдавливать только тогда, когда все будет уже перемешано приправами и маслом. Попадая лимон на чистое мясо, оно тут же станет «колом», как после уксуса, поэтому уксус в шашлык просто не идет.</p>\r\n<p>Уксусом можете полить уже жареный шашлык.</p>\r\n<p>12. Четверть, можно и половинку, натурального гранатового сока добавит вам еще больше комплиментов и еще надежней спрячет разгадку Вашего рецепта! Гранат, в летнее время, вряд ли вы где-то его найдете, а соками в магазине лучше пренебрегать. Многие тесты показывают, что гранат там даже рядом не лежал. Так что, оставим ваш эксперимент до глубокой осени.</p>\r\n<p>Все это тщательно перемешиваем и оставляем плотно накрытым в кастрюле, придавив сверху подходящим, примерно, по диаметру тарелкой. Сверху поставьте что-нибудь тяжелое и так оставляем до завтра. Хотя, как я упоминал выше, если мясо свежее, то за весь день оно тоже промаринуется. Утром все перемешайте, наслаждаясь теперь запахом, который будет уже исходить от мяса. Можете даже лизнуть его или откусить, страшного теперь в этом мясе уже ничего нет.</p>\r\n<p>А вот так должно выглядеть свежее, мягкое, ядреное, замаринованное мясо. Его можно сразу отличить от нехорошего мяса. Вывод: дружите с мясником, хотя бы, узнайте, в какие дни у него происходит забой. Исключительный случай, если вы сами этим занимаетесь. Уделю внимание теперь еще и мангалу. Он тоже должен соответствовать кое-каким параметрам. Лучше всего иметь железный, а еще лучше с нержавеющей стали, чем толще будут его стенки, тем лучше. Он будет лучше сохранять жар и прожаривать крайние кусочки.</p>\r\n<p>И не надо пытать себя голодом, делая шашлык на кирпичах или где-то на висячих цепях.</p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://lh6.googleusercontent.com/-Ilzq092T42U/UC3Ky70tCHI/AAAAAAAAAv8/yCcSr49ftyM/s800/26_04_2011_16.jpg" alt="" width="449" height="337"></p>\r\n<p>Мой мангал выглядит так: длина – 60 см., высота 15 (от решетки) и ширина 22 см. Главная ошибка тех, кто делает мангалы: решетка не должна иметь большое количество дыр. Пусть лучше четверть дна мангала будет вовсе только из решетки, остальное цельное железо. Вы увидите, как мясо будет просто румяниться, и прожариваться на всю глубину. А главное, оно не будет вспыхивать под пламенем огня, где мясо сразу примет закопченный цвет и потеряет, всеми нам необходимый, вкус. Хотите кушать сажу??? Я – нет!!! Копчение – это совсем другая тема и в этом деле она просто будет не уместна.</p>\r\n<p>Теперь, когда уже всё позади и мясо съедено, могу с уверенностью сказать, что тест он прошел не на все 100% и есть теперь свои недостатки: по краю бездырочного дна, вдоль, я проделал отверстия, через пять сантиметров и теперь все отлично! Да, не было еще заслонки для поддувала, поэтому приходилось убирать мясо с того места где решетка, мой сварщик сказал, что поправит это дело.</p>\r\n<p>Также, не буду заострять внимание на том, что мясо должно жариться на хорошем жару все время, поворачивая и, ни в коем случае, не должно обдаваться языками пламени. Пусть угли хорошенько прогорят, обмахать пепел, и только потом делать самое прекрасное в этом искусстве – жарить шашлык! Это должен знать каждый, уважающий себя, шашлычник!</p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://lh5.googleusercontent.com/-CtOM4x7LzBo/UC3KzcP-zWI/AAAAAAAAAvw/C3Gy14P9z6Q/s800/26_04_2011_17.jpg" alt="" width="441" height="331"></p>\r\n<p><br>На счет баранины: будьте особо внимательны! Если Вы его пережарите, мясо превратится в сухие и черствые шарики. Хорошее, свежее мясо готовится быстро, достаточно каких-то пару минут. Особенно женщинам нужно усвоить одну истину, т.к. они часто путают сок из жареного мяса с кровью, поэтому просят поджарить еще. Хотя мясо уже вполне готово.</p>\r\n<p>А еще открою всем свою традицию. Когда разгорятся угли, я всегда сначала жарю только одну палочку. За успех мероприятия налью бокал хорошего красного вина и оценю качество будущего шашлыка. Дам попробовать гостям, пусть хоть и не всем, раздразнив их до предела. А уж потом пошло – поехало!</p>\r\n<p>У меня, лично, были случаи, что близкие друзья, один даже мясник по образованию, теряли дар речи во время еды. А после 5-6 палочек выдохнув, сказал, что такого шашлыка он еще не ел! Теперь, кстати, маринует только так!</p>\r\n<p>Не надо делать шампуры метровые. Пока, кушая, доберетесь до последнего кусочка, он будет уже холодным. Во-вторых, махая за столом «шпагой», приговаривая какой вкусный шашлык, можно хорошему другу выколоть глаз. А как прекрасно есть шашлык именно с шампура, когда он еще горячий. В этом случае я пользуюсь своими, короткими, общая длина 37 см, шампурами. Если у вас их всего 20 штук, значит, у вас нет друзей, и вы не можете кого-то позвать в гости. Мясо должно быть надето на шампуры до последнего кусочка. Или вы делаете так: –Эй, Вован, давай, доедай, шампур давай, мне Кольке надо пожарить!</p>\r\n<p>У меня их штук 90–100, не ржавеют, кушать не просят, если только чтоб на них мясо надели, и на всех хватит. А на природу беру все мясо уже надетое и только на шампурах. В специальной емкости и от всяких насекомых спрятано. Маринованное мясо надеваю на шампуры только сам и только дома. Этой работой своих дам я не утруждаю, уж если взялся за дело, то и доведу его до конца. Не хочу обижать наш милый и прекрасный пол, но мясо не должно прокручиваться на шампурах или свисать до самых углей.</p>\r\n<p>Что касается размера палочек, то во время еды, лучше ведь, взять другую, свеженькую, горячую палочку, поэтому я насаживаю по 5-6 кусочков. Для милых дам бывает достаточно и один шампур, она бы и второй хотела бы попробовать, но при огромных шампурах она боится, что вдруг не справится. При моих размерах можно спокойно регулировать количеством съеденного шашлыка. Мы ведь не в каменном веке у крутящегося мамонта или на соревновании: «Кто больше съест!» Хотя, при хорошем шашлыке, любая мысль о диете просто пропадает! И уж два – три шампурчика, ваша дамочка может съесть всегда с удовольствием!</p>\r\n<p>Опять же случай из жизни. День затянулся всякими делами, был поздний вечер, сауна и, соответственно, шашлычок. Одна дама из родственного круга, уж очень возмутилась, типа, на ночь, глядя и такое блюдо!? С юности знала правила питания, присматривала за своей фигуркой, а сама, между прочим, три палочки и проглотила, да еще и кружку пива наверх!!!…</p>\r\n<p>Последнее условие и немаловажное: гостей всегда сажайте за стол, пусть они пропустят одну рюмку с салатами. Никакой ходьбы вокруг мангала, все должны сидеть за столом! Пусть втягивают ноздрями, что Вы там готовите. Ваше место только у огня!!! Вот тут Вы и начинайте подавать им Ваш шашлычок!</p>\r\n<p>Шашлык необходимо есть только горячим! И ещ., если угощаете шашлыком, пусть это будет только шашлык. Что-то из закуски, типа: соленые огурцы, помидоры, патиссоны. Сладкий перец, оливки черные, лук, темный хлеб и, конечно – хорошая водочка! Никаких мантов и пирогов быть не должно, ведь Вы угощаете только ШАШЛЫКОМ!</p>\r\n<p>Не знаю, куда потом Вас будут целовать за это, но первым шашлычником на деревне Вы точно будете! Вот так выглядит первый шампур, скворчащий, поджаривающийся и, не сгорая на жарком огне. А сок, какой сок бежит, Вы только посмотрите! Если он капнет на огонь, то эта капля сразу вспыхнет огнем, а при дне мангала с наименьшей вентиляцией, этого не произойдет.</p>\r\n<p>Ниже вы увидите, что все партии прожаренного мной шашлыка у меня выглядят примерно одинаково, так что и у вас получится, я в этом уверен!</p>\r\n<p>А вот она первая партия, народ ждет, все налито, только подавай!</p>\r\n<p>Источник:&nbsp;<a href="http://www.shashlik.spb.ru/">http://www.shashlik.spb.ru</a></p>', '1', '1', 1, 1, '0000-00-00 00:00:00', '2013-03-26 06:49:56', 'вап', 'енг', 'hz'),
	(3, 'Заголовок 3', 'test2', '<p><span>Делать этот&nbsp;</span>плов<span>&nbsp;надо на природе, на даче или где имеется &laquo;очаг&raquo;, так называют&nbsp;</span>узбеки<span>&nbsp;кухню, приспособленную для готовки&nbsp;</span>плова<span>. Но этот плов можно готовить и в домашних условиях, лучше на газе, но и на электричестве он так же не становится хуже.</span><br /><span>Вы просто соотносите технологию варения в <span style="color: #0099ff;"><a title="казаны и печи под казаны" href="http://metallpark96.ru/shop/16/kazany-chugunnaya-i-alyuminievaya-posuda?sort=title-asc"><span style="color: #0099ff;">казане</span></a></span> на открытом огне к домашним источникам приготовления пищи. Какая разница, каким образом увеличить или же уменьшить огонь. Под казаном надо убрать или добавить дровишки, а на кухне легким поворотом регулятора пламени газа или силы тока делается то же - верно же ?!</span></p>', 'Полный текст цуквыдлаодвлп', '1', '1', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
	(4, 'Заголовок 4', 'test2', '<p><span>Делать этот&nbsp;</span>плов<span>&nbsp;надо на природе, на даче или где имеется &laquo;очаг&raquo;, так называют&nbsp;</span>узбеки<span>&nbsp;кухню, приспособленную для готовки&nbsp;</span>плова<span>. Но этот плов можно готовить и в домашних условиях, лучше на газе, но и на электричестве он так же не становится хуже.</span><br /><span>Вы просто соотносите технологию варения в <span style="color: #0099ff;"><a title="казаны и печи под казаны" href="http://metallpark96.ru/shop/16/kazany-chugunnaya-i-alyuminievaya-posuda?sort=title-asc"><span style="color: #0099ff;">казане</span></a></span> на открытом огне к домашним источникам приготовления пищи. Какая разница, каким образом увеличить или же уменьшить огонь. Под казаном надо убрать или добавить дровишки, а на кухне легким поворотом регулятора пламени газа или силы тока делается то же - верно же ?!</span></p>', 'Полный текст цуквыдлаодвлп', '1', '1', 1, 1, '0000-00-00 00:00:00', '2013-03-26 06:42:18', '', '', ''),
	(5, 'Заголовок 5', 'test2', '<p><span>Делать этот&nbsp;</span>плов<span>&nbsp;надо на природе, на даче или где имеется «очаг», так называют&nbsp;</span>узбеки<span>&nbsp;кухню, приспособленную для готовки&nbsp;</span>плова<span>. Но этот плов можно готовить и в домашних условиях, лучше на газе, но и на электричестве он так же не становится хуже.</span><br><span>Вы просто соотносите технологию варения в <span style="color: #0099ff;"><a title="казаны и печи под казаны" href="http://metallpark96.ru/shop/16/kazany-chugunnaya-i-alyuminievaya-posuda?sort=title-asc"><span style="color: #0099ff;">казане</span></a></span> на открытом огне к домашним источникам приготовления пищи. Какая разница, каким образом увеличить или же уменьшить огонь. Под казаном надо убрать или добавить дровишки, а на кухне легким поворотом регулятора пламени газа или силы тока делается то же - верно же ?!</span></p>', 'Полный текст цуквыдлаодвлп', '1', '1', 1, 1, '0000-00-00 00:00:00', '2013-04-02 09:22:21', '', '', '5-hz'),
	(6, 'Заголовок 6', 'test2', '<p><span>Делать этот&nbsp;</span>плов<span>&nbsp;надо на природе, на даче или где имеется &laquo;очаг&raquo;, так называют&nbsp;</span>узбеки<span>&nbsp;кухню, приспособленную для готовки&nbsp;</span>плова<span>. Но этот плов можно готовить и в домашних условиях, лучше на газе, но и на электричестве он так же не становится хуже.</span><br /><span>Вы просто соотносите технологию варения в <span style="color: #0099ff;"><a title="казаны и печи под казаны" href="http://metallpark96.ru/shop/16/kazany-chugunnaya-i-alyuminievaya-posuda?sort=title-asc"><span style="color: #0099ff;">казане</span></a></span> на открытом огне к домашним источникам приготовления пищи. Какая разница, каким образом увеличить или же уменьшить огонь. Под казаном надо убрать или добавить дровишки, а на кухне легким поворотом регулятора пламени газа или силы тока делается то же - верно же ?!</span></p>', 'Полный текст цуквыдлаодвлп', '1', '1', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
	(7, 'Заголовок 7', 'test2', '<p><span>Делать этот&nbsp;</span>плов<span>&nbsp;надо на природе, на даче или где имеется &laquo;очаг&raquo;, так называют&nbsp;</span>узбеки<span>&nbsp;кухню, приспособленную для готовки&nbsp;</span>плова<span>. Но этот плов можно готовить и в домашних условиях, лучше на газе, но и на электричестве он так же не становится хуже.</span><br /><span>Вы просто соотносите технологию варения в <span style="color: #0099ff;"><a title="казаны и печи под казаны" href="http://metallpark96.ru/shop/16/kazany-chugunnaya-i-alyuminievaya-posuda?sort=title-asc"><span style="color: #0099ff;">казане</span></a></span> на открытом огне к домашним источникам приготовления пищи. Какая разница, каким образом увеличить или же уменьшить огонь. Под казаном надо убрать или добавить дровишки, а на кухне легким поворотом регулятора пламени газа или силы тока делается то же - верно же ?!</span></p>', 'Полный текст цуквыдлаодвлп', '1', '1', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
	(8, 'Заголовок 8', 'test2', '<p><span>Делать этот&nbsp;</span>плов<span>&nbsp;надо на природе, на даче или где имеется &laquo;очаг&raquo;, так называют&nbsp;</span>узбеки<span>&nbsp;кухню, приспособленную для готовки&nbsp;</span>плова<span>. Но этот плов можно готовить и в домашних условиях, лучше на газе, но и на электричестве он так же не становится хуже.</span><br /><span>Вы просто соотносите технологию варения в <span style="color: #0099ff;"><a title="казаны и печи под казаны" href="http://metallpark96.ru/shop/16/kazany-chugunnaya-i-alyuminievaya-posuda?sort=title-asc"><span style="color: #0099ff;">казане</span></a></span> на открытом огне к домашним источникам приготовления пищи. Какая разница, каким образом увеличить или же уменьшить огонь. Под казаном надо убрать или добавить дровишки, а на кухне легким поворотом регулятора пламени газа или силы тока делается то же - верно же ?!</span></p>', 'Полный текст цуквыдлаодвлп', '1', '1', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
	(9, 'Заголовок 9', 'test2', '<p><span>Делать этот&nbsp;</span>плов<span>&nbsp;надо на природе, на даче или где имеется &laquo;очаг&raquo;, так называют&nbsp;</span>узбеки<span>&nbsp;кухню, приспособленную для готовки&nbsp;</span>плова<span>. Но этот плов можно готовить и в домашних условиях, лучше на газе, но и на электричестве он так же не становится хуже.</span><br /><span>Вы просто соотносите технологию варения в <span style="color: #0099ff;"><a title="казаны и печи под казаны" href="http://metallpark96.ru/shop/16/kazany-chugunnaya-i-alyuminievaya-posuda?sort=title-asc"><span style="color: #0099ff;">казане</span></a></span> на открытом огне к домашним источникам приготовления пищи. Какая разница, каким образом увеличить или же уменьшить огонь. Под казаном надо убрать или добавить дровишки, а на кухне легким поворотом регулятора пламени газа или силы тока делается то же - верно же ?!</span></p>', 'Полный текст цуквыдлаодвлп', '1', '1', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL);
/*!40000 ALTER TABLE `tbl_news` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_page
CREATE TABLE IF NOT EXISTS `tbl_page` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `content` text,
  `metakey` varchar(300) DEFAULT NULL,
  `metadesc` varchar(300) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_published` enum('1','0') DEFAULT '1',
  `alias_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`(255))
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_page: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_page` DISABLE KEYS */;
INSERT INTO `tbl_page` (`id`, `title`, `content`, `metakey`, `metadesc`, `updated_at`, `is_published`, `alias_url`) VALUES
	(1, 'О компании', '<p><span style="font-size: 15px; line-height: 1.45em;">Продаем шкафы</span><br></p>\n<div class="container_24">\n<div class="grid_12">1</div>\n<div class="grid_12">2</div>\n<div class="clear"></div>\n</div>', '', '', '2013-02-11 10:05:05', '1', NULL),
	(2, 'Новая страница6', '<p>yi</p>', 'tyi', 'tyi', '2013-03-26 15:30:43', '1', 'sdf'),
	(4, 'fghfgh', '<p>fghfgh</p>', '', '', '2013-03-26 15:46:22', '1', 'gfhdfh');
/*!40000 ALTER TABLE `tbl_page` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_profiles
CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_profiles: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_profiles` DISABLE KEYS */;
INSERT INTO `tbl_profiles` (`user_id`, `first_name`, `last_name`) VALUES
	(1, 'Administrator', 'Admin'),
	(2, '', '');
/*!40000 ALTER TABLE `tbl_profiles` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_profiles_fields
CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `field_type` varchar(50) NOT NULL DEFAULT '',
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` text,
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` text,
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_profiles_fields: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_profiles_fields` DISABLE KEYS */;
INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
	(1, 'first_name', 'First Name', 'VARCHAR', 255, 3, 2, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
	(2, 'last_name', 'Last Name', 'VARCHAR', 255, 3, 2, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 2, 3);
/*!40000 ALTER TABLE `tbl_profiles_fields` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_shop_attribute_titles
CREATE TABLE IF NOT EXISTS `tbl_shop_attribute_titles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `category_id` int(50) NOT NULL,
  `measure` varchar(50) NOT NULL,
  `default_value` varchar(50) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '1',
  `in_search` enum('1','0') DEFAULT '1',
  `pos` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_shop_attribute_titles: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_shop_attribute_titles` DISABLE KEYS */;
INSERT INTO `tbl_shop_attribute_titles` (`id`, `title`, `category_id`, `measure`, `default_value`, `type`, `in_search`, `pos`) VALUES
	(6, 'Глубина', 14, 'См', '', 2, '1', 0),
	(88, 'Высота', 14, 'См', '345', 2, '1', 1),
	(90, 'Ширина', 14, 'См', '', 1, '1', 2),
	(91, 'gdfg', 14, 'dfg', '123', 1, '1', 3);
/*!40000 ALTER TABLE `tbl_shop_attribute_titles` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_shop_attrs
CREATE TABLE IF NOT EXISTS `tbl_shop_attrs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(50) NOT NULL,
  `attribute_id` int(10) NOT NULL,
  `attr_valueid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attribute_id` (`attribute_id`),
  KEY `attr_valueid` (`attr_valueid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_shop_attrs: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_shop_attrs` DISABLE KEYS */;
INSERT INTO `tbl_shop_attrs` (`id`, `product_id`, `attribute_id`, `attr_valueid`) VALUES
	(5, 1, 6, 1142),
	(7, 1, 88, 1145),
	(8, 1, 90, 1146);
/*!40000 ALTER TABLE `tbl_shop_attrs` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_shop_attr_value
CREATE TABLE IF NOT EXISTS `tbl_shop_attr_value` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attr_id` int(10) NOT NULL,
  `value` varchar(1500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `value` (`value`(255))
) ENGINE=InnoDB AUTO_INCREMENT=1147 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_shop_attr_value: ~233 rows (approximately)
/*!40000 ALTER TABLE `tbl_shop_attr_value` DISABLE KEYS */;
INSERT INTO `tbl_shop_attr_value` (`id`, `attr_id`, `value`) VALUES
	(716, 90, '280'),
	(717, 91, '60'),
	(718, 92, '0'),
	(720, 94, 'чёрный матовый'),
	(721, 90, '300'),
	(726, 90, '320'),
	(731, 90, '340'),
	(736, 90, '360'),
	(751, 91, '110'),
	(755, 91, '150'),
	(759, 91, '180'),
	(769, 92, '1'),
	(770, 93, 'алюминий'),
	(781, 95, '9'),
	(782, 96, '360'),
	(783, 97, '120'),
	(784, 98, '170'),
	(785, 102, '6'),
	(786, 101, 'чугун'),
	(787, 103, '8'),
	(788, 104, '1'),
	(795, 103, '11'),
	(797, 95, '4'),
	(798, 96, '300'),
	(800, 98, '130'),
	(801, 102, '5'),
	(804, 103, '4'),
	(805, 105, 'есть в наличии'),
	(815, 95, '6'),
	(816, 96, '330'),
	(818, 98, '140'),
	(822, 103, '5'),
	(831, 103, '5'),
	(833, 95, '8'),
	(834, 96, '345'),
	(835, 98, '145'),
	(836, 99, '330'),
	(837, 100, '40'),
	(841, 103, '12'),
	(845, 97, '100'),
	(853, 96, '350'),
	(855, 98, '160'),
	(859, 103, '7'),
	(872, 95, '12'),
	(873, 96, '400'),
	(874, 98, '150'),
	(878, 103, '10'),
	(882, 98, '180'),
	(888, 95, '18'),
	(889, 96, '460'),
	(890, 98, '200'),
	(894, 103, '13'),
	(896, 95, '20'),
	(897, 96, '480'),
	(902, 103, '15'),
	(904, 95, '22'),
	(905, 96, '500'),
	(906, 98, '210'),
	(910, 103, '16'),
	(912, 95, '25'),
	(914, 98, '240'),
	(920, 95, '40'),
	(921, 96, '565'),
	(922, 98, '330'),
	(924, 104, '0'),
	(926, 103, '20'),
	(927, 105, 'под заказ'),
	(928, 95, '10'),
	(929, 96, '325'),
	(930, 97, '140'),
	(931, 98, '190'),
	(938, 96, '280'),
	(944, 103, '6'),
	(948, 98, '175'),
	(954, 93, 'чугун'),
	(955, 94, 'серебристый'),
	(956, 102, '7'),
	(957, 102, '8'),
	(958, 95, '100'),
	(959, 95, '3'),
	(960, 96, '210'),
	(961, 98, '110'),
	(962, 103, '3'),
	(963, 96, '220'),
	(964, 98, '120'),
	(965, 95, '5'),
	(966, 96, '240'),
	(967, 96, '250'),
	(968, 96, '260'),
	(970, 90, '200'),
	(971, 91, '20'),
	(972, 90, '220'),
	(973, 90, '240'),
	(975, 90, '290'),
	(976, 91, '50'),
	(981, 89, '4'),
	(982, 106, '230'),
	(983, 87, '120'),
	(984, 108, 'чугун'),
	(985, 109, 'термостекло'),
	(986, 86, 'белая эмаль'),
	(987, 88, 'красный'),
	(988, 107, 'есть в наличии'),
	(989, 89, '5'),
	(990, 106, '250'),
	(991, 109, 'чугун'),
	(992, 89, '7'),
	(993, 106, '280'),
	(994, 87, '130'),
	(995, 89, '6'),
	(996, 89, '3'),
	(997, 88, 'синий'),
	(999, 88, 'оранжевый'),
	(1000, 86, 'без покрытия'),
	(1001, 88, 'чёрный матовый'),
	(1002, 110, '330x230'),
	(1004, 91, '40'),
	(1005, 111, 'есть в наличии'),
	(1006, 91, '70'),
	(1007, 91, '90'),
	(1008, 91, '80'),
	(1009, 112, 'есть в наличии'),
	(1010, 112, 'временно отсутствует'),
	(1011, 91, '160'),
	(1012, 114, '70'),
	(1013, 115, '30'),
	(1015, 116, '90'),
	(1017, 118, '70'),
	(1018, 119, '30'),
	(1019, 120, '15'),
	(1020, 114, '110'),
	(1022, 121, '2'),
	(1029, 114, '85'),
	(1030, 115, '40'),
	(1032, 116, '97'),
	(1033, 116, '75'),
	(1035, 114, '80'),
	(1045, 102, '9'),
	(1046, 103, '9'),
	(1047, 96, '450'),
	(1048, 98, '230'),
	(1049, 105, 'уточнять по наличию'),
	(1050, 95, '70'),
	(1051, 96, '650'),
	(1052, 98, '360'),
	(1053, 103, '35'),
	(1055, 88, 'тёмно коричневый'),
	(1056, 89, '2.5'),
	(1057, 87, '100'),
	(1058, 106, '210'),
	(1059, 89, '6.5'),
	(1060, 89, '3.5'),
	(1061, 89, '2.2'),
	(1063, 89, '2'),
	(1064, 106, '200'),
	(1065, 106, '240'),
	(1066, 87, '115'),
	(1067, 89, '5.5'),
	(1068, 106, '260'),
	(1069, 87, '125'),
	(1070, 89, '8'),
	(1071, 106, '300'),
	(1072, 87, '140'),
	(1073, 90, '370'),
	(1074, 90, '210'),
	(1075, 90, '270'),
	(1076, 94, 'коричневая эмаль'),
	(1077, 94, 'оранжевая эмаль'),
	(1078, 90, '250'),
	(1079, 96, '270'),
	(1080, 103, '3.5'),
	(1081, 122, '500'),
	(1082, 123, '300'),
	(1083, 124, '300'),
	(1084, 125, '2'),
	(1085, 126, '1'),
	(1086, 128, '1.5'),
	(1087, 127, 'нержавеющая сталь'),
	(1088, 129, 'есть в наличии'),
	(1089, 122, '400'),
	(1090, 123, '350'),
	(1091, 124, '250'),
	(1092, 127, 'чёрная сталь'),
	(1093, 122, '350'),
	(1094, 123, '250'),
	(1095, 124, '150'),
	(1096, 122, '450'),
	(1097, 124, '200'),
	(1098, 128, '1'),
	(1099, 122, '330'),
	(1100, 122, '300'),
	(1101, 122, '420'),
	(1102, 123, '260'),
	(1103, 124, '210'),
	(1104, 128, '0.8'),
	(1105, 107, 'временно отсутствует'),
	(1106, 106, '220'),
	(1107, 88, 'красный глянец'),
	(1108, 105, 'временно отсутствует'),
	(1109, 96, '560'),
	(1110, 98, '300'),
	(1111, 133, '40'),
	(1112, 134, '30'),
	(1113, 135, '15'),
	(1114, 136, '38'),
	(1115, 137, '1'),
	(1116, 138, 'чёрная сталь'),
	(1117, 139, 'есть в наличии'),
	(1118, 137, '1.5'),
	(1119, 133, '72'),
	(1120, 136, '72'),
	(1121, 133, '50'),
	(1122, 137, '0.8'),
	(1123, 140, '70'),
	(1124, 141, '670'),
	(1125, 142, '370'),
	(1126, 143, '7'),
	(1127, 144, '0'),
	(1129, 146, '15'),
	(1131, 140, '100'),
	(1132, 141, '840'),
	(1133, 146, '20'),
	(1134, 140, '28'),
	(1135, 141, '580'),
	(1136, 142, '300'),
	(1137, 143, '5'),
	(1138, 144, '1'),
	(1139, 147, 'есть в наличии'),
	(1140, 145, 'алюминий'),
	(1141, 6, '234'),
	(1142, 6, '34'),
	(1145, 88, '3455'),
	(1146, 90, '7567');
/*!40000 ALTER TABLE `tbl_shop_attr_value` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_shop_categories
CREATE TABLE IF NOT EXISTS `tbl_shop_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `rgt` int(10) unsigned NOT NULL,
  `level` smallint(5) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `active` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`),
  KEY `level` (`level`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_shop_categories: ~11 rows (approximately)
/*!40000 ALTER TABLE `tbl_shop_categories` DISABLE KEYS */;
INSERT INTO `tbl_shop_categories` (`id`, `lft`, `thumbnail`, `rgt`, `level`, `title`, `meta_description`, `meta_keywords`, `description`, `active`) VALUES
	(1, 1, NULL, 22, 1, 'Каталог', NULL, NULL, NULL, '1'),
	(2, 14, '/uploads/shop/title/5135a0fb8b3c654c34e9ae4.jpg', 19, 2, 'Детские', '57', '5674', 'Описание Товаров 1!В мебельных магазинах Екатеринбурга, от разнообразия&nbsp;<a href="http://kupe66.ru/">шкафов-купе</a>, можно просто напросто растеряться. Чтобы не запутаться с выбором, мы советуем вам не искать готовый, а заказать шкаф-купе по своему вкусу. Компания "Фаворит Урал" может стать вам помощником, ведь в области производства шкафов-купе она работает с 2003года. Специалисты компании сами снимают все необходимые размеры, создают эскиз, изготавливают составляющие&nbsp;<b>шкафа купе</b>&nbsp;и собирают его на месте.\r\n', '1'),
	(3, 4, '/uploads/shop/title/5131d1de45fb9meshok.jpg', 5, 2, 'Шкафы-купе', '', '', 'Кухни на заказ от компании «Мария» — это яркий дизайн и широкий модельный ряд кухонной мебели от классики до модерна. Удобство, функциональность и эргономичность кухни обеспечиваются за счет использования надежной фурнитуры, аксессуаров для мебели и встраиваемой техники от ведущих мировых производителей.', '1'),
	(6, 2, '/uploads/shop/title/512a34a5410aaarticle-0-0156545f00000578-671_468x437.jpg', 3, 2, 'Кухни', '', '', 'tyu', '1'),
	(11, 15, '/uploads/shop/title/5131e331b6c154.jpg', 16, 3, 'ertesrt', '', '', '', '1'),
	(12, 17, NULL, 18, 3, '45675764', '', '', '', '1'),
	(13, 6, '/uploads/shop/title/5131d2ad6f42dpost-3-13404004084030.jpg', 7, 2, 'Гостиные', 'фывфыв', '', '', '1'),
	(14, 8, '/uploads/shop/title/5131e1e20427b05uv2.jpg', 9, 2, 'Прихожие', '', '', '<p><br></p>', '1'),
	(15, 10, '/uploads/shop/title/51333df66addajessica-alba-im-alltags-look-600x900-615109.jpg', 11, 2, 'Офисная мебель', '', '', '', '1'),
	(16, 12, NULL, 13, 2, 'Торговое оборудование', '', '', '', '1'),
	(17, 20, NULL, 21, 2, 'Ортопедические основания', '', '', '', '1');
/*!40000 ALTER TABLE `tbl_shop_categories` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_shop_gallery
CREATE TABLE IF NOT EXISTS `tbl_shop_gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_shop_gallery: ~24 rows (approximately)
/*!40000 ALTER TABLE `tbl_shop_gallery` DISABLE KEYS */;
INSERT INTO `tbl_shop_gallery` (`id`, `product_id`, `thumbnail`, `image`) VALUES
	(17, 17, '/uploads/shop/gallery/thumb/512cb32394847916500537.jpg', '/uploads/shop/gallery/title/512cb32394847916500537.jpg'),
	(18, 17, '/uploads/shop/gallery/thumb/512cb32394847Black_Labrador_Retrievers_portrait.jpg', '/uploads/shop/gallery/title/512cb32394847Black_Labrador_Retrievers_portrait.jpg'),
	(19, 5, '/uploads/shop/gallery/thumb/5131e0e7a1d81Jessica_Alba_Main.jpg', '/uploads/shop/gallery/title/5131e0e7a1d81Jessica_Alba_Main.jpg'),
	(20, 5, '/uploads/shop/gallery/thumb/5131e0e7a1d81Jessica-Alba-4.jpg', '/uploads/shop/gallery/title/5131e0e7a1d81Jessica-Alba-4.jpg'),
	(21, 5, '/uploads/shop/gallery/thumb/5131e0e7a1d81jessica-alba-011-1920x1200.jpg', '/uploads/shop/gallery/title/5131e0e7a1d81jessica-alba-011-1920x1200.jpg'),
	(22, 5, '/uploads/shop/gallery/thumb/513340e07bdceXr_YKG8KTBel.jpg', '/uploads/shop/gallery/title/513340e07bdceXr_YKG8KTBel.jpg'),
	(23, 5, '/uploads/shop/gallery/thumb/513340e07bdcel-actrice-jessica-alba-arrive-en-8eme-position-image-342062-article-ajust_930.jpg', '/uploads/shop/gallery/title/513340e07bdcel-actrice-jessica-alba-arrive-en-8eme-position-image-342062-article-ajust_930.jpg'),
	(24, 5, '/uploads/shop/gallery/thumb/513340e07bdcejessica-alba-im-alltags-look-600x900-615109.jpg', '/uploads/shop/gallery/title/513340e07bdcejessica-alba-im-alltags-look-600x900-615109.jpg'),
	(25, 5, '/uploads/shop/gallery/thumb/513340e07bdceJessica-Alba11.jpg', '/uploads/shop/gallery/title/513340e07bdceJessica-Alba11.jpg'),
	(26, 5, '/uploads/shop/gallery/thumb/513340e07bdcejessica-alba-011-1920x1200.jpg', '/uploads/shop/gallery/title/513340e07bdcejessica-alba-011-1920x1200.jpg'),
	(27, 5, '/uploads/shop/gallery/thumb/513340e07bdceJessica-Alba-4.jpg', '/uploads/shop/gallery/title/513340e07bdceJessica-Alba-4.jpg'),
	(28, 5, '/uploads/shop/gallery/thumb/513340e07bdce77026088_large_1279638508_jessicaalba_by_reactor_net_064.jpg', '/uploads/shop/gallery/title/513340e07bdce77026088_large_1279638508_jessicaalba_by_reactor_net_064.jpg'),
	(33, 19, '/uploads/shop/gallery/thumb/513838aceac7dsvarochnyy_stol_demmeler_608h456.jpg', '/uploads/shop/gallery/title/513838aceac7dsvarochnyy_stol_demmeler_608h456.jpg'),
	(35, 19, '/uploads/shop/gallery/thumb/513838aceac7d0B7A9672-582F-4658-8D21-B9B78BED82F4.jpg', '/uploads/shop/gallery/title/513838aceac7d0B7A9672-582F-4658-8D21-B9B78BED82F4.jpg'),
	(36, 19, '/uploads/shop/gallery/thumb/513838aceac7d046c67f24bfb3b4ca352a4a93c90ef5b.jpg', '/uploads/shop/gallery/title/513838aceac7d046c67f24bfb3b4ca352a4a93c90ef5b.jpg'),
	(37, 19, '/uploads/shop/gallery/thumb/513838aceac7d54c34e9ae4.jpg', '/uploads/shop/gallery/title/513838aceac7d54c34e9ae4.jpg'),
	(38, 19, '/uploads/shop/gallery/thumb/513838aceac7d150px-Stephan_El_Shaarawy.jpg', '/uploads/shop/gallery/title/513838aceac7d150px-Stephan_El_Shaarawy.jpg'),
	(39, 19, '/uploads/shop/gallery/thumb/513838aceac7d753E5AFA-C3A0-4DF0-9BA0-51E604E8C97B.jpg', '/uploads/shop/gallery/title/513838aceac7d753E5AFA-C3A0-4DF0-9BA0-51E604E8C97B.jpg'),
	(40, 19, '/uploads/shop/gallery/thumb/513838aceac7da-govno-life-zam.jpg', '/uploads/shop/gallery/title/513838aceac7da-govno-life-zam.jpg'),
	(41, 19, '/uploads/shop/gallery/thumb/513838aceac7dметалл.jpg', '/uploads/shop/gallery/title/513838aceac7dметалл.jpg'),
	(42, 19, '/uploads/shop/gallery/thumb/513838aceac7d329.jpeg', '/uploads/shop/gallery/title/513838aceac7d329.jpeg'),
	(43, 19, '/uploads/shop/gallery/thumb/513838aceac7d1t.jpg', '/uploads/shop/gallery/title/513838aceac7d1t.jpg'),
	(44, 19, '/uploads/shop/gallery/thumb/513838aceac7d1325451683_222701728_1----.jpg', '/uploads/shop/gallery/title/513838aceac7d1325451683_222701728_1----.jpg'),
	(45, 19, '/uploads/shop/gallery/thumb/513838aceac7d410-2.jpg', '/uploads/shop/gallery/title/513838aceac7d410-2.jpg');
/*!40000 ALTER TABLE `tbl_shop_gallery` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_shop_orders
CREATE TABLE IF NOT EXISTS `tbl_shop_orders` (
  `id` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `sum` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` enum('1','0') NOT NULL DEFAULT '1',
  `visited` enum('1','0') NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL,
  `shipping_date` date DEFAULT NULL,
  `phone` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_shop_orders: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_shop_orders` DISABLE KEYS */;
INSERT INTO `tbl_shop_orders` (`id`, `user_id`, `product_id`, `quantity`, `price`, `sum`, `name`, `address`, `comments`, `created`, `active`, `visited`, `email`, `shipping_date`, `phone`) VALUES
	(1, 1, '19', '1', '23435', 23435, 'fdfg', 'fdsgdfg', 'sdfgregergrgrg', '2013-03-07 09:14:00', '0', '1', 'dfgsdf', '2013-03-08', 32767),
	(2, 1, '19, 21', '1, 1', '23435, 456', 23891, 'tyutryu', 'rtert', '456456reerty', '2013-03-07 09:22:14', '1', '1', 'trutru', '2013-03-20', 32767),
	(3, 1, '5', '1', '1500', 1500, 'g', 'dfgdfg', '', '2013-03-15 09:47:36', '1', '1', 'erga@fdf.ry', '1970-01-01', NULL);
/*!40000 ALTER TABLE `tbl_shop_orders` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_shop_products
CREATE TABLE IF NOT EXISTS `tbl_shop_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `characters` text,
  `price` float DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(50) NOT NULL,
  `active` enum('1','0') DEFAULT '1',
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_shop_products: ~8 rows (approximately)
/*!40000 ALTER TABLE `tbl_shop_products` DISABLE KEYS */;
INSERT INTO `tbl_shop_products` (`id`, `title`, `description`, `characters`, `price`, `created_at`, `updated_at`, `category_id`, `active`, `meta_description`, `meta_keywords`) VALUES
	(1, 'Товар 1', 'Описание!', 'Хрень какаято\r\n', 100, '2013-02-25 20:18:36', '2013-04-15 11:20:41', 14, '1', '', ''),
	(2, 'Товар 2', '', '', 1608, '2013-02-25 23:59:27', '2013-03-06 03:37:14', 2, '0', '', ''),
	(5, 'Джессика Альба', 'Джессика Альба родилась 28 апреля 1981 года в городе Помона, штат Калифорния, США в семье Кэтрин (урождённой Йенсен) и Марка Альба.', '<p><div>В 2001 году Джессика заняла первое место в Hot 100 журнала Maxim. В 2005 году она была названа одной из 50 самых красивых людей планеты по версии журнала People, а в 2007 году попала в список 100 самых красивых людей. В 2002 году Альба заняла пятое место в рейтинге самых сексуальных актрис по результатам опроса портала Hollywood.com, шестое по версии журнала FHM и двенадцатое в списке «102 самых сексуальных женщин планеты» по версии журнала Stuff. В 2005 году она заняла пятое место в Hot 100 журнала Maxim.</div><div>В 2006 году актриса появилась в бикини на обложке журнала «Плейбой» и была названа самой сексуальной звездой года. Из-за этого Альба подала в суд на журнал за использование её фотографий без её согласия. На обложке была фотография, сделанная ею во время промо-кампании фильма «Добро пожаловать в рай». Тем не менее, вскоре Джессика отозвала иск, получив личные извинения владельца «Плейбоя» Хью Хефнера, который согласился сделать пожертвования в две благотворительные организации, которым Альба оказывала поддержку.</div></p>\r\n', 1500, '2013-02-26 00:01:23', '2013-03-06 09:13:17', 3, '1', '', ''),
	(19, 'Шкаф 2!', ' Шкафчик Шкафчик', '<p><br></p>', 23435, '2013-02-26 20:44:15', '2013-04-02 09:00:20', 2, '1', '', ''),
	(20, 'Кухонка №2', 'цукцукцваыа', '', 0, '2013-03-02 17:59:45', '2013-03-04 09:44:31', 3, '1', '', ''),
	(21, 'Шкаф 3', 'Шкаф 3 суперский 4 дверцы', '', 456, '2013-03-02 18:25:33', '2013-03-06 09:18:22', 2, '1', '', ''),
	(24, 'пропр', 'опронро', '', 0, '2013-03-05 14:13:54', '2013-03-05 09:14:11', 1, '1', '', ''),
	(25, 'нке', '', '', 0, '2013-03-05 14:14:35', NULL, 1, '1', 'нукн', '');
/*!40000 ALTER TABLE `tbl_shop_products` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_shop_productsimg
CREATE TABLE IF NOT EXISTS `tbl_shop_productsimg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_shop_productsimg: ~7 rows (approximately)
/*!40000 ALTER TABLE `tbl_shop_productsimg` DISABLE KEYS */;
INSERT INTO `tbl_shop_productsimg` (`id`, `product_id`, `thumbnail`, `image`) VALUES
	(6, 19, '/uploads/shop/product/thumb/512cca3fb4974775273.jpg', '/uploads/shop/product/title/512cca3fb4974775273.jpg'),
	(7, 5, '/uploads/shop/product/thumb/5134650feb1538d31b779e3dc27748fbab31df16cef06.png', '/uploads/shop/product/title/5134650feb1538d31b779e3dc27748fbab31df16cef06.png'),
	(8, 20, '/uploads/shop/product/thumb/5131e9b1b229905uv2.jpg', '/uploads/shop/product/title/5131e9b1b229905uv2.jpg'),
	(9, 21, '/uploads/shop/product/thumb/5131efbd38d8204-04-06_1557.jpg', '/uploads/shop/product/title/5131efbd38d8204-04-06_1557.jpg'),
	(10, 1, '/uploads/shop/product/thumb/5135a88a842beTravel.png', '/uploads/shop/product/title/5135a88a842beTravel.png'),
	(13, 24, '/uploads/shop/product/thumb/5135a9536cd521266239971_74379928_1---.jpg', '/uploads/shop/product/title/5135a9536cd521266239971_74379928_1---.jpg'),
	(14, 25, '/uploads/shop/product/thumb/5135a96b639333cef940e71025ef7dbb0656dd7554c03.jpg', '/uploads/shop/product/title/5135a96b639333cef940e71025ef7dbb0656dd7554c03.jpg');
/*!40000 ALTER TABLE `tbl_shop_productsimg` ENABLE KEYS */;


# Dumping structure for table comfort.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`username`),
  UNIQUE KEY `user_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

# Dumping data for table comfort.tbl_users: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `superuser`, `status`, `create_at`, `lastvisit_at`) VALUES
	(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'webmaster@example.com', '9b94c7be573c22b9d4f7f8caccd5043d', 1, 1, '2013-02-06 10:47:38', '2013-04-05 04:21:52'),
	(2, 'sega', '81dc9bdb52d04dc20036dbd8313ed055', 'esrde@rty.rt', 'af40cbe01b5936d62d8b947c7bf9140f', 0, 1, '2013-02-12 17:06:06', '2013-02-24 16:35:43');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
