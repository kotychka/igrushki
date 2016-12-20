<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main">

            <section class="main_field menu_bar">

            	<div class="cabinet bar">

            		<h3>Кабинет пользователя</h3>

                        <h3>Привет, <?php echo $user['name']; ?>!</h3>

            		<ul>
            			<li><a href="/cabinet/edit">Редактировать данные</a></li>
            			<li><a href="/cabinet/history">Список покупок</a></li>
                              <li><a href="/admin">Админ-панель</a></li>
            		</ul>

            	</div>

            </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>