<?php
/*
Template Name: Home
*/
?>
<?php /*
		while ( have_posts() ) : the_post();
			get_template_part( 'content', 'page' );
		endwhile; */
		?>

<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>
<!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />	
<title>Мир москитных сеток</title>
<link rel="stylesheet" href="/wp-content/themes/sydney/bootstrap/css/bootstrap.min.css">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />


	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <style>
        .closeBtn {
            position: fixed;
            z-index: 999;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            right: 60px;
            top: 80px;
            background: #101424;
            border-radius: 50%;
			cursor: pointer;
        }
		
		#CDT {
			font-size: 60px;
    		color: #eee;
		}
		
		#CDT .number-wrapper {
			margin: 10px;
			margin-bottom: 4px;
			position: relative;
		}
		.caption {
		   font-size: 12px;
		   position: absolute;
		   bottom: -30px;
		   left: 0;
		   text-align: center;
		   width: 100%;
		   color: #fff;
		}
    </style>

		<script type="text/javascript">
		document.documentElement.className = 'js';
		</script>
 
	<link rel="stylesheet" href="http://moskitnaya-setka.dp.ua/wp-content/themes/twentyfifteen/css/home-style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="http://moskitnaya-setka.dp.ua/wp-content/themes/twentyfifteen/css/home-reset.css"> <!-- CSS reset -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<header class="header_1 col-md-8 col-lg-offset-2" id="home" >
   

    	<div class="col-md-6">
      			<div class="logo">
					<a href="http://moskitnaya-setka.dp.ua/" class="custom-logo-link" rel="home" itemprop="url"><img width="auto" height="23px" src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/04/значёк-Клипон.png" class="custom-logo" alt="" itemprop="logo"> <span>Мир москитных сеток</span></a>			
      			</div>
        </div>

                <div class="col-md-6 search-area">
		<div class="soc">
			<a href="https://plus.google.com/b/118082673027887283863/118082673027887283863" target="_blank"><i class="fa fa-google-plus fa-3" aria-hidden="true"></i></a>
     		<a href="https://vk.com/moskitnaya_setka_clip_on" target="_blank"><i class="fa fa-vk fa-3" aria-hidden="true"></i></a>
     		<a href="https://twitter.com/setka_Clip_on" target="_blank"><i class="fa fa-twitter fa-3" aria-hidden="true"></i></a>
     		<a href="https://www.facebook.com/moskitnaya.setka.clip.on/" target="_blank"><i class="fa fa-facebook fa-3" aria-hidden="true"></i></a>
     		<a href="https://www.youtube.com/channel/UCV1oZ39VYtnXG_epofMhmDw" target="_blank"><i class="fa fa-youtube-play fa-3" aria-hidden="true"></i></a>
		</div>
		
		<div class="rabota">
				<span>работаем ежедневно<br> с 10 до 19</span>
		</div>

		<div class="zvonok">
			<div class="konsult">Бесплатная консультация</div>
			<div class="knopka"><a href="#modal" class="button openModal">ЗАКАЗАТЬ ЗВОНОК</a></div>
		</div>

		<div class="phones" style="padding-bottom:0;">
			<div id="text-2" class="et_pb_widget widget_text">			
				<div class="textwidget"><img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/12/Kyivstar_2015_logo_-_Brandmark.png">
	096 19 19 019<br>
	<img src="/wp-content/uploads/2017/09/vodafone.png">
	050 95 111 66<br>
			</div>
			</div> <!-- end .et_pb_widget -->
		</div>




		</div> <!--  .search-area-->




</header>
	<section class="menu" style="display: none;">
        <div class="logo"><img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2018/01/значёк-Клипон.1516220953.gif" alt=""></div>
        <ul class="my_nav">
            <li><a class="active" href="#home">главная</a></li>
            <li><a href="#block1">преимущества</a></li>
            <li><a href="#block2">о товаре</a></li>
            <li><a href="#block3">области применения</a></li>
            <li><a href="#block4">цвет</a></li>
            <li><a href="#block5">фото</a></li>
            <li><a href="#block6">инструкции</a></li>
            <li><a href="#block7">как заказать</a></li>
            <li><a href="#block8">ответы на вопросы</a></li>
            <li><a href="#block9">отзывы</a></li>
        </ul>
        
        <div class="work_time">работаем ежедневно<br>c 9 до 18</div>
        <div class="phones2"><img src="/wp-content/themes/sydney/bootstrap/images/k.png" style="width: 14px;" alt=""> 067 989 32 24<br><img src="/wp-content/themes/sydney/bootstrap/images/mts.png" style="width: 14px;" alt=""> 095 567 77 12<br><img src="/wp-content/themes/sydney/bootstrap/images/life.png" style="width: 14px;" alt=""> 063 756 34 23</div>
        <div class="call">бесплатная консультация<br><a style="background: #aad9f5;color: #3f9af5;" href="#">заказать звонок</a></div>
        <div class="call"><a href="#">купить сетку</a></div>
        <div class="soc">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-vk"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </section>
    <a class="closeBtn" style="display: none;">X</a>
	<div class="projects-container">
		<ul>
		    <li class="cd-single-project"> 
				<a style="text-decoration: none;cursor: default;color: #fff;" class="open">
                    <div class="cd-title product">
                        <h2 class="plan-title">Рамочная сетка</h2>
                        <p class="cd-text-t">для окон и дверей</p>
                        <div class="img-thumb"><img class="cd-img-t" src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/11/s1-1.png" alt="Универсальные москитные сетки на липучке Clip-on">
                        </div><ul class="sd-ul-t">
                        <li>внутреняя и наружная</li>
                        <li>открывание на петлях</li>
                        </ul>
                    </div> <!-- .cd-title -->
				</a>

                <div class="cd-project-info"></div> <!-- .cd-project-info -->
			</li>

			<li class="cd-single-project">
				<a style="text-decoration: none;cursor: default;color: #fff;" class="open">
                    <div class="cd-title">					
                        <span class="hitprodag" >хит продаж</span>
                        <h2 class="plan-title">Сетка на липучке</h2>
                        <p class="cd-text-t">для м/п, деревянных и алюминиевых окон</p>
                        <div class="img-thumb"><img class="cd-img-t" src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/11/s2-1.png" alt="Рамочные москитные сетки Стандарт и Эконом">
                        </div>
                        <ul class="sd-ul-t">
                        <li>производим под ваш размер</li>
                        <li>любой цвет на выбор</li>
                        <li>просто устанавливается</li>
                        <li>легко одевается и снимается</li>
                        </ul>
                        <span class="vibor" >
                        выбор компании</span>
                    </div> <!-- .cd-title -->
                    <section class="section screen_1" id="home"  style="display: none; position: relative; z-index: 999; margin-top: 60px;">
                        <section class="content">
                            <div class="container">
                                <div class="title">УНИВЕРСАЛЬНАЯ СЕТКА НА ЛИПУЧКЕ <span class="ffff00">CLIP-ON</span></div>
                                <div class="pre_title">от производителя</div>
                            </div>
                            <div class="container">
                                <div class="col-md-6">
                                    <div class="info">
                                        для <span class="col3399ff">м/п</span>,<br>
                                        <span class="cc9900">деревянных</span> и <br>
                                        <span class="d0d0d0">алюминиевых</span> окон
                                    </div>

                                    <div class="list">
                                        - производим под ваш размер<br>
                                        - любой цвет на выбор<br>
                                        - просто устанавливается<br>
                                        - легко одевается и снимается<br>
                                    </div>

                                    <div class="timer">
                                        <div class="sale">АКЦИЯ <span class="ff9999 saleText">-45%</span></div>
                                        <div class="sale">до окончания осталось:</div>
                                        <div id="CDT"></div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <center><img src="/wp-content/themes/sydney/bootstrap/images/window.png" style="width: 55%;" alt=""></center>
                                    <div class="sale" style="text-align: center;"><s>310 грн</s><span class="ff9999"> от <span style="font-size:48px;">184</span> грн/шт</span><br>ЛИДЕР ПРОДАЖ!</div>
                                </div>
                            </div>
                        </section>
                    </section>
				</a>

				<div class="cd-project-info">
									<section id="block1">
        <section class="screen screen_2">
            <section class="content">
                <h1>ЧЕМ УНИКАЛЬНА СЕТКА НА ЛИПУЧКЕ CLIP-ON</h1>
                <div class="container-fluid">
                    <div class="col-md-3 rowss">            
                        <center><span class="icon"><i class="fas fa-lock"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/3312.png" alt=""--></center>
                        <p>Защита от насекомых, пыли, пуха, снега, дождя и сильного ветра</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fab fa-google-wallet"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/334.png" alt=""--></center>
                        <p>Не имеет каркаса, сворачивается в рулон или складывается</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fas fa-compress"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/33-11.png" alt=""--></center>
                        <p>Надежное крепление, не выпадает, не ломается, не портит уплотнитель</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fas fa-tint"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/336.png" alt=""--></center>
                        <p>Удобно хранится и моется. При чистой сетке окно «дышит»</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fas fa-sign-in-alt"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/338.png" alt=""--></center>
                        <p>Легко и удобно одевается и снимается при помощи липучки</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fas fa-building"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/3311.png" alt=""--></center>
                        <p>Для м/п, деревянных и алюминиевых окон и дверей</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fas fa-dollar-sign"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/3310.png" alt=""--></center>
                        <p>Гораздо дешевле аналогов, при явных преимуществах</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fas fa-star"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/335.png" alt=""--></center>
                        <p>Любые формы: прямоугольная, треугольная, трапецеидальная</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fab fa-firstdraft"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/339.png" alt=""--></center>
                        <p>Производим индивидуально, под каждый проём</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fas fa-expand"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/337.png" alt=""--></center>
                        <p>Не имеет щелей, плотно прилегает по всему периметру</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fas fa-cog"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/332.png" alt=""--></center>
                        <p>Проста в замерах и установке (инструмент и навыки не требуются)</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <center><span class="icon"><i class="fab fa-pagelines"></i></span><!--img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/331.png" alt=""--></center>
                        <p>Изготовлена из качественных европейских материалов</p>
                    </div>
                </div>
            </section>
        </section>
        <section class="screen screen_3">
            <section class="content">
                <h1 style="color: #ff9999;">НЕДОСТАТКИ РАМОЧНОЙ СЕТКИ</h1>
                <div class="container-fluid">
                    <div class="col-md-3 rowss">
                        <p style="margin-bottom:0;"><b>Крепления портят уплотнитель</b></p>
                        <img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/595.jpg" style="width: 70%;display: block;margin: 0 auto;border: 1px solid gray;" alt="">
                        <p>Неудобство установки и снятия при частом использовании</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <p style="margin-bottom:0;"><b>Щели</b></p>
                        <img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/595-2.jpg" style="width: 70%;display: block;margin: 0 auto;border: 1px solid gray;" alt="">
                        <p>Габариты (неудобное хранение, много занимает места)</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <p style="margin-bottom:0;"><b>Выпирающие ручки и крепления</b></p>
                        <img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/622.jpg" style="width: 70%;display: block;margin: 0 auto;border: 1px solid gray;" alt="">
                        <p>Внешний вид (широкий профиль уменьшает световой проём)</p>
                    </div>
                    <div class="col-md-3 rowss">
                        <p style="margin-bottom:0;"><b>Неудобное хранение</b></p>
                        <img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/ventok-setki1-e1486665134911.jpg" style="width: 70%;display: block;margin: 0 auto;border: 1px solid gray;" alt="">
                        <p>Габартиты (Много занимают места)</p>
                    </div>
                </div>
            </section>
        </section>
    </section>
<section class="screen screen_4" id="block2">
        <section class="content">
            <h1>О ТОВАРЕ</h1>
            <div class="container-fluid">
                <div class="col-md-6 rowss2">
                    <p>Сетка Clip-on является эксклюзивным продуктом, у нее множество преимуществ по отношению к другим вариантам москитных сеток. Эта сетка давно используется в Европе и странах Азии.</p> 
                    <p>Комплект состоит из двух отдельных частей:<br>
                    - Пластиковая рамка<br>
                    - Полотно сетки </p>
                    <p>Рамка надёжно клеится на раму окна с помощью установленного на неё скотча. Полотно сетки легко крепится к рамке с помощью многоразовой и долговечной липучки. </p>
                    <p>Все комплектующие произведены в Европе, имеют стойкость к влаге, морозу и жаре. Рамка и сетка хорошо моются и чистятся.</p>
                </div>
                <div class="col-md-6">
                    <a data-fancybox="" href="/wp-content/themes/sydney/bootstrap/images/vars.png"><img src="/wp-content/themes/sydney/bootstrap/images/vars.png" style="width: 100%;" alt=""></a>
                </div>
                <div class="col-md-12"><br><center><iframe width="560" height="315" src="http://www.youtube.com/embed/tM6LOjCzQnw" frameborder="0" allowfullscreen></iframe></center></div>
            </div>
			<hr class="col-md-12">
			<div class="contaner" style="margin-top: 50px;">
				<div class="col-md-3 rowss">
					ПОЛУЧИТЬ <b>БЕСПЛАТНЫЙ РАСЧЕТ</b> СТОИМОСТИ ВАШИХ СЕТОК
					<br>
					<div id="CDT2"></div>
				</div>
				<div class="col-md-9">
					<?php echo do_shortcode('[contact-form-7 id="1161" title="Контактная форма 1"]');?>
				</div>
			</div>
        </section>
    </section>
    
    <section class="screen screen_5" id="block3">
        <section class="content">
            <h1>Области применения</h1>
            <div class="container">
                <div class="grid_cols_7">
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Балконы с цветами</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/1.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Алюминиевые окна</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/2.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Пластиковые окна</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/3.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Старые окна</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/4.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Беседки</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/5.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Перегородки</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/6.png" style="width: 90%;" alt=""></center>
                    </div>             
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Нестандартные решения + окна с решётками</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/7.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Раздвижные системы</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/8.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Веранды</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/9.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Вентиляционные системы</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/10.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Панарамные окна</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/11.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Деревянные окна</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/12.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Любые формы</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/13.png" style="width: 90%;" alt=""></center>
                    </div>
                    <div class="rowss3">
                        <p style="font-size: 13px;padding: 30px 0;">Дизайнерский цвет</p>
                        <center><img src="/wp-content/themes/sydney/bootstrap/images/in/14.png" style="width: 90%;" alt=""></center>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
    <section class="screen screen_6" id="block4">
        <section class="content">
            <h1>ЦВЕТ</h1>
            <div class="container-fluid">
                <div class="col-md-6"><a data-fancybox="" href="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/02/ламинация-1.jpg"><img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/02/ламинация-1.jpg" style="width: 70%;display:block;margin:0 auto;" alt=""></a></div>
                <div class="col-md-6 rowss2">
                    <p>По умолчанию, рамка производиться из белого матового пластика, но при желании вы можете заказать памку любого цвета, под ваше окно или экстерьер.</p>
                    <p><b>Вариант: 1. Выбор по каталогу.</b> Рамка из цветного пластика со структурой дерева, цветная однотонная или белый глянець. Её приемущество - цвет по все глубене, царапины не видны.</p>
                    <p><b>Вариант: 2. Покраска.</b> Вы присылаете фото окна, мы подбираем цвет и окрашиваем рамку двухкомпонентной порошковой краской.<br>При предоставлении номера цвета по RAL, подбор цвета будет более точным.</p>
                </div>
            </div>
        </section>
    </section>
    
    <section class="screen screen_7" id="block5">
        <section class="content">
            <h1>ФОТО</h1>
            <div class="container-fluid">
				<div class="col-md-12 rowss">
					Рамка клеится на внешней стороне окна, поэтому она остаеться ка бы за его пределами, не мешая закрыванию створки. При этом она очень аккуратно и эстетично выглядит. Сетку можно снять или заменить, а рамку будет всегда оставаться на раме окна едва заметным декором.
				</div>
				<a data-fancybox="gallery" href="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/IMG_20160914_133433.jpg"><img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/IMG_20160914_133433.jpg" style="width: 25%;"></a>
				<a data-fancybox="gallery" href="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/IMG_20160914_133433.jpg"><img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/IMG_20160914_133433.jpg" style="width: 25%;"></a>
			</div>
        </section>
    </section>
    
    <section id="block6">
        <section class="screen screen_8">
            <section class="content">
				<h1>ИНСТРУКЦИЯ ПО ЗАМЕРАМ</h1>
                <div class="container-fluid">
                    <div class="col-md-6 rowss2">
                       <p>Сделать замеры очень легко. Откройте створку окна и замеряйте ширину и высоту от указанных точек.</p>
                       <p>Размеры, с точностью до миллиметра укажите при формировании заявки, для удобства их можно подписать: кухня, зал, балкон.</p>
                       <br>
                       <h1>ИНСТРУКЦИЯ ПО УСТАНОВКЕ</h1>
                       <p>1. Для хорошей адгезии со скотчем, в местах предполагаемой склейки необходимо очистить раму окна от пыли и грязи, насухо вытереть.</p>
                       <p>2. Снять защитную плёнку со скотча. Подвести полоску до упора липучки в раму, прижать и наклеить</p>
                       <br>
                       <div class="col-md-12 row">
                           <div class="col-md-8"><a data-fancybox="" href="/wp-content/themes/sydney/bootstrap/images/install/2.jpg"><img src="/wp-content/themes/sydney/bootstrap/images/install/2.jpg" style="width: 100%;" alt=""></a></div>
                           <div class="col-md-4">
                               <div class="col-md-12 row"><a data-fancybox="" href="/wp-content/themes/sydney/bootstrap/images/install/1.jpg"><img src="/wp-content/themes/sydney/bootstrap/images/install/1.jpg" style="width: 100%;" alt=""></a><br><br></div>
                               <div class="col-md-12 row"><a data-fancybox="" href="/wp-content/themes/sydney/bootstrap/images/install/3.jpg"><img src="/wp-content/themes/sydney/bootstrap/images/install/3.jpg" style="width: 100%;" alt=""></a></div>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 row">
                           <div class="col-md-8"><a data-fancybox="" href="/wp-content/themes/sydney/bootstrap/images/razmer/2.jpg"><img src="/wp-content/themes/sydney/bootstrap/images/razmer/2.jpg" style="width: 100%;" alt=""></a></div>
                           <div class="col-md-4">
                               <div class="col-md-12 row"><a data-fancybox="" href="/wp-content/themes/sydney/bootstrap/images/razmer/1.jpg"><img src="/wp-content/themes/sydney/bootstrap/images/razmer/1.jpg" style="width: 100%;" alt=""></a><br><br></div>
                               <div class="col-md-12 row"><a data-fancybox="" href="/wp-content/themes/sydney/bootstrap/images/razmer/3.jpg"><img src="/wp-content/themes/sydney/bootstrap/images/razmer/3.jpg" style="width: 100%;" alt=""></a></div>
                           </div>
                        </div>
                        <div class="col-md-12 row">
                            <br><br><iframe width="100%" height="350" src="https://www.youtube.com/embed/w69tAuZPeek" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    
    <section class="screen screen_9" id="block7">
        <section class="content">
            <h1>АЛГОРИТМ ЗАКАЗА</h1>
            <div class="container">
                <div class="col-md-6">
                    <div class="blueBlock">
                        <p>Мы производим сетки Clip-on индивидуально по вашим размерам и отсылаем перевозчиком в любую точку страны.</p>
                        <p class="redText2">экономия -35%</p>
                        <p>Вам предоставляется возможность сделать замеры и монтаж самостоятельно и сэкономить на этом свои средства. Следуя простой инструкции, вы легко сможете установить сетку, потратив на это не более 15 минут.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="whiteBlock">
                        <div class="col-md-3 rowss">
                            <span class="icon"><i class="fas fa-envelope"></i></span>
                            <!--img src="images/i1.png" style="width: 100%;" alt=""-->
                            <p>Отправка заявки с сайта или по телефону</p>
                        </div>
                        <div class="col-md-3 rowss">
                            <span class="icon"><i class="fab fa-cc-visa"></i></span>
                            <!--img src="images/i2.png" style="width: 100%;" alt=""-->
                            <p>Оплата на карту</p>
                        </div>
                        <div class="col-md-3 rowss">
                            <span class="icon"><i class="fas fa-cogs"></i></span>
                            <!--img src="images/i3.png" style="width: 100%;" alt=""-->
                            <p>Производство до 3-х дней</p>
                        </div>
                        <div class="col-md-3 rowss">
                            <span class="icon"><i class="fas fa-truck"></i></span>
                            <!--img src="images/i4.png" style="width: 100%;" alt=""-->
                            <p>Доставка (Новая Почта)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-6"><?php echo do_shortcode('[contact-form-7 id="1192" title="Контактная форма 1_copy"]');?></div>
                <div class="col-md-6">
                    <div class="blueBlock">
                        <p>Обработав заявку мы вам перезвоним. После вашего подтверждения, заказ будет готов в течении нескольких дней. Доставка по Украине осуществляется Новой Почтой, на отделение или адресная.</p>
                        <p class="redText2">В Днепре, Киеве, Одессе, Харькове и Львове предоставляется услуга мастера по замеру, доставке и монтажу. В Днепре возможен самовывоз.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
    <section class="screen screen_10" id="block8">
        <section class="content">
            <h1>ОТВЕТЫ НА ВАШИ ВОПРОСЫ</h1>
            <div class="container-fluid">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" class="title_a  active" data-parent="#accordion" href="#collapse1">Как часто можно снимать и одевать сетку?</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">Лента-липучка Clip-on сделана по типу обувной, из синтетического волокна, рассчитана на ежедневное многоразовое использование</div>
                    </div>
                  </div>

                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" class="title_a active collapsed" data-parent="#accordion" href="#collapse2">Боится ли москитная сетка морозов?</a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">Рамка сетки выдержит любые морозы и жару, само полотно сетки также не боится высоких, низких температур и влаги. Конечно, на морозе износостойкость сетки уменьшается, однако заменить полотно сетки Clip-on через несколько лет не составит труда, заказав его у нас отдельно</div>
                    </div>
                  </div>

                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" class="title_a active collapsed" data-parent="#accordion" href="#collapse3">Как ухаживать за сеткой Clip-on?</a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">Уход очень простой. Пластиковая рамка легко моется, чистится, в липучке не остаётся грязи, она не забивается, но её можно пылесосить. Сетку удобно сворачивать и промывать из душа тёплой водой, также её удобно сушить на бельевой верёвке. Чем чище будет Ваша сетка, тем лучше будет воздухообмен в помещении</div>
                    </div>
                  </div>

                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" class="title_a active collapsed" data-parent="#accordion" href="#collapse4">Где можно использовать сетку на липучке?</a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                      <div class="panel-body">Антимоскитная сетка Clip-on уникальна тем, что может крепиться к металлу, пластику, дереву, штукатурке. Кроме оконных и дверных проёмов она может устанавливаться в перегородках, вентиляционных каналах, в беседках, на верандах и даже в теплицах</div>
                    </div>
                  </div>

                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" class="title_a active collapsed" data-parent="#accordion" href="#collapse5">Как устанавливать сетку на окно?</a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                      <div class="panel-body">Вы получаете готовый комплект. Сетка вырезана по указанному вами размеру и прошита лентой липучкой. Полоски рамки также прирезаны под проём, под углом 45 градусов. Согласно инструкции вам необходимо открыть окно и тщательно очистить раму с наружной стороны от пыли и грязи. Затем возьмите пластиковые полоски, предварительно примерьте их. Снимите со скотча защитные ленты и аккуратно наклейте полоски на внешнюю сторону окна по периметру. Таким образом, у вас получится рамка с липучкой, на которую вы и будете пристёгивать сетку</div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
    </section>
    
    <section class="screen screen_11" id="block9">
        <section class="content">
            <h1>Отзывы покупателей</h1>
            <div class="container-fluid">
				<div class="col-md-12">
                    <div class="col-md-2 rowss">
                        <img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/hhkzqpfv4es455.png" style="width: 100%;" alt="">
                        <p><b>АЛЕКСЕЙ</b><br>г. Харьков</p>
                    </div>
                    <div class="col-md-4 rowss2">
						<div class="panel-group" id="accordions">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="title_a active collapsed" data-parent="#accordions" href="#collapses">
											Отзыв
										</a>
									</h4>
								</div>
								<div id="collapses" class="panel-collapse collapse">
									<div class="panel-body">
										Я монтажник, устанавливаю пластиковые ПВХ окна, перепробовал много различных сеток. Среди аналогов, по качеству и надёжности защиты от насекомых и пыли — эта сетка, пожалуй, одна из лучших. Мне понравился быстрый монтаж, не нужно сверлить, делать разметку.
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-md-6"><iframe width="100%" height="315" src="http://www.youtube.com/embed/4NaSq76dJrM" frameborder="0" allowfullscreen></iframe></div>
                </div>
                <hr class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-2 rowss">
                        <img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/hhkzqpfv4es3-1.png" style="width: 100%;" alt="">
                        <p><b>Влада Муровец</b><br>г. Киев</p>
                    </div>
                    <div class="col-md-4 rowss2">
                        <div class="panel-group" id="accordiono">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="title_a active collapsed" data-parent="#accordiono" href="#collapseo">
											Отзыв
										</a>
									</h4>
								</div>
								<div id="collapseo" class="panel-collapse collapse">
									<div class="panel-body">
										Давно хотела купить москитную сетку на липучке, но всё что попадалось было сомнительного качества. Этой сеткой очень довольна, нам часто приходится снимать и одевать её и это не составляет труда. Очень понравилось отсутствие щелей, теперь комары нам не страшны. Хороший продукт, рекомендую!
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-md-6"><iframe width="100%" height="315" src="http://www.youtube.com/embed/DSj8YjMIKe8" frameborder="0" allowfullscreen></iframe></div>
                </div>
                <hr class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-2 rowss">
                        <img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/hhkzqpfv4es34.png" style="width: 100%;" alt="">
                        <p><b>Альбина</b><br>г. Днепропетровск</p>
                    </div>
                    <div class="col-md-4 rowss2">
						<div class="panel-group" id="accordiont">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="title_a active collapsed" data-parent="#accordiont" href="#collapset">
											Отзыв
										</a>
									</h4>
								</div>
								<div id="collapset" class="panel-collapse collapse">
									<div class="panel-body">
Сначала показалось всё очень сложным, но получив комплект и установив его была приятно удивлена. На сетке есть тканевая ручечка за которую удобно тянуть, всё качественно прошито, рамочка очень аккуратная, но прочная. Всё супер, ребята молодцы, спасибо )))
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-md-6"><iframe width="100%" height="315" src="http://www.youtube.com/embed/uu6dJCZ3q3o" frameborder="0" allowfullscreen></iframe></div>
                </div>
                <hr class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-2 rowss">
                        <img src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/01/hhkzqpfv4es3.png" style="width: 100%;" alt="">
                        <p><b>Генадий Федорович</b><br>г. Одесса</p>
                    </div>
                    <div class="col-md-4 rowss2">
						<div class="panel-group" id="accordionf">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="title_a active collapsed" data-parent="#accordionf" href="#collapsef">
											Отзыв
										</a>
									</h4>
								</div>
								<div id="collapsef" class="panel-collapse collapse">
									<div class="panel-body">
Задумали с женой ремонт окон. Давно раздражала старая сетка на окно. Конечно её не удобно хранить, мыть, в ней есть щели, на балконе она у нас 2 раза выпадала, и её крайне не удобно одевать. Спасибо сетке на липучке, она решила все наши проблемы и подарки к сеткам очень были к стати
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-md-6"><iframe width="100%" height="315" src="http://www.youtube.com/embed/N4OFx-Uzips" frameborder="0" allowfullscreen></iframe></div>
                </div>
            </div>
        </section>
    </section>
    
    <section class="screen screen_12">
        <div class="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="redText">
                            <p><span class="font30px">с этим товаром покупают:</span><br>идеальное решение для подарка или своего хозяйства</p>
                            <p>Магнитные классические и ажурные шторки для дверей в дом, на дачу или веранду</p>
                            <p class="font30px">120 грн. комплект. </p>
                            <p>Закажи три сетки клипон и получи дилерскую цену на магнитную шторку</p>
                        </div>
                   </div>
                    <div class="col-md-6 redText">
                       <div class="col-md-6"><img src="/wp-content/themes/sydney/bootstrap/images/img2.jpg" style="width: 100%; border: 1px solid gray;" alt=""></div>
                       <div class="col-md-6"><img src="/wp-content/themes/sydney/bootstrap/images/img1.jpg" style="width: 100%; border: 1px solid gray;" alt=""></div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="screen screen_14">
        <section class="content">
            <h1 style="color: #fff;">О КОМПАНИИ</h1>
            <div class="container">
                <div class="col-md-7 rowss2">
                    <p style="color: #fff;">Наша компания специализируеться на производстве москитной сетки на липучке Clip-on. Эту сетку впервые на Украине разработала наша команда (по прототипу европейского аналога) и выпустила на рынок в 2015 году.</p>
                    <p style="color: #fff;">Производство и швейная мастерская находяться в городе Днепр.</p>
                    <p style="color: #fff;">Все сотрудники, участвующие в производственном процессе, исключительно проффесионалы.</p>
                </div>
                <div class="col-md-5">
                    <div class="col-md-12"><!--script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,counter,theme=04" data-services="vkontakte,facebook,twitter,odnoklassniki,google"></div--></div>
                    <div class="col-md-12"><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2649.2405974269795!2d35.02597071553132!3d48.39432254122307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbfb400599399b%3A0xfe17c0e12bb71a3e!2z0YPQuy4g0J_QsNC90LjQutCw0YXQuCwgMjgsINCU0L3QuNC_0YDQviwg0JTQvdC10L_RgNC-0L_QtdGC0YDQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDQ5MDAw!5e0!3m2!1sru!2sua!4v1516204675799" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
				</div> <!-- .cd-project-info -->
			</li>

			<li class="cd-single-project">
				<a class="open">
				<div class="cd-title">
					<h2 class="plan-title">Сетка на магнитах</h2>
					<p class="cd-text-t">ажурные шторы на магнитах для дверей</p>
					<div class="img-thumb"><img style="
    height: 200px;
" class="cd-img-t" src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/12/mg-1.png" alt="Рамочные москитные сетки Антикошка">
					</div><ul class="sd-ul-t">
					<li>закрывающиеся шторки</li>
					<li>для любого дверного проёма</li>

					</ul>
				</div> <!-- .cd-title -->
				</a>

				<div class="cd-project-info"></div> <!-- .cd-project-info -->
			</li>

			<li class="cd-single-project">
				<a class="open">
				<div class="cd-title">
					<h2 class="plan-title">Сетка антикошка</h2>
					<p class="cd-text-t">усиленная рама и прочное полотно</p>
					<div class="img-thumb"><img class="cd-img-t" src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/12/cat.png" alt="Рамочные москитные сетки Антипыль">
					</div><ul class="sd-ul-t">
					<li>защита сетки от животных</li>
					<li>защита животных от выпадения</li>
					</ul>
				</div> <!-- .cd-title -->
				</a>

				<div class="cd-project-info"></div> <!-- .cd-project-info -->
			</li>

			<li class="cd-single-project">
				<a class="open"> 
				<div class="cd-title">
					<h2 class="plan-title">Сетка антипыль</h2>
					<p class="cd-text-t">антимошка или антипыльца</p>
					<div class="img-thumb"><img class="cd-img-t" src="http://moskitnaya-setka.dp.ua/wp-content/uploads/2017/11/s6.png" alt="Сетка на магнитах">
					</div><ul class="sd-ul-t">
					<li>защита от мелких насекомых</li>
					<li>защита от пыльцевых аллергенов</li>
					</ul>
				</div> <!-- .cd-title -->
				</a>

				<div class="cd-project-info"></div> <!-- .cd-project-info -->
			</li>
		</ul>
	</div> <!-- .project-container -->
	
	
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/twentyfifteen/js/main.js"></script>
<script type="text/javascript" src="/wp-content/themes/sydney/bootstrap/timer.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="/wp-content/themes/sydney/bootstrap/js/bootstrap.min.js"></script>
	
	
	<!-- Yandex.Metrika counter -->
<!--script type="text/javascript">
(function (d, w, c) {
(w[c] = w[c] || []).push(function() {
try {
w.yaCounter33423268 = new Ya.Metrika({
id:33423268,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true
});
} catch(e) { }
});

var n = d.getElementsByTagName("script")[0],
s = d.createElement("script"),
f = function () { n.parentNode.insertBefore(s, n); };
s.type = "text/javascript";
s.async = true;
s.src = "https://mc.yandex.ru/metrika/watch.js";

if (w.opera == "[object Opera]") {
d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33423268" style="position:absolute; left:-9999px;" alt="" /></div></noscript> /Yandex.Metrika counter -->
<script type="text/javascript">
        $(document).ready(function(){
            $('a.open').click(function(){
                $('a.closeBtn').css('display', 'block');
                $('div.cd-title').css('display', 'none');
                $('section.screen_1').css('display', 'block');
				$('.menu').css('display', 'block');
				$('.header_1').css('display', 'none');
            });
            $('a.closeBtn').click(function(){
				$('div.cd-title').css('display', 'flex');
				$('div.cd-title').css('opacity', '1');
                $('div.projects-container').removeClass('project-is-open');
                $('li.cd-single-project').removeClass('is-full-width');
                $('li.cd-single-project').addClass('is-loaded');
                $('a.closeBtn').css('display', 'none');
                $('section.screen_1').css('display', 'none');
				$('.menu').css('display', 'none');
				$('.header_1').css('display', 'flex');
            });
        });
    </script>
	<link rel="stylesheet" href="/wp-content/themes/sydney/bootstrap/style.css">

</body>
</html>
