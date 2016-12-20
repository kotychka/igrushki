<?php

class AdminProductController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();

		$productsList = Product::getProductsList();

		require_once(ROOT.'/views/admin_product/index.php');
		return true;
	}

	public function actionCreate()
	{
		self::checkAdmin();

		$categoriesList = Category::getCategoriesListAdmin();

		if (isset($_POST['submit'])) {
			$options['short_name'] = $_POST['short_name'];
			$options['name'] = $_POST['name'];
			$options['code'] = $_POST['code'];
			$options['price'] = $_POST['price'];
			$options['seller_price'] = $_POST['seller_price'];
			$options['description'] = $_POST['description'];
			$options['is_new'] = $_POST['is_new'];
			$options['hot'] = $_POST['hot'];
			$options['kol_v_upak'] = $_POST['kol_v_upak'];
			// $options['img'] = $_POST['img'];
			$options['category_id'] = $_POST['category_id'];
			$options['brand'] = $_POST['brand'];
			$options['seller'] = $_POST['seller'];	
			$options['availability'] = $_POST['availability'];
			$options['status'] = $_POST['status'];

			$errors = false;

			if (!isset($options['short_name']) || empty($options['short_name'])) {
				$errors[] = 'Заполните краткое имя товара';
			}

			if ($errors == false) {
				$id = Product::createProduct($options);

				// var_dump($id);
				if ($id) {
					if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/img/items/{$id}.jpg");
                    }
				}

				header("Location: /admin/product");
			}

		}

		require_once(ROOT.'/views/admin_product/create.php');
		return true;
	}

	public function actionUpdate($id)
	{
		self::checkAdmin();

		$categoriesList = Category::getCategoriesListAdmin();

		$product = Product::getProductById($id);

		if (isset($_POST['submit'])) {
			$options['short_name'] = $_POST['short_name'];
			$options['name'] = $_POST['name'];
			$options['code'] = $_POST['code'];
			$options['price'] = $_POST['price'];
			$options['seller_price'] = $_POST['seller_price'];
			$options['description'] = $_POST['description'];
			$options['is_new'] = $_POST['is_new'];
			$options['hot'] = $_POST['hot'];
			$options['kol_v_upak'] = $_POST['kol_v_upak'];
			// $options['img'] = $_POST['img'];
			$options['category_id'] = $_POST['category_id'];
			$options['brand'] = $_POST['brand'];
			$options['seller'] = $_POST['seller'];	
			$options['availability'] = $_POST['availability'];
			$options['status'] = $_POST['status'];

			if (Product::updateProductById($id, $options)) {
				if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/img/items/{$id}.jpg");
                }

                // var_dump($result);
			}

			header("Location: /admin/product");
		}

		require_once(ROOT.'/views/admin_product/update.php');
		return true;
	}

	public function actionDelete($id)
	{
		self::checkAdmin();

		if (isset($_POST['submit'])) {
			Product::deleteProductById($id);

			header("Location: /admin/product");
		}

		require_once(ROOT.'/views/admin_product/delete.php');
		return true;
	}

}