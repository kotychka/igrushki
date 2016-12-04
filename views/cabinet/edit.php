<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <section class="main_field menu_bar">

            	<div class="edit_form bar">
            		<?php if ($result): ?>
            			<p>Данные отредактированы</p>
        			<?php else: ?>
		            	<?php if (isset($errors) && is_array($errors)) : ?>
		            		<ul>
		            			<?php foreach ($errors as $error): ?>
		            				<li><?php echo $error; ?></li>
	            				<?php endforeach; ?>
	        				</ul>
	    				<?php endif; ?>

            		<h3>Редактирование данных пользователя</h3>
            		<form action="#" method="post">
                        <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />
                    </form>
            	</div>

        	<?php endif; ?>

            </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>