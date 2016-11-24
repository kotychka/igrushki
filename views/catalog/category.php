<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <?php include ROOT . '/views/layouts/catalog.php'; ?>

            <section class="menu_bar">
                <?php foreach ($categoryProducts as $products) : ?>
                    <div class="bar all">
                        <img src="/template/img/items/doktor_sova.jpg" alt="Игрушка1.1"><br>
                        <a href="/product/<?php echo $products['id']; ?>" class="name"><?php echo $products['name']; ?></a>
                        <p class="price"><?php echo $products['price']; ?></p>
                        <a href="#" class="in_cart">В корзину</a>
                    </div>
                <?php endforeach; ?>    
            </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>