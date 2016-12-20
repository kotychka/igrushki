<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="template/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>

    <div class="container-fluid">
<header class="row">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<!-- <div class="container-fluid"> -->
					<a href="/"><img class="img-responsive" src="/template/img/logo.jpg" alt="Логотип"></a>
				<!-- </div> -->
			</div>
			<div class="col-md-8">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
					    <div class="navbar-header">
							<a class="navbar-brand" href="#">Магазин детских игрушек</a>
						</div>
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Главная</a></li>
							<li><a href="/about/">О нас</a></li>
                            <li><a href="/sale/">Акции</a></li>
                            <li><a href="/hits/">Хиты</a></li>
                            <li><a href="/new/">Новинки</a></li>
                            <li><a href="/delivery/">Доставка</a></li>
                            <li><a href="/payment/">Оплата</a></li>
                            <li><a href="/contacts/">Контакты</a></li>
                            <?php if (User::isGuest()): ?>
	                            <li><a href="/user/login">Вход</a></li>
                            <?php else: ?>
	                            <li><a href="/cabinet">Кабинет</a></li>
	                            <li><a href="/user/logout">Выход</a></li>
	                        <?php endif; ?>
						</ul>
					</div>
				</nav>
			</div>
			<div class="col-md-2">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Корзина (<span  id="cart-count"><?php echo Cart::countItems(); ?></span>)<span class="caret"></span></button>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="container-fluid">
	<div class="row">
			<div class="col-md-2">
				<nav class="navbar navbar-default">
					<!-- <div class="container-fluid"> -->
					    <div class="navbar-header">
							<a class="navbar-brand" href="/catalog/">Каталог</a>
						</div>
						<ul class="nav navbar-nav">
							<?php foreach ($categories as $categoryItem) : ?>
	                            <li><a href="/category/<?php echo $categoryItem['id']; ?>" class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>" >
	                                <?php echo $categoryItem['name']; ?>
	                            </a></li>
	                        <?php endforeach; ?>
						</ul>
					<!-- </div> -->
				</nav>
			</div>
			<div class="col-md-10">
				<div class="row">
					<h2>Последние товары</h2>
					<?php foreach ($latestProducts as $productList) : ?>
						<div class="col-md-2">
	                        <a href="/product/<?php echo $productList['id']; ?>">                          
	                            <?php if ($productList['img'] != NULL) : ?>
	                                <img class="img-responsive" src="/template/img/items/<?php echo $productList['category_id']."/".$productList['img']; ?>" alt="<?php echo $productList['short_name']; ?>">
	                            <?php else : ?>
	                                <img class="img-responsive" src="/template/img/items/no-image.png" alt="<?php echo $productList['short_name']; ?>">
	                            <?php endif; ?>
	                        </a><br>
	                        <div class="items">
	                            <div class="items_name">
	                                <a href="/product/<?php echo $productList['id']; ?>" class="name"><?php echo $productList['short_name']; ?></a>
	                            </div>
	                            <div class="items_price">
	                                <p class="price"><?php echo $productList['price']; ?> руб.</p>
	                                <a href="№" data-id="<?php echo $productList['id']; ?>" class="in_cart">В корзину</a>
	                            </div>
	                        </div>
	                    </div>
	                <?php endforeach; ?>
                </div>
                <div class="row">
                	<h1>Новые товары</h1>
                	<!-- <div class="col-md-2"> -->
                    <div class="slideshow" 
                        data-cycle-fx=carousel
                        data-cycle-timeout=5000
                        data-cycle-carousel-visible=5
                        data-cycle-sliders="div.new"
                        data-cycle-next="#next"
                        data-cycle-prev="#prev"
                        data-cycle-pager="#pager"
                        >
                            <?php foreach ($sliderProducts as $sliderItem) : ?>
                                <div class="col-md-2">
                                    <a href="/product/<?php echo $sliderItem['id']; ?>">                          
                                        <?php if ($sliderItem['img'] != NULL) : ?>
                                            <img class="img-responsive" src="/template/img/items/<?php echo $sliderItem['category_id']."/".$sliderItem['img']; ?>" alt="<?php echo $sliderItem['short_name']; ?>">
                                        <?php else : ?>
                                            <img class="img-responsive" src="/template/img/items/no-image.png" alt="<?php echo $sliderItem['short_name']; ?>">
                                        <?php endif; ?>
                                    </a><br>
                                    <div class="items">
                                        <div class="items_name">
                                            <a href="/product/<?php echo $sliderItem['id']; ?>" class="name"><?php echo $sliderItem['short_name']; ?></a>
                                        </div>
                                        <div class="items_price">
                                            <p class="price"><?php echo $sliderItem['price']; ?> руб.</p>
                                            <a href="№" data-id="<?php echo $sliderItem['id']; ?>" class="in_cart">В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                    </div>

                    <div class=center>
                        <a href=# id=prev>&lt;&lt; Prev </a>
                        <a href=# id=next> Next &gt;&gt; </a>
                    </div>

                    <div class="cycle-pager" id=pager></div>

	                <!-- </div> -->
	            </div>
			</div>

		</div>
</div>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="list-group">
					<h3>О компании</h3>
					<a href="#" class="list-group-item">О компании</a>
	                <a href="#" class="list-group-item">Новости</a>
	                <a href="#" class="list-group-item">Контакты</a>
	            </div>
			</div>
			<div class="col-md-4">
				<div class="list-group">
					<h3>Для покупателей</h3>
					<a href="#" class="list-group-item">Оплата и доставка</a>
	                <a href="#" class="list-group-item">Гарантии и возврат</a>
	                <a href="#" class="list-group-item">Подарочные сертификаты</a>
	                <a href="#" class="list-group-item">Помощь</a>
	            </div>
			</div>
			<div class="col-md-4">
			
				<p class="tel">Телефон: +79312785888</p>
				<div class="logos">
	                <img src="/template/img/visa.png" class="img-responsive" alt="Visa">
	                <img src="/template/img/MasterCard.png" class="img-responsive" alt="MasterCard">
	            </div>
			</div>
		</div>
	</div>
</footer>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/template/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/template/js/ie10-viewport-bug-workaround.js"></script>
    <!-- <script src="/template/js/jquery.min.js"></script> -->
	<script src="/template/js/jquery.cycle2.js"></script>
	<script src="/template/js/jquery.cycle2.carousel.js"></script>
	<script src="/template/js/main.js"></script>
	<script>
	    $(document).ready(function() {
	        $(".in_cart").click(function () {
	            var id = $(this).attr("data-id");
	            $.post("/cart/addAjax/"+id, {}, function (data) {
	                $("#cart-count").html(data);
	            });
	            return false;
	        });
	    });
	</script>
	</body>
</html>