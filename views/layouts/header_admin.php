<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Магазин игрушек</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/style_min.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Andika|Comfortaa|Didact+Gothic|Fira+Mono|Lobster|Noto+Sans|Philosopher|Rubik" rel="stylesheet"> 
        
    </head>
    <body>
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