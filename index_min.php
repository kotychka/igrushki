<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Магазин игрушек</title>
        <!--<link href="templ/css/reset.css" rel="stylesheet">-->
        <link href="template/css/style_min.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Andika|Comfortaa|Didact+Gothic|Fira+Mono|Lobster|Noto+Sans|Philosopher|Rubik" rel="stylesheet"> 
        <!--<link href="templ/css/grid_min.css" rel="stylesheet">-->
        
    </head>
    <body>
    
        <form class="search" data-fallback="Search by keyword, #tag or date…">
			<input id="filter" autocomplete="off" autocorrect="off" spellcheck="false" autocapitalize="none" type="search">
			<button type="reset"></button>
			<label for="filter">Поиск</label>
			<!-- <ul class="results">
				<li class="fallback">Search by keyword, #tag or date…</li>
			</ul> -->
		</form>

        <header class="header_fixed">
	        <div class="menu_bar">
<!--                <div class="fixed_container">-->
                    <div class="bar mark tema">
                        <h1>Ваш новый магазин игрушек</h1>
                    </div>
                    
                    <!-- <div class="bar search">
                        <textarea class="search" name="search" rows="1" cols="45">Поиск</textarea>
                    </div> -->
                    <div class="bar lk">
                        <a href="#">Личный кабинет</a>
                    </div>
                    <div class="bar cart">
                        <a href="#">Корзина</a>

                    </div>
                <!--</div>-->
            </div>
        </header>

    	<a name="up"></a>

        <header class="header_logo">
        	<div class="menu_bar">
                <div class="bar table logo">
                	<div class="table__cell">
	                	<img src="template/img/logo.jpg" alt="Логотип">
                	</div>
                </div>
                <div class="bar nav_cont">
                    <nav>
                        <ul class="navigation horiz">
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Акции</a></li>
                            <li><a href="#">Хиты</a></li>
                            <li><a href="#">Новинки</a></li>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Оплата</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="bar contacts">
                        <p class="tel">Телефон: +7 931 278 58 88</p>
                        <p class="rezhim">Обработка и прием заказов по телефону: с 10 до 20<br>
                        Прием заказов через интернет-магазин: круглосуточно</p>
                    </div>
                </div>
                <div class="bar main_news">
                    <img src="template/img/cloud.png" alt="Главная новость">
                    <p class="sale">Бесплатная доставка<br>в Кудрово!!</p>
                </div>
            </div>
        </header>

        <div class="main">
            <section class="catalogs menu_bar">
                <div class="bar catalog">
                    <h1><a href="#">Каталог</a></h1>
                </div>
                <div class="bar cat_nav">
                    <ul class="navigation horiz">
                        <li><h1><a href="#">Погремушки</a></h1></li>
                        <li><h1><a href="#">Развивающие коврики</a></h1></li>
                        <li><h1><a href="#">Кубики</a></h1></li>
                        <li><h1><a href="#">Конструкторы</a></h1></li>
                        <!-- <li><h1><a href="#">Мячики</a></h1></li> -->
                        <li><h1><a href="#">Игрушки с петельками</a></h1></li>
                        <!-- <li><h1><a href="#">Я сам</a></h1></li> -->
                        <li><h1><a href="#">Игровые наборы</a></h1></li>
                        <!-- <li><h1><a href="#">Рукавички</a></h1></li> -->
                        <!-- <li><h1><a href="#">Подвески</a></h1></li> -->
                    </ul>
                </div>
            </section>
            <section class="sliders menu_bar">
                <div class="bar slider">
                    <img src="template/img/items/doktor_sova.jpg" alt="Игрушка1.1"><br>
                    <p class="name">Название игрушки1</p>
                    <p class="price">Цена1</p>
                    <a href="#" class="in_cart">В корзину</a>
                </div>
                <div class="bar slider">
                    <img src="template/img/items/igr_shenok.jpg" alt="Игрушка2.1"><br>
                    <p class="name">Название игрушки2</p>
                    <p class="price">Цена2</p>
                    <a href="#" class="in_cart">В корзину</a>
                </div>
                <div class="bar slider">
                    <img src="template/img/items/konstruktor_svetofor.jpg" alt="Игрушка3.1"><br>
                    <p class="name">Название игрушки3</p>
                    <p class="price">Цена3</p>
                    <a href="#" class="in_cart">В корзину</a>
                </div>
            </section>
            <section class="hits menu_bar">
                <div class="bar hit">
                    <img src="template/img/items/soberi_kart.jpg" alt="Игрушка1.2"><br>
                    <p class="name">Название игрушки1</p>
                    <p class="price">Цена1</p>
                    <a href="#" class="in_cart">В корзину</a>
                </div>
                <div class="bar hit">
                    <img src="template/img/items/pogremushki.jpg" alt="Игрушка2.2"><br>
                    <p class="name">Название игрушки2</p>
                    <p class="price">Цена2</p>
                    <a href="#" class="in_cart">В корзину</a>
                </div>
                <div class="bar hit">
                    <img src="template/img/items/myach.jpg" alt="Игрушка3.2"><br>
                    <p class="name">Название игрушки3</p>
                    <p class="price">Цена3</p>
                    <a href="#" class="in_cart">В корзину</a>
                </div>
            </section>
        </div>
        
        <footer class="footer_info">
            <div class="menu_bar">
                <div class="bar about">
                    <h3>О компании</h3>
                    <ul class="footer_nav">
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="bar for_customer">
                    <h3>Для покупателей</h3>
                    <ul class="footer_nav">
                        <li><a href="#">Оплата и доставка</a></li>
                        <li><a href="#">Гарантии и возврат</a></li>
                        <li><a href="#">Подарочные сертификаты</a></li>
                        <li><a href="#">Помощь</a></li>
                    </ul>
                </div>
                <div class="bar images">
                    <p class="tel">Телефон: +79312785888</p>
                    <div class="logos">
	                    <img src="template/img/visa.png" alt="Visa">
	                    <img src="template/img/MasterCard.png" alt="MasterCard">
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer_fixed">    
            <div class="menu_bar">
                <div class="bar help">
                    <a href="#"><img src="#" alt="Задать вопрос"></a>
                </div>
                <div class="bar status_zakaza">
                    <textarea name="status_zakaza" rows="1" cols="25">Проверить статус заказа</textarea>
                </div>
                <div class="bar table logos social_icons">
	                <!-- <div class="social_groups logos"> -->
	                	<!-- <p>Мы в сети</p> -->
	                    <div class="social table__cell">
	                        <a href="https://www.instagram.com/"><img src="template/img/insta.png" alt="Инстаграм"></a>
	                    </div>
	                    <div class="social table__cell">
	                        <a href="https://www.vk.com"><img src="template/img/vk.png" alt="Вконтакте"></a>
	                    </div>
	                <!-- </div> -->
	                <!-- <div class="social_write logos"> -->
	                    <!-- <p>Напишите нам</p> -->
	                    <div class="social table__cell">
	                        <a href="#"><img src="template/img/viber.png" alt="Viber"></a>
	                    </div>
	                    <div class="social table__cell">
	                        <a href="#"><img src="template/img/WhatsApp.png" alt="WhatsApp"></a>
	                    </div>
	                    <div class="social table__cell">
	                        <a href="#"><img src="template/img/telegram.png" alt="Telegram"></a>
	                    </div>
                    <!-- </div> -->
                </div>
                <div class="bar up">
                    <a href="#up"><img src="#" alt="Вверх"></a>
                </div>
            </div>
        </footer>

    </body>
</html>