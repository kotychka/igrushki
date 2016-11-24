<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class SiteController
{
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$latestProducts = array();
		$latestProducts = Product::getLatestProducts(4);

		$newProducts = array();
		$newProducts = Product::getNewProducts(3);

		require_once(ROOT . '/views/site/index.php');

		return true;
		//4 урок 4-45
	}
}