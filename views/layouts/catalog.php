           <section class="catalogs menu_bar">
                <div class="bar catalog">
                    <h1><a href="/catalog/">Каталог</a></h1>
                </div>
                <div class="bar cat_nav">
                    <ul class="navigation horiz">
                        <?php foreach ($categories as $categoryItem) : ?>
                            <li><h1><a href="/category/<?php echo $categoryItem['id']; ?>" class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>" >
                                <?php echo $categoryItem['name']; ?>
                            </a></h1></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>