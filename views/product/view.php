<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <?php include ROOT . '/views/layouts/catalog.php'; ?>

            <section class="menu_bar">                
                    <div class="bar one">
                    	<h3><?php echo $product['name']; ?></h3>
                        <div class="img">
                        	<img src="/template/img/items/doktor_sova.jpg" alt="Игрушка1.1">
                    	</div>
                    	<div class="rest">
	                        <p class="description"><?php echo $product['description']; ?></p>
	                        <p class="price"><?php echo $product['price']; ?></p>
	                        <a href="#" class="in_cart">В корзину</a>
                        </div>
                    </div> 
            </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>