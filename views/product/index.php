<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <?php include ROOT . '/views/layouts/catalog.php'; ?>

            <section class="main_field menu_bar">
                
                    <div class="bar">
                        <img src="template/img/items/doktor_sova.jpg" alt="Игрушка1.1"><br>
                        <a href="/product/<?php echo $productList['id']; ?>" class="name"><?php echo $productList['name']; ?></a>
                        <p class="price"><?php echo $productList['price']; ?></p>
                        <a href="#" class="in_cart">В корзину</a>
                    </div>
                  
            </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>