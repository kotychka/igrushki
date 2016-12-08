<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <?php include ROOT . '/views/layouts/catalog.php'; ?>

            <section class="menu_bar main_field">

            	<div class="cart bar">

            		<h3>Корзина</h3>

            		<?php if ($result): ?>
            			<p>Заказа оформлен. Мы Вам перезвоним</p>
        			<?php else: ?>
        				<p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, руб.</p>

        				<?php if (!$result): ?>

        				<?php if (isset($errors) && is_array($errors)) : ?>
		            		<ul>
		            			<?php foreach ($errors as $error): ?>
		            				<li><?php echo $error; ?></li>
		        				<?php endforeach; ?>
		    				</ul>
						<?php endif; ?>

						<p>Для оформления заказа, пожалуйста, заполните форму. Наш менеджер свяжется с Вами</p>

						<form action="#" method="post">
	            			<p>Ваше имя</p>
	                        <input type="text" name="userName" placeholder="Имя" value="<?php echo $userName; ?>"/>
	                        <p>Номер телефона</p>
	                        <input type="text" name="userPhone" placeholder="Телефон" value="<?php echo $userPhone; ?>"/>
	                        <p>Комментарий к заказу</p>
	                        <input type="text" name="userComment" placeholder="Комментарий" value="<?php echo $userComment; ?>"/>
	                        <br>
	                        <input type="submit" name="submit" class="btn btn-default" value="Оформить заказ" />
	                    </form>

	                    <?php endif; ?>

    				<?php endif; ?>
        		</div>

            </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>