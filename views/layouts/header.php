<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Магазин игрушек</title>
        <!--<link href="templ/css/reset.css" rel="stylesheet">-->
        <link href="/template/css/style_min.css" type="text/css" rel="stylesheet">
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
                    <?php if (User::isGuest()): ?>
                        <a href="/user/login">Вход</a>
                    <?php else: ?>
                        <a href="/cabinet">Кабинет</a>
                        <a href="/user/logout">Выход</a>
                    <?php endif; ?>    
                    </div>
                    <div class="bar cart">
                        <a href="/cart">Корзина (<span  id="cart-count"><?php echo Cart::countItems(); ?></span>)</a>

                    </div>
                <!--</div>-->
            </div>
        </header>

    	<a name="up"></a>

        <header class="header_logo">
        	<div class="menu_bar">
                <div class="bar table logo">
                	<div class="table__cell">
	                	<a href="/"><img src="/template/img/logo.jpg" alt="Логотип"></a>
                	</div>
                </div>
                <div class="bar nav_cont">
                    <nav>
                        <ul class="navigation horiz">
                            <li><a href="/about/">О нас</a></li>
                            <li><a href="/sale/">Акции</a></li>
                            <li><a href="/hits/">Хиты</a></li>
                            <li><a href="/new/">Новинки</a></li>
                            <li><a href="/delivery/">Доставка</a></li>
                            <li><a href="/payment/">Оплата</a></li>
                            <li><a href="/contacts/">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="bar contacts">
                        <p class="tel">Телефон: +7 931 278 58 88</p>
                        <p class="rezhim">Обработка и прием заказов по телефону: с 10 до 20<br>
                        Прием заказов через интернет-магазин: круглосуточно</p>
                    </div>
                </div>
                <div class="bar main_news">
                    <img src="/template/img/cloud.png" alt="Главная новость">
                    <p class="sale">Бесплатная доставка<br>в Кудрово!!</p>
                </div>
            </div>
        </header>