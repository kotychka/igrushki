<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <?php include ROOT . '/views/layouts/catalog.php'; ?>

            <section class="menu_bar main_field">

            	<div class="cart bar">

            		<h3>Корзина</h3>

            		<?php if ($productsInCart): ?>
            			<p>Вы выбрали следующие товары</p>
            			<table>
            				<tr>
            					<th>Код товара</th>
            					<th>Название</th>
            					<th>Количество, шт.</th>
            					<th>Стоимость, руб.</th>
            					<th>Удалить товар</th>
            				</tr>
            				<?php foreach ($products as $product): ?>
								<tr>
									<td><?php echo $product['code']; ?></td>
									<td><?php echo $product['short_name']; ?></td>
									<td><?php echo $productsInCart[$product['id']]; ?></td>
									<td><?php echo $product['price']; ?></td>
									<td><a href="/cart/delete/<?php echo $product['id'];?>">X</a></td>
								</tr>
							<?php endforeach; ?>
								<tr>
									<td colspan="3">Общая стоимость, руб.</td>
									<td><?php echo $totalPrice; ?></td>
								</tr>
            			</table>
            			<a href="/cart/checkout">Оформить заказ</a>
        			<?php else: ?>
        				<p>Корзина пуста</p>
    				<?php endif; ?>
            	</div>

            </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>