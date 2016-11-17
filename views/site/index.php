<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">
            <section class="catalogs menu_bar">
                <div class="bar catalog">
                    <h1><a href="#">Каталог</a></h1>
                </div>
                <div class="bar cat_nav">
                    <ul class="navigation horiz">
                        <?php foreach ($categories as $categoryItem) : ?>
                            <li><h1><a href="/category/<?php echo $categoryItem['id']; ?>">
                                <?php echo $categoryItem['name']; ?>
                            </a></h1></li>
                        <?php endforeach; ?>
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
        
<?php include ROOT . '/views/layouts/footer.php'; ?>
        