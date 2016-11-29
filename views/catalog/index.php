<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <?php include ROOT . '/views/layouts/catalog.php'; ?>

            <section class="menu_bar all">
                <?php foreach ($latestProducts as $productList) : ?>
                    <div class="bar all">
                        <a href="/product/<?php echo $productList['id']; ?>"><img src="/template/img/items/doktor_sova.jpg" alt="Игрушка1.1"></a><br>
                        <div class="items">
                            <div class="items_name">
                                <a href="/product/<?php echo $productList['id']; ?>" class="name"><?php echo $productList['short_name']; ?></a>
                            </div>
                            <div class="items_price">
                                <p class="price"><?php echo $productList['price']; ?></p>
                                <a href="#" class="in_cart">В корзину</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="clear"></div>
            </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>