<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <?php include ROOT . '/views/layouts/catalog.php'; ?>

            <section class="menu_bar">
                <?php foreach ($latestProducts as $productList) : ?>
                    <div class="bar all">
                        <a href="/product/<?php echo $productList['id']; ?>"><img src="/template/img/items/doktor_sova.jpg" alt="Игрушка1.1"></a><br>
                        <a href="/product/<?php echo $productList['id']; ?>" class="name"><?php echo $productList['name']; ?></a>
                        <p class="price"><?php echo $productList['price']; ?></p>
                        <a href="#" class="in_cart">В корзину</a>
                    </div>
                <?php endforeach; ?>    
            </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>