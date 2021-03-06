<?php

class CatalogController
{
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$latestProducts = array();
		$latestProducts = Product::getLatestProducts(200);

		// $allProducts = array();
		// $allProducts = Product::getProductsList($page);

		// $total = Product::getTotalProducts();
		// $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'p');

		// $newProducts = array();
		// $newProducts = Product::getNewProducts(3);

		require_once(ROOT . '/views/catalog/index.php');

		return true;		
	}

	public function actionCategory($categoryId, $page = 1)
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$categoryProducts = array();
		$categoryProducts = Product::getProductsListByCategory($categoryId, $page);

		$total = Product::getTotalProductsInCategory($categoryId);
		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'p');

		require_once(ROOT . '/views/catalog/category.php');

		return true;
	}
}