<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Редактировать товар</li>
                </ol>
            </div>


            <h4>Редактировать товар #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <p>Краткое название товара</p>
                        <input type="text" name="short_name" placeholder="" value="<?php echo $product['short_name']; ?>">

                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                        <p>Артикул</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">

                        <p>Цена товара, руб.</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                        <p>Цена товара в закупке, руб.</p>
                        <input type="text" name="seller_price" placeholder="" value="<?php echo $product['seller_price']; ?>">

                        <p>Количество в упаковке, шт.</p>
                        <input type="text" name="kol_v_upak" placeholder="" value="<?php echo $product['kol_v_upak']; ?>">

                        <p>Категория</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        
                        <br/><br/>

                        <p>Производитель</p>
                        <input type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>">

                        <p>Продавец</p>
                        <input type="text" name="seller" placeholder="" value="<?php echo $product['seller']; ?>">

                        <p>Изображение товара</p>
                        <img src="/template/img/items/no-image.png" width="200" alt="" />
                        

                        <p>Детальное описание</p>
                        <textarea name="description"><?php echo $product['description']; ?></textarea>
                        
                        <br/><br/>

                        <p>Наличие на складе</p>
                        <select name="availability">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>
                        
                        <p>Новинка</p>
                        <select name="is_new">
                            <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>

                        <p>Рекомендуемые</p>
                        <select name="hot">
                            <option value="1" <?php if ($product['hot'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['hot'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

