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
                                <a href="№" data-id="<?php echo $productList['id']; ?>" class="in_cart">В корзину</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>    
            </section>
            <section class="menu_bar">
            <div class="bar">
                <div class="one_name">
                    <h1>Новые товары</h1>
                </div>
                <div class="one_descr">
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
                                <div class="bar new">
                                    <a href="/product/<?php echo $sliderItem['id']; ?>">                          
                                        <?php if ($sliderItem['img'] != NULL) : ?>
                                            <img src="/template/img/items/<?php echo $sliderItem['category_id']."/".$sliderItem['img']; ?>" alt="<?php echo $sliderItem['short_name']; ?>">
                                        <?php else : ?>
                                            <img src="/template/img/items/no-image.png" alt="<?php echo $sliderItem['short_name']; ?>">
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

                </div>
            </div>
            </section>
        </div>
        
<?php include ROOT . '/views/layouts/footer.php'; ?>
        