<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <section class="main_field menu_bar">

            	<div class="contact_form bar">
            		<?php if ($result): ?>
            			<p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
        			<?php else: ?>
		            	<?php if (isset($errors) && is_array($errors)) : ?>
		            		<ul>
		            			<?php foreach ($errors as $error): ?>
		            				<li><?php echo $error; ?></li>
	            				<?php endforeach; ?>
	        				</ul>
	    				<?php endif; ?>

	    				<h3>Обратная связь</h3>
            		<form action="#" method="post">
            			<p>Ваша почта</p>
                        <input type="email" name="userEmail" placeholder="Email" value="<?php echo $userEmail; ?>"/>
                        <p>Ваше сообщение</p>
                        <input type="text" name="userText" placeholder="Сообщение" value="<?php echo $userText; ?>"/>
                        <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                    </form>

            	</div>

		        	<?php endif; ?>            	

            </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>