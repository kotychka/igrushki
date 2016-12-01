<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <?php include ROOT . '/views/layouts/catalog.php'; ?>

            <section class="menu_bar">
                <?php foreach ($latestProducts as $productList) : ?>
                    <div class="bar">
                        <a href="/product/<?php echo $productList['id']; ?>">                          
                            <?php if ($productList['img'] != NULL) : ?>
                                <img src="/template/img/items/<?php echo $productList['category_id']."/".$productList['img']; ?>" alt="<?php echo $productList['short_name']; ?>">
                            <?php else : ?>
                                <img src="/template/img/items/no-image.png" alt="<?php echo $productList['short_name']; ?>">
                            <?php endif; ?>
                        </a><br>
                        <div class="items">
                            <div class="items_name">
                                <a href="/product/<?php echo $productList['id']; ?>" class="name"><?php echo $productList['short_name']; ?></a>
                            </div>
                            <div class="items_price">
                                <p class="price"><?php echo $productList['price']; ?> руб.</p>
                                <a href="#" class="in_cart">В корзину</a>
                            </div>
                        </div>
                        <!-- <img src="template/img/items/doktor_sova.jpg" alt="Игрушка1.1"><br>
                        <a href="/product/<?php echo $productList['id']; ?>" class="name"><?php echo $productList['short_name']; ?></a>
                        <p class="price"><?php echo $productList['price']; ?></p>
                        <a href="#" class="in_cart">В корзину</a> -->
                    </div>
                <?php endforeach; ?>    
            </section>
            <section class="menu_bar">
                <?php foreach ($newProducts as $productList) : ?>
                    <div class="bar new">
                        <a href="/product/<?php echo $productList['id']; ?>">                          
                            <?php if ($productList['img'] != NULL) : ?>
                                <img src="/template/img/items/<?php echo $productList['category_id']."/".$productList['img']; ?>" alt="<?php echo $productList['short_name']; ?>">
                            <?php else : ?>
                                <img src="/template/img/items/no-image.png" alt="<?php echo $productList['short_name']; ?>">
                            <?php endif; ?>
                        </a><br>
                        <div class="items">
                            <div class="items_name">
                                <a href="/product/<?php echo $productList['id']; ?>" class="name"><?php echo $productList['short_name']; ?></a>
                            </div>
                            <div class="items_price">
                                <p class="price"><?php echo $productList['price']; ?> руб.</p>
                                <a href="#" class="in_cart">В корзину</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
        
<?php include ROOT . '/views/layouts/footer.php'; ?>
        