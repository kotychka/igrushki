<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <?php include ROOT . '/views/layouts/catalog.php'; ?>

            <section class="menu_bar">                
                    <div class="bar one">
                    	<div class="one_name"><h3><?php echo $product['name']; ?></h3></div>
                    	<div class="one_descr">
	                        <div class="img">
	                        	<?php if ($product['img'] != NULL) : ?>
			                        <img src="/template/img/items/<?php echo $product['category_id']."/".$product['img']; ?>" alt="<?php echo $product['short_name']; ?>">
		                        <?php else : ?>
		                        	<img src="/template/img/items/no-image.png" alt="<?php echo $product['short_name']; ?>">
	                        	<?php endif; ?>
	                    	</div>
	                    	<div class="rest">
		                        <div class="description"><?php echo $product['description']; ?></div>
		                        <div class="price"><?php echo $product['price']; ?></div>
		                        <div class="in_cart"><a href="#" class="in_cart">В корзину</a></div>
	                        </div>
                        </div>
                    </div> 
            </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>