<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <section class="main_field menu_bar">

            	<div class="signin_form bar">

            	<?php if (isset($errors) && is_array($errors)) : ?>
            		<ul>
            			<?php foreach ($errors as $error): ?>
            				<li><?php echo $error; ?></li>
        				<?php endforeach; ?>
    				</ul>
				<?php endif; ?>

            	<h3>Вход пользователя</h3>
            		<form action="#" method="post">
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                        <input type="submit" name="submit" class="btn btn-default" value="Вход" />
                    </form>

            	</div>

            </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>