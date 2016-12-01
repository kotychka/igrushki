<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <?php include ROOT . '/views/layouts/catalog.php'; ?>

            <section class="menu_bar all">
                <?php foreach ($categoryProducts as $products) : ?>
                    <div class="bar all">                        
                        <a href="/product/<?php echo $products['id']; ?>">                        	
	                        <?php if ($products['img'] != NULL) : ?>
		                        <img src="/template/img/items/<?php echo $categoryId."/".$products['img']; ?>" alt="<?php echo $products['short_name']; ?>">
	                        <?php else : ?>
	                        	<img src="/template/img/items/no-image.png" alt="<?php echo $products['short_name']; ?>">
                        	<?php endif; ?>
                        </a><br>
                        <div class="items">
	                        <div class="items_name">
	                        	<a href="/product/<?php echo $products['id']; ?>" class="name"><?php echo $products['short_name']; ?></a>
                        	</div>
	                        <div class="items_price">
		                        <p class="price"><?php echo $products['price']; ?> руб.</p>
		                        <a href="#" class="in_cart">В корзину</a>
	                        </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="clear"></div>
                <div class="pagination">
	                <?php echo $pagination->get(); ?>
                </div>
                <div class="clear"></div>

            </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>